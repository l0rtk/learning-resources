<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class VideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('video')->insert([
          'title'=>"Php tutorial",
          'link'=>"https://youtube.com/php-tutorial",
          'description'=>"Hello,This is php tutorial"
        ]);

        DB::table('video')->insert([
          'title'=>"Python tutorial",
          'link'=>"https://youtube.com/Python-tutorial",
          'description'=>"Hello,This is Python tutorial"
        ]);

        DB::table('video')->insert([
          'title'=>"C++ tutorial",
          'link'=>"https://youtube.com/C++-tutorial",
          'description'=>"Hello,This is C++ tutorial"
        ]);

        DB::table('video')->insert([
          'title'=>"Java tutorial",
          'link'=>"https://youtube.com/Java-tutorial",
          'description'=>"Hello,This is Java tutorial"
        ]);

        DB::table('video')->insert([
          'title'=>"Golang tutorial",
          'link'=>"https://youtube.com/Golang-tutorial",
          'description'=>"Hello,This is Golang tutorial"
        ]);
    }
}
