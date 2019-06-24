<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMObjectSemestersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_object_semesters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('maHK')->unsigned()->nullable();


            $table->integer('maMH')->unsigned()->nullable();


            $table->integer('maLop')->unsigned()->nullable();


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
        Schema::dropIfExists('m_object_semesters');
    }
}
