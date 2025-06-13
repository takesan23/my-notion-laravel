<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotionController;
use App\Http\Controllers\NotionTokenController;


// 🕰 旧API: 学習用で残す
Route::post('/add-notion', [NotionController::class, 'addRecord']);

// ✅ 新API: 現行ルート
Route::post('/save-token', [NotionTokenController::class, 'saveToken']);

Route::get('/get-token', [NotionTokenController::class, 'getToken']);