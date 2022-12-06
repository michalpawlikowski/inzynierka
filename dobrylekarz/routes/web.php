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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/add', [App\Http\Controllers\AddController::class, 'index'])->name('add');

Auth::routes();

Route::post('/home', [App\Http\Controllers\HomeController::class, 'indexadd'])->name('home');

Auth::routes();

Route::get('/editprofil/{numberprofil}', [App\Http\Controllers\EditProfilController::class, 'index'])->name('editprofil');

Auth::routes();

Route::get('/deleteprofil/{numberprofil}', [App\Http\Controllers\DeleteProfilController::class, 'index'])->name('deleteprofil');

Auth::routes();

Route::get('/editprofil/addlocation/{numberprofil}', [App\Http\Controllers\AddLocationController::class, 'index'])->name('addlocation');

Auth::routes();

Route::get('/editprofil/adddescription/{numberprofil}', [App\Http\Controllers\AdddescriptionController::class, 'index'])->name('adddescription');

Auth::routes();

Route::post('/editprofil/adddescription/{numberprofil}', [App\Http\Controllers\AdddescriptionController::class, 'indexadd'])->name('adddescription');