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
        // buscando permissões disponíveis para o Tipo de Usuário Gerente (id = 3)
        $data['listPermissoes'] = $modelPermissao->findByTipoUsuario(3);
        return view('gerentes/cadastro', ['data' => $data]);
    }

    /**
     *
     */
    public function salvar()
    {
        $data['title'] = TITULO_GERENTE;

        // Verificando se o acesso está vindo do submit do formulário
        if ($this->request->getPost() != NULL) {

            // Chamando o validation
            $validation = \Config\Services::validation();

            // Criando as regras de validação
            $validation->setRules([
                'txt-nome' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'O campo nome não pode ser vazio.'
                    ],
                    'type' => 'alert'
            ]
            ]);

            // Validando o formulário
            $res = $validation->withRequest($this->request)->run();

            // Verificando se passou na validação
            if (!$res) {
                $modelPermissao = new \App\Models\PermissaoModel();
                // buscando permissões disponíveis para o Tipo de Usuário Gerente (id = 3)
                $data['listPermissoes'] = $modelPermissao->findByTipoUsuario(3);
                // Chamando a view e enviando os erros de validação
                echo view('gerentes/cadastro', [
                    'errors' => $validation->getErrors(),
                    'data' => $data
                ]);

            } else {

            }
        }
    }

}