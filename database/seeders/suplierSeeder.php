<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class suplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suplier= [
            ['nama'=>'suci','alamat'=>'kp.cilebak','kode_post'=>'40213','kota'=>'bandung'],
            ['nama'=>'sifa','alamat'=>'kp.bojong','kode_post'=>'40213','kota'=>'bandung'],
            ['nama'=>'syukur','alamat'=>'cijerah','kode_post'=>'40213','kota'=>'bandung'],
            ['nama'=>'selvi','alamat'=>'citamiang','kode_post'=>'40232','kota'=>'bandung'],
            ['nama'=>'putri','alamat'=>'cibedug','kode_post'=>'40236','kota'=>'bandung']
        ];
        DB::table('suplier')->insert($suplier);
    }
}
