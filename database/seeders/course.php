<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class course extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data=[
            'title'=>'php',
            'description'=>'learn php',
            'episode_num'=>'2',
            'photo'=>'course/1.jpg',
            'price'=>50,
            'teacher_id' =>'1'
        ];
        DB::table('courses')->insert($data);
    }
}
