<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchCategoryDetail extends Model
{
    use HasFactory;
    protected $table ='SearchCategoryDetail'; // 関連づけるテーブル名

    // 関連づけるDBカラム名
    protected $fillabel =[
        'id',
        'SearchID',
        'SearchCategory',
    ];
}
