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
            $table->float('note', 8, 2);
            $table->string('sujet',50);
            $table->unsignedBigInteger('enseignant_id');
            $table->unsignedBigInteger('etudiant_id');
            $table->unsignedBigInteger('projet_id');
            $table->unsignedBigInteger('equipe_id');
            $table->timestamps();
            $table->foreign('enseignant_id')->references('id')->on('enseignants')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('projet_id')->references('id')->on('projets')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('equipe_id')->references('id')->on('equipes')->onDelete('restrict')->onUpdate('restrict');
        
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
