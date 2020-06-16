<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dpa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dpa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('username');
            $table->string('password');
            $table->string('jenjang');
            $table->string('fakultas');
            $table->string('jurusan');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('dpa');
    }
    
}