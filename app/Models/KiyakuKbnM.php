<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KiyakuKbnM extends Model
{
    use HasFactory;
    protected $table ='KiyakuKbnM'; // 関連づけるテーブル名

    // 関連づけるDBカラム名
    protected $fillabel =[
        'id',
        'CategoryName'
    ];
}
