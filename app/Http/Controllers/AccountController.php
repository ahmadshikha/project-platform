<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AccountController extends Controller
{

    public function login (Request $request){
        try{
        $request->validate([
            'user_name'=>'required',
            'password'=>'required'
    ]);

    if(Auth::attempt(['user_name'=>$request->user_name,'password'=>$request->password]))
    return redirect('teacher');
    elseif(Auth::guard('teacher')->attempt(['user_name'=>$request->user_name,'password'=>$request->password]))
    return redirect('course');
    elseif(Auth::guard('student')->attempt(['user_name'=>$request->user_name,'password'=>$request->password]))
    return redirect('course');
    else
    return redirect('login2');
}
catch(\Exception $e){
    return $e->getMessage();}
    }
    public function logout(){
        try{
                if(Auth::guard('teacher')->logout())
                return redirect('/');
                elseif (Auth::guard('student')->logout())
                return redirect('/');
                else {
                Auth::logout();
                return redirect('/');
                }
        }
        catch(\Exception $e){
            return $e->getMessage();
        }
    }
}
