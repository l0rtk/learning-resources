<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [ 'role' => 'admin' , 'role_id' => 1],
            [ 'role' => 'user', 'role_id' => 0]
        ]);
    }
}
