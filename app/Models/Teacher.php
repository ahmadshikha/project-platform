<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\AdminTeacher;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable
{
    use HasFactory;
    protected $hidden = [
        'password'];
    public function course(){
        return $this->hasMany(Course::class);
    }
    public function admin_teacher(){
        return $this->hasMany(AdminTeacher::class);
    }
}
