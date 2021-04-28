<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EtudiantProjet extends Model
{
    
    public function etudiants(){

        
        return $this->hasMany('App\Etudiant');
    
        }
        public function projets(){

        
            return $this->hasMany('App\Projet');
        
            }
}
