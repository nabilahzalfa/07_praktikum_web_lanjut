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
        Schema::create('mahasiswa', function (Blueprint $table) {
            // $table->id('id_mahasiswa');
            $table->string('nim', 10)->primary();
            $table->string('nama', 25)->index();
            $table->string('kelas', 5);
            $table->string('jurusan', 35);
            $table->string('email', 40);
            $table->string('alamat', 50);
            $table->date('tanggal_lahir');
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
        Schema::dropIfExists('mahasiswa');
    }
};
