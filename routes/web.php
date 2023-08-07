<?php

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontController;

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
    return view('vendors/null');
});*/

/*Route::get('/',[UrlsController::class, 'create'])->name("create");*/

/*Route::get('/about', function () {
    return view('pages/about');
    /*return View::make('pages/about');
});*/

Route::get('/',[frontController::class, 'index'])->name("index");
Route::get('/a propos',[frontController::class, 'a_propos'])->name("a_propos");
Route::get('/menu',[frontController::class, 'menu'])->name("menu");
Route::get('/reservation',[frontController::class, 'reservation'])->name("reservation");
Route::get('/conseil',[frontController::class, 'conseil'])->name("conseil");
Route::get('/contact',[frontController::class, 'contact'])->name("contact");
Route::get('/connexion',[frontController::class, 'connexion'])->name("connexion");
Route::get('/commande',[frontController::class, 'commande'])->name("commande");


