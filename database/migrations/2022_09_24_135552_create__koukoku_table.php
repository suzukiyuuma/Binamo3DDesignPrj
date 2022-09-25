<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKoukokuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Koukoku', function (Blueprint $table) {
            $table->id();
            $table->text('KoukokuName',50);
            $table->integer('JanruKbn')->length(2);
            $table->text('AnimationURL',100);
            $table->text('DetailURL',100);
            $table->text('KoukokuContent',2000);
            $table->integer('ShowTimes')->length(10);
            $table->integer('DtlBtnClickTimes')->length(10);
            $table->integer('ShowFlg')->length(1);
            $table->integer('DelFlg')->length(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Koukoku');
    }
}
