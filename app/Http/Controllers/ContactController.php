<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use App\Mail\TitleRequest;

class ContactController extends Controller
{
    function titleRequest(Request $request)
    {
        $this->validate($request, [
            'name'     =>  'required',
            'email'  =>  'required|email',
            'message' =>  'required'
        ]);

        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message
        );

        Mail::to('web-tutorial@programmer.net')->send(new TitleRequest($data));
        return back()->with('success', 'Thanks for contacting us!');

    }

    function contact(Request $request)
    {
        $this->validate($request, [
            'name'     =>  'required',
            'email'  =>  'required|email',
            'message' =>  'required'
        ]);

        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message
        );

        Mail::to('web-tutorial@programmer.net')->send(new Contact($data));
        return back()->with('success', 'Thanks for contacting us!');

    }
}
