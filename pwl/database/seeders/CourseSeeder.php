<?php

namespace Database\Seeders;

use App\Models\course;
use App\Models\CourseModel;
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
        CourseModel::create([
            'name' => 'Pemrograman Web Lanjut',
            'sks' => '3',
            'semester' => '6'
        ]);

        CourseModel::create([
            'name' => 'Pemrograman Mobile',
            'sks' => '3',
            'semester' => '6'
        ]);

        CourseModel::create([
            'name' => 'Pemrograman Framework',
            'sks' => '3',
            'semester' => '6'
        ]);

        CourseModel::create([
            'name' => 'Pemrograman Framework Lanjut',
            'sks' => '3',
            'semester' => '6'
        ]);

        CourseModel::create([
            'name' => 'Pemrograman Framework Lanjut',
            'sks' => '3',
            'semester' => '6'
        ]);

        CourseModel::create([
            'name' => 'Pemrograman Framework Lanjut',
            'sks' => '3',
            'semester' => '6'
        ]);

        CourseModel::create([
            'name' => 'Pemrograman Framework Lanjut',
            'sks' => '3',
            'semester' => '6'
        ]);

        CourseModel::create([
            'name' => 'Pemrograman Framework Lanjut',
            'sks' => '3',
            'semester' => '6'
        ]);

        CourseModel::create([
            'name' => 'Pemrograman Framework Lanjut',
            'sks' => '3',
            'semester' => '6'
        ]);
    }
}
