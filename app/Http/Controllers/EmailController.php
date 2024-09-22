<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Prepare the data for the email
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'messg' => $request->message, // Ensure this is a string
        ];

        // Log the email data
        Log::info('Email Data:', $data);

        // Send the email
        Mail::send('emails.email', $data, function ($message) use ($data) {
            $message->to(env('MAIL_FROM_ADDRESS'))
                    ->subject('Contact Form Message');
            $message->from($data['email'], $data['name'], $data['messg']);
        });

        return redirect()->back()->with('success', 'Your message has been sent!');
    }
}
