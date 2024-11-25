<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\GreetingController;
use App\Http\Controllers\BookController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [BlogController::class, 'index']);

// Route::get('/detail', [DetailController::class, 'show']);

// Route::get('/hello', function(){
//     return 'hello, world';
// });

// Route::get('/greet/{name}', function($name) {
//     return "hello, $name";
// });
// Route::get('/sum/{a}/{b}', function($a, $b){
//     return "the sum of $a and $b is". ($a + $b);
// });

// Route::get ('/hello', [GreetingController::class, 'hello']);
// Route::get ('/greet/{name}', [GreetingController::class, 'greet']);
// Route::get ('/sum/{a}/{b}', [GreetingController::class, 'sum']);

// Route::get('/books', [BookController::class, 'index'])->name('book.index');
// Route::get('/books/{id}', [BookController::class, 'show'])->name('book.show');

// Route::get('/greeting', [GreetingController::class, 'index']);

Route::resource('barang', BarangController::class);

Route::