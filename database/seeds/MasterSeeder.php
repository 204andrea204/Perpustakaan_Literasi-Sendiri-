<?php

use Illuminate\Database\Seeder;

class MasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([
        	'nama' => 'Cerita Rakyat'
            ]);
        DB::table('dendas')->insert([
        	'kategori_denda' => 'Reguler',
            'denda' => '1000'
        	]);
    }
}
