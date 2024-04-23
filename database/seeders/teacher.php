<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class teacher extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data=[
            'user_name'=>'alaa',
            'password'=>Hash::make('alaa2000'),
            'email'=>'Alaa@gmail.com',
            'phone'=>'0996407352',
            'country'=>'Quneitra',
            'job'=>'FREELARNCER',
            'gender'=>'Male',
            'experince'=>'2 years',
            'photo'=>'teacher/1.jpg',
            'competent'=>'web developer'    
        ];
        DB::table('teachers')->insert($data);
    }
}
