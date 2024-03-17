<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgettoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AttivitaController;
use App\Http\Controllers\AttivitaController1;

Route::resource('/progetto', ProgettoController::class);
Route::resource('/users', UserController::class);

//Route::delete('/attivita/{attivita}', [AttivitaController::class, 'destroy'])->name('attivita.destroy');
Route::get('/attivita/{attivita}', [AttivitaController::class, 'show'])->name('attivita.show');
//Route::get('/nuovaattivita/{id}',[AttivitaController::class, 'nuovaattivita'])->name('nuovaattivita');
//Route::post('/salvaattivita',[AttivitaController::class, 'store'])->name('salvaattivita');
//Route::get('/modificaattivita/{attivita}',[AttivitaController::class, 'edit'])->name('modificaattivita');
//Route::put('/attivita/{attivita}', [AttivitaController::class, 'update'])->name('attivita.update');
