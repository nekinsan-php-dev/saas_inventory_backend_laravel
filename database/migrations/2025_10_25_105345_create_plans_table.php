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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->json('features')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2);
            $table->enum('billing_cycle', ['monthly','quarterly','yearly']);
            $table->integer('trial_days')->default(0);
            $table->integer('users_limit')->default(1);
            $table->integer('customers_limit')->default(0);
            $table->integer('products_limit')->default(0);
            $table->integer('invoices_limit')->default(0);
            $table->integer('warehouses_limit')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
