<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello-world', function () {
    return "Witaj Świecie";
});
// zamianst funkcji anonimowej, przykladowo można użyć motody kontrolera do obsługi ządania /hell-world
// Takie wywolanie wygląda następująco:

//  Route::get('/hello-world', "MojKontrolerHelloWorld@zrobcos");
//  MojKontrolerHelloWorld - to klasa w php
//  A zrobcos to metoda tej klasy 