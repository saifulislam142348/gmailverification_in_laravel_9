<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterFormmail;
use Illuminate\Http\Request;

class MessageController extends Controller
{
        public function index(){
                return view('message');
        }
public function store(){
        $contact_from_data = request()->all();
        Mail::to('saiful17182103353@gmail.com')->send(new RegisterFormmail($contact_from_data));
         return back();


}
}
