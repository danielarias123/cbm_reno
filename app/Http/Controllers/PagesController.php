<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Http\Requests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;
use Input;
use Mail;

class PagesController extends BaseController
{
  

    public function contactus()
    {
    	//couple ways to pass variables to the view ( can also use with method) or (compact('menu'))
    	return view('pages.contactus');
    }

    // Function used to send quote email
    public function sendemail()
    {

        $posted_data = Input::all();

        $email_data = array(
            'name'      => $posted_data['name'],
            'email'     => $posted_data['email'],
            'phone'     => $posted_data['phone'],
            'job_type'  => $posted_data['job_type'],
            'message'   => $posted_data['message']

            );

        Mail::send('emails.quote', $email_data, function($message) use ($posted_data)
        {
          $message->to('danielarias_123@msn.com', 'CBM Renovations')
                  ->subject('Message received from '. $posted_data['name']);
        });

        return redirect('/contact-us');
    }

    public function testimonials()
    {
    	//couple ways to pass variables to the view ( can also use with method) or (compact('menu'))
    	return view('pages.testimonials');
    }

}