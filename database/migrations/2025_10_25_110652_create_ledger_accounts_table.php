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
        Schema::create('ledger_accounts', function (Blueprint $table) {
            $table->id();
             $table->foreignId('tenant_id')->constrained('tenants'); // Multi-tenant
            $table->string('name'); // e.g., "Cash", "Bank", "Accounts Receivable"
            $table->string('code')->nullable(); // Optional ledger code
            $table->enum('type', ['asset', 'liability', 'equity', 'income', 'expense']); // Ledger type
            $table->text('description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ledger_accounts');
    }
};
