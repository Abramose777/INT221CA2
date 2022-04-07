<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MailController;



Route::get('/send-email',[Mailcontroller::class,'sendEmail']);
 
 
