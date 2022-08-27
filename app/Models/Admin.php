<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table ='admin'; // 関連づけるテーブル名

    // 関連づけるDBカラム名
    protected $fillabel =[
        'admin_code',
        'name',
        'password',
        'role'
    ];
}
