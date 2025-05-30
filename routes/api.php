<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\DestinationController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');




Route::get('/articles', [ArticleController::class, 'index']);

Route::get('/destinaions', [DestinationController::class, 'index']);

Route::get('/events', [EventController::class, 'index']);


Route::get('/video', function () {
    return response()->json([
        'video_url' => 'https://videos.pexels.com/video-files/3571264/3571264-uhd_2560_1440_30fps.mp4'
    ]);
});
