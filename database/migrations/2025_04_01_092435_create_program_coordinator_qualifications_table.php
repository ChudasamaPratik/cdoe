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
        Schema::create('program_coordinator_qualifications', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('program_coordinator_id');
            $table->string('degree_type');
            $table->string('field_of_study');
            $table->string('institution');
            $table->string('year_obtained');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('program_coordinator_id')
                ->references('id')
                ->on('program_coordinators')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_coordinator_qualifications');
    }
};
