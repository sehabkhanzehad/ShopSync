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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable()->unique(); // Ensures unique email addresses
            $table->string('phone')->unique(); // Unique constraint for phone numbers
            $table->text('address')->nullable();
            $table->string('company_name')->nullable(); // To store the supplier's company name
            $table->string('website')->nullable(); // If the supplier has a website
            $table->string('contact_person')->nullable(); // Name of the main contact person
            $table->string('contact_person_phone')->nullable(); // Phone number of the contact person
            $table->string('contact_person_email')->nullable(); // Email of the contact person
            // $table->decimal('credit_limit', 15, 2)->default(0); // Credit limit for the supplier
            $table->boolean('is_active')->default(true); // To track if the supplier is active
            $table->date('contract_start_date')->nullable(); // Start date of the supplier contract
            $table->date('contract_end_date')->nullable(); // End date of the supplier contract
            $table->text('notes')->nullable(); // Any additional notes
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
};
