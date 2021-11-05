<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class heroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $hero= [
            ['real_name'=>'Dallas Liu','hero_name' => 'Avatar','element'=>'Fire,air,Water','gender'=>'Men','power' => '10'],
            ['real_name'=>'Tobey Maguire','hero_name' => 'Spider-Man','element'=>'Spider webs','gender'=>'Men','power' => '60'],
            ['real_name'=>'Marston','hero_name' => 'Wonder Woman','element'=>'Tank','gender'=>'Woman','power' => '80'],
            ['real_name'=>'Ultrament Jack','hero_name' => 'Ultrament','element'=>'Power','gender'=>'Men','power' => '120'],
            ['real_name'=>'Zatanna','hero_name' => 'idri elba','element'=>'None','gender'=>'Men','power' => '90']
        ];
        DB::table('hero')->insert($hero);
    
    }
}
