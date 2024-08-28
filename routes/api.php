<?php

use App\Http\Controllers\UsuarioController;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('usuario', [UsuarioController::class, 'store']);

<<<<<<< HEAD
Route::get('/usuario/{id}/find', [UsuarioController::class, 'findById']);

Route::get('/usuario', [UsuarioController::class,'index']);

Route::get('/usuario/search', [UsuarioController::class, 'searchByName']);

Route::get('/usuario/search/email', [UsuarioController::class, 'searchByEmail']);

Route::delete('/usuario/{id}/delete', [UsuarioController::class, 'delete']);

Route::put('/usuario',[UsuarioController::class, 'update']);
=======
Route::get('usuario/{id}/find', [UsuarioController::class, 'findById']);

Route::get('usuario', [UsuarioController::class, 'index']);

Route::get('usuario/search', [UsuarioController::class, 'searchByName']);

Route::get('usuario/search/email', [UsuarioController::class, 'searchByEmail']);

Route::delete('usuario/{id}/delete', [UsuarioController::class, 'delete']);

Route::put('usuario', [UsuarioController::class, 'update']);



>>>>>>> 7264244172f249599a309deb2589bc6d6fdc7ce1
