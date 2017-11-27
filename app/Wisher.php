<?php

namespace stilleWensen;

use Illuminate\Database\Eloquent\Model;

class Wisher extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'sender_name', 'sender_email','quit_slug','recipient_name','recipient_email','full_sound_slug'
	];
}
