<?php

namespace App\Http\Controllers;

use App\Utilisateur;
use App\Role;

class InscriptionController extends Controller
{
    public function formulaire(){
        $utilisateurs = Utilisateur::all();
        $roles = Role::where('role_id',$utilisateurs->role-id)->get();
        //apres le where il faut mettre l'idenfiant de la collone qui contient le role
        return view('admin.inscription',[
            'utilisateur'=> $utilisateurs,
            'role_id'=> $roles,
        ]);
    }
    public function traitement(){
        // request()->validate(['']);
        return 'Traitement inscription';
    }
}
