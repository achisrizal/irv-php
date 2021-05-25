<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminuserModel extends Model
{
    protected $table = 'admin_user';
    protected $allowedFields = ['admin_user_id', 'user_id'];

    public function getAdmin($user_id)
    {
        return $this->where(['user_id' => $user_id])->first();
    }
}
