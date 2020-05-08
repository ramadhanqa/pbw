<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('email');
            $table->integer('no_telp');
            $table->integer('usia');
            $table->integer('no_ktp');
            $table->date('tgl_trip');
            $table->longText('pilihan_trip');
            $table->longText('nama_peserta_lain');
            $table->integer('jml_org');
            $table->longText('req_jemput');
            $table->longText('req_antar');
            $table->longText('pesan');
            $table->softDeletes();
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
        Schema::dropIfExists('bookings');
    }
}
