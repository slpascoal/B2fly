<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Rota para registro de usuários
Route::post('/register', [AuthController::class, 'register']);
