<?php

namespace stilleWensen;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $fillable = ['from_name','from_email','subject','question'];
}
