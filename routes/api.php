<?php

use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('teacher')->group(function(){
    Route::get('index', [TeacherController::class, 'index']);
    Route::post('store', [TeacherController::class, 'store']);
    Route::put('update/{id}', [TeacherController::class, 'update']);
    Route::get('show/{id}', [TeacherController::class, 'show']);
    Route::delete('destroy/{id}', [TeacherController::class, 'destroy']);
});
Route::prefix('course')->group(function(){
    Route::get('index', [CourseController::class, 'index']);
    Route::post('store', [CourseController::class, 'store']);
    Route::put('update/{id}', [CourseController::class, 'update']);
    Route::get('show/{id}', [CourseController::class, 'show']);
    Route::delete('destroy/{id}', [CourseController::class, 'destroy']);
});

