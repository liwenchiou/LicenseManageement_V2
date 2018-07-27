<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLisencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    //'lisence_en', 'lisence_cn', 'lisence_code','lisence_num','lisence_comm'
    public function up()
    {
        Schema::create('lisences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lisence_en');
            $table->string('lisence_cn');
            $table->string('lisence_code');
            $table->string('lisence_num');
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
        Schema::dropIfExists('lisences');
    }
}
