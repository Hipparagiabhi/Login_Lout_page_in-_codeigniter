<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $tables ='users';

  protected $allowedfields =[
    'name',
    'email',
    'password',
    'created_at'
  ];
}
