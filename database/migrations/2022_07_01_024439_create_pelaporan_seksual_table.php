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
        Schema::create('pelaporan_seksual', function (Blueprint $table) {
            $table->id();
            $table->string('no_ktp')->unique();
            $table->string('email')->unique();
            $table->string('nama_pelapor');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('jenis_kelamin');
            $table->string('no_telepon');
            $table->string('lokasi_kejadian');
            $table->string('bukti')->nullable();
            $table->string('dekripsi_pelaku');
            $table->string('kronologi_kejadian');
            $table->string('status');
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
        Schema::dropIfExists('pelaporan_seksual');
    }
};
