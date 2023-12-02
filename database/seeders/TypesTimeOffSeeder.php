<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypesTimeOff;

class TypesTimeOffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['types' => 'Cuti Melahirkan'],
            ['types' => 'Cuti Sakit'],
            ['types' => 'Cuti Paternal'],
            ['types' => 'Cuti Kematian'],
            ['types' => 'Cuti Hari Raya'],
        ];

        foreach($data as $key => $data){
            TypesTimeOff::insert($data);
        }
    }
}
