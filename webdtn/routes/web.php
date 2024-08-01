<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('productos.index');
});

Route::get('/ListaProductos', [ProductoController::class, 'index'])->name('listaproductos');
