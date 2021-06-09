<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
  protected $guarded = []; //l tous les champs acceptes mass asseigment #
  
    public function etudiants()
    {

      return $this->belongsToMany('App\Etudiant');
    }

    public function depots()
    {

      return $this->hasMany('App\Dépot');
    }

    public function projet()
    {

      return $this->belongsTo('App\Projet');
    }

}
