<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIndexToEarlyBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('early_books', function (Blueprint $table) {
            $table->index('name');
            $table->index('info_id');
            $table->index('author');
            $table->index('is_yc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('early_books', function (Blueprint $table) {
            $table->dropIndex(['name','info_id','author','is_yc']);
        });
    }
}
