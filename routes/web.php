<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\CourrierEntrantController;
use App\Http\Controllers\CorbeilleController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\CourrierEmployeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\sortantController;
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

Route::get('/home', function () {
    
    return view ('home');
})->name('home');

Route::get('/entrant',[CourrierEntrantController::class,'show'])->name('entrant');

Route::get('/Sortant',[sortantController::class,'affichage'])->name('Sortant');

Route::get('/corbeille', function () {
    return view('corbeille');
})->name('corbeille');


Route::get('/corbeille',[CorbeilleController::class,'show'])->name('corbeille');

Route::get('/utilisateur',[EmployeController::class ,'show'])->name('utilisateur');


Route::get('/notifications',[NotificationsController::class,'show'] )->name('notifications');

Route::get('/ajouter_courrier_entrant',[NotificationsController::class,'ajouter_courrier_entrant_store'] )->name('ajouter_courrier_entrant_store');

Route::get('/supprimer_courrier_entrant',[CourrierEntrantController::class,'supprimer'] )->name('supprimer_courrier_entrant');

Route::get('/vider',[CorbeilleController::class,'vider'])->name('vider');

Route::get('/ajouter_courrier_employe',[CourrierEmployeController::class,'ajouter_courrier_Employe_store'])->name('ajouter_courrier_employe');

Route::get('/employe' ,[EmployeController::class ,'employePage'])->name('page_employe');

Route::get('/',function(){
    return view('login');
});
Route::get('/verifier',[loginController::class,'verifier_existence'])->name('verifier');
Route::post('/verifier_travail',[EmployeController::class ,'verifier_travail'])->name('verifier_travail');