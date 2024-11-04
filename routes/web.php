<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
#form
Route::get('/alumnos/create', [AlumnoController::class, 'create'])->name('alumnos.create');
#guardar datos form
Route::post('/alumnos', [AlumnoController::class, 'store'])->name('alumnos.store');
#Listado de datos
Route::get('/', [AlumnoController::class, 'index'])->name('alumnos.index');

Route::get('/test', function () {
    return 'Ruta de prueba';
});
