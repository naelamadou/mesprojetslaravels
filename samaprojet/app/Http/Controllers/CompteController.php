<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function accueil(){
        //var_dump(auth()->guest());
        if(auth()->guest()){
            flash("Vous devez etre connecte pour voir cette page")->error();
            return redirect('/connexion');
        }
        return view('mon-compte');
    }
    public function deconnexion(){
        flash("Vous etes maintenant connecté")->success();
        auth()->logout();
        return redirect('/');
    }
    public function modificationMotDePasse(){
        if(auth()->guest()){
            flash("Vous devez etre connecte pour voir cette page")->error();
            return redirect('/connexion');
        }
        request()->validate([
            'password'=>['required','confirmed','min:8'],
            'password_confirmation'=>['required'],
        ]);
        auth()->user()->update([
            'mot_de_passse'=>bcrypt(request('password')),
        ]);
        flash("Votre mot de pass a bien été mise a jour")->success();
        return redirect('/mon-compte');
    }
}
