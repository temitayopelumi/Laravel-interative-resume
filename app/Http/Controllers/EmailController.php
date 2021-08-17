<?php

namespace App\Http\Controllers;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    //
    public function sendEmail() {

        $to_email = "olalekantemitayo7@gmail.com";

        Mail::to($to_email)->send(new SendEmail);

        if(Mail::failures() != 0) {
            return "<p> Success! Your E-mail has been sent.</p>";
        }

        else {
            return "<p> Failed! Your E-mail has not sent.</p>";
        }
    }
}
