<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassromsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classroms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_class');
            $table->integer('size_of_class');
            $table->integer('maKhoi')->unsigned()->nullable();

            $table->integer('maGV')->unsigned()->nullable();

            $table->integer('maHK')->unsigned()->nullable();

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
        Schema::dropIfExists('classroms');
    }
}
