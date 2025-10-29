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
        Schema::create('sale_invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->constrained('tenants');
            $table->foreignId('customer_id')->constrained('customers'); 
            $table->foreignId('created_by')->constrained('users');
            $table->string('invoice_no')->unique(); 
            $table->decimal('total_amount', 15, 4)->default(0);
            $table->decimal('tax_amount', 15, 4)->default(0);
            $table->decimal('discount_amount', 15, 4)->default(0);
            $table->decimal('paid_amount', 15, 4)->default(0);
            $table->decimal('due_amount', 15, 4)->default(0);
            $table->date('invoice_date')->nullable();
            $table->date('due_date')->nullable();
            $table->text('notes')->nullable();
            $table->enum('status', ['draft', 'sent', 'partially_paid', 'paid', 'cancelled'])->default('draft');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_invoices');
    }
};
