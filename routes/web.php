<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\dashbordController;
use App\Http\Controllers\AllvehiculeController;
use App\Http\Controllers\DetailController;
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
    return view('welcome');
});

Auth::routes();


Route::post('login/{provider}/callback', 'Auth\LoginController@handleCallback');

Route::post('rechercher', [HomeController::class,'rechercher']);

Route::get('home', [HomeController::class,'index'])->name('home');


Route::get('voirdash/{name}', [HomeController::class,'voirDash']);
Route::get('administrateur', [AdminController::class,'Alluser']);
Route::get('update/{id}/{role}', [AdminController::class,'update']);

Route::get('dashbord/{id}', [dashbordController::class,'Detail']);

Route::get('detailSinistre/{id}', [DetailController::class,'Details'])->name('detailSinistre');


