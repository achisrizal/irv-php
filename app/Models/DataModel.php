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
        $builder->select('data.id as dataid, lat, lng, amplitude, date, name')
            ->join('dates', 'dates.id = data.date_id')
            ->join('positions', 'positions.id = data.position_id')
            ->where('user_id', user_id());
        $query = $builder->get()->getResultArray();

        return $query;
    }

    public function getFilter($start, $end, $checked)
    {
        $builder = $this->getData();
        $builder = $this->table('data');
        $builder->select('data.id as dataid, lat, lng, amplitude, date, name')
            ->join('dates', 'dates.id = data.date_id')
            ->join('positions', 'positions.id = data.position_id')
            ->where('user_id', user_id());

        $builder->where('date >=', $start);
        // if ($_POST['start']) {
        // }

        $builder->where('date <=', $end);
        // if ($_POST['end']) {
        // }

        if ($checked != null) {
            $builder->wherein('position_id', $checked);
        }

        $query = $builder->get()->getResultArray();

        return $query;
    }
}
