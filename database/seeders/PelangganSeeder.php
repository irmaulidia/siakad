<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pelanggan')->insert(array(
            [
                'nama'=>'Syaifu Umar A',
                'alamat'=>'Jombang, Jatim',
                'produk'=>'Toyota Avanza',
                'total_biaya'=>'Rp 218 juta',
                'tanggal_transaksi'=>'2022-01-15',
                'no_hp'=>'+62 8764 2731 652'
            ],
            [
                'nama'=>'Noval Margo Santoso',
                'alamat'=>'Kediri, Jatim',
                'produk'=>'toyota 86',
                'total_biaya'=>'Rp 830 juta',
                'tanggal_transaksi'=>'2022-01-19',
                'no_hp'=>'+62 8123 8542 980'
            ],
            [
                'nama'=>'Moch Gradika Andi',
                'alamat'=>'Lamongan, Jatim',
                'produk'=>'toyota alphard',
                'total_biaya'=>'Rp 1.133 Milyar',
                'tanggal_transaksi'=>'2022-01-21',
                'no_hp'=>'+62 8893 6720 491'
            ],
            [
                'nama'=>'Rendy Aryo Wibowo',
                'alamat'=>'Pasuruan, Jatim',
                'produk'=>'Bmw 320i',
                'total_biaya'=>'Rp 823 juta',
                'tanggal_transaksi'=>'2022-01-25',
                'no_hp'=>'+62 8542 7665 112'
            ],
            [
                'nama'=>'Ika Puji Astutik',
                'alamat'=>'Pasuruan, Jatim',
                'produk'=>'Toyota Alphard',
                'total_biaya'=>'Rp 1.461 Milyar',
                'tanggal_transaksi'=>'2022-01-27',
                'no_hp'=>'+62 8523 5586 762'
            ],
            [
                'nama'=>'Adie Wibisono',
                'alamat'=>'Jombang, Jatim',
                'produk'=>'Bmw 6-Series',
                'total_biaya'=>'Rp1.599 Milyar',
                'tanggal_transaksi'=>'2022-02-02',
                'no_hp'=>'+62 8533 6843 130'
            ],
            [
                'nama'=>'Nafisha Vallerie',
                'alamat'=>'Malang, Jatim',
                'produk'=>'Toyota Avanza',
                'total_biaya'=>'Rp 276 Juta',
                'tanggal_transaksi'=>'2022-02-07',
                'no_hp'=>'+62 8890 2610 337'
            ]
            ));
    }
}
