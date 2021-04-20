<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsumerController;
use App\Http\Controllers\RequestController;

use App\Models\Consumer;
use App\Models\Requestt;
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

Route::get('consumer/create' , function(){
    return view('consumers.create');
});
Route::post('consumer/create' , [ConsumerController::class , 'store']) -> name('add-consumer');

Route::get('/consumers' , [ConsumerController::class , 'index'])->name('consumers');

Route::get('request/create' , function(){
    return view('requestt.create');
});
Route::post('request/create' , [RequestController::class , 'store']) -> name('add-request');

Route::get('/requests' , [RequestController::class , 'index'])->name('requests');