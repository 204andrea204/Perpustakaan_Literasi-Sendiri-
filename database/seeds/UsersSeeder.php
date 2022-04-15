<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'foto' => '',
            'password' => bcrypt('admin'),
            'role' => '1'
            ]);
         DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'foto' => '',
            'password' => bcrypt('user'),
            'role' => '2'
            ]);
    }
}
