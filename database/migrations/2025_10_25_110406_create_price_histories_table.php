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
        Schema::create('price_histories', function (Blueprint $table) {
            $table->id();
             $table->foreignId('tenant_id')->constrained('tenants'); 
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete();
            $table->foreignId('product_variant_id')->nullable()->constrained('product_variants')->cascadeOnDelete();
           
            $table->decimal('old_purchase_price', 15, 4);
            $table->decimal('old_selling_price', 15, 4);
            $table->decimal('new_purchase_price', 15, 4);
            $table->decimal('new_selling_price', 15, 4);

            $table->timestamp('changed_at')->useCurrent();
            $table->foreignId('changed_by')->constrained('users'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('price_histories');
    }
};
