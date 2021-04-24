<?php

namespace App\Controllers;

use App\Models\RegulamentoModel;

helper('App\Helpers\template_helper');

/**
 * Class Regulamento
 * @package App\Controllers
 */
class Regulamento extends BaseController
{

    /**
     * Página incial do regulamento
     * @return string
     */
    public function index()
    {

        $data['title'] = TITULO_REGULAMENTO;
        $model = new RegulamentoModel();
        $data['result'] = $model->first();
        return view('regulamento/regulamento', ['data' => $data]);

    }

    /**
     * Método para executar atualizar o regulamento
     * @return \CodeIgniter\HTTP\RedirectResponse|string
     */
    public function update()
    {
        // Verificando se o acesso está vindo do submit do formulário
        if ($this->request->getPost() != NULL) {

            $data = $this->request->getVar();
            $data['title'] = TITULO_REGULAMENTO;
            $validation = \Config\Services::validation();

            // Validação dos campos do formulário
            $validation->setRules([
                'regulamento' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'O campo regulamento não pode ser vazio.'
                    ],
                    'type' => 'alert'
                ]
            ]);

            $res = $validation->withRequest($this->request)->run();

            // Verificando se passou na validação
            if (!$res) {
                // Chamando a view e enviando os erros de validação
                echo view('regulamento/regulamento', [
                    'errors' => $validation->getErrors(),
                    'data' => $data
                ]);

            } else {

                // Alterando a informação na base de dados
                try {
                    $model = new RegulamentoModel();
                    $model->set(['ds_regulamento' => $this->request->getPost('regulamento')])->update();
                    $data['result'] = $model->first();
                    return view('regulamento/regulamento', [
                        'data' => $data,
                        'success' => 'Operação realizada com sucesso!'
                    ]);

                } catch (\Exception $e) {
                    echo view('regulamento/regulamento', [
                        'errors' => $e,
                        'data' => $data
                    ]);
                }
            }

        } else {
            // Caso tente acessar diretamente o link, redireciona para página inicial
            return redirect()->to(base_url('/regulamento'));
        }

    }
}