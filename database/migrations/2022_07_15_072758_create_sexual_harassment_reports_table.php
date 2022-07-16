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
        Schema::create('sexual_harassment_reports', function (Blueprint $table) {
            $table->id();
            $table->string('no_ktp')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nama_pelapor');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('jenis_kelamin');
            $table->string('no_telepon');
            $table->string('lokasi_kejadian')->nullable();
            $table->string('bukti')->nullable();
            $table->text('dekripsi_pelaku')->nullable();
            $table->text('kronologi_kejadian')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('sexual_harassment_reports');
    }
};
