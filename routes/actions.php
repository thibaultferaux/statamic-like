<?php

use Illuminate\Support\Facades\Route;
use Thibaultferaux\Like\Http\Controllers\LikeController;

Route::name('like.')->group(function() {
    Route::post('/create', [LikeController::class, 'store'])->name('store');
});
