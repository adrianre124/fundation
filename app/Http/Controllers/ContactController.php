<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function show()
    {
        return view('mail.kontakt');
    }

    public function sendEmail(Request $request)
    {
        $data = [
            'nazwa' => $request->nazwa,
            'firma' => $request->firma,
            'tel' => $request->tel,
            'email' => $request->email,
            'temat' => $request->temat,
            'tresc' => $request->tresc,
        ];

        Mail::to('adrianre124@gmail.com')->send(new ContactMail($data));

        return redirect('/kontakt');
    }
}
