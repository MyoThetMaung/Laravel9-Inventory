<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::controller(DemoController::class)->group(function(){
    Route::get('home','home')->name('home')->middleware('AgeCheck');
    Route::get('contact','contact')->name('contact');
});
