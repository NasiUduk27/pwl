<?php

namespace Database\Seeders;

use App\Models\Family;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Family::create([
            'name' => 'Budi',
            'telepon' => '08123456789',
            'hubungan' => 'Ayah'
        ]);

        Family::create([
            'name' => 'Siti',
            'telepon' => '08123456789',
            'hubungan' => 'Ibu'
        ]);

        Family::create([
            'name' => 'Rudi',
            'telepon' => '08123456789',
            'hubungan' => 'Anak'
        ]);

        Family::create([
            'name' => 'Rina',
            'telepon' => '08123456789',
            'hubungan' => 'Anak'
        ]);

        Family::create([
            'name' => 'Rudi',
            'telepon' => '08123456789',
            'hubungan' => 'Anak'
        ]);

        Family::create([
            'name' => 'Rina',
            'telepon' => '08123456789',
            'hubungan' => 'Anak'
        ]);
    }
}
