<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;

class StreamController extends Controller
{
    public function index(Request $request)
    {
        $text = $request->get('text');
        $answer = Answer::where('question', 'like', "%$text%")->first();
        if($answer){
            return response()->json(['answer' => $answer->answer], 200);
        }
        return response()->json(['answer' => "test answer"], 200);
    }
}
