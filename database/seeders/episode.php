<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class episode extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data=[
            'title'=>'intro php',
            'url'=>'ddsdsdsdsd.com',
            'course_id'=>'1',

        ];
        DB::table('episodes')->insert($data);
    }
}
