<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $pegawai = [
            [
                'nip' => '10120100',
                'nama'=> 'Dava Attabrani',
                'jeniskelamnin' => 'Laki-laki',
                'ttl'=> '20 Januari 2002',
                'departemen'=> 'Development',
                'jabatan'=> 'Manager',
                'agama'=> 'Islam',
                'alamat'=> 'Jl.Asri No.3 Kopo Bandung',
                'notelp'=> '0877291038422',
                'email'=> 'davaattarbrani@gmail.com',
                'password'=> 'dava123',
                'tunjanganmakan'=> '300000',
                'bonusproyek'=> '0',
                'reimbursement'=> '50000',
                'gajipokok'=> '4000000',
                'potongan'=> '0',
                'tambahan'=> '0',
                'totalgaji'=> '4350000',
            ],
            [
                'nip' => '10120101',
                'nama'=> 'Rayhan Rahman',
                'jeniskelamnin' => 'Laki-laki',
                'ttl'=> '5 Maret 2002',
                'departemen'=> 'Hr',
                'jabatan'=> 'Manager',
                'agama'=> 'Islam',
                'alamat'=> 'Jl.Mawar 20 Batununggal Bandung',
                'notelp'=> '0877291038422',
                'email'=> 'rayhanrahman@gmail.com',
                'password'=> 'rayhan123',
                'tunjanganmakan'=> '300000',
                'bonusproyek'=> '0',
                'reimbursement'=> '50000',
                'gajipokok'=> '4000000',
                'potongan'=> '0',
                'tambahan'=> '0',
                'totalgaji'=> '4350000',
            ],
            [
                'nip' => '10120102',
                'nama'=> 'Fasya Mutiara',
                'jeniskelamnin' => 'Perempuan',
                'departemen'=> 'Development',
                'ttl'=> '5 Juli 2002',
                'jabatan'=> 'Staff',
                'agama'=> 'Islam',
                'alamat'=> 'Jl.Melati No.5 Bandung',
                'notelp'=> '0877291038422',
                'email'=> 'fasyamutiara@gmail.com',
                'password'=> 'fasya123',
                'tunjanganmakan'=> '300000',
                'bonusproyek'=> '0',
                'reimbursement'=> '50000',
                'gajipokok'=> '4000000',
                'potongan'=> '0',
                'tambahan'=> '0',
                'totalgaji'=> '4350000',
            ],
        ];
        
        foreach($pegawai as $key => $pegawai){
            User::create($pegawai);
        }
    }
}