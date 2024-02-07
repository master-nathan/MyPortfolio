<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailFormMail;

class EmailController extends Controller
{
    public function showForm()
    {
        return view('contact.form');
    }

    public function submitForm(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        // Send an email
        Mail::to('nathan.vosloo@icloud.com.com')->send(new email($data));

        return back()->with('message', 'Your message has been sent successfully.');
    }
}

