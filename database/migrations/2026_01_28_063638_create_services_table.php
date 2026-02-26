<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');          // e.g., "Speech & Language Therapy"
            $table->text('description');      // Full description
            $table->string('image')->nullable(); // Path to service image
            $table->string('icon')->nullable();  // Path to icon image
            $table->json('features')->nullable(); // Features/checklist items
            $table->integer('display_order')->default(0); // Optional for ordering
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
