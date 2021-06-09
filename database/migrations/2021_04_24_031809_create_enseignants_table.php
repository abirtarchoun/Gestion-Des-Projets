<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnseignantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom',30);
            $table->string('prenom',30);
            $table->string('adresse',70);
            $table->string('email',100)->unique();
            $table->string('picture');
            $table->string('gender');
            $table->enum('department', ['Informatique', 'GénieMecanique', 'GénieElectrique', 'GéniedeProcédes']);
            $table->string('phone');
            $table->integer('projects');
            $table->integer('tasks');
            $table->integer('uploads');
            $table->date('joining_date');
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
        Schema::dropIfExists('enseignants');
    }
}
