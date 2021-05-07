<?php

namespace App\Models;

use CodeIgniter\Model;

class PositionsModel extends Model
{
    protected $table = 'positions';
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'slug'];

    public function getPositions($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function getPositionsId()
    {
        $builder = $this->table('positons');
        $builder->select('id');
        $query = $builder->get()->getResultArray();

        return $query;
    }
}
