<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $dados['title'] = "Dashboard";
        echo view('dashboard/dashboard', $dados);
    }
}