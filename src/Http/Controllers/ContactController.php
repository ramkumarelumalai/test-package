<?php

namespace Rekasso\Contact\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Rekasso\Contact\Models\Contact;
use Rekasso\Contact\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }
    public function send(Request $request)
    {
       // return $request->all();
       //Mail::to('ramfromtag@gmail.com')->send(new ContactMailable($request->message));
       Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->email,$request->name));
       Contact::create($request->all());
       return redirect(route('contact'));
    }
}
