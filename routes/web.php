<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\HistoriaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\MedicoController;


Route::get('/', function () {
    return redirect('login');
});

//Carga de pacientes
Route::view('InicioPaciente',"InicioPaciente")->middleware('auth')->name('InicioPaciente');
Route::resource('pacientes',PacienteController::class)->middleware('auth');

//Funcion para Administrador
Route::resource('administrador',AdministradorController::class)->middleware('auth');
Route::resource('medicos',MedicoController::class)->middleware('auth');
Route::view('InicioAdmin',"InicioAdmin")->middleware('auth')->name('InicioAdmin');

// En routes/web.php
Route::delete('administrador/{id}', [AdministradorController::class, 'destroy'])->name('administrador.destroy');


//Login y registro
Route::view('/login', "login")->name('login');
Route::view('/registro', "register")->name('registro');
Route::post('/validar-registro',[LoginController::class,'register'])->name('validar-registro');
Route::post('/inicia-sesion',[LoginController::class,'login'])->name('inicia-sesion');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');