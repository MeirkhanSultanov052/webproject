<?php

use Illuminate\Support\Facades\Route;

use App\Models\Consumer;
use App\Models\Request;
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
    return view('first');
});

Route::get('/second', function () {
    return view('second');
});

Route::get('/third', function () {
    return view('third');
});

