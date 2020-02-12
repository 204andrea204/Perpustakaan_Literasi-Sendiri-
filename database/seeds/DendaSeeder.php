<?php

use Illuminate\Database\Seeder;

class DendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dendas')->insert([
        	'kategori_denda' => 'Biasa',
            'denda' => '1000'
        	]);
        DB::table('dendas')->insert([
        	'kategori_denda' => 'Sedang',
            'denda' => '5000'
        	]);
        DB::table('dendas')->insert([
        	'kategori_denda' => 'Sulit',
            'denda' => '10000'
        	]);
    }
}
