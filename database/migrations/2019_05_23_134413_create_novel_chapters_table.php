<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNovelChaptersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novel_chapters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('novel_id')->nullable();
            $table->timestamp('pubdate')->nullable();
            $table->tinyInteger('is_page')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('novel_chapters');
    }
}
