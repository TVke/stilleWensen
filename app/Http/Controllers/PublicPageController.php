<?php

namespace stilleWensen\Http\Controllers;

use Illuminate\Http\Request;
use stilleWensen\Mail;
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
        $wishes = Wisher::allowedPublic()->simplePaginate(9);
        return view('overview',compact('wishes'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact(Request $request)
    {
        $request->validate([
            'from_name' => 'required|string|min:2|max:255',
            'from_email' => 'required|string|min:6|max:255',
            'subject' => 'required|string|max:255',
            'content' => 'required|string|max:255',
        ]);

        $new_mail = new Mail();
        $new_mail->create([
            'from_name' => $request->from_name,
            'from_email' => $request->from_email,
            'subject' => $request->subject,
            'content' => $request->input('content'),
        ]);

        mail('tvke91@gmail.com',$request->subject,$request->input('content'),'From: contact@stillewensen.be');

        return view('contact')->with('success',null);
    }
}
