<?php

use App\Http\Controllers\Administrador\UserController;
use Illuminate\Support\Facades\Route;

//Routes for users CRUD module administrativo
Route::resource('users',UserController::class)->names('administrador.users');
//Route::resource('users',UserController::class)->names('administrador.roles');

?>
