<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('supplier_id');
            $table->date('order_date');
            $table->decimal('total_amount', 10, 2);
            $table->enum('status', ['Pending', 'Completed', 'Canceled', 'Partially Completed'])->default('Pending');
            $table->string('order_number')->unique(); // Unique identifier for the order
            $table->decimal('discount', 10, 2)->default(0); // Discount applied to the order
            $table->decimal('tax', 10, 2)->default(0); // Tax applied to the order
            $table->decimal('shipping_fee', 10, 2)->default(0); // Shipping charges
            $table->text('notes')->nullable(); // Any additional information or comments
            $table->date('expected_delivery_date')->nullable(); // Expected date for delivery
            $table->date('actual_delivery_date')->nullable(); // Actual date of delivery
            $table->enum('payment_status', ['Unpaid', 'Paid', 'Partially Paid'])->default('Unpaid'); // Payment status (Unpaid, Paid, Partially Paid)
            $table->enum('payment_method', ['Cash', 'Bank Transfer', 'Credit Card', 'Check'])->nullable(); // Method of payment
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_orders');
    }
};
