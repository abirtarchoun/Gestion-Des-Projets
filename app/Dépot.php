<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dépot extends Model
{
   
    public function enseignant()
    {
        return $this->BelongsTo('App\Enseignant');
    }
    public function projet()
    {
        return $this->BelongsTo('App\Projet');
    }


    public function etudiant()
    {
        return $this->BelongsTo('App\Etudiant');
    }

    public function equipe()
    {
        return $this->BelongsTo('App\Equipe');
    }
}
