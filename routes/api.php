<?php

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\WilayaController;
use App\Http\Controllers\GoogleAuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('auth/google',[GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/callback',[GoogleAuthController::class, 'callbackGoogle']);
Route::get('/verify_email/{verification_code}',[AuthController::class,'verify_email']);

Route::post('/checksignup',[AuthController::class,'signup']);
Route::post('/signupWithGoogle',[AuthController::class,'signupWithGoogle']);

Route::post('/checkemails/{email}',[AuthController::class,'ifEmailExits']);
Route::post('/checkagencies/{agency_name}',[AuthController::class,'ifAgencyExists']);
Route::post('/sendemail',[AuthController::class,'sendEmail']);
Route::post('/resendemail/{email}',[AuthController::class,'resendEmail']);

Route::get('/states',[WilayaController::class,'allWilaya']);
Route::get('/cities/{id}',[WilayaController::class,'allCities']);

Route::post('/checklogin',[AuthController::class,'login']);


Route::post('/logout', [AuthController::class,'logout']);
Route::group(['middleware' => 'auth:sanctum'], function(){
    
    Route::get('/agency/dashboard', [PageController::class,'DashboardIndex']);
    Route::post('/allvehicles/{agency_id}', [AgencyController::class,'getAllVehicles']);
    Route::post('/getUser',[AuthController::class,'currentUser']);
    Route::post('/getRendezvous', [AgencyController::class,'getRendezvous']);

});


Route::post('/updateWarningStatus/{agency_name}',[AgencyController::class,'updateWarning']);
Route::post('/checkWarningStatus/{agency_name}',[AgencyController::class,'checkWarning']);

// Route::get('auth/google/callback',[GoogleAuthController::class, 'callbackGoogle']);