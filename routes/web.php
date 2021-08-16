<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadDataController;
use App\Http\Controllers\ShowDataController;

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

Route::get('/UploadPage',[UploadDataController::class,'index']);
Route::post('/UploadData',[UploadDataController::class,'store']);

// ******display*****
Route::get('/home',[ShowDataController::class,'show']);
Route::view('home', 'home');
Route::post('home',[UploadDataController::class,'login']);

