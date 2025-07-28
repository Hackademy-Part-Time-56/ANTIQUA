<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('bio')->nullable();
            $table->string('specialization')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('company_name')->nullable();
            $table->string('vat_number')->nullable();
            $table->string('business_address')->nullable();
            $table->enum('business_type', ['individual', 'company', 'professional'])->nullable();
            $table->unsignedInteger('total_sales')->default(0);
            $table->date('member_since')->nullable();
            $table->timestamp('last_active')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('location')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'bio',
                'specialization',
                'birthdate',
                'company_name',
                'vat_number',
                'business_address',
                'business_type',
                'total_sales',
                'member_since',
                'last_active',
                'phone_number',
                'location',
            ]);
        });
    }
};
