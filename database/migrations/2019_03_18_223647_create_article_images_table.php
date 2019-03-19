<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_images', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('article_id');
            $table->unsignedInteger('image_id');
            $table->string('title');
            $table->string('author');
            $table->unsignedTinyInteger('sortorder')->nullable();
            
            $table->unique(['article_id', 'image_id']);
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
            $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_images');
    }
}
