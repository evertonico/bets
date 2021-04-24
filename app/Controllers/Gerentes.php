<?php

namespace App\Controllers;

use App\Models\RegulamentoModel;

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

    public function new()
    {
        $data['title'] = TITULO_GERENTE;
        return view('gerentes/cadastro');
    }

}