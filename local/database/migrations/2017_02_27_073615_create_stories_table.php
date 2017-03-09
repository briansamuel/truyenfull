<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stories', function (Blueprint $table) {
            $table->increments('id');
            $table->text('story_title'); //thêm cột tiêu đề
            $table->text('story_excerpt'); // thêm cột tóm tắt
            $table->text('story_description'); // thêm cột description
            $table->text('story_keyword'); // thêm cột keyword
            $table->string('story_thumbnail'); // thêm cột ảnh đại diện
            $table->text('story_author');
            $table->string('story_status')->default('pending'); // thêm cột trạng thái
            $table->string('story_slug'); // thêm cột trạng thái
            $table->integer('last_chapter')->default(0);
            $table->timestamp('chapter_update_at');
            $table->integer('view_month')->default(0);
            $table->integer('view_week')->default(0);
            $table->integer('view_day')->default(0);
            $table->integer('view_total')->default(0);
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
        Schema::dropIfExists('stories');
    }
}
