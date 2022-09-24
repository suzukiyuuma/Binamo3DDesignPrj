<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSearchCategoryDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SearchCategoryDetail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('SearchID'))->constrained('SearchHead');
            $table->foreignId('SearchCategory')->constrained('CategoryM');
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
        Schema::dropIfExists('SearchCategoryDetail');
    }
}
