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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->constrained('tenants');
            $table->foreignId('purchase_id')->nullable()->constrained('purchases')->cascadeOnDelete();
            $table->foreignId('sale_invoice_id')->nullable()->constrained('sale_invoices')->cascadeOnDelete();
            $table->foreignId('created_by')->constrained('users');
            $table->decimal('amount', 15, 4);
            $table->enum('payment_method', ['cash', 'bank', 'card', 'upi', 'other'])->nullable();
            $table->date('payment_date')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
