<?php

namespace stilleWensen\Http\Controllers;

use Illuminate\Http\Request;

class PublicPageController extends Controller
{
	/**
	 * Show the info page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function info()
	{
		return view('info');
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
	 * Show the contact page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function contact()
	{
		return view('contact');
	}
}
