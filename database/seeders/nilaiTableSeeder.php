<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class nilaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sampel = [
            ['nis' => '1', 'kode_mata_pelajaran' => '1001', 'nilai' => '90'],
        ];

        DB::table('nilai')->insert($sampel);
    }
}
