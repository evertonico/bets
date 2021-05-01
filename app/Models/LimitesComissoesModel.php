<?php
namespace App\Models;

use CodeIgniter\Model;

/**
 * Class LimitesComissoesModel
 *
 * Model Limites/Comissões dos Usuários
 *
 * @package App\Entities
 */
class LimitesComissoesModel extends Model
{
    protected $table = 'tb_limites_comissoes';
    protected $primaryKey = 'ci_limites_comissoes';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['cd_usuario',
                                'vl_limite_apostas_geral',
                                'vl_limite_apostas_simples',
                                'vl_comissao_lucro_gerente',
                                'vl_percentual_premio_cambista',
                                'vl_comissao_1',
                                'vl_comissao_2',
                                'vl_comissao_3',
                                'vl_comissao_4',
                                'vl_comissao_5',
                                'vl_comissao_6',
                                'vl_comissao_7',
                                'vl_comissao_8',
                                'vl_comissao_9',
                                'vl_comissao_10',
                                'vl_comissao_aovivo'];

    protected $createdField = 'dt_criacao';
    protected $updatedField  = 'dt_atualizado';
    protected $deletedField  = 'dt_exclusao';
    protected $useSoftDeletes = true;
    protected $returnType = 'array';

    // Regras de validação
    protected $validationRules    = [
        'vl_limite_apostas_geral' => 'required',
        'vl_limite_apostas_simples' => 'required'
    ];

    // Mensagens de validação
    protected $validationMessages = [
        'vl_limite_apostas_geral' => [
            'required' => 'O valor do limite de apostas geral deve ser preenchido.'
        ],
        'vl_limite_apostas_simples' => [
            'required' => 'O valor do limite de apostas simples deve ser preenchido.'
        ]
    ];

    protected $skipValidation = false;

}