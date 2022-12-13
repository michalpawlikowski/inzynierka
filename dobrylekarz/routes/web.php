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

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcoe');

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

Auth::routes();

Route::get('/adminpanel', [App\Http\Controllers\AdminPanelController::class, 'index'])->name('adminpanel');

Auth::routes();

Route::get('/adminpanel/listuser', [App\Http\Controllers\ListUserController::class, 'index'])->name('listuser');

Auth::routes();

Route::get('/adminpanel/listspecializations', [App\Http\Controllers\ListSpecializationsController::class, 'index'])->name('listspecializations');

Auth::routes();

Route::post('/adminpanel/listspecializations/addspecializations', [App\Http\Controllers\AddSpecializationsController::class, 'index'])->name('addspecializations');

Auth::routes();

Route::get('/adminpanel/listspecializations/deletespecializations/{numberspecializations}', [App\Http\Controllers\DeleteSpecializationsController::class, 'index'])->name('deleteprofil');

Auth::routes();

Route::get('/adminpanel/listspecializations/listservices/{numberspecializations}', [App\Http\Controllers\ListServicesController::class, 'index'])->name('listservices');

Auth::routes();

Route::get('/adminpanel/listspecializations/deleteservices/{numberservices}', [App\Http\Controllers\DeleteServicesController::class, 'index'])->name('deleteservices');

Auth::routes();

Route::post('/adminpanel/listspecializations/addservices/{numberspecializations}', [App\Http\Controllers\AddServicesController::class, 'index'])->name('addservices');

Auth::routes();

Route::get('/settings', [App\Http\Controllers\SettingsController::class, 'index'])->name('settings');

Auth::routes();

Route::get('/settings/save/{numberspecializations}', [App\Http\Controllers\SettingsSaveController::class, 'index'])->name('settingssave');

Auth::routes();

Route::get('/adminpanel/listuser/edit/{numberuser}', [App\Http\Controllers\EditUserController::class, 'index'])->name('edituser');

Auth::routes();

Route::get('/adminpanel/listuser/edit/save/{numberuser}', [App\Http\Controllers\EditUserSaveController::class, 'index'])->name('editusersave');

Auth::routes();

Route::post('/editprofil/addlocation/addcities/{numberprofil}', [App\Http\Controllers\AddCitiesController::class, 'index'])->name('addcities');

Auth::routes();

Route::get('/editprofil/addlocation/deletecities/{location}/{numberprofil}', [App\Http\Controllers\DeleteCitiesController::class, 'index'])->name('deletecities');

Auth::routes();

Route::get('/editprofil/addlocation/addservices/{numberaddres}', [App\Http\Controllers\AddServicesUserController::class, 'index'])->name('addservicesuser');

Auth::routes();

Route::post('/editprofil/addlocation/addservices/save/{numberaddres}', [App\Http\Controllers\SaveServicesuserController::class, 'index'])->name('saveservicesuser');

Auth::routes();

Route::get('/editprofil/addlocation/deleteserviceuser/{opis}/{numberaddres}', [App\Http\Controllers\DeleteServicesUserController::class, 'index'])->name('deleteservicesuser');

