<?php

use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\CompteController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\DeconnexionController;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VerificationController as ControllersVerificationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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

// email verification

// on affiche une page d'avertissement au cas ou l'user n'a pas verifier son email
/*Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice'); 

//on traite la verification de l'email
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

//en cas de non reception de l'email de verification
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send'); */

//end email verification

// pages

Route::get('/',[frontController::class, 'acceuil'])->name ("acceuil");

/*Auth::routes([
    'verify' => true
]);*/

Route::get('/a propos',[frontController::class, 'a_propos'])->name("a_propos");
Route::get('/menu',[frontController::class, 'menu'])->name("menu");
Route::get('/reservation',[frontController::class, 'reservation'])->name("reservation");
Route::get('/conseil',[frontController::class, 'conseil'])->name("conseil");
Route::get('/contact',[frontController::class, 'contact'])->name("contact");
Route::get('/connexion',[frontController::class, 'connexion'])->name("connexion");
Route::get('/commande',[frontController::class, 'commande'])->name("commande");

Route::get('/inscription',[UsersController::class, 'register'])->name("register");
Route::post('/inscription',[UsersController::class, 'handleRegistration'])->name("handleRegistration");

Route::get('/connexion',[ConnexionController::class, 'login'])->name("login");
Route::post('/connexion',[ConnexionController::class, 'handleLogin'])->name("handleLogin");

Route::get('/dashboard',[ConnexionController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' => ['auth']], function(){

    /**
     * Verification Routes
     */
    Route::get('/email/verify', [VerificationController::class, 'show'])->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify')->middleware(['signed']);
    Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');
    
});  

//only authenticated can access this group
/*Route::group(['middleware' => ['auth']], function() {
    //only verified account can access with this group
    Route::group(['middleware' => ['verified']], function() {
            /**
             * Dashboard Routes
             */
            /*Route::get('/index', [DashboardController::class, 'index'])->name('Dashboard.index');
    });
});*/


Route::get('/deconnexion',[DeconnexionController::class, 'logout'])->name("logout");

Route::get('/users',[UsersController::class, 'liste'])->name("liste");

Route::get('/user/{id}', [UsersController::class, 'voir'])->name("voir");


/*Route::get('/dashboard', function(){
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/





//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
