<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('posts', PostController::class);
Route::get('posts', [PostController::class,'index']);
Route::post('posts', [PostController::class,'store']);


Route::middleware('api')->group(function () {
    // Retrieve a single post
    Route::get('/posts/{id}', [PostController::class, 'show']);

    // Update a blog post
    Route::put('/posts/{id}', [PostController::class, 'update']);

    // Delete a blog post
    Route::delete('/posts/{id}', [PostController::class, 'destroy']);
});