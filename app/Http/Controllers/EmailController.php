<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;

class EmailController extends Controller
{
    public function messageSend(Request $request){
      $fname = $request->input('fname');
      $lname = $request->input('lname');
      $email_from = $request->input('email');
      $phone = $request->input('phone');
      $message = $request->input('message');
      $future = $request->input('future');



      $messageBody = "Name: " . $fname ."<br>";
      $messageBody .= "Email: " . $email_from ."<br>";
      $messageBody .= "Phone: " . $phone ."<br>";
      $messageBody .= "Message: " . $message ."<br>";
      $messageBody .= "Whether Need notice: " . $future ."<br>";

      $email = ["xiaofan@cheee.com.au","eazyee6@gmail.com"];
      Mail::send('emails.emailTemplate', ['messageBody' => $messageBody], function ($m) use ($fname,$email) {
        foreach ($email as $e)
         {
           $m->from($email_from, 'Your Application');

           $m->to($e)->subject("Message From client - " . $fname);
         }


        });
        return '{"sendstatus": 1, "message":"Message has been sent, Goldclip will contact you as soon as possible!"}';
      }
}
