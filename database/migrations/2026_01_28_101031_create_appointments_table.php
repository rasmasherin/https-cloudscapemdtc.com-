<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();

            $table->string('full_name');
            $table->string('email');
            $table->string('phone');

            $table->enum('age_group', ['child', 'teen', 'adult']);

            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('service_id');

            $table->date('preferred_date')->nullable();
            $table->time('preferred_time')->nullable();

            $table->text('additional_info')->nullable();

            $table->enum('status', ['pending', 'approved', 'rejected'])
                  ->default('pending');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
