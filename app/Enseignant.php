<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    protected $guarded = []; //l tous les champs acceptes mass asseigment #

    public function projets()
    {
        return $this->hasMany('App\Projet');
    }
     public function depots()
     {
    return $this->hasMany('App\Dépot');
     }
    
}
