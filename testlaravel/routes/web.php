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
Route::get('/bonjour/{prenom}', function () {
    return request('prenom');
});
Route::get('/','AccueilController@connection');
/*Route::post('/', function(){
    return 'formulaire recu';
});
*/
Route::get('/inscription','InscriptionController@formulaire');
Route::post('/inscription','InscriptionController@traitement');