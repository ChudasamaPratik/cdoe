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
        Schema::create('semester_wise_course_details', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('program_id');
            $table->string('title');
            $table->integer('credit');
            $table->uuid('course_coordinator_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('program_id')->references('id')->on('programs');
            $table->foreign('course_coordinator_id')->references('id')->on('course_coordinators');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('semester_wise_course_details');
    }
};
