<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkpWajibTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skp_wajib', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_aktivitas');
            $table->string('nama_kegiatan');
            $table->string('jenjang_pendidikan');
            $table->char('poin_skp');
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
        Schema::dropIfExists('skp_wajib');
    }
}
