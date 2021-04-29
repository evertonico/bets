<?php
namespace App\Models;

use CodeIgniter\Model;

/**
 * Class UsuarioModel
 *
 * Model Permissões
 *
 * @package App\Entities
 */
class UsuarioModel extends Model
{
    protected $table = 'tb_usuario';
    protected $primaryKey = 'ci_usuario';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['cd_tipo_usuario',
                                'ds_nome',
                                'ds_email',
                                'ds_telefone',
                                'ds_endereco',
                                'fl_bloqueado',
                                'ds_senha',
                                'cd_gerente',
                                'fl_excluido',
                                'nm_login',
                                'ds_observacao'
                                ];

    protected $createdField = 'dt_criacao';
    protected $updatedField  = 'dt_atualizado';
    protected $deletedField  = 'dt_exclusao';

    protected $useSoftDeletes = true;
    protected $returnType = 'array';

    // Regras de validação
    protected $validationRules    = [
        'ds_nome' => 'required|min_length[3]',
        'nm_login' => 'required|min_length[4]|max_length[20]|is_unique[tb_usuario.nm_login]',
        'ds_email' => 'required|valid_email|is_unique[tb_usuario.ds_email]',
        'ds_senha' => 'required|min_length[6]',
        'cd_tipo_usuario' => 'required',
        'fl_bloqueado' => 'required' 
    ];

    // Mensagens de validação
    protected $validationMessages = [
        'ds_nome' => [
            'required' => 'O nome não pode ser vazio.',
            'min_length' => 'O nome deve possuir pelo o menos 3 caracteres.'
        ],
        'nm_login' => [
            'required' => 'O usuário não pode ser vazio.',
            'is_unique' => 'Este login já está sendo utilizado.',
            'min_length' => 'O usuário deve possuir pelo o menos 4 caracteres.',
            'max_length' => 'O usuário não deve possuir mais de 20 caracteres.'
        ],
        'ds_email' => [
            'required' => 'O e-mail não pode ser vazio.',
            'is_unique' => 'Este e-mail já está sendo utilizado.',
            'valid_email' => 'O e-mail informado é inválido.'
        ],
        'ds_senha' => [
            'required' => 'O senha não pode ser vazio.',
            'min_length' => 'A senha deve possuir pelo o menos 6 caracteres.'
        ],
        'cd_tipo_usuario' => [
            'required' => 'O tipo de usuário é obrigatório.',
        ],
        'fl_bloqueado' => [
            'required' => 'O status do usuário é obrigatório.',
        ]
    ];

    protected $skipValidation = false;


}