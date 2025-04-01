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
        Schema::create('program_coordinator_experiences', function (Blueprint $table) {
            $table->string('uuid')->unique();
            $table->uuid('program_coordinator_id');
            $table->string('position');
            $table->string('organization');
            $table->date('start_date');
            $table->date('end_date');
            $table->text('description');
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
        Schema::dropIfExists('program_coordinator_experiences');
    }
};
