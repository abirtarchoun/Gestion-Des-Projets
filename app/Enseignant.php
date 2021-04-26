<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    public function projets()
    {
        return $this->hasMany('App\Projet');
    }
     public function dépot()
     {
    return $this->belongsTo('App\Dépot');
     }
    
}
