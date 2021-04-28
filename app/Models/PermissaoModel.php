<?php
namespace App\Models;

use CodeIgniter\Model;

/**
 * Class PermissaoModel
 *
 * Model Permissões
 *
 * @package App\Entities
 */
class PermissaoModel extends Model
{
    protected $table = 'tb_permissao';
    protected $primaryKey = 'ci_permissao';
    protected $allowedFields = ['ds_permissao'];
    protected $returnType = 'object';

    /**
     * @param null $cd_tipo_usuario
     * @return object
     */
    public function findByTipoUsuario($cd_tipo_usuario=null)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tb_permissao');
        $builder->join('tb_permissao_tp_usuario', 'tb_permissao_tp_usuario.cd_permissao = tb_permissao.ci_permissao');
        $builder->join('tb_tipo_usuario', 'tb_tipo_usuario.ci_tipo_usuario = tb_permissao_tp_usuario.cd_tipo_usuario');
        $builder->where('fl_excluido', FALSE);
        # Pesquisando pelo tipo de usuário
        if($cd_tipo_usuario)
            $builder->where('ci_tipo_usuario', $cd_tipo_usuario);
        return $builder->get()->getResult('object');
    }
}