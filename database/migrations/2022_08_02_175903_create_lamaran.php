<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLamaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lamaran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("user_id");
            $table->string("posisi");
            $table->string("nama");
            $table->string("ktp");
            $table->date("ttl");
            $table->string("jk");
            $table->string("agama");
            $table->string("goldar");
            $table->string("status");
            $table->text("alamat_ktp");
            $table->text("alamat_tinggal");
            $table->string('email')->unique();
            $table->string("telpon");
            $table->string("org_dpt_dihubungi");
            $table->text("skill");
            $table->string("penempatan");
            $table->string("pendapatan");
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lamaran');
    }
}
