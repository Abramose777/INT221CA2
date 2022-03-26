<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LoopsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UriController;
use App\Http\Controllers\UserRegistration;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SumController;
use App\Http\Controllers\UploadController;
use GuzzleHttp\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test1', function() {
    return 'welcome';
});

Route::get('/test2', function() {
    return view('test2',['name'=>'Abramose Khawas']);
})->middleware('first');

Route::get('/contact', function() {
    return view('contact',['name'=>'Lalchuuanawma']);
});


//controllers
Route::get('/first',[TestController::class,'index']);
Route::get('/second ',[GuestController::class,'index']);

Route::get('loops',[LoopsController::class, 'index']);
//Middleware



//advanced routing
Route::get('/user/profile', [ProfileController::class,'show'])->name('profile');
Route::get('verifyuser', [ProfileController::class,'verifyuser']);

Route::get('/user/{id}/{name}/profile', function ($id,$name) {
   return 'I am user '. $name.' and my ID is : '.$id;
})->name('someprofile');
Route::get('checkprofile', [ProfileController::class,'checkprofile']);

Route::get('checkprofile1/{id}/{name}', [ProfileController::class,'checkprofile1']);



//Route prefix
Route::prefix('admin')->group(function () {
    Route::get('/custos1', function () {
        // Matches The "/admin/custos1" URL
        echo 'Hey custo1';
    });
    Route::get('/custos2', function () {
        // Matches The "/admin/custos2" URL
        echo 'Hey custo2';
    });
    Route::get('/custos3', function () {
        // Matches The "/admin/custos3" URL
        echo 'Hey custo3';
    });
 });
 
 //Route Name prefix
 Route::name('admin.')->group(function () {
    Route::get('/use', function () {
        // Route assigned name "admin.users"...
        return "Hey user";
    })->name('users');
 });
 Route::get('adminredirect',function(){
    return redirect()->route('admin.users');
 });
 
 /*----------------------------------------------------------------------------------------*/
 
 //Query parameters
 Route::get('/aboutme', function(){
    $name=request('name');
    $id=request('id');
    return $name. " ". $id;
 });
 

 //10th march ...request pptx downloaded
 //Route::get('/foo/bar','UriController@index');
 Route::get('/foo/bar',[UriController::class,'index'])->name('foo');



 Route::get('/register',function() {    
    return view('register');
 });
 //Route::post('/user/register',array('uses'=>'UserRegistration@postRegister'));
 Route::post('/user/register',[UserRegistration::class,'postRegister']);
 

//COOKIE
Route::get('/cookie/set','CookieController@setCookie');
Route::get('/cookie/get','CookieController@getCookie');
Route::get('/cookie/remove','CookieController@deleteCookie');



//sending email'(93f34d98)
Route::get('/send-email',[Mailcontroller::class,'sendEmail']);
 
 
// 24th march ,22
use Collective\Html\HtmlServiceProvider;

Route::get('/form',function() {
   return view('form');
});


Route::get('/sum',function() {    //for ca2 q1 ans
    return view('sum');
 });
 Route::post('/user/sum',[SumController::class,'postSum']);



Route::get('upload',[UploadController::class,'uploadForm']);//for ca2 q2
Route::post('upload',[UploadController::class,'uploadFile'])->name('upload.uploadFile');

