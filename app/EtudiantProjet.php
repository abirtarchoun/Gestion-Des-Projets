<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EtudiantProjet extends Model
{
    public function etudiants(){

        
        return $this->hasMany('App\Etudiant','etudiant_projet');
    
        }
        public function projets(){

        
            return $this->hasMany('App\Projet','etudiant_projet');
        
            }
}
