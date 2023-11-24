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
        Schema::create('religion', function (Blueprint $table) {
            $table->id();
            $table->string('religion');
            $table->date('create_at');
            $table->integer('create_by');
            $table->date('update_at');
            $table->integer('update_by');
            $table->date('deleted_at');
            $table->integer('deleted_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('religion');
    }
};
