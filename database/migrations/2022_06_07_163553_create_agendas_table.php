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
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('user_id');
            $table->foreignId('mapel_id');
            $table->string('materi');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->string('absen');
            $table->string('kelas');
            $table->enum('pembelajaran', ['pjj', 'ptm'])->default('pjj');
            $table->string('link');
            $table->string('dokumentasi');
            $table->string('keterangan');
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
        Schema::dropIfExists('agendas');
    }
};
