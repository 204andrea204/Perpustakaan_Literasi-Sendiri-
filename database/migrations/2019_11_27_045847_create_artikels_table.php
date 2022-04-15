<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtikelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('kategori_id')->unsigned();
            $table->Integer('user_id');
            $table->string('judul');
            $table->string('pembuat');
            $table->string('deskripsi');
            $table->text('isi');
            $table->string('gambar');
            $table->timestamps();
            
            $table->foreign("kategori_id")->references("id")->on("kategoris")->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikels');
    }
}
