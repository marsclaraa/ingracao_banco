<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//post: enviar algo, cadastrar algo novo
Route::post('/usuario',[UsuarioController::class, 'store']);
