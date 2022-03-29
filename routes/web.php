<?php

use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

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


Route::get('file-upload',[UploadController::class,'fileUploadindex'])->name('file.upload');
Route::post('file-upload',[UploadController::class,'fileUploadPost'])->name('file.upload.post');
