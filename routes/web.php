<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/insertar',[LoginController::class,'insertar']);
    
// // });

// Route::post('users/{id}', function ($id) {
//     return 'Hola';
// });


Route::resource('registro', LoginController::class);
// Route::post('buscar', LoginController::class,'buscar')->name('buscar');


