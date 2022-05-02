<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
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

Route::get('/login', [logincontroller::class, 'login_index']);
Route::get('/jquery',[logincontroller::class,'test_jquery']);
