<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'nama' => 'Dwi Wahyu Prambodo',
            'alamat' => 'Desa Sumurgung, Kecamatan Palang, Kabupaten Tuban',
            'jenis_kelamin' => 1,
            'prodi' => 1,
            'no_hp' => '08112344567'
        ]);
    }
}
