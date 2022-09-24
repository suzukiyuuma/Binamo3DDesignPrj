<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSearchWordDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SearchWordDetail', function (Blueprint $table) {
            $table->id();
            $table->integer('SearchID')->constrained('SearchHead');
            $table->text('SearchWord',2000);
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
        Schema::dropIfExists('SearchWordDetail');
    }
}
