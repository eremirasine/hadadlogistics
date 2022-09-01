<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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


Route::get('/',[HomeController::class,'index']);


Route::get('/home',[HomeController::class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_delivery_team',[AdminController::class,'addteam']);

Route::post('/upload_teamM',[AdminController::class,'upload']);

Route::post('/quote',[HomeController::class,'quote']);


Route::get('/myrequest',[HomeController::class,'myrequest']);

Route::get('/cancel_request/{id}',[HomeController::class,'cancel_request']);

Route::get('/showrequest',[AdminController::class,'showrequest']);

Route::get('/approved/{id}',[AdminController::class,'approved']);

Route::get('/complete/{id}',[AdminController::class,'complete']);

Route::get('/decline/{id}',[AdminController::class,'decline']);

Route::get('/showteammembers',[AdminController::class,'showteammembers']);

Route::get('/delete_team_member/{id}',[AdminController::class,'deleteteammembers']);

Route::get('/updateteammember/{id}',[AdminController::class,'updateteammember']);

