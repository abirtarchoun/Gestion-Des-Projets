<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom',30);
            $table->string('prenom',30);
            $table->string('email',100)->unique();
            $table->string('picture');
            $table->enum('department', ['Informatique', 'Génie Mecanique', 'Génie Electrique', 'Génie de Procédés', 'Sciences économiques et Gestion']);
            $table->string('phone');
            $table->string('gender');
            $table->date('admission_date');
            //$table->string('username',50);
            //$table->string('password',50);
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
        Schema::dropIfExists('etudiants');
    }
}
