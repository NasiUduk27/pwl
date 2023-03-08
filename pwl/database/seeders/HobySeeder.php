<?php

namespace Database\Seeders;

use App\Models\Hoby;
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
        Hoby::create([
            'name' => 'Membaca',
            'description' => 'Membaca buku-buku yang menarik'
        ]);

        Hoby::create([
            'name' => 'Sepak-bola',
            'description' => 'Bermain bersama teman-teman di lapangan setiap weekend'
        ]);

        Hoby::create([
            'name' => 'Main game',
            'description' => 'Bermain game bersama teman-teman di rumah'
        ]);
    }
}
