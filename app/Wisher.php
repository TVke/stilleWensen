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
		'sender_name', 'sender_email','quiet_slug',
        'recipient_name','recipient_email','full_sound_slug',
        'soundless_video','sound_video',
        'allow_public',
        'sound_available'
	];
	protected $dates = ['sound_available'];


    /**
     * @param $query
     * @return mixed
     */
    public function scopeAllowedPublic($query)
    {
        return $query->where('allow_public', 1);
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeWithVideo($query)
    {
        return $query->whereNotNull('soundless_video');
    }
}
