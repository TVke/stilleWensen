<?php

namespace stilleWensen\Http\Controllers;

use Illuminate\Http\Request;
use stilleWensen\Wisher;

class PublicPageController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}


    /**
     * Show the overview page.
     *
     * @return \Illuminate\Http\Response
     */
    public function overview()
    {
        return view('overview');
    }

    /**
     * Show the video detail page.
     *
     * @return \Illuminate\Http\Response
     */
    public function video(Wisher $user_slug)
    {
        return view('detail');
    }
}
