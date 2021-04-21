<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsumerController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\MailController;

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

Route::get('/main/{lang}', function($lang) {
    App::setlocale($lang);
    return view('first');
});
/*
Route::get('/second', function () {
    return view('second');
});

Route::get('/third', function () {
    return view('third');
});
*/

Route::get('/consumers/{lang}', [ConsumerController::class, 'index']) -> name('consumers');

Route::get('/consumer/create/{lang}', function($lang) {
    App::setlocale($lang);
    return view('consumers.create');
});
Route::post('/consumer/create/{lang}', [ConsumerController::class, 'store']) -> name('add-consumer');


Route::get('/requests/{lang}', [RequestController::class, 'index']) -> name('requests');

Route::get('/request/create/{lang}', function($lang) {
    App::setlocale($lang);
    return view('requestt.create');
});
Route::post('/request/create/{lang}', [RequestController::class, 'store']) -> name('add-request');


Route::get('/mail/send/{lang}', [MailController::class, 'index']) -> name('send-mail');
Route::post('/mail/send/{lang}', [MailController::class, 'send']) -> name('send_mail');




Route::get('consumer/create' , function(){
    return view('consumers.create');
});
Route::post('consumer/create' , [ConsumerController::class , 'store']) -> name('add-consumer');

Route::get('request/create' , function(){
    return view('requestt.create');
});
Route::post('request/create' , [RequestController::class , 'store']) -> name('add-request');


Route::get('/mail/send', [MailController::class, 'index']) -> name('send-mail');
Route::post('/mail/send', [MailController::class, 'send']) -> name('send_mail');