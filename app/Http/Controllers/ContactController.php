<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact.contact');
    }
     
    /**
     * Store new contact
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Create new Contact Object
        $newContact = new Contact();
        
        $newContact->name = $request->get('username');
        $newContact->email = $request->get('email');
        $newContact->message = $request->get('message');
        
        //Save
        $newContact->save();
        
        // Mailing
        Mail::send('contact.contact_email',
            array(
                'name' => $request->get('username'),
                'email' => $request->get('email'),
                'messages' => $request->get('message'),
            ), function($message) use ($request)
            {
                $message->from($request->email);
                $message->to('fadyelgendy2017@gmail.com');
            });
        
        
        return view('contact.thank_you', ['name' => $newContact->name]);
    }
}
