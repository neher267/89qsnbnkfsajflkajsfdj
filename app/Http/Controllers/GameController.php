<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class GameController extends Controller
{
    public function index(Request $request)
    {

    	// if(session('qsn')=='y'){
    	// 	return true;
    	// 	$questions = session('questions');
    		
    	// }
    	// else
    	// {
    	//  	$questions = Question::where('category_id',1)
    	// 		->where('subject_id', 1)
    	// 		->select('id','question', 'ans', 'weight', 'status')
    	// 		->get()->shuffle()->toArray();

	    // 	session([
	    //         'questions' => $questions,
	    //         'qsn'=>'y',
	    //         ]);  
    	// }
    	$data = $request->session()->all();
    	dd($data);
    	dd($questions);
	
    	return view('game.show', compact('questions'));
    }
}
