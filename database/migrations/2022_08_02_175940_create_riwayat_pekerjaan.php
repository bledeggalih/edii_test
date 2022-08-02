<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatPekerjaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_pekerjaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("lamaran_id");
            $table->string("k_perusahaan");
            $table->string("k_posisi");
            $table->string("k_pendapatan");
            $table->string("k_tahun");
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('lamaran_id')->references('id')->on('lamaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_pekarjaan');
    }
}
