<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EtudiantNequipe extends Model
{

    public function etudiants(){

        
        return $this->hasMany('App\Etudiant');
    
        }
    
        public function equipes(){
    
            
            return $this->hasMany('App\Equipe');
        
            }
}
