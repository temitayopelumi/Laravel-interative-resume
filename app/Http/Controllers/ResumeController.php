<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Response;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class ResumeController extends Controller
{
    //

    public function index(){
        return view('index');
    }

    public function store(Request $request){

        
        // $response = new Response();
        // $response->name = $request->get('name');
        // $response->email = $request->get('email');
        // $response->subject = $request->get('subject');
        // $response->message = $request->get('message');
        // $response->save();

        // $to_email = "olalekantemitayo7@gmail.com";

        Mail::send('email-template', [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'bodyMessage' => $request->get('message') ],
            function ($message) {
                    $message->from('olpelumy@gmail.con');
                    $message->to('olalekantemitayo7@gmail.com', 'olalekan temitayo')
                    ->subject('Hello');
    });

    return back()->with('success', 'Thanks for contacting me, I will get back to you soon!');

        
    }
}
