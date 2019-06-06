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
            $table->index('goId');
            $table->index('is_pay');
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
            $table->dropIndex(['bid','goId','is_pay']);
        });
    }
}
