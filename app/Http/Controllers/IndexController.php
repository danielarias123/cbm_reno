<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Http\Requests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;

class IndexController extends BaseController
{
    //
    public function index()
    {
    	

    	//couple ways to pass variables to the view ( can also use with method) or (compact('menu'))
    	return view('pages.home');
    }

}
