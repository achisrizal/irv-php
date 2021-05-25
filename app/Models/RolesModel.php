<?php

namespace App\Models;

use CodeIgniter\Model;

class RolesModel extends Model
{
    protected $table = 'auth_groups';
    protected $useTimestamps = true;

    public function getRoles($id = false)
    {
        if ($id == false) {
            if (in_groups('superadmin')) {
                return $this->where('id !=', 1)->findAll();
            }

            if (in_groups('admin')) {
                return $this
                    ->where('id !=', 1)
                    ->where('id !=', 2)
                    ->findAll();
            }
        }

        return $this->where(['id' => $id])->first();
    }
}
