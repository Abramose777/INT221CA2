<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SumController;

use GuzzleHttp\Middleware;

Route::get('/sum',function() {    
    return view('sum');
 });
 Route::post('/user/sum',[SumController::class,'postSum']);
