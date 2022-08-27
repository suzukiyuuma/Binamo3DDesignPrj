<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\CreditInfo;
use App\Models\UserInfo;

class CreateUserInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UserInfo', function (Blueprint $table) {
            $table->id();
            $table->string('UserName', 100);
            $table->string('Password', 50);
            $table->integer('UserKind')->length(2);
            $table->string('OldPassword',50);
            $table->integer('DelFlg')->length(1);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('UserInfo');
    }
}
