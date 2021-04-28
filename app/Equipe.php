<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    public function etudiants()
    {

      return $this->belongsToMany('App\Etudiant');
    }
}
