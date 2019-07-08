<?php

namespace Bijondev\Contact\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bijondev\Contact\Models\Contact;
use Bijondev\Contact\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
    	return view('contact::index');
    }


    public function send(Request $request){
        Contact::create($request->all());
        Mail::to(config('contact.send_mail_to'))->send(new Contactmailable($request->message, $request->name));
        return redirect(route('contact'));
    }
}
