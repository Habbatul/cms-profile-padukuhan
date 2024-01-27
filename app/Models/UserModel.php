<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user'; // Adjust table name as needed
    protected $primaryKey = 'id'; // Adjust primary key as needed

    protected $allowedFields = ['username', 'password']; // Add other fields as needed

    public function getUserByCredentials($username, $password)
    {
        $user = $this->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        return null;
    }
}
