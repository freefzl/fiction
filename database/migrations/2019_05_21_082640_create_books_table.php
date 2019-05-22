<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('book_name');
            $table->string('author');
            $table->integer('type_id');
            $table->text('description');
            $table->unsignedTinyInteger('status');
            $table->text('tags');
            $table->text('try_read');
            $table->string('protagonist');//主角
            $table->string('re_user');//点评人
            $table->string('re_user_img');//点评人
            $table->text('review');//点评
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
        Schema::dropIfExists('books');
    }
}
