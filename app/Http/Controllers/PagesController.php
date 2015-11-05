<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Http\Requests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;
use Input;
use Mail;
use Validator;

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

        $rules = ['captcha' => 'required|captcha'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
        {
            // If the captcha doesnt match show a message
            $alert_message = "The characters you entered do not match the image! Your message was not sent.";
            $form_success = false;
        }
        else
        {
            // If the captcha matches send the email
            $alert_message = "Your message was successfuly sent! You will be contacted shortly.";
            $form_success = true;

            $email_data = array(
                'name'      => $posted_data['name'],
                'email'     => $posted_data['email'],
                'phone'     => $posted_data['phone'],
                'job_type'  => $posted_data['job_type'],
                'contact_message'   => $posted_data['contact_message'],
                'best_time'     => $posted_data['best_time'],
                'recipient' => "Manny"

            );

            Mail::send('emails.quote', $email_data, function($message) use ($posted_data)
            {
              $message->to('daniel.arias@chefsplate.com', 'CBM Renovations')
                      ->subject('Message received from '. $posted_data['name']);
              $message->to('arias531@hotmail.com', 'CBM Renovations')
                      ->subject('Message received from '. $posted_data['name']);
            });
        }

        return redirect('/contact-us')->with('form-success', $form_success)->with('message',$alert_message);
    }

    public function testimonials()
    {
    	//couple ways to pass variables to the view ( can also use with method) or (compact('menu'))
    	return view('pages.testimonials');
    }

}