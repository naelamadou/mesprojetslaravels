<?php

namespace App\Http\Controllers;

use App\Utilisateur;

class InscriptionController extends Controller
{
    public function formulaire(){
        return view('inscription');
    }
    public function Traitement(){
        	//pour la methode d'avant il faut faire un new App\Utilisateur
	request()->validate([
                            'email'=>['required','Email'],
                            'password'=>['required','confirmed','min:8'],
                            'password_confirmation'=>['required']
	                    ],
                        [
                            //c'est pour faire un message specifique a une erreur d'un champ donné
                            'password.min'=>'Pour des raisons de securité votre mot de pass doit faire :min caractéres'
                        ]
                      );
	$utilisateur= Utilisateur::create([
		'email' => request('email'),
		'mot_de_passe'=> bcrypt(request('password')),
	]);
	/*$utilisateur->email = request('email');
	$utilisateur->mot_de_passe = bcrypt(request('password'));
	$utilisateur->save();*/
	return "Nous avous reçu votre email ". request('email')." nom ".request('name')." mot de pass ".request('password');
    }
}
