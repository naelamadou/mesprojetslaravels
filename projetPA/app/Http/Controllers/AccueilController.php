<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function voir(){
        return view('admin.accueil');
    }
}
