<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactFormRequest;

class WebsiteController extends Controller
{

    public function landing()
    {
        return view('website.landing');
    }

    public function index()
    {
        return view('website.index');
    }

    public function specs()
    {
        return view('website.specs');
    }

    public function contact(ContactFormRequest $request){
        // We need to send an email to the admin
        $admin_email = env('ADMIN_EMAIL');
        Mail::to($admin_email)->send(new ContactFormMail($request->all()));

        return redirect()->route('home')->with('success', 'Tu mensaje ha sido enviado correctamente');
    }
}
