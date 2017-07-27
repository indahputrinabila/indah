<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts=[
        ['title'=>'Tips Cepat Nikah','content'=>'Loren Ipsum'],
        ['title'=>'Haruskah Menunda Nikah','content'=>'Loren Ipsum'],
        ['title'=>'Membangun Visi Misi Nikah','content'=>'Loren Ipsum'],

        ];

        DB::table('Posts')->insert($posts);
    }
}
