<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Backend\TopController;
use App\Http\Controllers\Backend\newInformationController;
use App\Http\Controllers\Backend\ConstructionController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 //User route start
 Route::group(['prefix' => 'users'], function(){
    Route::get('/',[RegisterController::class, 'index'])->name('userShow');
    Route::post('/store',[RegisterController::class,'store'])->name('userStore');
    Route::post('/update/{user:id}',[RegisterController::class,'update'])->name('userUpdate');
    Route::post('/delete/{user:id}',[RegisterController::class,'destroy'])->name('userDelete');
});

//New Information route start
Route::group(['prefix' => 'newinfo'], function(){
    Route::get('/',[newInformationController::class, 'index'])->name('infoShow');
    Route::post('/store',[newInformationController::class,'store'])->name('infoStore');
    Route::post('/update/{newInfo:id}',[newInformationController::class,'update'])->name('infoUpdate');
    Route::post('/delete/{newInfo:id}',[newInformationController::class,'destroy'])->name('infoDelete');
});


//Top Information route start
Route::group(['prefix' => 'top'], function(){
    Route::get('/',[TopController::class, 'index'])->name('topShow');
    Route::post('/store',[TopController::class,'store'])->name('topStore');
    Route::post('/update/{top:id}',[TopController::class,'update'])->name('topUpdate');
    Route::post('/delete/{top:id}',[TopController::class,'destroy'])->name('topDelete');
});


//news Information route start
Route::group(['prefix' => 'news'], function(){
    Route::get('/',[newsController::class, 'index'])->name('newsShow');
    Route::post('/store',[newsController::class,'store'])->name('newsStore');
    Route::post('/update/{news:id}',[newsController::class,'update'])->name('newsUpdate');
    Route::post('/delete/{news:id}',[newsController::class,'destroy'])->name('newsDelete');
});

//Construction Information route start
Route::group(['prefix' => 'news'], function(){
    Route::get('/',[ConstructionController::class, 'index'])->name('constructionShow');
    Route::post('/store',[ConstructionController::class,'store'])->name('constructionStore');
    Route::post('/update/{construction:id}',[ConstructionController::class,'update'])->name('constructionUpdate');
    Route::post('/delete/{construction:id}',[ConstructionController::class,'destroy'])->name('constructionDelete');
});