<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
     //
	use SoftDeletes;

	Protected $dates=['deleted_at'];

    // protected $table = 'posts';
    // protected $primaryKey = 'posts_id';

	protected $fillable=[
		'title',
		'content'


	];


}

