<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class khsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nilai = [
            [
                'mahasiswa_id' => 2041720035,
                'matakuliah_id' => 1,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => 20471200035,
                'matakuliah_id' => 2,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => 2041720035,
                'matakuliah_id' => 3,
                'nilai' => 'B',
            ],
            [
                'mahasiswa_id' => 20417200035,
                'matakuliah_id' => 4,
                'nilai' => 'A',
            ],
        ];
        DB::table('mahasiswa_matakuliah')->insert($nilai);
    }
}
