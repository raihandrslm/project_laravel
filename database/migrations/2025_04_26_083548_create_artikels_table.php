<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikels', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('judul');
            $table->unsignedbigInteger('id_jenis');
            $table->string('deskripsi');
            $table->date('tanggal_terbit');
            $table->string('foto');
            $table->string('penulis');

            // relasi
            $table->foreign('id_jenis')->references('id')->on('jenis')->onDelete('cascade');
            $table->timestamps();
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
};
