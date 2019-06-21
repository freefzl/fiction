<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIndexToNovelChaptersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('novel_chapters', function (Blueprint $table) {
            $table->index('bid');
            $table->index('chapter_id');
            $table->index('title');
            $table->index('is_pay');
            $table->index('goId');
            $table->index('is_up');
            $table->index(['is_up','is_pay','goId']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('novel_chapters', function (Blueprint $table) {
            $table->dropIndex(['bid','chapter_id','title','is_pay','goId','is_up']);
        });
    }
}
