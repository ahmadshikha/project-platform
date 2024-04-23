<?php

namespace App\Http\Controllers;

use App\Models\challenge_question;
use App\Models\easy_question;
use App\Models\student_rate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class StudentRateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student_rate=student_rate::with(['course'=> function($query){
            $query->select('id','title');
        }])->where('student_id',Auth::guard('student')->user()->id)->get();
        return view('student.student_rate',compact('student_rate'));
    }

    /**
     *
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {
                
            $value = $this->rate_calc($request);
            $store=new student_rate();
            $store->student_id=Auth::guard('student')->user()->id;
            $store->course_id=$request->course_id;
            $store->value=$value;
            $store->easy=$request->easy;
            $store->save();
            return redirect('/student_rate');
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(student_rate $student_rate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student_rate $student_rate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student_rate $student_rate)
    {
        //
        try {
            $request->validate([
                'student_id'=>'required',
                'course_id'=>'required',
                'value'=>'required',
                'easy'=>'required|boolean',

            ]);

            $update= student_rate::find($request->id);
            $update->student_id=$request->student_id;
            $update->course_id=$request->course_id;
            $update->value=$request->value;
            $update->easy=$request->easy;
            $update->save();

        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student_rate $student_rate,$id)
    {
        //

        student_rate::destroy($id);

    }
    public function rate_calc ($request){

        if($request->easy==1){

        $easy = easy_question::with(['course'=>function($query){
            $query->select('id','title');
        }])->where('course_id',$request->course_id)->get();
        $count=0;
        $i=0;
        foreach ($easy as $e) {
            if($request['option'.$i]===$e['answer'])
            {
            $count++;
            }
            $i++;
        }
        return $count;
    }
    else{
        $easy = challenge_question::with(['course'=>function($query){
            $query->select('id','title');
        }])->where('course_id',$request->course_id)->get();
        $count=0;
        $i=0;
        foreach ($easy as $e) {
            if($request['option'.$i]===$e['answer'])
            {
            $count++;
            }
            $i++;
        }
        return $count;
    }
    }
}
