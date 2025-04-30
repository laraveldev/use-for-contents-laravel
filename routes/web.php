<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GenereController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);
Route::resource('authors', AuthorController::class);
Route::get('/categories', [CategoryController::class, 'index']);
//Route::post('/contents/yarat', [ContentController::class, 'store']);
//Route::get('/contents/create', [ContentController::class, 'create']);
//Route::get('/contents', [ContentController::class, 'index']);
//Route::get('/contents/{content}', [ContentController::class, 'show']);
Route::get('/generes', [GenereController::class, 'index']);

Route::resource('/contents', ContentController::class);

Route::get('/admin/contents', [ContentController::class, 'adminIndex']);;