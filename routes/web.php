<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotionController;

Route::post('/add-notion', [NotionController::class, 'addRecord']);
