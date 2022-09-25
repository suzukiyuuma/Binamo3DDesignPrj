<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kiyaku extends Model
{
    use HasFactory;
    protected $table ='Kiyaku'; // 関連づけるテーブル名

    // 関連づけるDBカラム名
    protected $fillabel =[
        'id',
        'KiyakuKbn',
        'KiyakuTitle',
        'KiyakuNaiyou'
    ];
}
