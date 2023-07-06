<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoanController;

// koniecznie trzeba dodac powyższą scieżkę do controllera 
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
// Route::get('/hello-world', function () {
//     return "Witaj Świecie";
// });
// zamianst funkcji anonimowej, przykladowo można użyć motody kontrolera do obsługi ządania /hell-world
// Takie wywolanie wygląda następująco:

//  Route::get('/hello-world', "MojKontrolerHelloWorld@zrobcos");
//  MojKontrolerHelloWorld - to klasa w php
//  A zrobcos to metoda tej klasy 

// Route::get('/hello/{name?}/{age?}', function (String $name = "z nieznanych krain", int $age = null) {
//     echo "Witaj przybyszu ".$name;
//     if(is_null($age)) {
//     echo " nie podałeś swojego wieku";}
//     else {
//     echo " według podanych danych masz $age lat";}
// })->name('powitanie');

//Parametry żądania podajemy w nawiasach klamrowych i możemy przekazać je do funkcji obsugującej żadanie routingu

// Laravel uzywa 6-ciu tras htttp to : GET, POST, PUT, PATCH, DELETE I OPTIONS
// Oraz wlasne typy żądań jak ::any

// Znak "?" po parametrze czyni go opcjonalnym 
// Po zadeklarowaniu trasy routing ->name('powitanie'); oznacza zdefiniowanie unikatowej dla niego nazwy
// Takie nazwy można potem używać bespośrednio w kodzie stosując przekierowanie 
// redirect()->route('powitanie'); 

// używanie takich przekierowań ułatwia zarządzanie trasami 

// Route::prefix('hello')->group(function() {
//     Route::get('/world', function () {
//         return "Witaj Świecie";
//     });
//     Route::get('/{name?}/{age?}', function (String $name = "z nieznanych krain", int $age = null) {
//         echo "Witaj przybyszu ".$name;
//         if(is_null($age)) {
//         echo " nie podałeś swojego wieku";}
//         else {
//         echo " według podanych danych masz $age lat";}
//     })->name('powitanie');
// });

// Użycie prefixu Route:prefix w celu grupowania tras routingu 

// Route::redirect('/hello/world', '/hello/{name?}/{age?}', 301  );

// Sposób na przekierowanie trasy routing stosując statyczną metodę klasy Route, przekazane parametry to trasy routingu jakie mając być wyswietlone
// Powyższe przekierowanie po wpisaniu na pasku wyszukiwania /hello/world przekieruje nasze żądanie na /hello/{name?}/{$age?} i wyswietli treść strony 
// metoda przyjmuje również trzeci argument, który  jest kodem dopowiedzi np,404

//-------------------------------------------------------------------------------

//Powiązanie modelu z parametrem przykład

// Route::get('api/books/{book}', function (App\Book $book) {
//     return $book->title;
// });

// - tworzy żądanie get z identyfikatorem
// - tworzy funkcje obsługującą żadanie (fukacja z modelem jako parametr)
// - na podstawie identyfikatora wyszukuje w bazie rekord a nastepnie udostepnia go w formie obiektu

// Route::get('books', [App\Http\Controllers\BookController::class, 'index']);


Route::resource('books', BookController::class);
Route::get('books/{id}/delete', [App\Http\Controllers\BookController::class, 'destroy']); // poprawne przekazanie żądania http do kontrolera

                                                                                          //Route::get('/books/{id}/delete', 'BookController@destroy')  -> NIE DZIAŁA nie wiedzieć czemu
Route::resource('loans', LoanController::class);


//Route::resource nie przyjmje tablicy jako parametru

// Powyższy elemet routingu obsluguje wszytkie typy żądań za pomocą motod zdefiniowanych w klasie
// wiecej informacji w dokumentacji kontrolerow https://laravel.com/docs/10.x/controllers

    // Ogólnie  routing to przełożenie adresów URL (zapytan get, przetwarzanie formularzy-post itp, jakaś interakcje w widoku strony) na wykonywany kod;

// Route::get('list', function () {
//     return View::make('Myview/template');
// });



// Route::get('onlyjson', function () {

// })->middleware('isjson');

// Route::group(['middleware' => 'isjson'], function () {
//     //Route::get()
// });