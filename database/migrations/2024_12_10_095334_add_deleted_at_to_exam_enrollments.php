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
        Schema::table('exam_enrollments', function (Blueprint $table) {
            $table->softDeletes(); // Add a 'deleted_at' column for soft deletes
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('exam_enrollments', function (Blueprint $table) {
            $table->dropSoftDeletes(); // Remove the 'deleted_at' column
        });
    }
};
