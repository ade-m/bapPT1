<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
    	for($i = 1; $i <= 50; $i++){
    		DB::table('mahasiswa2s')->insert([
    			'studentID' => '03000811'&$i,
    			'nama' => $faker->name,
    			'tahunMasuk' => '2021',
    			'jurusan' => $faker->address
    		]);
 
    	}
    }
}
