<?php

namespace App\Controllers;

class Regulamento extends BaseController
{
    public function index()
    {
        $dados['title'] = "Regulamento";
        echo view('regulamento/regulamento', $dados);
    }
}