<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('help_items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('category'); // For different sections like 'Immediate Needs', 'Monthly Needs', etc.
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('help_items');
    }
}; 