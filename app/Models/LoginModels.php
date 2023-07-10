<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModels extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['name', 'user', 'profile'];

 
}