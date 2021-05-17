<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDépotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dépots', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTimeTz('datedepot', 0);
            $table->dateTimeTz('datefinal', 0);
            $table->float('note',2,0,9);
            $table->string('sujet',30);
            $table->string('contenu',50);
            $table->unsignedBigInteger('enseignant_id');
            $table->unsignedBigInteger('etudiant_id');
            $table->unsignedBigInteger('projet_id');
            $table->unsignedBigInteger('equipe_id');
            $table->timestamps();
            $table->foreign('enseignant_id')->references('id')->on('enseignants')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('projet_id')->references('id')->on('projets')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('dépots');
    }
}
