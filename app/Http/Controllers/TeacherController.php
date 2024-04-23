<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $teacher = Teacher::with(['course' => function ($query) {
            $query->select('id', 'title', 'description', 'episode_num', 'teacher_id', 'photo');
        }])->get();

        return view('teacher.teacher3', compact('teacher'));
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
                'user_name' => 'required',
                'password' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'photo' => 'required'

            ]);

            $store = new Teacher();
            $store->user_name = $request->user_name;
            $store->competent = $request->competent;
            $store->country = $request->country;
            $store->job = $request->job;
            $store->gender = $request->gender;
            $store->experince = $request->experince;

            $store->password = Hash::make($request->password);
            $store->phone = $request->phone;

            $store->email = $request->email;
            $photo = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('teacher', $photo, 'C');
            $store->photo = $path;
            $store->save();
            return redirect('teacher');
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $edit = Teacher::find($id);
        return view('teacher.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {

        try {
            $request->validate([
                'user_name' => 'required',
                'phone' => 'required',
                'email' => 'required'
            ]);
            $update = Teacher::find($request->id);
            $update->user_name = $request->user_name;
            $update->competent = $request->competent;
            $update->country = $request->country;
            $update->job = $request->job;
            $update->gender = $request->gender;
            $update->experince = $request->experince;
            if ($request->password != null)
                $update->password = Hash::make($request->password);
            $update->phone = $request->phone;

            $update->email = $request->email;
            if ($request->photo != null) {
                $photo = $request->file('photo')->getClientOriginalName();
                $path = $request->file('photo')->storeAs('teacher', $photo, 'C');
                $update->photo = $path;
            }
            $update->save();
            return redirect('teacher');
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {

            Teacher::destroy($id);
            return redirect('teacher');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
