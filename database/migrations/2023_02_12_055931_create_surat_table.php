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
        Schema::create('surat', function (Blueprint $table) {
            $table->id('ID_Surat');
            $table->string('Nomor_Surat', 100);
            $table->string('Nama_Surat', 100);
            $table->string('Pengirim_Surat', 100);
            $table->string('Ditujukan',100);
            $table->string('Jenis_Surat',25);
            $table->string('Tanggal_Surat',100);
            $table->string('File_Surat',250);
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
        Schema::dropIfExists('surat');
    }
};