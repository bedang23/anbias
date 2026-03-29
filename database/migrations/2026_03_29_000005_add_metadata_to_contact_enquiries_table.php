<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('contact_enquiries', function (Blueprint $table) {
            $table->string('phone_number', 40)->nullable()->after('email');
            $table->string('enquiry_type', 40)->default('contact')->after('preferred_contact');
            $table->string('service_slug', 120)->nullable()->after('enquiry_type');

            $table->index('enquiry_type');
            $table->index('service_slug');
        });
    }

    public function down(): void
    {
        Schema::table('contact_enquiries', function (Blueprint $table) {
            $table->dropIndex(['enquiry_type']);
            $table->dropIndex(['service_slug']);
            $table->dropColumn(['phone_number', 'enquiry_type', 'service_slug']);
        });
    }
};
