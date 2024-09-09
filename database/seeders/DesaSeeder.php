<?php

namespace Database\Seeders;

use App\Models\Desa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Desa::create([
            'nama' => 'Jambu',
            'puskesmas_id' => 1,
        ]);
        Desa::create([
            'nama' => 'Karanggondang',
            'puskesmas_id' => 1,
        ]);
        Desa::create([
            'nama' => 'Sekuro',
            'puskesmas_id' => 1,
        ]);
        Desa::create([
            'nama' => 'Srobyong',
            'puskesmas_id' => 1,
        ]);
        Desa::create([
            'nama' => 'Jambu Timur',
            'puskesmas_id' => 1,
        ]);
        Desa::create([
            'nama' => 'Mororejo',
            'puskesmas_id' => 1,
        ]);
        Desa::create([
            'nama' => 'Sinanggul',
            'puskesmas_id' => 1,
        ]);
        Desa::create([
            'nama' => 'Suwawal',
            'puskesmas_id' => 1,
        ]);
    }
}
