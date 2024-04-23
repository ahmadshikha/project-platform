<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Episode;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::guard('teacher')->user()!=null){
        $course = Course::with(['teacher'=>function($query){
            $query->select('id','user_name','phone');
        }])->where('teacher_id',Auth::guard('teacher')->user()->id)->get();
        return view('courses',compact('course'));
    }
    else{
        $course = Course::with(['teacher'=>function($query){
            $query->select('id','user_name','phone');
        }])
        ->with(['episode'=>function($query2){
                $query2->select('id','title');
        }])
        ->get();
        return view('courses',compact('course'));
    }
    }



    /**
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
        //
        try {
            $request->validate([
                'title'=>'required',
                'description'=>'required',
                'episode_num'=>'required',
                'price'=>'required',
                'photo'=>'required'
            ]);

            $store=new Course();
            $store->title=$request->title;
            $store->description=$request->description;
            
            $store->episode_num=$request->episode_num;
            $store->price=$request->price;

            $store->teacher_id=Auth::guard('teacher')->user()->id;
            $photo=$request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('course',$photo,'C');
            $store->photo = $path;
            $store->save();
            return redirect('course');
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course,$id)
    {
        //
        $course = Teacher::with(['course'=>function($query){
            $query->select('id','title','description','episode_num','teacher_id','photo ');
        }])->where('id',$id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course,$id)
    {
        $edit=Course::find($id);
        return view('course.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course,$id)
    {
        try {
            $request->validate([
                'title'=>'required',
                'description'=>'required',
                'episode_num'=>'required',
                'price'=>'required',



            ]);

            $update=Course::find($id);
            $update->title=$request->title;
            $update->price=$request->price;

            $update->description=$request->description;
            $update->episode_num=$request->episode_num;
            if ($request->photo!=null){
                $photo=$request->file('photo')->getClientOriginalName();
                $path = $request->file('photo')->storeAs('course',$photo,'C');
                 $update->photo = $path;
                }
            $update->save();
            return redirect('course ');
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course,$id)
    {
        try{
        Course::destroy($id);
        return redirect('/profile');
        }
        catch(\Exception $e){
            return $e->getMessage();
        }
    }
}
