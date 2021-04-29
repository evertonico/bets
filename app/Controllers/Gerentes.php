<?php

namespace App\Controllers;

use App\Models\RegulamentoModel;
use App\Models\UsuarioModel;
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
        $data['listPermissoes'] = $modelPermissao->findByTipoUsuario(3);
        return view('gerentes/cadastro', ['data' => $data]);
    }

    public function salvar()
    {
        $data['title'] = TITULO_GERENTE;
        // Instanciando o model usuário
        $usuarioModel = new UsuarioModel($db);
        $request = \Config\Services::request();
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
        $usuarioModel->save($usuario);

        $modelPermissao = new \App\Models\PermissaoModel();
        // buscando permissões disponíveis para o Tipo de Usuário Gerente (id = 3)
        $data['listPermissoes'] = $modelPermissao->findByTipoUsuario(3);

        echo view('gerentes/cadastro', [
            'errors' => $usuarioModel->errors(),
            'data' => $data
        ]);

    }

}