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
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->constrained('tenants');
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete();
            $table->foreignId('created_by')->constrained('users');
            $table->string('sku')->unique();
            $table->string('name');
            $table->decimal('purchase_price', 15, 2);
            $table->decimal('selling_price', 15, 2);
            $table->json('attributes')->nullable();
            $table->integer('reorder_level')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variants');
    }
};
