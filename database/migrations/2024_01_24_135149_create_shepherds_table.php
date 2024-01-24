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
        Schema::create('shepherds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('church_id');
            $table->timestamps();
            $table->foreign('church_id')->references('id')->on('churches')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shepherds');
    }
    
};
