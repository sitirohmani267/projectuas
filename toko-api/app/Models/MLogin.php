<?php

namespace App\Models;

use CodeIgniter\Model;

class MLogin extends Model
{
    protected $table = 'login';
    protected $primaryKey = 'id';
    protected $allowedFields = ['member_id', 'auth_key'];
}
