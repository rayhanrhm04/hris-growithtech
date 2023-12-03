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
        Schema::create('reimbursements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('department_id');
            $table->integer('position_id');
            $table->date('date');
            $table->integer('nominal');
            $table->integer('data_file');
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->timestamps('deleted_at');
            $table->integer('deleted_by');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reimbursements');
    }
};
