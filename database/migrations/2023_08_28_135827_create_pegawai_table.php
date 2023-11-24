<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->string('nama');
            $table->string('jeniskelamin');
            $table->string('ttl');
            $table->string('departemen');
            $table->string('jabatan');
            $table->string('agama');
            $table->string('alamat');
            $table->string('notelp');
            $table->string('email');
            $table->string('password');
            $table->integer('tunjanganmakan');
            $table->integer('bonusproyek');
            $table->integer('reimbursement');
            $table->integer('gajipokok');
            $table->integer('potongan');
            $table->integer('tambahan');
            $table->integer('totalgaji');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};
?>