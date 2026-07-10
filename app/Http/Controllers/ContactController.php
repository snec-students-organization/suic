<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        $body = "
New College Admission Enquiry

Name: {$request->name}

Email: {$request->email}

Phone: {$request->phone}

Message:

{$request->message}
";

        Mail::raw($body, function ($mail) use ($request) {
            $mail->to('shamsululamasnecalp@gmail.com')
                ->subject('New College Admission Enquiry')
                ->replyTo($request->email, $request->name);
        });

        return back()->with('success', 'Your message has been sent successfully.');
    }
}