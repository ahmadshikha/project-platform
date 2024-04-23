<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            'user_name'=>'Ahmad',
            'fullname'=>'Ahmad_Al_Shikha',
            'email'=>'ahmadshikha@gmail.com',
            'phone'=>'0988693243',
            'country'=>'Damascus',
            'job'=>'Software Engineering',
            'gender'=>'Male',
            'password'=>Hash::make('admin2000')
        ];
        DB::table('admins')->insert($data);
    }
}
