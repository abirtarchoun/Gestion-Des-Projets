<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    protected $guarded = [];
    public function projets()
    {
        return $this->hasMany('App\Projet');
    }
     public function depots()
     {
    return $this->hasMany('App\Dépot');
     }
    
}
