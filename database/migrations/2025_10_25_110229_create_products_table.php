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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->constrained('tenants'); // Multi-tenant
            $table->foreignId('brand_id')->nullable()->constrained('brands');
            $table->foreignId('category_id')->nullable()->constrained('categories');
            $table->foreignId('unit_id')->nullable()->constrained('units'); // default unit
            $table->foreignId('created_by')->constrained('users');
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('purchase_price', 15, 4)->default(0);
            $table->decimal('selling_price', 15, 4)->default(0);
            $table->integer('tax_rate')->default(0); 
            $table->boolean('is_variant')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
