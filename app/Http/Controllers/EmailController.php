<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;

class EmailController extends Controller
{
    public function messageSend(Request $request){

    	$name = $request->input('name');
    	$email = $request->input('email');
    	$message = $request->input('message');

    	$messageBody = "Name: " . $name ."<br>";
        $messageBody .= "Email: " . $email ."<br>";
        $messageBody .= "Message: " . $message ."<br>";

    	Mail::send('emails.emailTemplate', ['messageBody' => $messageBody], function ($message) use ($name, $email) {
                $message->to("tony@cheee.com.au", "Message From CHEEE Website")->subject("Message From CHEEE Website - " . $name);
                $message->replyTo($email, $name);
            });

        return '{"sendstatus": 1, "message":"Message has been sent, CHEEE will contact you as soon as possible!"}';
    }	
}
