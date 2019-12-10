<?php

namespace App\Http\Controllers;

use App\result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function result(){
        return view('results.result');
    }
    public function viewResult(){
        $results = Result::get();
        return view('results.viewResult',compact('results'));
    }
    public function store(Request $request){
//        $user_id = auth()->user()->id;
        result::create([
            'subject' => $request->get('subject'),
            'marks' => $request->get('marks'),
            'gpa' => $request->get('gpa'),
        ]);
        return redirect()->back()->with('message','Result Updated Successfully');
    }
}

