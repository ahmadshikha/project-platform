<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $student=  Student::with(['student_rate'=>function($query){
            $query->select('id','student_id','course_id','value','easy')
            ->with(['course'=>function($query2){
                $query2->select('id','title','teacher_id')
                ->with(['teacher'=>function($query3){
                    $query3->select('id','user_name');}]);
            }]);
        }])->get();
        return view('Student',compact('student'));
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
        try {
            $request->validate([
                'user_name'=>'required',
                'password'=>'required',
                'phone'=>'required',
                'email'=>'required',
                'photo'=>'required'
            ]);

            $store=new Student();
            $store->user_name=$request->user_name;
            $store->password=Hash::make($request->password);
            $store->phone=$request->phone;
            $store->email=$request->email;
            $photo=$request->file('photo')->getClientOriginalName();
                $path = $request->file('photo')->storeAs('student',$photo,'C');
                $store->photo = $path;
            $store->save();

            return redirect('login2');
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student,$id)
    {
        $student=  Student::with(['student_rate'=>function($query){
            $query->select('id','student_id','course_id','value','esay')
            ->with(['course'=>function($query2){
                $query2->select('id','title','teacher_id')
                ->with(['teacher'=>function($query3){
                    $query3->select('id','user_name');}]);
            }]);
        }])->where('id',$id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student,$id)
    {
        $edit=Student::find($id);
        return view('student.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student,$id)
    {
        try {
            $request->validate([
                'user_name'=>'required',
                'phone'=>'required',
                'email'=>'required',

            ]);

            $update=Student::find($id);
            $update->user_name=$request->user_name;
            if ($request->photo!=null)
            $update->password=Hash::make($request->password);
            $update->phone=$request->phone;
            $update->email=$request->email;
            if ($request->photo!=null){
                $photo=$request->file('photo')->getClientOriginalName();
                $path = $request->file('photo')->storeAs('student',$photo,'C');
                $update->photo = $path;
                }
            $update->save();
            return redirect('student');
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student,$id)
    {
        try{
        Student::destroy($id);
        return redirect('student');
        }
        catch(\Exception $e){
            return $e->getMessage();
        }
    }
}
