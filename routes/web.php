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

//Route::get('/', 'MemberController@index');

//Route::get('/', 'MemberController@getMembers');

Route::get('/', 'HomeController@index');

//Route::post('/save', 'MemberController@save');

 Route::get('/dossiers', 'DossiersController@getDossiers');

  Route::get('/demandes_s', 'DemandeController@getDemandeSite');
  Route::get('/demandes_f', 'DemandeController@getDemandeF');

 Route::get('/demande/{id}', 'DemandeController@save');

 Route::get('/annul_demande_s/{id}', 'DemandeController@cancelDemande');
 Route::get('/delete_demande_s/{id}', 'DemandeController@deleteDemande');

 Route::get('/ser_demande_s/{id}', 'DemandeController@serviDemande');
 Route::get('/rej_demande_s/{id}', 'DemandeController@rejDemande');