<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AccomodationsController;
use App\Http\Controllers\AdventuresController;
use App\Http\Controllers\HistoricsController;
use App\Http\Controllers\FoodsController;

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
Route::get('/services/accomodations', [AccomodationsController::class, 'show']);
Route::get('/services/adventures', [AdventuresController::class, 'show']);
Route::get('/services/foods', [FoodsController::class, 'show']);
Route::get('/services/historics', [HistoricsController::class, 'show']);

