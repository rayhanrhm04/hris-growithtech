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
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('department_code');
            $table->timestamps('create_at');
            $table->integer('create_by');
            $table->timestamps('update_at');
            $table->integer('update_by');
            $table->timestamps('deleted_at');
            $table->integer('deleted_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('position');
    }
};
