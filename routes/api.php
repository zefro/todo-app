<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::controller(TodoController::class)->group(function () {
    Route::get('/index','index')->name('index.todo');
    Route::post('/store','store')->name('store.todo');
    Route::put('/update/{todo}', 'update')->name('update.todo');
    Route::delete('/delete/{todo}','destroy')->name('delete.todo');
});
