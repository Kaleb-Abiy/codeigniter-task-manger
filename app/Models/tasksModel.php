<?php
// app/Models/UserModel.php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users'; // Set the database table name
    protected $primaryKey = 'id';    // Set the primary key field

    protected $allowedFields = ['username', 'email', 'password']; // Define the fields that can be mass-assigned
}
?>
