<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuivisTable extends Migration
{
    public function up()
    {
        Schema::create('suivis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_type');
            $table->foreign('id_type')->references('id')->on('type_prestations')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_pov');
            $table->foreign('id_pov')->references('id')->on('povs')->onUpdate('cascade')->onDelete('cascade');
            $table->string('offre_commerciale');
            $table->float('montant');
            $table->string('compte_rendu');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('suivis');
    }
}