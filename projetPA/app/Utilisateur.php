<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
   protected $fillable = ['email','nom','mot_de_passe','role_id'];
}
