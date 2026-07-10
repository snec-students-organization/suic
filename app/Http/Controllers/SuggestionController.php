<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SuggestionController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'student_name' => 'nullable|string|max:255',
            'class_year' => 'required|string',
            'wing_target' => 'required|string',
            'suggestion' => 'required|string',
        ]);

        $message = "
New MASA Suggestion

Name: " . ($request->student_name ?: 'Anonymous') . "

Class: {$request->class_year}

Wing: {$request->wing_target}

Suggestion:

{$request->suggestion}
";

        Mail::raw($message, function ($mail) {
            $mail->to('masasuic03@gmail.com')
                ->subject('New MASA Student Suggestion');
        });

        return back()->with('success', 'Suggestion submitted successfully.');
    }
}