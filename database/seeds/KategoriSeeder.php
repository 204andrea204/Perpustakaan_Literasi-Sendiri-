<?php

use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([
        	'nama' => 'Novel'
            ]);
        DB::table('kategoris')->insert([
        	'nama' => 'Pendidikan'
            ]);
        DB::table('kategoris')->insert([
        	'nama' => 'Umum'
            ]);
        DB::table('kategoris')->insert([
        	'nama' => 'Cerpen'
            ]);
        DB::table('kategoris')->insert([
        	'nama' => 'Cerita Rakyat'
            ]);
    }
}
