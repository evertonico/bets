<?php
namespace App\Models;

use CodeIgniter\Model;

/**
 * Class RegulamentoModel
 *
 * Model do regulamento do site
 *
 * @package App\Entities
 */
class RegulamentoModel extends Model
{
    protected $table = 'tb_regulamento';
    protected $allowedFields = ['ds_regulamento'];
    protected $returnType = 'App\Entities\RegulamentoEntity';
}