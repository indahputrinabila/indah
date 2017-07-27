<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a=[
        ['nama'=>'indah','alamat'=>'bandung','ttl'=>'2000-11-19'],
        ['nama'=>'sherina','alamat'=>'bandung','ttl'=>'2000-01-11'],
        
        ];

        DB::table('Siswas')->insert($a);
    }
}
