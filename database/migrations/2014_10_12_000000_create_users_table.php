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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->boolean('is_admin')->default(false);
            $table->string('first_title')->nullable();
            $table->string('second_title')->nullable();
            $table->string('third_title')->nullable();
            $table->string('bio')->nullable();
            $table->date('birthday')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('skype')->nullable();
            $table->string('freelance_status')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('behance_url')->nullable();
            $table->string('dribbble_url')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};