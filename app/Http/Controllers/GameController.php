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
        $weight = $this->question_category((int) request()->user()->marks);
        $questions = $this->session_handling($weight, $subject);
        $question = null;
        $i= 0;
        $key1 = null;
        foreach ($questions as $key => $value) {
            if(++$i == 1)
                $key1 = $key;
            else 
                break;
        }
        $question = $questions->pull($key1);

        $gifts = Gift::where('marks', '<=', (int)request()->user()->marks)->get();    

        return view('frontend.game.show', compact('question', 'gifts'));
    }

    protected function question_category($marks)
    {
        $category = array();
        if($marks < 20)
        {
            $weight = [0,1];
        }
        elseif($marks < 50){
            $weight = [1,2];
        }
        elseif( $marks < 100){
            $weight = [1,3];
        }
        elseif( $marks < 200){
            $weight = [2,4];
        }
        else
        {
            $weight = [3,4];
        }
        return $weight;

    }


    protected function session_handling($weight, $subject)
    {
        if(!Session::get('questions') || !$this->check_weight($weight))
        {
            $qsns = Question::where('category',request()->user()->category)
                                    ->where('subject', $subject)
                                    ->where('weight', '>=', $weight[0])
                                    ->where('weight', '<=', $weight[1])
                                    ->get()
                                    ->shuffle();

            Session::put('questions', $qsns, 60); 
            Session::put('weight', $weight, 60); 
        }        
        return Session::get('questions');
    }

    public function check_weight($weight)
    {
        $w = Session::get('weight');
        if($w[0] == $weight[0])
        {
            return true;
        }
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
