<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
//Route::view('/','welcome');
//c'est la vue qui permet de retourné un formulaire


Route::get('/inscription', 'InscriptionController@formulaire');
//il faut une route de type post losrqu'on veut traiter un formulaire
Route::post('/inscription','InscriptionController@traitement');

Route::get('/connexion','ConnexionController@formulaire');
Route::post('/connexion','ConnexionController@traitement');


Route::get('/','UtilisateursController@liste');


Route::get('/mon-compte', 'CompteController@accueil');
Route::get('/deconnexion','CompteController@deconnexion');
Route::post('/modification-mot-de-passe','CompteController@modificationMotDePasse');
Route::post('/messages','MessagesController@nouveau');
Route::get('/{email}','UtilisateursController@voir');
