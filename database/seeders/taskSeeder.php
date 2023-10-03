<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


use Faker\Factory as Faker;



class taskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('matakuliahs')->insert([
            ['kode_matakuliah'=>'MK001', 
            'nama_matakuliah'=>'Pemrograman Aplikasi Bisnis',
            'sks'=>4],
            ['kode_matakuliah'=>'MK002', 
            'nama_matakuliah'=>'Audit SI',
            'sks'=>4],
            ['kode_matakuliah'=>'MK003', 
            'nama_matakuliah'=>'Sistem Informasi Perusahaan',
            'sks'=>4],
        ]
        );
        DB::table('khs')->insert([
            ['kode_khs'=>'KHS001', 
            'keterangan'=>'2022/2023',
            'keterangan_singkat'=>'2022/2023'],
            ['kode_khs'=>'KHS002', 
            'keterangan'=>'2022/2023',
            'keterangan_singkat'=>'2022/2023'],
            ['kode_khs'=>'KHS002', 
            'keterangan'=>'2022/2023',
            'keterangan_singkat'=>'2022/2023'],
        ]
        );
        DB::table('khs_details')->insert([
            ['kode_khs_detail'=>'KHS00101', 
            'kode_khs'=>'KHS001', 
            'nilai'=>90],
            ['kode_khs_detail'=>'KHS00102', 
            'kode_khs'=>'KHS001', 
            'nilai'=>90],
            ['kode_khs_detail'=>'KHS00103', 
            'kode_khs'=>'KHS001', 
            'nilai'=>90],
        ]
        );
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 50; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('mahasiswas')->insert([
    			'studentID' => '03000811'&$i,
    			'nama' => $faker->name,
    			'tahunMasuk' => '2021',
    			'jurusan' => $faker->address
    		]);
 
    	}
    }
}
