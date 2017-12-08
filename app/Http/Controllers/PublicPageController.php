<?php

namespace stilleWensen\Http\Controllers;

use Illuminate\Http\Request;

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
}
