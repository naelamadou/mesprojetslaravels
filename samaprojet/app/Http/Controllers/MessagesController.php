<?php

namespace App\Http\Controllers;

use App\Message;

class MessagesController extends Controller
{
    public function nouveau(){
         if(auth()->guest()){
            flash("Vous devez etre connecte pour voir cette page")->error();
            return redirect('/connexion');
        }
         request()->validate([
            'message'=>['required'],
        ]);
        Message::create([
            'utilisateur_id'=>auth()->user()->id,
            'contenu'=> request('message'),
            
        ]);
         flash("Vous message a bien ete publié")->success();
            return back();
    }
}
