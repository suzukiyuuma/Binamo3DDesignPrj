<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditInfo extends Model
{
    use HasFactory;
    protected $table ='CreditInfo'; // 関連づけるテーブル名

    // 関連づけるDBカラム名
    protected $fillabel =[
        'id',
        'UserID',
        'CardNumber',
        'CardLimiitDate',
        'CardName',
        'SequlityCode'
    ];
}
