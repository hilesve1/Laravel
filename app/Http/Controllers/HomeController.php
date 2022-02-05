<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\records;
use Barryvanveen\Lastfm\Lastfm;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $records = new Records;
        return view('home', ['data' => Records::all()]);
    }

    
   /* public function index()
    {   
       // $lastfm = new Lastfm(new Client(), 'YourApiKey');
       // $albums = $lastfm->userTopAlbums('Coldplay')->get();
        return view('home', ['data' => Records::all()]);
    }*/
}
