<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CreditInfo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('UserId')->constrained('UserInfo');
            $table->integer('CardNumber')->length(18);
            $table->string('CardLimitDate',7);
            $table->string('CardName',50);
            $table->integer('SequlityCode')->length(4);
            $table->integer('DelFlg')->length(1);
            $table->timestamps(); // created_at と updated_atが生成される。
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CreditInfo');
    }
}
