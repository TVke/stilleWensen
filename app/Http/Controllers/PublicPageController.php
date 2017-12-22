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
        $wishes = Wisher::withVideo()->simplePaginate(9);
        return view('overview',compact('wishes'));
    }

    /**
     * Show the video detail page.
     *
     * @param Wisher $user_slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|Wisher
     */
    public function video(Wisher $user_slug)
    {
        $wisher = $user_slug;
        return view('detail',compact('wisher'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact(Request $request)
    {
//        return $request;
        $request->validate([
            'from_name' => 'required|string|min:2|max:255',
            'from_email' => 'required|email|min:6|max:255',
            'subject' => 'required|string|max:255',
            'question' => 'required|string|max:255',
        ]);

        $new_mail = new Mail();
        $new_mail->create([
            'from_name' => $request->from_name,
            'from_email' => $request->from_email,
            'subject' => $request->subject,
            'question' => $request->question,
        ]);

        mail('tvke91@gmail.com',
            $request->subject,$request->question,
            'From: contact@stillewensen.be'.'\r\n'.
            'Reply-To: '.$request->from_email);

        return redirect(route('contact'))->with('success','success');
    }

    public function mailWisher(Wisher $wish){

        if(mail(
            'tvke91@gmail.com',
            $request->subject,
            $request->question,
            'From: contact@stillewensen.be'.'\r\n'.
            'Reply-To: '.$request->from_email
        )){
            return "gelukt!";
        }
        return "oeps, nog eens proberen";
    }
}
