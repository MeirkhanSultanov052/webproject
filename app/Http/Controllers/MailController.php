<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
use App\Mail\Sendmail;

class MailController extends Controller
{
    //
    public function index() {
        return view('mail.mview');
    }
    public function send(Request $request) {
        $data = new \stdClass();
        $data->sender = $request->sender;
        $data->message = $request->message;
        
        Mail::to('sultmeir0231@gmail.com')->send(new Sendmail($data));
        return back();   
    }
}
