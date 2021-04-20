<?php

namespace App\Controllers;

class Caixa extends BaseController
{
    public function index()
    {
        $dados['title'] = "Caixa";
        echo view('caixa/caixa', $dados);
    }
}