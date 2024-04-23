<?php

namespace App\Http\Controllers;

use App\Models\AdminTeacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
        $teacherCourse =AdminTeacher::with(['teacher' => function ($query){
            $query->select('id','user_name');
        }])
            ->with(['course'=>function($query2){
            $query2->select('id','title');
        }])->get();
        return view('admin.requests',compact('teacherCourse'));
    }
    catch(\Exception $e){
            return $e->getMessage();
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
    public function store(Request $request,$id)
    {
        try{
            $request->validate([
                'id'=>'unique:admin_teachers'
            ]);
        $store=new AdminTeacher();
        $store->course_id=$id;
        $store->teacher_id=Auth::guard('teacher')->user()->id;
        $store->status=0;
        $store->save();
        return redirect('course');
    }
    catch(\Exception $e ){return redirect('course');

    }
    }

    /**
     * Display the specified resource.
     */
    public function show(AdminTeacher $adminTeacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdminTeacher $adminTeacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, AdminTeacher $adminTeacher)
    {
        try{

            $update= AdminTeacher::find($id);
            $update->status=1;
            $update->save();
        }
        catch(\Exception $e ){
            return $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdminTeacher $adminTeacher,$id)
    {
        try {
            AdminTeacher::where('course_id',$id)->delete();
            return redirect('course/destroy/'.$id);

        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
