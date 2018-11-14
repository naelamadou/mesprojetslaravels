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
/*

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/','ConnexionController@formulaire');
Route::post('/','ConnexionController@traitement');

Route::get('/inscription','InscriptionController@formulaire');
Route::post('/inscription', 'InscriptionController@traitement');

Route::get('/accueil', 'AccueilController@voir');

Route::get('/role','RoleController@formulaire');
Route::post('/role','RoleController@traitement');
// Route::post('/role','RoleController@liste');

