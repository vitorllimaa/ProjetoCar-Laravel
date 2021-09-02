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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/create', [EventController::class, 'create']);

Route::post('/create/submit', [EventController::class, 'store']);

Route::get('/edit/{id}', [EventController::class, 'edit']);

Route::put('/edit/update/{id}', [EventController::class, 'update']);

Route::delete('/{id}', [EventController::class, 'destroy']);

