<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('location')->nullable();
            $table->enum('job_type', ['Full Time', 'Part Time', 'Contract'])->default('Full Time');
            $table->text('description');
            $table->string('experience')->nullable();
            $table->string('qualification')->nullable();
            $table->string('skills')->nullable(); // comma separated
            $table->boolean('status')->default(1); // 1 = active, 0 = inactive
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
