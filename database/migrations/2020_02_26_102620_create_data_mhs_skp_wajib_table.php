<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataMhsSkpWajibTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_mhs_skp_wajib', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mahasiswa_nama');
            $table->string('mahasiswa_username');
            $table->string('jenjang_pendidikan');
            $table->string('nama_kegiatan');
            $table->string('poin_skp');
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
        Schema::dropIfExists('data_mhs_skp_wajib');
    }
}
