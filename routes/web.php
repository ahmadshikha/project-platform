<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentRateController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\ChallengeQuestionController;
use App\Http\Controllers\EasyQuestionController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminTeacherController;
use App\Models\Admin;
use App\Models\Course;
use App\Models\Teacher;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    $course = Course::all();
    $teacher=Teacher::all();
    return view('start3', compact('course','teacher'));

});
Route::get('/profile',function(){
   $admin= Admin::all();
    return view('profile',compact('admin'));
});
Route::get('/sign_up', function () {
    return view('teacher.add');
});

Route::get('/courses', function () {
    $course = Course::all();


    return view('courses',compact('course'));
});
Route::get('/sign_up_student', function () {
    return view('sign_up2');
});
Route::view('add_course', 'course.add');

Route::view('login2', 'login2');
Route::view('add_teacher', 'AddTeacher');


// teacher
Route::resource('teacher', TeacherController::class);
Route::get('teacher/edit/{id}', [TeacherController::class, 'edit']);
Route::post('teacher/update/{id}', [TeacherController::class, 'update']);
Route::get('teacher/destroy/{id}', [TeacherController::class, 'destroy']);

// studentra

Route::resource('student', StudentController::class);

Route::get('student/edit/{id}', [StudentController::class, 'edit']);
Route::post('student/update/{id}', [StudentController::class, 'update']);
Route::get('student/destroy/{id}', [StudentController::class, 'destroy']);

// course
Route::resource('course', CourseController::class);
Route::get('course/edit/{id}', [CourseController::class, 'edit']);
Route::post('course/update/{id}', [CourseController::class, 'update']);
Route::get('course/destroy/{id}', [CourseController::class, 'destroy']);

//challenge questueion
Route::resource('challenge_question', ChallengeQuestionController::class);
Route::get('challenge_question/create', [ChallengeQuestionController::class, 'create']);
Route::get('challenge_question/edit/{id}', [ChallengeQuestionController::class, 'edit']);
Route::post('challenge_question/update/{id}/{course_id}', [ChallengeQuestionController::class, 'update']);
Route::get('challenge_question/destroy/{id}/{course_id}', [ChallengeQuestionController::class, 'destroy']);

//easy question
Route::resource('easy_question', EasyQuestionController::class);
Route::get('easy_question/create', [EasyQuestionController::class, 'create']);
Route::get('easy_question/edit/{id}', [EasyQuestionController::class, 'edit']);
Route::post('easy_question/update/{id}/{course_id}', [EasyQuestionController::class, 'update']);
Route::get('easy_question/destroy/{id}/{course_id}', [EasyQuestionController::class, 'destroy']);

Route::resource('student_rate', StudentRateController::class);

//episode
Route::resource('episode', EpisodeController::class);
Route::get('episode/create', [EpisodeController::class, 'create']);
Route::get('episode/edit/{id}', [EpisodeController::class, 'edit']);
Route::post('episode/update/{id}', [EpisodeController::class, 'update']);
Route::get('episode/destroy/{id}/{course_id}', [EpisodeController::class, 'destroy']);

// account
Route::post('account', [AccountController::class, 'login']);
Route::get('account/logout', [AccountController::class, 'logout']);


Route::resource('adminTeacher', AdminTeacherController::class);
Route::get('adminTeacher/add/{id}', [AdminTeacherController::class, 'store']);
Route::get('adminTeacher/destroy/{id}', [AdminTeacherController::class, 'destroy']);
