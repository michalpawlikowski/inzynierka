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

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

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

Route::get('/adminpanel/listuser/opinions/{numberuser}', [App\Http\Controllers\ShowOpinionsController::class, 'index'])->name('showopinions');

Auth::routes();

Route::get('/adminpanel/listuser/deleteopinions/{numberuser}/{numberopinion}', [App\Http\Controllers\DeleteOpinionsController::class, 'index'])->name('deleteopinions');

Auth::routes();

Route::get('/adminpanel/listuser/delete/{numberuser}', [App\Http\Controllers\DeleteUserController::class, 'index'])->name('edituser');

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

Auth::routes();

Route::get('/adminpanel/listuseractivated', [App\Http\Controllers\ListUserActivatedController::class, 'index'])->name('listuseractivated');

Auth::routes();

Route::post('/search', [App\Http\Controllers\SearchController::class, 'index'])->name('search');

Auth::routes();

Route::get('/search/{number}', [App\Http\Controllers\SearchOfferController::class, 'index'])->name('searchoffer');

Auth::routes();

Route::get('/adminpanel/listuseractivated/activate/{numberuser}', [App\Http\Controllers\ListUserActivatedActivateController::class, 'index'])->name('acceptuser');

Auth::routes();

Route::get('/adminpanel/listuseractivated/delete/{numberuser}', [App\Http\Controllers\ListUserActivatedDeleteController::class, 'index'])->name('deleteuser');

Auth::routes();

Route::get('/editprofil/addlocation/adddays/{numberaddres}', [App\Http\Controllers\AddDaysController::class, 'index'])->name('adddays');

Auth::routes();

Route::post('/editprofil/addlocation/adddays/save/{numberaddres}', [App\Http\Controllers\AddDaysSaveController::class, 'index'])->name('adddayssave');

Auth::routes();

Route::get('/editprofil/addlocation/deletedays/{del}/{numberaddres}', [App\Http\Controllers\DeleteDaysUserController::class, 'index'])->name('deletedaysuser');

Auth::routes();

Route::post('/search/addopinion/{number}/{iduser}', [App\Http\Controllers\AddOpinionsController::class, 'index'])->name('addopinions');

Auth::routes();

Route::get('/deleteaccount/{iduser}', [App\Http\Controllers\DeleteAccountController::class, 'index'])->name('deleteaccount');

