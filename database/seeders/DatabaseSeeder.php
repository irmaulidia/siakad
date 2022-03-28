<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\barang;
use App\Models\pelanggan;
use App\Models\pegawai;
use App\Models\supplier;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([BarangSeeder::class]);
        $this->call([PelangganSeeder::class]);
        //$this->call([SupplierSeeder::class]);
        //$this->call([PegawaiSeeder::class]);
    }
}
