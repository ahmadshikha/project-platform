<?php

namespace App\Http\Controllers;

use App\Models\easy_question;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\student_rate;
use Illuminate\Support\Facades\Auth;
class EasyQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $easy_question = Course::with(['easy_question'=>function($query){
            $query->select('id','question','answer','option1','option2','course_id');
        }])->get();
        return $easy_question;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   $easy=easy_question::all();
        $course_id=[];
        foreach ($easy as $e) {
            array_push($course_id,$e['course_id']);
        }
        $course=Course::where('teacher_id',Auth::guard('teacher')->user()->id)->where('id','<>',$course_id)->get();
        return view('easy_question.add',compact('course','easy'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {

        for ($i=0; $i <10 ; $i++) {
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

            $store=new easy_question();
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
            $easy = easy_question::with(['course'=>function($query){
                $query->select('id','title');
            }])->where('course_id',$id)->get();
        if(Auth::guard('teacher')->user())
        return view('easy_question.easy_questions',compact('easy'));
        else
        return view('student.easy_questions',compact('easy'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(easy_question $easy_question,$id)
    {
            $edit=easy_question::find($id);
            return view('easy_question.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, easy_question $easy_question)
    {
        try {
            $request->validate([
                'question'=>'required',
                'answer'=>'required',
                'option1'=>'required',
                'option2'=>'required',

            ]);

            $update= easy_question::find($request->id);
            $update->question=$request->question;
            $update->answer=$request->answer;
            $update->option1=$request->option1;
            $update->option2=$request->option2;
            $update->save();
            return redirect('easy_question/'.$request->course_id);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(easy_question $easy_question,$id)
    {

    }
}
