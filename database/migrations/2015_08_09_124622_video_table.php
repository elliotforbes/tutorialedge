<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VideoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('videos', function(Blueprint $table)
                       {
                           $table->increments('id');
                           $table->string('title');
                           $table->string('author');
                           $table->string('desc');
                           $table->string('video_url');
                           $table->integer('views');
                           $table->string('course_id');
                           $table->timestamp('published_at');
                           $table->string('slug');
                           $table->string('image_url'); 
                       });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('videos');i
	}

}
