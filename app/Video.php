<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model {

	protected $fillable = [
         'title',
        'desc',
        'published_at',
        'course_id',
        'slug',
        'image_url',
    ];

}
