<?php

namespace App\Controllers;

use App\Models\RegulamentoModel;
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
        # buscando permissões disponíveis para o Tipo de Usuário Gerente ( id = 3)
        $data['listPermissoes'] = $modelPermissao->find(3);
        return view('gerentes/cadastro', ['data' => $data]);
    }

}