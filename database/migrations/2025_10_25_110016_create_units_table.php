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
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->constrained('tenants'); 
            $table->foreignId('created_by')->constrained('users');
            $table->string('name'); // e.g., "Kilogram", "Piece"
            $table->string('symbol')->nullable(); // e.g., "kg", "pcs"
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};
