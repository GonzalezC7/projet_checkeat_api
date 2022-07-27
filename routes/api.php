<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\RestaurateurController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::resources('/home', MenuController::class);
Route::middleware('auth:sanctum')->resource('/restaurants', RestaurantController::class);
// Route::get('/restaurants', [RestaurantController::class, "index"]);

// Route::post('/restaurant', [RestaurantController::class , 'store']);

Route::middleware('auth:sanctum')->get('/restaurateurs', [RestaurateurController::class, 'profile'])->name("restaurateurs.profile");
Route::post('/restaurateurs', [RestaurateurController::class, 'store'])->name("restaurateurs.store");
Route::middleware('auth:sanctum')->put('/restaurateurs', [RestaurateurController::class, 'update'])->name("restaurateurs.update");
Route::middleware('auth:sanctum')->delete('/restaurateurs', [RestaurateurController::class, 'destroy'])->name("restaurateurs.destroy");

Route::resource('/menu', MenuController::class);

// Route::get('/menu', [MenuController::class, "index"]);

// Route::post('/restaurateurs', [RestaurateurController::class, 'store'])->name('restaurateurs.store');

// routes/api.php

// routes/api.php

Route::post('/login', [RestaurateurController::class, 'login']);

Route::middleware('auth:sanctum')->get('/logout', [RestaurateurController::class, 'logout']);
