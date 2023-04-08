<?php


use App\Controllers\HomeController;
use Core\RouterService as Route;


Route::get('/', [HomeController::class, 'home']);
Route::get('home', [HomeController::class, 'index']);
Route::get('home/{username}', [HomeController::class, 'user']);
Route::get('form', [HomeController::class, 'form']);
Route::post('form', [HomeController::class, 'acceptForm']);
