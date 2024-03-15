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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('title')->nullable();
            $table->string('companyName')->nullable();
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('dateOfBirth')->nullable();
            $table->string('dateOfFounded')->nullable();
            $table->string('companyType')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('profileImage')->nullable();
            $table->string('coverImage')->nullable();
            $table->longText('coverLetter')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->string('website')->nullable();
            $table->string('language')->nullable();
            $table->string('nationality')->nullable();
            $table->string('salary')->nullable();
            $table->longText('details')->nullable();
            $table->string('socialFacebook')->nullable();
            $table->string('socialTwitter')->nullable();
            $table->string('socialLinkedin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profiles');
    }
};
