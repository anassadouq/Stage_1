<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePovsTable extends Migration
{
    public function up()
    {
        Schema::create('povs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_appliance');
            $table->foreign('id_appliance')->references('id')->on('appliances')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_client');
            $table->foreign('id_client')->references('id')->on('clients')->onUpdate('cascade')->onDelete('cascade');
            $table->string('description');
            $table->string('compte_manager');
            $table->string('ingenieur_cybersecurite');
            $table->string('analyse_cybersecurite');
            $table->string('libelle');
            $table->date("date_debut");
            $table->date("date_fin");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('povs');
    }
}