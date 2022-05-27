<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;


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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/', 'index');

/*** Clientes ***/
Route::get('/clientes', [ClienteController::class, 'index']);
Route::get('/clientes/crear', [ClienteController::class, 'create']);
Route::get('/clientes/{id}/editar', [ClienteController::class, 'edit']);
Route::post('/clientes/{id}/editar', [ClienteController::class, 'update']);
Route::post('/clientes/nuevo', [ClienteController::class, 'store']);
Route::get('/clientes/{id}/eliminar', [ClienteController::class, 'destroy']);

/*** Categorias ***/
Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/categorias/crear', [CategoriaController::class, 'create']);
Route::get('/categorias/{id}/editar', [CategoriaController::class, 'edit']);
Route::post('/categorias/{id}/editar', [CategoriaController::class, 'update']);
Route::post('/categorias/nuevo', [CategoriaController::class, 'store']);
Route::get('/categorias/{id}/eliminar', [CategoriaController::class, 'destroy']);

/*** Empleados ***/
Route::get('/empleados', [EmpleadoController::class, 'index']);
Route::get('/empleados/crear', [EmpleadoController::class, 'create']);
Route::get('/empleados/{id}/editar', [EmpleadoController::class, 'edit']);
Route::post('/empleados/{id}/editar', [EmpleadoController::class, 'update']);
Route::post('/empleados/nuevo', [EmpleadoController::class, 'store']);
Route::get('/empleados/{id}/eliminar', [EmpleadoController::class, 'destroy']);

/*** Pedidos ***/
Route::get('/pedidos', [PedidoController::class, 'index']);
Route::get('/pedidos/crear', [PedidoController::class, 'create']);
Route::get('/pedidos/{id}/editar', [PedidoController::class, 'edit']);
Route::post('/pedidos/{id}/editar', [PedidoController::class, 'update']);
Route::post('/pedidos/nuevo', [PedidoController::class, 'store']);
Route::get('/pedidos/{id}/eliminar', [PedidoController::class, 'destroy']);

/*** Productos ***/
Route::get('/productos', [ProductoController::class, 'index']);
Route::get('/productos/crear', [ProductoController::class, 'create']);
Route::get('/productos/{id}/editar', [ProductoController::class, 'edit']);
Route::post('/productos/{id}/editar', [ProductoController::class, 'update']);
Route::post('/productos/nuevo', [ProductoController::class, 'store']);
Route::get('/productos/{id}/eliminar', [ProductoController::class, 'destroy']);



/*** Acceso ***/

Route::view('/login', 'acceso.login');

Route::post('/login', [UserController::class, 'login']);

/***/
