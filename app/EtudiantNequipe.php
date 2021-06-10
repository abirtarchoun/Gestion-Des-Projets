<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EtudiantNequipe extends Model
{
    protected $guarded = []; //l tous les champs acceptes mass asseigment #

    public function etudiants(){

        
        return $this->hasMany('App\Etudiant');
    
        }
    
        public function equipes(){
    
            
            return $this->hasMany('App\Equipe');
        
            }
}
