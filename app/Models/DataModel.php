<?php

namespace App\Models;

use CodeIgniter\Model;

class DataModel extends Model
{
    protected $table = 'data';
    protected $useTimestamps = true;
    protected $allowedFields = ['date', 'position_id', 'lat', 'lng', 'amplitude'];

    public function getData()
    {
        $builder = $this->table('data');
        $builder->select('data.id as dataid, date, lat, lng, amplitude, name')
            ->join('positions', 'positions.id = data.position_id');
        $query = $builder->get()->getResultArray();

        return $query;
    }
}
