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
        Schema::table('galleries', function (Blueprint $table) {
            if (!Schema::hasColumn('galleries', 'photo_path')) {
                $table->string('photo_path')->nullable()->after('title');
            }

            // Add the video_url column if it doesn't exist
            if (!Schema::hasColumn('galleries', 'video_url')) {
                $table->string('video_url')->nullable()->after('photo_path');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('galleries', function (Blueprint $table) {
            if (Schema::hasColumn('galleries', 'photo_path')) {
                $table->dropColumn('photo_path');
            }
            if (Schema::hasColumn('galleries', 'video_url')) {
                $table->dropColumn('video_url');
            }
        });
    }
};
