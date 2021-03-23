<?php

namespace App\Models;

use CodeIgniter\Model;

class DataModel extends Model
{
    protected $table = 'data';
    protected $useTimestamps = true;
    protected $allowedFields = ['date_id', 'position_id', 'lat', 'lng', 'amplitude'];

    public function getData()
    {
        $builder = $this->table('data');
        $builder->select('data.id as dataid, date_id, lat, lng, amplitude, name')
            ->join('dates', 'dates.id = data.date_id')
            ->join('positions', 'positions.id = data.position_id');
        $query = $builder->get()->getResultArray();

        return $query;
    }
}
