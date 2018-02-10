<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use Session;
use App\Gift;

class GameController extends Controller
{
    public function index($subject)
    {
        //$questions = $this->session_handling();
        $questions = Question::where('category_id',1)
                                    ->where('subject', $subject)
                                    ->inRandomOrder()
                                    ->simplePaginate(1);

       $gifts = Gift::where('marks', '<=', (int)request()->user()->marks)->get();
        

        return view('game.show', compact('questions', 'gifts'));
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

    public function check(Request $request)
    {
        if($request->ans == $request->main_ans)
        {
            $user = $request->user();
            $marks = 1 + (int)$user->marks;
            $user->marks = $marks;
            $user->save();

        }

        return redirect()->back();
    }
}
