<?php

namespace App\Http\Controllers;

use App\Models\Requestt;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    //
    public function index() {

        $requests = Requestt::all();
        //App::setlocale($lang);

        return view('requestt.view')->with(['requests' => $requests]);
    }
    public function store(Request $request) {
        $req = Requestt::create([
            'consumer_id' => $request->consumer_id,
            'title' => $request->title,
            'body' => $request->body,
        ]);
    }
}
