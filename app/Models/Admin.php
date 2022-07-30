<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table ='admin';

    protected $fillabel =[
        'admin_code',
        'name',
        'password',
        'role'
    ];
}
