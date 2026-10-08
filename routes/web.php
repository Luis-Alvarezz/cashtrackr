<?php

use Illuminate\Support\Facades\Route; // * 'Facades' - Funciones internas de Laravel para definir rutas

Route::get('/', function () { // * Méodo estático 'get' para definir una ruta de tipo GET, recibe dos parámetros: la ruta y la función anónima o callback que se ejecutará al acceder a esa ruta
    return view('welcome');
});

// ! Autenticación de usuarios, sintexis CLOUSURE:
Route::get('/auth/register', function () {
   return view('auth.register');
})->name('register');

Route::get('/auth/login', function () {
   return view('auth.login');
})->name('login');