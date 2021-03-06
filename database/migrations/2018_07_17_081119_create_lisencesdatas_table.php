<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatelisencesdatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lisencesdatas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company');
            $table->string('company_2');
            $table->string('name');
            $table->string('ip');
            $table->string('type');
            $table->string('comm');
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
        Schema::dropIfExists('lisencesdatas');
    }
}
