<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('post_tag', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('post_id')->unsigned(); //Foreign key id Nr
          $table->foreign('post_id')->references('id')->on('posts');

          $table->integer('tag_id')->unsigned(); //Foreign key id Nr
          $table->foreign('tag_id')->references('id')->on('tags');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('post_tag');
    }
}
