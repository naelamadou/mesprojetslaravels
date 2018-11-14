<?php

namespace App\Http\Controllers;
use App\Utilisateur;
class UtilisateursController extends Controller
{
    public function liste(){
        $utilisateurs= Utilisateur::all();
        //les views n'ont pas axe a nos variable qui sont definie dans la fonction anonyme c pur cela on les passe on tableaux
        return view('utilisateurs',[
            'utilisateurs'=>$utilisateurs,
        ]);
    }
    public function voir(){
        //on recupere l'email
        $email = request('email');
        //et l'a on recupere l'utilisateur
        $utilisateur=Utilisateur::where('email',$email)->firstOrFail();
        $message = $utilisateur->message;

        return view('utilisateur',[
            'utilisateur'=>$utilisateur,
        ]);
    }
}
