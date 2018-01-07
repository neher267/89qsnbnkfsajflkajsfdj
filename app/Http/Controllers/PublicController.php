<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function about_us()
    {
    	return view('about-us');
    }

    public function contact_us()
    {
    	return view('contact-us');
    }

    public function sign_in()
    {
    	return view('auth.login');
    }    
}
