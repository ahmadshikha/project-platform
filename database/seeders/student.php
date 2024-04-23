<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class student extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data=[
            'user_name'=>'student',
            'password'=>Hash::make('student2000'),
            'email'=>'student@gmail.com',
            'photo'=>'student/7.png',

            'phone'=>'0932522365',
        ];
        DB::table('students')->insert($data);
    }
}
