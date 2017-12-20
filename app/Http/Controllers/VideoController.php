<?php

namespace stilleWensen\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use stilleWensen\Wisher;

class VideoController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        //
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('wisher.add');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function terms()
	{
		return view('wisher.terms');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return
     */
    public function store(Request $request)
    {
        $request->allow_public = ($request->allow_public)?1:0;
        $request->validate([
            'sender_name' => 'required|string|min:2|max:255',
            'sender_email' => 'required|string|unique:wishers|min:6|max:255',
            'recipient_name' => 'max:255',
            'recipient_email' => 'max:255',
            'allow_public' => 'boolean',
        ]);

        $quiet_slug = str_slug($request->sender_name);
        if(Wisher::where('quiet_slug',$quiet_slug)->count()>0){
            $quiet_slug = str_slug("van ".$request->sender_name);
        }
        if(Wisher::where('quiet_slug',$quiet_slug)->count()>0){
            $quiet_slug = str_slug("vanwegen ".$request->sender_name);
        }
        if(Wisher::where('quiet_slug',$quiet_slug)->count()>0){
            $i = 1;
            while(Wisher::where('quiet_slug',$quiet_slug)->count()>0){
                $quiet_slug = str_slug($request->sender_name." ".++$i);
            }
        }

        $sound_slug = hash('crc32b',$quiet_slug);

        $request->recipient_name = ($request->recipient_name) ?? "";
        $request->recipient_email = ($request->recipient_email) ?? "";

        $new_wisher = new Wisher();
        $new_wisher->create([
            'sender_name' => $request->sender_name,
            'sender_email' => $request->sender_email,
            'quiet_slug' => $quiet_slug,
            'recipient_name' => $request->recipient_name,
            'recipient_email' => $request->recipient_email,
            'full_sound_slug' => $sound_slug,
            'allow_public' => $request->allow_public,
            'sound_available' => Carbon::now()->addWeek(),
        ]);

        return view('wisher.add')->with('success',null);
    }

    /**
     * Display the specified resource.
     *
     * @param Wisher $sender
     * @return void
     */
    public function show(Wisher $sender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return void
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return void
     */
    public function destroy($id)
    {
        //
    }
}
