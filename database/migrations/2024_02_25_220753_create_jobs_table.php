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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('job_type_id')->constrained('job_types')->onDelete('cascade');
            $table->foreignId('position_id')->constrained('positions')->onDelete('cascade');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('expireDate');
            $table->string('salaryType')->nullable();
            $table->string('minSalary')->nullable();
            $table->string('maxSalary')->nullable();
            $table->string('currency')->nullable();
            $table->string('country')->nullable();
            $table->string('address')->nullable();
            $table->string('gender')->nullable();
            $table->string('experience')->nullable();
            $table->string('qualification')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
