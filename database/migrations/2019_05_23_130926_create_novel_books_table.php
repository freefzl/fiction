<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNovelBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novel_books', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name');
            $table->string('author')->nullable();
            $table->integer('words')->nullable();
            $table->string('protagonist')->nullable();
            $table->string('cover_img')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->text('synopsis')->nullable();
            $table->integer('chapter_number')->nullable();
            $table->integer('type_id')->nullable();
            $table->integer('channel_id')->nullable();
            $table->integer('tag_id')->nullable();
            $table->timestamp('pubdate')->nullable();
            $table->timestamp('try_id')->nullable();
            $table->tinyInteger('is_delete')->nullable();
            $table->tinyInteger('is_online')->nullable();
            $table->string('pc_read_url')->nullable();
            $table->string('m_read_url')->nullable();
            $table->integer('comment_id')->nullable();
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
        Schema::dropIfExists('novel_books');
    }
}
