<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSceancesTable extends Migration
{
    public function up()
    {
        Schema::create('sceances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pov');
            $table->foreign('id_pov')->references('id_appliance')->on('povs')->onUpdate('cascade')->onDelete('cascade');
            $table->string('resumer');
            $table->string('participant');
            $table->date('date_sceance');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sceances');
    }
}