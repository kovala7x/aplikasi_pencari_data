<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 500000; $i++)
        {
            // insert data ke table pegawai menggunakan Faker
          DB::table('pegawai')->insert
          ([
              'nama' => $faker->name,
              'jabatan' => $faker->jobTitle,
              'umur' => $faker->numberBetween(25,40),
          ]);
        }
    }
}
