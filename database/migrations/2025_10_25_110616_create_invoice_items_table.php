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
        Schema::create('invoice_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->constrained('tenants'); 
            $table->foreignId('sale_invoice_id')->constrained('sale_invoices')->cascadeOnDelete(); 
            $table->foreignId('product_id')->constrained('products');
            $table->foreignId('product_variant_id')->nullable()->constrained('product_variants')->cascadeOnDelete();
            $table->foreignId('warehouse_id')->nullable()->constrained('warehouses'); 
            $table->integer('quantity')->default(0);
            $table->decimal('purchase_price', 15, 4);
            $table->decimal('selling_price', 15, 4);
            $table->decimal('tax_amount', 15, 4)->default(0);
            $table->decimal('discount_amount', 15, 4)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_items');
    }
};
