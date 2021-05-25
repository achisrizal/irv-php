<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'email', 'user_image', 'password_hash'];

    public function getUsers($id = false)
    {
        $builder = $this->table('users');

        if ($id == false) {
            if (in_groups('superadmin')) {
                $builder->select('users.id as userid, username, email, description')
                    ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
                    ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
                    ->where('auth_groups.id !=', '1');
                $query = $builder->get()->getResultArray();
                return $query;
            }

            if (in_groups('admin')) {
                $builder->select('users.id as userid, username, email, description')
                    ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
                    ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
                    ->join('admin_user', 'admin_user.user_id = users.id')
                    ->where('auth_groups.id !=', '1')
                    ->where('auth_groups.id !=', '2')
                    ->where('admin_user.admin_user_id', user_id());
                $query = $builder->get()->getResultArray();
                return $query;
            }
        }

        $builder->select('users.id as userid, username, email, description')
            ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
            ->where('users.id', $id);
        $query = $builder->get()->getRowArray();

        return $query;
    }

    public function searchUser($username)
    {
        $builder = $this->table('users');
        $builder->select('id')
            ->where('username', $username);

        $query = $builder->get()->getRow();

        return $query;
    }
}
