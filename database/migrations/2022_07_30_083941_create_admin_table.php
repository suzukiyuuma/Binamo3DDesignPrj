<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // テーブル名 : admin
        Schema::create('admin', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->id();                  // 1列目 : 連番のカラムが生成　　　   カラム名 : id
            $table->string('admin_code');  // 2列目 : 文字列型のカラムが生成　　　カラム名 : admin
            $table->string('name');        // 3列目 : 文字列型のカラムが生成　　　カラム名 : name
            $table->string('password');    // 4列目 : 文字列型のカラムが生成　　　カラム名 : password
            $table->string('role');        // 5列目 : 文字列型のカラムが生成　　　カラム名 : role
            $table->timestamps();          // 6列目 : 日付時刻型のカラムが生成　　　
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
