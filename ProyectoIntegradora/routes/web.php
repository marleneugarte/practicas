<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hola', function () {
    return 'Hola, soy Laravel — y esta respuesta viajó por una ruta.';
});
Route::get('/inicio', function () {
    $productos = ['Arroz', 'Azúcar', 'Fideo'];
    return view('inicio', ['productos' => $productos]);   // ...y viaja a la vista.
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/promociones', function () {
    return view('promociones');
});
Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/pedidos', function () {
    return view('pedidos');
});
Route::get('/contacto', function () {
    return view('contacto');
});
//rutas de la jugueteria
Route::get('/jinicio', function () {
    return view('jinicio');
});
