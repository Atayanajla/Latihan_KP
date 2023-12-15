<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email', 'nama', 'no_hp', 'password'];
    // protected $useTimestamps = true;
    protected $useAutoIncrement = true;

    public function get_data($email)
    {
        return $this->where('email', $email)->first();
    }
}