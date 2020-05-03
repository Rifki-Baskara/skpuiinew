<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkpPilihanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skp_pilihan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('domain_profil_lulusan_nama');
            $table->string('aktivitas_kemahasiswaan');
            $table->string('bukti_kegiatan');
            $table->char('poin_skp');
            $table->string('jenjang_pendidikan');
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
        Schema::dropIfExists('skp_pilihan');
    }
}
