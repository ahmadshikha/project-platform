<?php

namespace App\Http\Controllers;

use App\Models\challenge_question;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChallengeQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $challenge_question = Course::with(['challenge_question'=>function($query){
            $query->select('id','question','answer','option1','option2','course_id');
        }])->get();
        return $challenge_question;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $course=Course::where('teacher_id',Auth::guard('teacher')->user()->id)->get();
        return view('challenge_question.add',compact('course'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['course_id'=>'unique:easy_questions']);
        try {

        for ($i=0; $i <15 ; $i++) {
            $question='question'.$i;
            $answer='answer'.$i;
            $option1='option1'.$i;
            $option2='option2'.$i;
            $request->validate([
                $question =>'required',
                $answer =>'required',
                $option1 =>'required',
                $option2 =>'required'
            ]);

            $store=new challenge_question();
            $store->question=$request[$question];
            $store->answer=$request[$answer];
            $store->option1=$request[$option1];
            $store->option2=$request[$option2];
            $store->course_id=$request->course_id;
            $store->save();
        }
            return redirect('course');
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $easy = challenge_question::with(['course'=>function($query){
            $query->select('id','title');
        }])->where('course_id',$id)->get();
        if(Auth::guard('teacher')->user())
        return view('challenge_question.challenge_questions',compact('easy'));
        else
        return view('student.challenge_questions',compact('easy'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(challenge_question $challenge_question,$id)
    {
            $edit=challenge_question::find($id);
            return view('challenge_question.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, challenge_question $challenge_question)
    {
        try {
            $request->validate([
                'question'=>'required',
                'answer'=>'required',
                'option1'=>'required',
                'option2'=>'required',

            ]);

            $update= challenge_question::find($request->id);
            $update->question=$request->question;
            $update->answer=$request->answer;
            $update->option1=$request->option1;
            $update->option2=$request->option2;
            $update->save();
            return redirect('challenge_question/'.$request->course_id);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(challenge_question $challenge_question,$id)
    {

    }
}
