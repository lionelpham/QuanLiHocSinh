<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoreBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('score_boards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('maHS')->unsigned()->nullable();
            $table->integer('maLop')->unsigned()->nullable();

            $table->integer('maMonHoc')->unsigned()->nullable();

            $table->float('score')->nullable();
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
        Schema::dropIfExists('score_boards');
    }
}
