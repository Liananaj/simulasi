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
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('masyarakat_id')->nullable()->index('fk_pengaduans_to_masyarakats');
            $table->date('tgl_pengaduan');
            $table->string('judul_laporan');
            $table->string('isi_laporan');
            $table->string('foto');
            $table->enum('jenis_pengaduan', ['public', 'private']);
            $table->enum('status', ['Pending', 'Proses', 'Selesai']);
            
            
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
        Schema::dropIfExists('pengaduans');
    }
};
      
