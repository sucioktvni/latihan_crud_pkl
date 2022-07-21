<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class siswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sampel = [
            ['nis' => '1001', 'nama_siswa' => 'Suci', 'alamat_siswa' => 'Bandung', 'tanggal_lahir' => '2004-10-24'],
        ];

        DB::table('siswa')->insert($sampel);
        //
    }
}
