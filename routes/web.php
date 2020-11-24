<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;
use Illuminate\Support\Facades\Auth;

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
  return view('auth/login');
});


/*CRUD*/

Route::get('Empleados', [EmpleadosController::class, 'index'])->name('empleado.index');
Route::get('nuevoEmpleado', [EmpleadosController::class, 'create'])->name('empleado.create');

Route::post('registrarEmpleados', [EmpleadosController::class, 'registrar'])->name('empleado.registrar');
Route::get('editar{entity}', [EmpleadosController::class, 'editar'])->name('empleado.editar');
Route::delete('eliminar/{empleados}', [EmpleadosController::class, 'eliminar'])->name('empleado.eliminar');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
