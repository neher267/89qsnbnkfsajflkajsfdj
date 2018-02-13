<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class PublicController extends Controller
{
    public function index()
    {
        //$slug = Sentinel::getUser()->roles()->first()->slug;
        //$user = Sentinel::getUser();
        //dd($user->roles());
    	return view('frontend.index');
    }

    public function about_us()
    {
    	return view('frontend.about-us');
    }

    public function contact_us()
    {
    	return view('frontend.contact-us');
    }

    public function sign_in()
    {
    	return view('frontend.auth.login');
    }    
}
