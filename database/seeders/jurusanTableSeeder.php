<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class jurusanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sampel = [
            ['kode_mata_pelajaran' => '1001', 'nama_mata_pelajaran' => 'produktif', 'semester' => '2', 'jurusan2' => 'RPL'],
        ];

        DB::table('jurusan')->insert($sampel);
    }
}
