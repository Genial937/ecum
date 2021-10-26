<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramsController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ABoutController;
use App\Http\Controllers\YouthEmpowermentController;
use App\Http\Controllers\WomenEmpowermentController;
use App\Http\Controllers\ReligiousWorkshopController;
use App\Http\Controllers\EconomicEmpowermentController;
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

Route::resource('/', HomeController::class);
Route::resource('about', AboutController::class);
Route::resource('civic-education', ProgramsController::class);
Route::get('/our-partners', [GeneralController::class, 'index']);
Route::get('/testimonials', [GeneralController::class, 'create']);
Route::get('/gallery', [GeneralController::class, 'show']);
Route::get('/youth-empowerment', [YouthEmpowermentController::class, 'index']);
Route::get('/women-empowerment', [WomenEmpowermentController::class, 'index']);
Route::get('/religious-workshops', [ReligiousWorkshopController::class, 'index']);
Route::get('/economic-empowerment', [EconomicEmpowermentController::class, 'index']);