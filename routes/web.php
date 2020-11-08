<?php

use Illuminate\Support\Facades\Route;

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











//////con vistas
Route::get('/', function () {
    return view('principal');
});
Route::get('hotel/historia', function () {
    return view('hotel.Historia');
});
Route::get('hotel/mision', function () {
    return view('hotel.mision');
});
Route::get('hotel/ubicacion', function () {
    return view('hotel.ubicacion');
});
Route::get('servicios/habitaciones', function () {
    return view('servicios.habitaciones');
});
Route::get('servicios/eventos/{id}', function ($id) {
    return view('servicios.eventos', array ('id'=>$id));
});
Route::get('reserva', function () {
    return view('reservas.reserva');
});
Route::get('contactenos', function () {
    return view('Contacto');
});


