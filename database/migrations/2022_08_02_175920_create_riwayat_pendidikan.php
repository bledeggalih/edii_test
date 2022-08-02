<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatPendidikan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_pendidikan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("lamaran_id");
            $table->string("p_jenjang_pendidikan");
            $table->string("p_nama_institusi");
            $table->string("p_jurusan");
            $table->string("p_tahun_lulus");
            $table->string("p_ipk");
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
        Schema::dropIfExists('riwayat_pendidikan');
    }
}
