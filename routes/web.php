<?php

use App\Http\Controllers\studentcontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::POST('insertData',[studentcontroller::class,'insert']);
Route::get('/',[studentcontroller::class, 'show']);
Route::view('update','updatestd');
Route::get('updateform',[studentcontroller::class, 'update']);
Route::get('updatedata',[studentcontroller::class,'Edit']);
