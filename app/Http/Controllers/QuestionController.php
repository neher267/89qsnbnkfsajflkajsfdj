<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function show($subject, $year, $class)
    {
    	return view('qsn-paper', compact('subject', 'year', 'class'));
    }
}
