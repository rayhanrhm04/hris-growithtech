<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesTimeOffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypesTimeOff::insert([
            'id' => '001',
            'types' => 'Cuti Melahirkan'
        ],[
            'id' => '002',
            'types' => 'Cuti Sakit'
        ],[
            'id' => '003',
            'types' => 'Cuti Paternal'
        ],[
            'id' => '004',
            'types' => 'Cuti Kematian'
        ],[
            'id' => '005',
            'types' => 'Cuti Hari Raya'
        ]);
    }
}
