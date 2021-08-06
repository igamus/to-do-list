<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('todos', [ToDoController::class, 'index']);

Route::post('todo/store', [ToDoController::class, 'store']);

Route::post('todo/update/{id}', [ToDoController::class, 'update']);

Route::get('todo/delete/{id}', [ToDoController::class, 'destroy']);
