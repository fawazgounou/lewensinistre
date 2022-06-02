<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\AdminController;
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

Route::get('home', [HomeController::class,'index']);


Route::get('administrateur', [AdminController::class,'Alluser']);
Route::get('update/{id}/{role}', [AdminController::class,'update']);

 /* Route::get('detailvehicule/{id}', [VehiculeController::class,'Vehicule']); */
Route::get('StatistiqAll', [AllvehiculeController::class,'AllVoiture']);

Route::get('detailSinistre/{id}', [DetailController::class,'Details']);
/*
Route::resource('/home/profile', App\Http\Controllers\Auth\ProfileController::class)->middleware('fireauth');

Route::resource('/password/reset', App\Http\Controllers\Auth\ResetController::class);

Route::resource('/img', App\Http\Controllers\ImageController::class); */

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('user','fireauth');

// Route::get('/home/customer', [App\Http\Controllers\HomeController::class, 'customer'])->middleware('user','fireauth');

//Route::get('/email/verify', [App\Http\Controllers\Auth\ResetController::class, 'verify_email'])->name('verify')->middleware('fireauth');

/* Route::get('/home', function () {
    return view('home');
});
 */
/* Route::get('/administrateur', function () {
    return view('administrateur');
}); */

