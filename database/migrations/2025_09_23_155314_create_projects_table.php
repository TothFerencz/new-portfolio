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
        $table->string('title');                      // projekt címe
        $table->string('slug')->unique();             // url slug
        $table->string('url')->nullable();            // projekt link
        $table->string('category')->nullable();       // kategória
        $table->string('timeline')->nullable();       // időszak
        $table->text('short_description')->nullable();// rövid leírás
        $table->string('image')->nullable();          // borítókép
        $table->json('options')->nullable();          // extra opciók
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
