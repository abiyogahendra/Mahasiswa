<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NilaiMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_mahasiswa', function (Blueprint $table) {
            // $table->increments('id_nilai');
            // $table->string('matakuliah');
            // $table->integer('nilai');
            // $table->integer('nim');
            // $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
     //   Schema::dropIfExists('nilai_mahasiswa');
    }
}
