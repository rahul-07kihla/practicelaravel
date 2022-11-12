<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JsonController;
use App\Http\Controllers\CKeditorController;
use App\Http\Controllers\PDFController;

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

Route::get('download-json-file',[JsonController::class,'index']);

//ckeditor file upload
Route::get('ckeditor',[CKeditorController::class,'index']);
Route::post('ckeditor/upload',[CKeditorController::class,'upload'])->name('ckeditor.upload');

//chart in pdf
Route::get('preview', [PDFController::class,'preview']);
Route::get('download', [PDFController::class,'download'])->name('download');
