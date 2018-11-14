<?php

namespace App\Http\Controllers;

use App\Role;

class RoleController extends Controller
{
    public function formulaire(){
        return view('admin.role');
    }
    public function traitement(){
        request()->validate([
            //les champs a gauche sont ceux du formulaire
                            'role'=> ['required'],
                        ]);
                        
       Role::create([
            //les champs a gauche sont ceux de la base
            'nom' => request('role'),
        ]);
        flash("Vous avez  bien ajouté le role -".request('role'))->success();
            return back();
    }
    // public function liste(){
    //     $listes = Role::all();
    //     return view('admin.inscription',['listes'=>$listes]);
    // }
}
