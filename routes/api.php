<?php

use App\Http\Controllers\Api\LetterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [LetterController::class, 'index'])->name('index');