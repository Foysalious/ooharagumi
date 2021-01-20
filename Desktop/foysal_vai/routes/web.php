<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

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