<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchFormatDetail extends Model
{
    use HasFactory;
    protected $table ='SearchFormatDetail'; // 関連づけるテーブル名

    // 関連づけるDBカラム名
    protected $fillabel =[
        'id',
        'SearchID',
        'SearchFormat'
    ];
}
