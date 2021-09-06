<?php

namespace App\Models;

use CodeIgniter\Model;

class GatewaysModel extends Model
{
    protected $table = 'gateways';
    protected $allowedFields = ['user_id', 'gateway'];

    public function getGateways($id)
    {
        $builder = $this->table('gateways');
        $builder->select('gateway')
            ->where('user_id', $id);

        $query = $builder->get()->getResultArray();

        return $query;
    }

    public function getUserId($gateway)
    {
        $builder = $this->table('gateways');
        $builder->select('user_id')
            ->where('gateway', $gateway);

        $query = $builder->get()->getRowArray();

        return $query;
    }
}
