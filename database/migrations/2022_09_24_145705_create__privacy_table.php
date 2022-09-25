<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrivacyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Privacy', function (Blueprint $table) {
            $table->id();
            $table->text('PrivacyJoukouTitle',200);
            $table->text('PrivacyJoukouNaiyou',2000);
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
        Schema::dropIfExists('Privacy');
    }
}
