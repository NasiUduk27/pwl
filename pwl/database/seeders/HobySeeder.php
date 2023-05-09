<?php

namespace Database\Seeders;

use App\Models\Hoby;
use App\Models\HobyModel;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HobySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HobyModel::create([
            'name' => 'Membaca',
            'description' => 'Membaca buku-buku yang menarik'
        ]);

        HobyModel::create([
            'name' => 'Sepak-bola',
            'description' => 'Bermain bersama teman-teman di lapangan setiap weekend'
        ]);

        HobyModel::create([
            'name' => 'Main game',
            'description' => 'Bermain game bersama teman-teman di rumah'
        ]);
    }
}
