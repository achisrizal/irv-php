<?php

namespace App\Models;

use CodeIgniter\Model;

class StationsModel extends Model
{
    protected $table = 'stations';
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'slug', 'lat', 'lng'];

    public function getStations($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
