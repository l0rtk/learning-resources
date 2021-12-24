<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            ['group_name' => 'soups'],
            ['group_name' => 'deserts'],
            ['group_name' => 'cold drinks'],
            ['group_name' => 'alcohol'],

        ]);
    }
}
