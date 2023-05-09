<?php

namespace Database\Seeders;

use App\Models\Family;
use App\Models\FamilyModel;
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
        FamilyModel::create([
            'name' => 'Budi',
            'telepon' => '08123456789',
            'hubungan' => 'Ayah'
        ]);

        FamilyModel::create([
            'name' => 'Siti',
            'telepon' => '08123456789',
            'hubungan' => 'Ibu'
        ]);

        FamilyModel::create([
            'name' => 'Rudi',
            'telepon' => '08123456789',
            'hubungan' => 'Anak'
        ]);

        FamilyModel::create([
            'name' => 'Rina',
            'telepon' => '08123456789',
            'hubungan' => 'Anak'
        ]);

        FamilyModel::create([
            'name' => 'Rudi',
            'telepon' => '08123456789',
            'hubungan' => 'Anak'
        ]);

        FamilyModel::create([
            'name' => 'Rina',
            'telepon' => '08123456789',
            'hubungan' => 'Anak'
        ]);
    }
}
