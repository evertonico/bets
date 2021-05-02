<?php
namespace App\Controllers;

use App\Models\PermissaoModel;
use App\Models\UsuarioModel;
use App\Models\UsuarioPermissaoModel;
use App\Models\LimitesComissoesModel;
use Config\App;

helper('App\Helpers\template_helper');
helper('funcoes');
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
        $modelUsuario = new UsuarioModel();
        $data['result'] = $modelUsuario->orderBy('ds_nome', 'asc')->findAll();
        return view('gerentes/listar', ['data' => $data]);
    }

    /**
     * @return string
     */
    public function cadastro()
    {
        $data['title'] = TITULO_GERENTE;
        $modelPermissao = new \App\Models\PermissaoModel();
        // variáveis utilizadas no checkbox[] de permissões
        $data['permissoesDisponiveis'] = [];
        $data['permissoesSelecionadas'] = [];
        // buscando permissões disponíveis para o Tipo de Usuário Gerente
        $list = $modelPermissao->findByTipoUsuario(ID_GERENTE);
        foreach ($list as $result):
            $data['permissoesDisponiveis'][$result->ci_permissao] = $result->ds_permissao;
        endforeach;;
        return view('gerentes/cadastro', ['data' => $data]);
    }

    public function salvar()
    {
        $data['title'] = TITULO_GERENTE;
        $request = \Config\Services::request();
        $db = \Config\Database::connect();
        $session = session();

        // Instanciando o models necessários
        $usuarioModel = new UsuarioModel();
        $usuarioPermissaoModel = new UsuarioPermissaoModel();
        $permissaoModel = new PermissaoModel();
        $limitesComissoesModel = new LimitesComissoesModel();

        // Recebendo os campos do formulário
        $usuario = array(
            'ds_nome' => $request->getPostGet('txt-nome'),
            'nm_login' => strtolower($request->getPostGet('txt-usuario')),
            'ds_senha' => $request->getPostGet('txt-senha'),
            'ds_endereco' => $request->getPostGet('txt-endereco'),
            'ds_email' => strtolower($request->getPostGet('txt-email')),
            'ds_telefone' => $request->getPostGet('txt-telefone'),
            'ds_observacao' => $request->getPostGet('txt-observacao'),
            'cd_tipo_usuario' => ID_GERENTE,
            'fl_bloqueado' => $request->getPostGet('select-status'),
        );
        $check_permissoes = $request->getPostGet('check-permissoes');
        $limitesComissoes = array(
            'vl_limite_apostas_geral' => currencyToDb($request->getPostGet('txt-limite-geral')),
            'vl_limite_apostas_simples' => currencyToDb($request->getPostGet('txt-limite-simples')),
            'vl_comissao_lucro_gerente' => currencyToDb($request->getPostGet('txt-comissao-lucro')),
        );

        // Carregando a lista de permissões disponíveis para o perfil gerente, utilizado no checkbox[] do formuário
        $listPermissoesDisponiveis = $permissaoModel->findByTipoUsuario(ID_GERENTE);
        foreach ($listPermissoesDisponiveis as $result):
            $data['permissoesDisponiveis'][$result->ci_permissao] = $result->ds_permissao;
        endforeach;
        $data['permissoesSelecionadas'] = [];

        // Salvando os dados no banco
        $db->transBegin();
        $status_save = $usuarioModel->save($usuario);
        $id_usuario = $usuarioModel->getInsertID();

        // Salvando as permissões do usuário
        if($id_usuario):
            if($check_permissoes):
                foreach ($check_permissoes as $array):
                    $usuarioPermissao = array(
                        'cd_permissao' => $array,
                        'cd_usuario' => $id_usuario
                    );
                    $status_save = $usuarioPermissaoModel->save($usuarioPermissao);
                endforeach;
            endif;
        endif;

        // Salvando os limites/comissões do usuário
        $limitesComissoes['cd_usuario'] = $id_usuario;
        $status_save = $limitesComissoesModel->save($limitesComissoes);

        if ($db->transStatus() AND $status_save===TRUE) {
            $db->transCommit();
            $session->setFlashdata("success",SUCESS_MESSAGE);
            return redirect()->to(base_url('gerentes'));
        } else {
            $db->transRollback();
            $session->setFlashdata("errorsUsuario", $usuarioModel->errors());
            $session->setFlashdata("errorsPermissao", $permissaoModel->errors());
            $session->setFlashdata("errorsLimitesComissoes", $limitesComissoesModel->errors());
            return view('gerentes/cadastro', ['data' => $data]);
        }
    }

}