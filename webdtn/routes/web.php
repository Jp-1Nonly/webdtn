<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('productos.index');
});

Route::get('/ListaProductos', [ProductoController::class, 'index'])->name('listaproductos');

Route::post('/EliminarProductos/{id}', [ProductoController::class, 'destroy'])->name('eliminarproductos');

Route::get('/addProductos', [ProductoController::class, 'create'])->name('addproductos');

Route::post('/addingProducto', [ProductoController::class, 'store'])->name('addingproductos');
