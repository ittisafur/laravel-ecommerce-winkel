<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsLetterController extends Controller
{
    public function store(Request $request)
    {      
        if ( ! Newsletter::isSubscribed($request->email) ) 
        {
            Newsletter::subscribePending($request->email);
            return redirect(route('home'))->with('success', 'Thanks For Subscribe');
        }
        return redirect(route('home'))->with('failure', 'Sorry! You have already subscribed ');
    }
}
