<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supplier')->insert(array(
            [
                'nama_supplier' => 'Ifa Indrian N',
                'jenis' => 'Agen',
                'addres' => 'Jombang, Jawa Timur',
                'contact' => 'ifaindrian@gmail.com',
                'phonet' => '086794532678',
            ],
            [
                'nama_supplier' => 'Irma Maulidia',
                'Jenis' => 'Vendor',
                'addres' => 'Pasuruan, Jawa Timur',
                'contact' => 'irmamaulidiaaa@gmail.com',
                'phonet' => '082332597103',
            ],
            [
                'nama_supplier' => 'Putra Ramadhan',
                'jenis' => 'Vendor',
                'addres' => 'Surabaya, Jawa Timur',
                'contact' => 'putra123@gmail.com',
                'phonet' => '085673281920',
            ],
            [
                'nama_supplier' => 'Ameena Anggita',
                'jenis' => 'Distributor',
                'addres' => 'Bandung, Jawa Barat',
                'contact' => 'ameena567@gmail.com',
                'phonet' => '082341657890',
            ],
            [
                'nama_supplier' => 'Marcus Fernaldi G',
                'jenis' => 'Importir',
                'addres' => 'Probolinggo, Jawa Timur',
                'contact' => 'marcusfernaldi@gmail.com',
                'phonet' => '081234567287',
            ],
            [
                'nama_supplier' => 'Anthony Sinisuka',
                'jenis' => 'Agen',
                'addres' => 'Palu, Sulawesi Tengah',
                'contact' => 'anthonysinisuka@gmail.com',
                'phonet' => '089765438290',
            ]
            ));
            //
    }
}