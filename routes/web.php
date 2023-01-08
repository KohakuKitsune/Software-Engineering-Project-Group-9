<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DataController;

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

Route::get('/', [Controller::class,'home'])->name('home');

Route::get('about', [Controller::class,'about'])->name('about');

Route::get('analysis', [Controller::class,'analysis'])->name('analysis');

Route::get('time', [Controller::class,'time'])->name('time');
