<?php

namespace App\Controllers;

use App\Models\RegulamentoModel;
use App\Models\UsuarioModel;
use App\Models\UsuarioPermissaoModel;
use Config\App;

helper('App\Helpers\template_helper');

/**
 * Class Gerente
 * @package App\Controllers
 */
class Gerentes extends BaseController
{

    /**
     * Página incial
     * @return string
     */
    public function index()
    {
        $data['title'] = TITULO_GERENTE;
        $model = new RegulamentoModel();
        $data['result'] = $model->first();
        return view('gerentes/listar', ['data' => $data]);
    }

    /**
     * @return string
     */
    public function cadastro()
    {
        $data['title'] = TITULO_GERENTE;
        $modelPermissao = new \App\Models\PermissaoModel();
        // buscando permissões disponíveis para o Tipo de Usuário Gerente (id = 3)
        $list = $modelPermissao->findByTipoUsuario(3);
        $array = [];
        foreach ($list as $result){
           $array[$result->ci_permissao] = $result->ds_permissao;
        }
        $data['listPermissoes'] = $array;
        $data['selectPermissoes'] = [];
        return view('gerentes/cadastro', ['data' => $data]);
    }

    public function salvar()
    {
        $data['title'] = TITULO_GERENTE;
        $request = \Config\Services::request();
        $db = \Config\Database::connect();
        $session = session();

        // Instanciando o models necessários
        $usuarioModel = new UsuarioModel($db);
        $usuarioPermissaoModel = new UsuarioPermissaoModel($db);
        $permissaoModel = new \App\Models\PermissaoModel();

        // Recebendo os campos do formulário
        $usuario = array(
            'ds_nome' => $request->getPostGet('txt-nome'),
            'nm_login' => strtolower($request->getPostGet('txt-usuario')),
            'ds_senha' => $request->getPostGet('txt-senha'),
            'ds_endereco' => $request->getPostGet('txt-endereco'),
            'ds_email' => strtolower($request->getPostGet('txt-email')),
            'ds_telefone' => $request->getPostGet('txt-telefone'),
            'ds_observacao' => $request->getPostGet('txt-observacao'),
            'cd_tipo_usuario' => 3,
            'fl_bloqueado' => $request->getPostGet('select-status'),
        );
        $check_permissoes = $request->getPostGet('check-permissoes');

        // Carregando a lista de permissões disponíveis para o perfil gerente (id = 3) - (utilizado no checkbox[] do formuário)
        $listPermissoesDisponiveis = $permissaoModel->findByTipoUsuario(3);
        $arrayPermissoes = [];
        foreach ($listPermissoesDisponiveis as $result){
            $arrayPermissoes[$result->ci_permissao] = $result->ds_permissao;
        }
        $data['listPermissoes'] = $arrayPermissoes;
        if(isset($check_permissoes)) {
            $data['selectPermissoes'] = $check_permissoes;
        } else {
            $data['selectPermissoes'] = [];
        }

        // Salvando os dados no banco
        $db->transStart();
        $status_save = $usuarioModel->save($usuario);
        $id_usuario = $usuarioModel->getInsertID();

        // Salvando as permissões do usuário
        if($id_usuario) {
            foreach ($check_permissoes as $array) {
                $usuarioPermissao = array(
                    'cd_permissao' => $array,
                    'cd_usuario' => $id_usuario
                );
                $usuarioPermissaoModel->save($usuarioPermissao);
            }
        }
        $db->transComplete();

        // Chamando a view
        if($status_save===false){
            return view('gerentes/cadastro', [
                'errors' => $usuarioModel->errors(),
                'data' => $data
            ]);
        } else {
            $session->setFlashdata("success", "Operação realizada com sucesso!");
            return redirect()->to(base_url('gerentes'));
        }

    }

}