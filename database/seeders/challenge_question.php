<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class challenge_question extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data=[
            'question'=>'i am google',
            'answer'=>'yes',
            'option1'=>'no',
            'option2'=>'never',
            'course_id'=>'1',
        ];
        DB::table('challenge_questions')->insert($data);
    }
}
