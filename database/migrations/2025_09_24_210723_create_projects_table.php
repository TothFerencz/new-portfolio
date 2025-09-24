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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category');
            $table->text('short_description')->nullable();
            $table->string('first_image')->nullable();
            $table->string('second_image')->nullable();
            $table->string('slug')->unique();
            $table->integer('years'); // pl. 2024
            $table->string('timeline'); // pl. "3 hónap"
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
