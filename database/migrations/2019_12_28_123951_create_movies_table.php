<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->bigIncrements('id');//電影編號
            $table->timestamps();
            $table->string('name');//電影名稱
            $table->string('category');//類別
            $table->string('introduction');//劇情簡介
            $table->time('length');//片長
            $table->date('startDate');//上映日期
            $table->date('endDate');//下檔日期
            $table->integer('room_id');//影廳編號
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
