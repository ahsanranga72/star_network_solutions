<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'message' => 'required',
            'name' => 'required',
            'subject' => 'required',
        ]);

        $data = [
            'email' => $request->email,
            'message' => $request->message,
            'name' => $request->email,
            'subject' => $request->message,
        ];

        try {
            Mail::to('info@snsbd.com')->send(new ContactFormMail($data));
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to send email. Please try again later.');
        }

        return back()->with('success', 'Thanks for contacting us! We will get back to you soon.');
    }
}
