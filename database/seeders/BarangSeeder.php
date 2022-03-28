<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('barang')->insert(array(
            [
                'nama_mobil'=>'toyota 86',
                'gambar'=>'assets/img/barang/Toyota-86.jpg',
                'harga'=>'Rp 830 jt',
                'transmisi'=>'Otomatis, Manual',
                'bahan_bakar'=>'Bensin',
                'mesin'=>'1998 cc',
                'tempat_duduk'=>4,
                'varian_warna'=>'Pure Red, Ice Silver, Lapis Blue Pearl'
            ],
            [
                'nama_mobil'=>'Bmw-320i',
                'gambar'=>'assets/img/barang/Bmw_320i.jpg',
                'harga'=>'Rp819 Jt - 1.329 Milyar',
                'transmisi'=>'Otomatis',
                'bahan_bakar'=>'Bensin',
                'mesin'=>'2000 cc',
                'tempat_duduk'=>5,
                'varian_warna'=>'Black Sapphire Metallic, Bluestone Metallic, Carbon Black Metallic'
            ],
            [
                'nama_mobil'=>'Toyota Alphard',
                'gambar'=>'assets/img/barang/toyota-alphard.jpg',
                'harga'=>'Rp1.133 - 1.561 Milyar',
                'transmisi'=>'Otomatis',
                'bahan_bakar'=>'Bensin',
                'mesin'=>'2500 cc,3500 cc',
                'tempat_duduk'=>7,
                'varian_warna'=>'Black, Graphite Metallic, Steel Blonde Metallic'
            ],
            [
                'nama_mobil'=>'Toyota Avanza',
                'gambar'=>'assets/img/barang/toyota-Avanza.jpg',
                'harga'=>'Rp1.133 - 1.561 Milyar',
                'transmisi'=>'Otomatis, Manual',
                'bahan_bakar'=>'Bensin',
                'mesin'=>'1300 & 1500 cc',
                'tempat_duduk'=>7,
                'varian_warna'=>'White, Black Metallic, Grey Metallic'
            ],
            [
                'nama_mobil'=>'Bmw 6-Series',
                'gambar'=>'assets/img/barang/bmw_6_Series.jpg',
                'harga'=>'Rp1.599 Milyar',
                'transmisi'=>'Otomatis',
                'bahan_bakar'=>'Bensin',
                'mesin'=>'1998 cc',
                'tempat_duduk'=>5,
                'varian_warna'=>'White'
            ],
            [
                'nama_mobil'=>'Isuzu MU-X',
                'gambar'=>'assets/img/barang/all-new-mu-x.jpg',
                'harga'=>'Rp 559.8 Juta',
                'transmisi'=>'Otomatis, Manual',
                'bahan_bakar'=>'Diesel',
                'mesin'=>'1898 cc',
                'tempat_duduk'=>7,
                'varian_warna'=>'Black, White'
            ],
            [
                'nama_mobil'=>'Datsun GO Plus PANCA',
                'gambar'=>'assets/img/barang/GO_Depan-3.jpg',
                'harga'=>'Rp120.27 - 157.91 Juta',
                'transmisi'=>'Otomatis, Manual',
                'bahan_bakar'=>'Bensin',
                'mesin'=>'1198 cc',
                'tempat_duduk'=>7,
                'varian_warna'=>'Black, Grey, Red, Silver, White, Copper'
            ]
            ));
    }
}
