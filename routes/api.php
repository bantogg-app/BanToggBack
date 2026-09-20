<?php

use App\Http\Controllers\HistoriqueController;
use App\Http\Controllers\SuggestionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/suggestion', [SuggestionController::class, 'suggest']);
Route::post('/historique', [HistoriqueController::class, 'store']);
Route::get('/historique', [HistoriqueController::class, 'index']);
Route::delete('/historique/{id}', [HistoriqueController::class, 'destroy']);