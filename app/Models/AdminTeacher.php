<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;
use App\Models\Course;
class AdminTeacher extends Model
{
    use HasFactory;

    function teacher (){
        return $this->belongsTo(Teacher::class);
    }
    function course (){
        return $this->belongsTo(Course::class);
    }
}
