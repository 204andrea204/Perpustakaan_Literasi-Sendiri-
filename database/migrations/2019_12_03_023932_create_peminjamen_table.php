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
            $table->string('judulbuku');
            $table->string('tanggalpinjam');
            $table->string('tanggalkembali')->nullable();
            $table->string('denda')->nullable();
            $table->string('statuspeminjaman');
            $table->timestamps();

            // $table->foreign("denda_id")->references("id")->on("dendas")->onUpdate("cascade")->onDelete("cascade");
            // $table->bigInteger('denda_id')->unsigned();
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
