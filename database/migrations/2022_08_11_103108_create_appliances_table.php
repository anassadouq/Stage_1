<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppliancesTable extends Migration
{
    public function up()
    {
        Schema::create('appliances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_type');
            $table->foreign('id_type')->references('id')->on('types')->onUpdate('cascade')->onDelete('cascade');
            $table->string("libelle");
            $table->string('dbid');
            $table->boolean('disponibilite');
            $table->string('references');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('appliances');
    }
}