<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/users', [ApiController::class, 'getAllLaravelUsers']);
Route::get('/users/{id}', [ApiController::class, 'getLaravelUser']);
Route::post('/users', [ApiController::class, 'createLaravelUser']);
Route::delete('/users/{id}', [ApiController::class, 'deleteLaravelUser']);
Route::put('/users/{id}', [ApiController::class, 'updateLaravelUser']);
