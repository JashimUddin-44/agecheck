<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\agecontroller;

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


Route::get('/',[agecontroller::class,'age']);

Route::post('/',[agecontroller::class,'age'])->middleware('age');

Route::get('/allowed', function(){
    return "Your age allowed";
});