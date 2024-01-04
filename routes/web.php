<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();
//Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('clients', 'ClientController');
Route::resource('sevices', 'ServiceController');
Route::resource('packs', 'PacksController');
Route::delete('packs/destroy', 'PacksController@destroy')->name('packs.destroy');
Route::resource('projets', 'ProjectController');
Route::resource('devis', 'DevisController');
Route::resource('facture', 'FactureController');
Route::resource('facturesDetails', 'FacturesDetailsController');
Route::get('/{page}', 'AdminController@index');