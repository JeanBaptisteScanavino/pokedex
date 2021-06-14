<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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


Route::get(
    '/',
    [MainController::class, 'home']
)->name('home');

Route::get(
    '/pokemon/{name}',
    [MainController::class, 'show']
)->name('pokemon_detail');
Route::get(
    '/types/{type?}',
    [MainController::class, 'types']
)->name('types');