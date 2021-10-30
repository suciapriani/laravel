<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class pembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembeli= [
            ['nama'=>'suci','jk' => 'perempuan','alamat'=>'kp.cilebak','kode_post'=>'40213','kota'=>'bandung','tgl_lahir'=>'bandung-des-2004'],
            ['nama'=>'sifa','jk' => 'perempuan','alamat'=>'kp.bojong','kode_post'=>'40213','kota'=>'bandung', 'tgl_lahir'=>'bandung-des-2004' ],
            ['nama'=>'syukur','jk' => 'laki-laki','alamat'=>'cijerah','kode_post'=>'40213','kota'=>'bandung','tgl_lahir'=>'bandung-des-2004'],
            ['nama'=>'selvi','jk' => 'perempuan','alamat'=>'citamiang','kode_post'=>'40232','kota'=>'bandung','tgl_lahir'=>'bandung-des-2004'],
            ['nama'=>'putri','jk' => 'perempuan','alamat'=>'cibedug','kode_post'=>'40236','kota'=>'bandung','tgl_lahir'=>'bandung-des-2004']
        ];
        DB::table('pembeli')->insert($pembeli);
    }
}
