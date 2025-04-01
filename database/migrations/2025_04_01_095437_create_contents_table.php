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
        Schema::create('contents', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('category_id');
            $table->string('title');
            $table->date('published_at');
            $table->enum('is_hyperlink', ['Y', 'N']);
            $table->string('link_type');
            $table->string('href');
            $table->enum('is_latest', ['Y', 'N']);
            $table->enum('is_notification', ['Y', 'N']);
            $table->enum('is_announcement', ['Y', 'N']);
            $table->enum('is_new', ['Y', 'N']);

            $table->enum('is_archive', ['Y', 'N']);
            $table->enum('status', ['active', 'inactive']);

            $table->timestamps();
            $table->softDeletes();
            $table->foreign('category_id')->references('id')->on('categories');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
