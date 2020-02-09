<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeminjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namapeminjam');
            $table->string('alamatpeminjam');
            $table->bigInteger('buku_id')->unsigned();
            $table->string('tanggalpinjam');
            $table->string('tanggalkembali')->nullable();
            $table->string('statuspeminjaman');
            $table->timestamps();

            $table->foreign("buku_id")->references("id")->on("bukus")->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjamen');
    }
}
