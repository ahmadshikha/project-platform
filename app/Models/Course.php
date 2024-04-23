<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\challenge_question;
use App\Models\easy_question;
use App\Models\Episode;
use App\Models\Teacher;
use App\Models\student_rate;
use App\Models\AdminTeacher;

class Course extends Model
{
    use HasFactory;
        public $fillable =['title','description','episode_num','teacher_id','photo'];
    public function challenge_question(){
        return  $this->hasMany(challenge_question::class);
    }
    public function easy_question(){
        return $this->hasMany(easy_question::class);
    }
    public function Episode(){
        return $this->hasMany(Episode::class);
    }
    public function student_rate(){
        return $this->hasMany(student_rate::class);
    }
    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
    public function admin_teacher(){
        return $this->hasMany(AdminTeacher::class);
    }

}
