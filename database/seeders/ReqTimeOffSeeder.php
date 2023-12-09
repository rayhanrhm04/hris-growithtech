<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Timeoff;


class ReqTimeOffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                
                'timeoff_id' => '1',
                'name' => 'fasya',
                'position_id' => '1',
                'types_id' => '1',
                'date' => '2023-12-02 16:07:25',
                'reason' => '1',
                'status' => 'n'
            ]
        ];

        foreach($data as $key => $data){
            Timeoff::insert($data);
        }
    }
}
