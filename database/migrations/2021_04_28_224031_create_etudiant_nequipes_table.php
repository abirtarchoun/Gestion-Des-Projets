<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantNequipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiant_nequipes', function (Blueprint $table) {
          
            $table->unsignedBigInteger('etudiant_id');
            $table->unsignedBigInteger('equipe_id');
            $table->timestamps();
            $table->foreign('etudiant_id')->references('id')->on('etudiants')->nDelete('cascade')->onUpdate('cascade');
            $table->foreign('equipe_id')->references('id')->on('equipes')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiant_nequipes');
    }
}
