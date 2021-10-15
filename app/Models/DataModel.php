<?php

namespace App\Models;

use CodeIgniter\Model;

class DataModel extends Model
{
    protected $table = 'data';
    protected $useTimestamps = true;
    protected $allowedFields = ['user_id', 'date_id', 'position_id', 'station_start_id', 'station_end_id', 'lat', 'lng', 'amplitude_z', 'amplitude_y', 'amplitude_x'];

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

    public function getFilter($user_id, $start, $end, $checked)
    {
        $builder = $this->table('data');
        $builder->select('data.id as dataid, lat, lng, amplitude_y, amplitude_z, date, name, y_per_z')
            ->join('dates', 'dates.id = data.date_id')
            ->join('positions', 'positions.id = data.position_id')
            ->where('data.user_id', $user_id)
            ->where('dates.user_id', $user_id)
            ->where('date >=', $start)
            ->where('date <=', $end)
            ->wherein('position_id', $checked);

        $query = $builder->get()->getResultArray();

        return $query;
    }
}
