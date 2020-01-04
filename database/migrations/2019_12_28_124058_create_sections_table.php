<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->bigIncrements('id');//放映編號
            $table->timestamps();
            $table->dateTime('startTime');//開始放映
            $table->dateTime('endTime');//結束放映
            $table->integer('price');//票價
            $table->integer('ticket_id');//電影票編號
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
        Schema::dropIfExists('sections');
    }
}
