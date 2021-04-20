<?php

namespace App\Controllers;

class Alterarsenha extends BaseController
{
    public function index()
    {
        $dados['title'] = "Alterar Senha";
        echo view('alterarsenha/alterarsenha', $dados);
    }
}