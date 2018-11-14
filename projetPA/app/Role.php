<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
   protected $table = 'role';
   //dans filabla on met les champs de la base
   protected $fillable = ['nom'];
   public function utilisateurs(){
       return $this->hasMany(Utilisateur::class);
       //on peut ajouter ->latest() pour dire l'ordre decroissante
   }
}
