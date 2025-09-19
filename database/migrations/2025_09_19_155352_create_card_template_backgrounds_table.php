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
        Schema::create('card_template_backgrounds', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(); // name/label for background
            $table->string('image_path'); // path of background image
            $table->string('thumbnail_path')->nullable(); // optional thumbnail version
            $table->boolean('is_active')->default(true);
            $table->string('category')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_template_backgrounds');
    }
};
