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
        Schema::create('reqtimeoffs', function (Blueprint $table) {
            $table->id();
            $table->integer('timeoff_id');
            $table->string('name', 30);
            $table->integer('position_id');
            $table->integer('types_id');
            $table->date('date');
            $table->string('reason', 50);
            $table->string('status', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reqtimeoffs');
    }
};
