<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

//        $request->session()->put(['edwin'=>'instructor']);
//        session(['peter'=>'student']);

       // $request->session()->flush();

       // return $request->session()->all();

        // Flashing data is valid only in the current request
        //$request->session()->flash('message','post has been created');
        //return $request->session()->get('message');
        // Here the flash 'message' is removed from the session, use reFlash to keep it one more request



        return view('home');
    }
}
