<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Http\Requests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;

class PagesController extends BaseController
{
  

    public function contactus()
    {
    	//couple ways to pass variables to the view ( can also use with method) or (compact('menu'))
    	return view('pages.contactus');
    }

    public function testimonials()
    {
    	//couple ways to pass variables to the view ( can also use with method) or (compact('menu'))
    	return view('pages.testimonials');
    }

}