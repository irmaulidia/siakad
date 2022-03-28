<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawai')->insert(array(
        [
            'nama' => 'Jerome Polin Sijabat',
            'gambar' => 'assets/img/jerome.jpg',
            'jabatan' => 'CEO',
            'deskripsi' => 'Ia merupakan CEO dari perusahaan PT. Raja Mobil yang berfokus pada bidang mobil, selain itu ia juga masuk kelada forbes 30 under 30',
        ],
        [
            'nama' => 'Ifa Indrian Ningsih',
            'gambar' => 'assets/img/ifa.png',
            'jabatan' => 'General Manager',
            'deskripsi' => 'Mengelola sistem dan prosedur secara keseluruhan dari PT. Raja Mobil',
        ],
        [
            'nama' => 'Irma Maulidia',
            'gambar' => 'assets/img/irma.jpeg',
            'jabatan' => 'Work Shop Head',
            'deskripsi' => 'Mengatur strategi pengolahan konsumen terhadap kualitas service dan mekanik lapangan',
        ],
        [
            'nama' => 'Sarah Jhinson',
            'gambar' => 'assets/img/sarah.jpg',
            'jabatan' => 'Product Manager',
            'deskripsi' => 'Memahami dan mewakili kebutuhan pengguna serta mengembangkan produk',
        ],
        [
            'nama' => 'William Anderson',
            'gambar' => 'assets/img/william.jpg',
            'jabatan' => 'Administrasi',
            'deskripsi' => 'Mengatur keuangan perusahaan dan mencatat setiap pengeluaran dan pemasukan serta mengurus outsourcing',
        ],
        [
            'nama' => 'Anders Antonsen',
            'gambar' => 'assets/img/anders.jpg',
            'jabatan' => 'Divisi Regional',
            'deskripsi' => 'Mengelola aset perusahaan serta menjalankan bisnis sesuai dengan arahan perusahaan',
        ]
        ));
        //
    }
}