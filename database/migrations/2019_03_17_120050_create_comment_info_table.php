<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_info', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('comment_id');
            $table->unsignedInteger('ip');
            $table->unsignedInteger('like')->nullable();
            $table->unsignedInteger('hate')->nullable();
            $table->timestamps();
            
            $table->unique(['comment_id', 'ip']);
            $table->foreign('comment_id')->references('id')->on('comments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment_info');
    }
}
