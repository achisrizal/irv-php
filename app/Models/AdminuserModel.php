<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminuserModel extends Model
{
    protected $table = 'admin_user';
    protected $allowedFields = ['admin', 'user_id'];

    public function getAdmin($user_id)
    {
        $builder = $this->table('admin_user');
        $builder->select('users.id as userid')
            ->join('users', 'users.username = admin_user.admin')
            ->where('user_id', $user_id);

        $query = $builder->get()->getRow();

        return $query;
    }

    public function searchData($user_id)
    {
        $builder = $this->table('admin_user');
        $builder->select('*')
            ->where('user_id', $user_id);

        $query = $builder->get()->getRow();

        return $query;
    }
}
