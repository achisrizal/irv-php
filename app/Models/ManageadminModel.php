<?php

namespace App\Models;

use CodeIgniter\Model;

class ManageadminModel extends Model
{
    protected $table = 'users';
    protected $useTimestamps = true;

    public function getUsers($id = false)
    {
        $builder = $this->table('users');

        if ($id == false) {
            $builder->select('users.id as userid, username, email, description')
                ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
                ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
                ->where('auth_groups.id !=', '1');
            $query = $builder->get()->getResultArray();
            return $query;
        }

        $builder->select('users.id as userid, username, email, description')
            ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
            ->where('users.id', $id);
        $query = $builder->get()->getRowArray();

        return $query;
    }
}
