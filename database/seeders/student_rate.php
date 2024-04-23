<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class student_rate extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data=[
            'student_id'=>'1',
            'course_id'=>'1',
            'value'=>'8',
            'easy'=>'1',

        ];
        DB::table('student_rates')->insert($data);

    }
}
