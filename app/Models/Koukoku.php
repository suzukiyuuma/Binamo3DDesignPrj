<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koukoku extends Model
{
    use HasFactory;
    protected $table ='Koukoku'; // 関連づけるテーブル名

    // 関連づけるDBカラム名
    protected $fillabel =[
        'id',
        'KoukokuName',
        'JanruKbn',
        'AnimationURL',
        'DetailURL',
        'KoukokuContent',
        'ShowTimes',
        'DtlBtnClickTimes',
        'ShowFlg',
    ];
}
