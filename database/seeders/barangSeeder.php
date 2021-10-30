<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $barang= [
            ['nama'=>'Lemari','varian' => 'Kayu','harga_beli'=>'Rp.1.000.000','harga_jual'=>'Rp.2.000.000'],
            ['nama'=>'laptop','varian' => 'hitam','harga_beli'=>'Rp.2.000.000','harga_jual'=>'Rp.3.000.000'],
            ['nama'=>'kursi','varian' => 'Kayu','harga_beli'=>'Rp.500.000','harga_jual'=>'Rp.600.000'],
            ['nama'=>'baju','varian' => 'tunik','harga_beli'=>'Rp.100.000','harga_jual'=>'Rp.200.000'],
            ['nama'=>'kerudung','varian' => 'pasmina','harga_beli'=>'Rp.100.000','harga_jual'=>'Rp.300.000']
        ];
        DB::table('barang')->insert($barang);
    }
}
