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

        $builder->select('users.id as userid, username, email, auth_groups.name as role, description, admin')
            ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
            ->join('admin_user', 'admin_user.user_id = users.id');

        if ($id == false) {
            if (in_groups('superadmin')) {
                $builder->where('auth_groups.id !=', '1');
                $query = $builder->get()->getResultArray();
                return $query;
            }

            if (in_groups('admin')) {
                $where = ['1', '2'];
                $builder->whereNotIn('auth_groups.id', $where)
                    ->where('admin_user.admin', user()->username);
                $query = $builder->get()->getResultArray();
                return $query;
            }
        }

        $builder->where('users.id', $id);
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

    public function countAdmin()
    {
        $builder = $this->table('users');

        $builder->select('users.id as userid')
            ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
            ->where('auth_groups.name', 'admin');
        $query = $builder->get()->getNumRows();

        return $query;
    }

    public function countUser()
    {
        $where = ['superadmin', 'admin'];
        $builder = $this->table('users');

        $builder->select('users.id as userid')
            ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
            ->whereNotIn('auth_groups.name', $where);
        $query = $builder->get()->getNumRows();

        return $query;
    }
}
