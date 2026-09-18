<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

Route::get('/', function () {
    return redirect('/games');
});

Route::get('/games', [GameController::class, 'index']);
Route::get('/games/create', [GameController::class, 'create']);
Route::post('/games/store', [GameController::class, 'store']);
Route::get('/games/show/{id}', [GameController::class, 'show']);
Route::get('/games/edit/{id}', [GameController::class, 'edit']);
Route::post('/games/update/{id}', [GameController::class, 'update']);
Route::post('/games/destroy/{id}', [GameController::class, 'destroy']);