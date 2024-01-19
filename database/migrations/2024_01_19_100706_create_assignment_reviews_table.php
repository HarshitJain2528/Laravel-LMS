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
        Schema::create('assignment_reviews', function (Blueprint $table) {
            $table->id();
            $table->string('assignment_name');
            $table->string('course_name');
            $table->integer('obtained_marks')->nullable();
            $table->integer('total_marks');
            $table->string('pdf');
            $table->unsignedBigInteger('std_id');
            $table->foreign('std_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignment_reviews');
    }
};
