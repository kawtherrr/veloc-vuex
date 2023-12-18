<?php

use Laravel\Ui\AuthRouteMethods;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\GoogleAuthController;


Route::get('/', [PageController::class,'index'])
->name('application');

// Route::mixin(new AuthRouteMethods());
// Route::auth(['verify' => true]);

Route::get('/home',[PageController::class,'index']);

Route::get('/about',[PageController::class,'about']);





Route::get('/auth/google/callback', [PageController::class,'googleCallback']);

Route::get('/verify_email/{verification_code}',[PageController::class,'googleCallback'])->name('verify_email');

Route::group(['middleware' => 'auth:sanctum'], function(){
     Route::get('/agency/dashboard', [PageController::class,'DashboardIndex']);
     });

Route::group(['middleware' => ['web']], function () {
    Route::get('/login', [PageController::class,'login'])->name('login');
    Route::get('/signup', [PageController::class,'signup']);
});

Route::get('/{pathMatch}', [PageController::class,'notfound']); // this one must always be at the bottom of the routes

// Route::get('/home/{pathMatch}', [PageController::class,'notfound'] );  // need to look for  better ways of handling this kinda error 