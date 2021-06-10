<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EtudiantProjet extends Model
{
    protected $guarded = []; //l tous les champs acceptes mass asseigment #
    
    public function etudiants(){

        
        return $this->hasMany('App\Etudiant');
    
        }
        public function projets(){

        
            return $this->hasMany('App\Projet');
        
            }
}
