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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->enum('discount_type', ['percentage', 'fixed']); // percentage or fixed amount
            $table->decimal('discount_value', 10, 2); // Value of the discount
            $table->decimal('min_purchase', 10, 2)->default(0.00); // Minimum purchase amount to use the coupon
            $table->date('start_date'); // Coupon start date
            $table->date('end_date'); // Coupon expiration date
            $table->integer('max_usage_limit')->default(1); // Max usage limit
            $table->integer('used_count')->default(0); // Number of times used
            $table->enum('status', ['active', 'expired', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
