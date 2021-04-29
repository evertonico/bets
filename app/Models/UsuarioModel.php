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
    protected $returnType = 'array';

    // Regras de validação
    protected $validationRules    = [
        'ds_nome' => 'required',
        'ds_email' => 'required',
    ];

    // Mensagens de validação
    protected $validationMessages = [
        'ds_nome' => [
            'required' => 'O campo nome não pode ser vazio'
        ],
        'ds_email' => [
            'required' => 'O campo e-mail não pode ser vazio'
        ]
    ];

    protected $skipValidation     = false;


}