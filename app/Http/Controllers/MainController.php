<?php

namespace App\Http\Controllers;

//use App\Contact;
use App\Models\Contact;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){

        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function review(){
        return view('review');
    }
    public function review_check(Request $request){
        $valid = $request->validate([
           'email' => 'required|min:4|max:100',
           'subject' => 'required|min:4|max:100',
           'message' => 'required|min:15|max:500',
        ]);
        if ($valid) {
            $model = new Contact();
            $model->subject = '';
            $model->email = '';
            $model->message = '';
            $model->save();
        }

    }


}
