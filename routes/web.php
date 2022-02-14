<?php

use App\Http\Controllers\Blogcontroller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rpl', [Blogcontroller::class,'home']);
Route::get('/rpl/tentang', [Blogcontroller::class,'tentang']);
Route::get('/rpl/kontak', [Blogcontroller::class,'kontak']);


