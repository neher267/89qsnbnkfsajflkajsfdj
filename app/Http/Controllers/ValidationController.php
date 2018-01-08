<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class ValidationController extends Controller
{
     public function mobile_validate(Request $request)
    {
    	$request->validate([
	    'mobile' => 'digits:11|unique:users',
	]);

    	session([
            'mobile' => $request->mobile,
             'validation' => 'yes'
            ]);   	
        
        return redirect()->back();    
    }
}
