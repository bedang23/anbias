<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contact_enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('website_url')->nullable();
            $table->string('company_name')->nullable();
            $table->text('tech_stack')->nullable();
            $table->string('primary_goal');
            $table->string('budget_range')->nullable();
            $table->string('timeline')->nullable();
            $table->longText('message');
            $table->string('preferred_contact')->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->timestamps();

            $table->index('email');
            $table->index('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_enquiries');
    }
};
