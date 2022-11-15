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

    $miasta = DB::table('miasta')->get();
    $specjalizacje = DB::table('specializations')->get();
    return view('welcome', ['miasta' => $miasta], ['specjalizacje' => $specjalizacje]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/add', [App\Http\Controllers\AddController::class, 'index'])->name('add');
Route::get('/settings', [App\Http\Controllers\SettingsController::class, 'index'])->name('settings');



Route::post('/home', [App\Http\Controllers\HomeController::class, 'indexadd'])->name('home');
Route::get('/list', [App\Http\Controllers\ListController::class, 'index'])->name('list');

//Route::post('/home', 'HomeController@someMethod');