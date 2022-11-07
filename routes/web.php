<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/tweet", \App\Http\Controllers\Tweet\IndexController::class)->name("tweet.index");