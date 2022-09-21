<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeachHead extends Model
{
    use HasFactory;
    protected $table ='SeachHead'; // 関連づけるテーブル名

    // 関連づけるDBカラム名
    protected $fillabel =[
        'id'
    ];
}
