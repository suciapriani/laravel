<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class pesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanan= [
            ['nama_pelanggan'=>'suci apriani','nama_barang' => 'lemari','qty'=>'10','tgl_pesan'=>'2004-07-11'],
            ['nama_pelanggan'=>'sifa afna','nama_barang' => 'laptop','qty'=>'20','tgl_pesan'=>'2003-07-11'],
            ['nama_pelanggan'=>'selvi puspita','nama_barang' => 'kursi','qty'=>'5','tgl_pesan'=>'2011-07-11'],
            ['nama_pelanggan'=>'putri perdana','nama_barang' => 'baju','qty'=>'9','tgl_pesan'=>'2012-07-11'],
            ['nama_pelanggan'=>'silvi aljahro','nama_barang' => 'kerudung','qty'=>'10','tgl_pesan'=>'2009-07-11']
        ];
        DB::table('pesanan')->insert($pesanan);
    }
}
