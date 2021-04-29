<?php
namespace App\Models;

use CodeIgniter\Model;

/**
 * Class UsuarioPermissaoModel
 *
 * Model Usuário Permissões
 *
 * @package App\Entities
 */
class UsuarioPermissaoModel extends Model
{
    protected $table = 'tb_usuario_permissao';
    protected $primaryKey = 'ci_usuario_permissao';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['cd_permissao','cd_usuario'];
    protected $createdField = 'dt_criacao';
    protected $returnType = 'array';

    // Regras de validação
    protected $validationRules    = [
        'cd_permissao' => 'required',
        'cd_usuario' => 'required'
    ];

    // Mensagens de validação
    protected $validationMessages = [
        'cd_permissao' => [
            'required' => 'O código de permissão deve ser informado.'
        ],
        'cd_usuario' => [
            'required' => 'O código do usuário deve ser informado.'
        ]
    ];

    protected $skipValidation = false;

}