<?php

namespace App\Controllers;

use App\Models\RegulamentoModel;

class Regulamento extends BaseController
{
    public function index()
    {
        $dados['title'] = "Regulamento";
        $regulamento = new RegulamentoModel();

        return view('regulamento/regulamento', ['dados' => $dados, 'regulamento' => $regulamento->first()]);
    }
}