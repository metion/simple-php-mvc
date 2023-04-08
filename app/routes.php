<?php


use App\Controllers\HomeController;
use App\Controllers\SliderController;
use Core\RouterService as Route;


Route::get('/', [HomeController::class, 'home']);
Route::get('home', [HomeController::class, 'index']);
Route::get('home/{username}', [HomeController::class, 'user']);
Route::get('form', [HomeController::class, 'form']);
Route::post('form', [HomeController::class, 'acceptForm']);
Route::get('slider-add', function () {
    return view('slider/add');
});
Route::post('slider-add', [SliderController::class, 'store']);
Route::get('sliders', [SliderController::class, 'sliders']);
