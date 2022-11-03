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

Route::get('/', [App\Http\Controllers\MainController::class, 'index']);

Auth::routes();

Route::prefix('managequote')->name('managequote.')->middleware('auth')->group(function() {
    Route::get('/', [App\Http\Controllers\QuoteController::class, 'index'])->name('home');
  	Route::get('/edit/{id}', [App\Http\Controllers\QuoteController::class, 'show'])->name('edit');

    //Route::get('/managequote/{id}', [App\Http\Controllers\Admin\ArticleController::class, 'show']); //Вывести страницу для редактирование записи
 

});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
