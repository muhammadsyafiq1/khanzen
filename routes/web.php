<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\MainController;
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

Route::get('/cek-sertifikat', [MainController::class, 'cekSertifikat']);
Route::resource('sertifikat', DataController::class);
Route::get('profil-perushaan', [DataController::class, 'profilPerusahaan']);
Route::get('publik-training', [DataController::class, 'publikTraining']);
Route::get('new-unit-forklift', [DataController::class, 'newUnitForkLift']);
Route::get('service-devision-program', [DataController::class, 'servisDevisionProgram']);

//dashborad
Route::get('dashboard', [DataController::class, 'dashboard']);


require __DIR__.'/auth.php';
