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
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
             $table->foreignId('tenant_id')->constrained('tenants');
            $table->string('title'); // e.g., "Consulting fee", "Interest income"
            $table->decimal('amount', 15, 4);
            $table->date('income_date')->nullable();
            $table->enum('payment_method', ['cash', 'bank', 'card', 'upi', 'other'])->nullable();
            $table->string('category')->nullable(); 
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incomes');
    }
};
