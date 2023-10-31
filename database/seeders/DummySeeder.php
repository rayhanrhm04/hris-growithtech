<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $userData = [
            [
                'name' => 'Pak Eksekutif',
                'email'=> 'eksekutif@gmail.com',
                'role' => 'eksekutif',
                'password'=> bcrypt('1234')
            ],
            [
                'name' => 'Pak Manager HR',
                'email'=> 'managerhr@gmail.com',
                'role' => 'manager_hr',
                'password'=> bcrypt('12345')
            ],
            [
                'name' => 'Pak Manager Dev',
                'email'=> 'managerdev@gmail.com',
                'role' => 'manager_dev',
                'password'=> bcrypt('12345')
            ],
            [
                'name' => 'Pak Staff Dev',
                'email'=> 'staffdev@gmail.com',
                'role' => 'staff_dev',
                'password'=> bcrypt('12345')
            ],
            [
                'name' => 'Pak Staff HR',
                'email'=> 'staffhr@gmail.com',
                'role' => 'staff_hr',
                'password'=> bcrypt('12345')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
