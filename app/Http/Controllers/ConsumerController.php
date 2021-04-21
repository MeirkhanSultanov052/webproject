<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use App\Models\Consumer; 

class ConsumerController extends Controller
{
    //
    public function index($lang) {
        App::setlocale($lang);
        $consumers = Consumer::all();
        //App::setlocale($lang);

        return view('consumers.view')->with(['consumers' => $consumers]);
    }
    public function store(Request $request) {
        $this->validate($request, [
            'photo' => 'mimes:jpeg,png,jpg',
          ]);


          if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $url = 'uploads';
            $file->move($url, $file->getClientOriginalName());
            $url = '/uploads/'.$file->getClientOriginalName();

            $user = Consumer::create([
                'name' => $request->name,
                'surname' => $request->surname,
                'adress' => $request->adress,
                'photo' => $url
            ]);

        return back();
    }
    else {
        abort(501, 'There is some problem with uploading image');
    }
}
}
