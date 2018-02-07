<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use Session;

class GameController extends Controller
{
    public function index($subject)
    {
        //$questions = $this->session_handling();
        $questions = Question::where('category_id',1)
                                    ->where('subject_id', 1)
                                    ->inRandomOrder()
                                    ->simplePaginate(1);

        return view('game.show', compact('questions'));
    }


    protected function session_handling()
    {
        if(Session::get('key'))
        {
            $questions = Session::get('key');
        }
        
        else   
        {
            $questions = Question::where('category_id',1)
                                    ->where('subject_id', 1)
                                    ->simplePaginate(1);

            Session::put('key', $questions, 60);  
        }        
        return $questions;
    }
}
