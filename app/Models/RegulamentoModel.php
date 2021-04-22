<?php
namespace App\Models;

use CodeIgniter\Model;

class RegulamentoModel extends Model
{
    protected $table = 'bets.tb_regulamento';
    protected $allowedFields = ['ds_regulamento'];
    protected $returnType = 'App\Entities\RegulamentoEntity';

    protected $validationRules    = [
        'ds_regulamento'     => 'required'
    ];

    protected $validationMessages = [
        'ds_regulamento'        => [
            'required' => 'O campo regulamento não pode ser vazio.'
        ]
    ];
}