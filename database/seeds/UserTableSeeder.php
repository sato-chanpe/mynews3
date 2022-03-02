<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin03',
            'email' => 'admin03@gmail.com',
            'password' => bcrypt('admin03'),
            'role' => '1'
        ]);
    }
}
