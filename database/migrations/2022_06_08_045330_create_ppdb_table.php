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
        Schema::create('ppdb', function (Blueprint $table) {
            $table->uuid('id')->primary()->unique();
            $table->string('code')->unique();
            $table->string('nama');
            $table->enum('jenis_kelamin', ['L', 'P'])->default('L');
            $table->date('ttl');
            $table->string('asal_sekolah');
            $table->string('no_hp_siswa');
            $table->string('no_hp_wali');
            $table->text('alamat');
            $table->string('program_keahlian');
            $table->string('referensi')->nullable();
            $table->year('tapel');
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
        Schema::dropIfExists('ppdb');
    }
};
