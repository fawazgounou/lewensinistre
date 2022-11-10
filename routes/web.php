<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\dashbordController;
use App\Http\Controllers\AllvehiculeController;
use App\Http\Controllers\CompagnyController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\SinistreController;
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

// Route befor login ---------------------------------------------------

Route::get('/', function () { return view('index'); })->name('connexion');

Auth::routes();

Route::post('login/{provider}/callback', 'Auth\LoginController@handleCallback');

// Route::post('rechercher', [HomeController::class,'rechercher']);

// Routes after login ---------------------------------------------------

Route::group(['middleware' => ['fireauth']] , function(){

    // Home page after auth
        Route::get('/home' , [HomeController::class , 'index'])->name('home');

    // Route for sinistres
        Route::get('/sinistre/{compagny?}', [SinistreController::class,'index'])->name('sinistre.index');
        Route::get('/sinistre/details/{compagny}/{id}', [SinistreController::class,'details'])->name('sinistre.details');
        Route::get('/sinistre/download/{compagny}/{id}', [SinistreController::class, 'download'])->name('sinistre.download');

    // Update profile
        Route::get('/profile/{id}', [CompagnyController::class,'profile'])->name('compagny.profile');
        Route::post('/type/{id}', [CompagnyController::class,'update'])->name('compagny.update');

    // Route for admin unique
        Route::group(['middleware' => ['admin']], function () {

            // Route for compagny
                Route::get('/compagnie', [CompagnyController::class,'index'])->name('compagny.index');
                Route::get('/ajouter/utilisateur' , [CompagnyController::class , 'create'])->name('compagny.create');
                Route::post('/ajouter/utilisateur' , [CompagnyController::class , 'store'])->name('compagny.store');
                Route::get('/type/{id}/{role}', [CompagnyController::class,'type'])->name('compagny.type');

        });
        // Route::get('voirdash/{name}', [HomeController::class,'voirDash']);
        // Route::get('administrateur', [AdminController::class,'Alluser'])->name('administrator');
        // Route::get('update/{id}/{role}', [AdminController::class,'update']);


        // Route::get('detailSinistre/{id}', [DetailController::class,'Details'])->name('detailSinistre');


});



