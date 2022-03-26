<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UploadController;
use GuzzleHttp\Middleware;

Route::get('upload',[UploadController::class,'uploadForm']); 
Route::post('upload',[UploadController::class,'uploadFile'])->name('upload.uploadFile');
