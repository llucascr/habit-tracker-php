<?php

// MVC
// Model -> Banco de dados
// View -> Interface com o usuário
// Controller -> Lógica

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


// No meu controller SiteController quero que voce chame o metodo index
Route::get('/', [SiteController::class, 'index']);