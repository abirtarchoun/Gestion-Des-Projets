<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    public function dépot()
    {

        return $this->belongsTo('App\Dépot');
    }



   public function projets()
    {

      return $this->belongsToMany('App\Projet','etudiant_projet');
      
    }

    public function equipes()
    {

      return $this->belongsToMany('App\Equipe','etudiant_nequipe');

    }
}
