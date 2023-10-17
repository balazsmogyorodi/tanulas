<?php

use App\Http\Controllers\LessonsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/Lessons',[LessonsController::class,'index']);
Route::get('/api/Lessons/{id}', [LessonsController::class,'show']);
Route::post('/api/Lessons', [LessonsController::class, "store"]);
Route::put('/api/Lessons/{id}',[LessonsController::class, 'update']);
Route::delete('/api/Lessons/{id}', [LessonsController::class, 'destroy']);
Route::get('/api/Lessons', [LessonsController::class, 'index']);
Route::get('/Lessons/list', [LessonsController::class,'listView']);
Route::get('/Lessons/new', [LessonsController::class, "newView"]);
Route::get('/Lessons/edit/{id}', [LessonsController::class, "editView"]);
