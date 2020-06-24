<?php

namespace App\Http\Controllers;

use App\Mail\MailReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function storage(Request $request){
        $message = request()->validate([
            'name'=> ['required'],
            'email' => ['required','email'],
            'subject' => ['required'],
            'message' => ['required']
        ]);

        //return new MailReceived($message);
        Mail::to('angelsuminoe01@gmail.com')->queue(new MailReceived($message));


        return redirect()->back()->with('status', 'Message send successfully, we reply you within the next 24 hours');
    }
}
