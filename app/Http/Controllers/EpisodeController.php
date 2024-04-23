<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\student_rate;
use Illuminate\Support\Facades\Auth;
class EpisodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $episode = Course::with(['Episode'=>function($query){
            $query->select('id','title','course_id','url');
        }])->get();
        return $episode;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $course=Course::where('teacher_id',Auth::guard('teacher')->user()->id)->get();
        return view('episode.add',compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'title'=>'required',
                'course_id'=>'required',
                'url'=>'required',

            ]);

            $store=new Episode();
            $store->title=$request->title;
            $store->course_id=$request->course_id;
            $store->url=$request->url;
            $store->save();
            return redirect('episode/'.$request->course_id);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {   $student_rate=student_rate::all();
        $episode = Episode::with(['course'=>function($query){
            $query->select('id','title','description','episode_num');
        }])->where('course_id',$id)->get();
        if(Auth::guard('teacher')->user())
        return view('teacher.episodes',compact('episode'));
        else
        return view('student.episodes',compact('episode','student_rate'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $edit=  Episode::find($id);
        $course =Course::all();
        return view('episode.edit',compact('edit','course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Episode $episode,$id)
    {
        try {
            $request->validate([
                'title'=>'required',
                'course_id'=>'required',
                'url'=>'required',

            ]);

            $update= Episode::find($id);
            $update->title=$request->title;
            $update->course_id=$request->course_id;
            $update->url=$request->url;
            $update->save();
            return redirect('episode/'.$request->course_id);

        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Episode $episode,$id,$course_id)
    {
        Episode::destroy($id);
        return redirect('episode/'.$course_id);

    }
}
