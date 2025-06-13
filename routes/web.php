<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotionController;
use App\Http\Controllers\LearningRecordController;

Route::get('/', function () {
    return 'Laravelサーバー起動中！';
});

// 🕰 旧API: 後方互換用
Route::post('/legacy/add-notion', [NotionController::class, 'addRecord']);

// ✅ 新API: 現行ルート
Route::post('/add-learning', [LearningRecordController::class, 'addLearningRecord']);

