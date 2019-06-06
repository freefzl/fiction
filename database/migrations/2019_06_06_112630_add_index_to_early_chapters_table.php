<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIndexToEarlyChaptersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('early_chapters', function (Blueprint $table) {
            $table->index('bid');
            $table->index('info_id');
            $table->index('chapterId');
            $table->index('chapterName');
            $table->index('is_pay');
            $table->index('goId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('early_chapters', function (Blueprint $table) {
            $table->dropIndex(['bid','info_id','chapterId','chapterName','is_pay','goId']);
        });
    }
}
