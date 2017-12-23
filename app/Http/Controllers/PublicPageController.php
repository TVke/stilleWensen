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

        $HTMLcontent = "<html>
<body bgcolor='#011937'>
<style>
    *,html{padding:0;margin:0;}
</style>
<!--[if (gte mso 9)|(IE)]>
<table width='100%' align='center' cellpadding='0' cellspacing='0' border='0'>
    <tbody>
    <tr>
        <td>
<![endif]-->
<table class='container' width='100%' cellspacing='0' cellpadding='0' style='max-width:100%;'>
    <tbody>
    <tr>
        <td style='text-align:left;vertical-align:top;font-size:0;'>
            <!--[if (gte mso 9)|(IE)]>
            <table width='100%' align='center' cellpadding='0' cellspacing='0' border='0'>
                <tr>
                    <td>
            <![endif]-->
            <div style='width:100%;display:inline-block;vertical-align:top;'>
                <table width='100%' cellspacing='0' cellpadding='0' border='0'>
                    <tbody>
                    <tr>
                        <td style=\"font-size:16px;font-family:'Dosis',Helvetica,Arial,sans-serif;\">


                            <table width='100%' align='center' cellpadding='0' cellspacing='0' border='0'>
                                <tbody>
                                <tr bgcolor='#011937'>
                                    <td style='text-align:center;padding:10px;color:#c2c1c1;'>
                                        <a href='https://stillewensen.be/mail/' style='color:#c2c1c1;'>Bekijk deze mail online</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <!-- top bar -->
                            <a href='https://stillewensen.be/'>
                                <table width='100%' align='center' cellpadding='0' cellspacing='0' border='0'>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <img src='https://stillewensen.be/storage/img/logo.png' alt='Stille Wensen' width='128px' height='78px' style='display:block;margin:0 auto;width:128px;color:#c2c1c1;'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h1 style=\"font-family:'Dosis',Helvetica,Arial,sans-serif;color:white;text-align:center;font-weight:lighter;\">Stille Wensen</h1>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </a>

                            <table width='100%' align='center' cellpadding='0' cellspacing='0' border='0' style='padding:20px;'>
                                <tbody>
                                <tr>
                                    <td style='color:#c2c1c1;text-align:center;'>
                                        Bedankt voor je deelname!
                                    </td>
                                </tr><tr>
                                    <td style='color:#c2c1c1;text-align:center;'>
                                        Via volgende link krijg je toegang tot je filmpje.
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <table width='100%' align='center' cellpadding='0' cellspacing='0' border='0'>
                                <tbody>
                                <tr>
                                    <td style='color:#c2c1c1;text-align:center;'>
                                        <a bgcolor='#247c79' width='150px' href='https://stillewensen.be/' style='display:block;width:150px;margin:10px auto;color:#c2c1c1;background:#247c79;padding:15px;text-decoration:none;'>Je video met geluid</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style='color:#c2c1c1;text-align:center;'>
                                        <a bgcolor='#247c79' href='https://stillewensen.be/overzicht' style='display:block;color:#c2c1c1;'>Bekijk alle wensen</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            </table>
            <![endif]-->
        </td>
    </tr>
</table>
</table>
<!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
</table><![endif]-->
</body>
</html>
";


        if(mail(
            'tvke91@gmail.com',
            "Stille Wensen video",
            $HTMLcontent,
            'From: contact@stillewensen.be'
        )){
            return "gelukt!";
        }
        return "oeps, nog eens proberen";
    }
}
