<?php

namespace Database\Seeders;

use App\Models\course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        course::create([
            'name' => 'Pemrograman Web Lanjut',
            'sks' => '3',
            'semester' => '6'
        ]);

        course::create([
            'name' => 'Pemrograman Mobile',
            'sks' => '3',
            'semester' => '6'
        ]);

        course::create([
            'name' => 'Pemrograman Framework',
            'sks' => '3',
            'semester' => '6'
        ]);

        course::create([
            'name' => 'Pemrograman Framework Lanjut',
            'sks' => '3',
            'semester' => '6'
        ]);

        course::create([
            'name' => 'Pemrograman Framework Lanjut',
            'sks' => '3',
            'semester' => '6'
        ]);

        course::create([
            'name' => 'Pemrograman Framework Lanjut',
            'sks' => '3',
            'semester' => '6'
        ]);

        course::create([
            'name' => 'Pemrograman Framework Lanjut',
            'sks' => '3',
            'semester' => '6'
        ]);

        course::create([
            'name' => 'Pemrograman Framework Lanjut',
            'sks' => '3',
            'semester' => '6'
        ]);

        course::create([
            'name' => 'Pemrograman Framework Lanjut',
            'sks' => '3',
            'semester' => '6'
        ]);
    }
}
