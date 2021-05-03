<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AccomodationsController;
use App\Http\Controllers\AdventuresController;
use App\Http\Controllers\HistoricsController;
use App\Http\Controllers\FoodsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;

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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/map', [PageController::class, 'map']);
Route::resource('/services/accomodations', AccomodationsController::class);
Route::resource('/services/adventures', AdventuresController::class);
Route::resource('/services/foods', FoodsController::class);
Route::resource('/services/historics', HistoricsController::class);
Route::get('/profile/{name}', [ProfileController::class, 'index']);
Route::resource('/profile', ProfileController::class);
Route::resource('/admin', AdminController::class);

