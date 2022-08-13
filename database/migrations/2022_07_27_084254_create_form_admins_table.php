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
        Schema::create('form_admins', function (Blueprint $table) {

            //relasi dengan form_users
            $table->id();
            $table->string('user_id');
            $table->string('nama_produk')->unique();
            $table->string('no_registrasi');
            $table->string('deskripsi');
            $table->string('provinsi');
            $table->string('kota_kabupaten');
            $table->string('kecamatan');
            $table->string('kelurahan_desa');
            $table->string('harga');
            $table->string('jasa');
            $table->string('foto_produk_atau_jasa');
            $table->string('status_pembayaran_registrasi')->default('PENDING');
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
        Schema::dropIfExists('form_admins');
    }
};
