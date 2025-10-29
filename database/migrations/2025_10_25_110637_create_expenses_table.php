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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->constrained('tenants'); 
            $table->foreignId('created_by')->constrained('users');
            $table->string('title');
            $table->decimal('amount', 15, 4);
            $table->date('expense_date')->nullable();
            $table->enum('payment_method', ['cash', 'bank', 'card', 'upi', 'other'])->nullable();
            $table->text('notes')->nullable();
            $table->boolean('is_recurring')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
