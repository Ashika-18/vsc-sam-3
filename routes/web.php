<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/tweet", \App\Http\Controllers\Tweet\IndexController::class)->name("tweet.index");

Route::post("/tweet/create", App\Http\Controllers\Tweet\CreateController::class)->name("tweet.create");

Route::get("/tweet/update/{tweetId}", \App\Http\Controllers\Tweet\Update\IndexController::class)->name("tweet.update.index")->wehre("tweetId", "[0-9]+");

Route::put("/tweet/update/{tweetId}", \App\Http\Controllers\Tweet\Update\PutController::class)->name("tweet.update.put")->wehre("tweetId", "[0-9]+");