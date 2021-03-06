<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodoteamcommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todoteamcomments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id');
            $table->text('text');
            $table->integer('target_id');
            $table->integer('date_year');
            $table->integer('date_month');
            $table->integer('date_day');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todoteamcomments');
    }
}
