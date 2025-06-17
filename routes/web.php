<?php

use App\Http\Controllers\PageController;

use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage']);

Route::get('/detail/{id}', [PageController::class, 'flights']);
Route::get('/contact', [PageController::class, 'contact']);
