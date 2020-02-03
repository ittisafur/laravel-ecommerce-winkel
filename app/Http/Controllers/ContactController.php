<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('contact');
    }


    public function contactPost(Request $request)
    {
        $this->validate($request, 
            [
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required'
            ]
        );

        $data = array(
          'name' => $request->name,
          'email' => $request->email,
          'subject' => $request->subject,
          'bodyMessage' => $request->message
        );

        Contact::create($request->all());

        Mail::send('emails.Contact', $data , function($message) use ($data){
                $message->from($data['email']);
                $message->to('ittisafur@gmail.com');
                $message->subject($data['subject']);
            }
        );
        return back()->with('success', 'Thank You');
    }

  
}
