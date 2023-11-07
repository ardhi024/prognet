<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontakController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
})->name('index');

// Route::get('/form', function () {
//     return view('form');
// });

Route::resource('kontak', KontakController::class);
Route::get('/tampil', function () {
    return view('tampil');
});

// Show the form
// Route::get('/form', 'FormController@showForm');

// Process the form
// Route::resource('/tampil', FormController::class);