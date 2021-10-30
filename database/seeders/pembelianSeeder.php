<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class pembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian= [
            ['nama_barang'=>'lemari','nama_suplier' => 'suci','qty'=>'10','tgl'=>'2004-07-11'],
            ['nama_barang'=>'laptop','nama_suplier' => 'silvi','qty'=>'20','tgl'=>'2003-07-11'],
            ['nama_barang'=>'baju','nama_suplier' => 'sifa','qty'=>'5','tgl'=>'2011-07-11'],
            ['nama_barang'=>'kerudung','nama_suplier' => 'selvi','qty'=>'9','tgl'=>'2012-07-11'],
            ['nama_barang'=>'celana','nama_suplier' => 'putri','qty'=>'10','tgl'=>'2009-07-11']
        ];
        DB::table('pembelian')->insert($pembelian);
    }
}
