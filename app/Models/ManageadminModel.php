<?php

namespace App\Models;

use CodeIgniter\Model;

class ManageadminModel extends Model
{
    protected $table = 'users';
    protected $useTimestamps = true;
    protected $allowedFields = ['date', 'position_id', 'lat', 'lng', 'amplitude'];

    public function getUsers()
    {
        $builder = $this->table('users');
        $builder->select('users.id as userid, username, email, description')
            ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
            ->orderBy('created_at', 'DESC');
        $query = $builder->get()->getResultArray();

        return $query;
    }
}
