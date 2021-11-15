<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questions;

class Questionscontroller extends Controller
{

    public function create (){
        return view('addQuestion');
    }

    function addData(Request $req){

        $question = new Questions;
        $question->title = $req->title;
        $question->answer1 = $req->answer1;
        $question->answer2 = $req->answer2;
        $question->answer3 = $req->answer3;
        $question->save();
        return redirect('dashboard');

    }
}
