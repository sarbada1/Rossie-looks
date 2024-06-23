<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateGalleriesTable extends Migration
{
    public function up()
    {
        Schema::table('galleries', function (Blueprint $table) {
            if (!Schema::hasColumn('galleries', 'photo_path')) {
                $table->string('photo_path')->nullable()->after('title');
            }
            if (!Schema::hasColumn('galleries', 'video_url')) {
                $table->string('video_url')->nullable()->after('photo_path');
            }
        });
    }

    public function down()
    {
        Schema::table('galleries', function (Blueprint $table) {
            $table->dropColumn(['photo_path', 'video_url']);
        });
    }
}
