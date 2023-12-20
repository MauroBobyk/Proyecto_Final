<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdministradorController;



Route::get('/', function () {
    return redirect('login');
});

//Todo lo de pacientes funciona
Route::resource('pacientes',PacienteController::class);

//a ver si el admin funca
Route::resource('administrador',AdministradorController::class);




Route::view('/login', "login")->name('login');
Route::view('/registro', "register")->name('registro');
Route::post('/validar-registro',[LoginController::class,'register'])->name('validar-registro');
Route::post('/inicia-sesion',[LoginController::class,'login'])->name('inicia-sesion');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');