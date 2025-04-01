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
        Schema::create('program_coordinator_publications', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('program_coordinator_id');
            $table->string('title');
            $table->string('publication_type');
            $table->enum('type',['Journal','Conference']);
            $table->string('year');
            $table->string('co_authors');
            $table->string('DOI');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_coordinator_publications');
    }
};
