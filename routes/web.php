<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chatgpt', [ChatController::class, 'formView']);
Route::post('/chatgpt', [ChatController::class, 'chatGPT'])->name('chatgpt');

 
 
