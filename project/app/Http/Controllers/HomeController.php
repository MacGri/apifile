<?php

namespace App\Http\Controllers;

use App\Download;
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
    public function index()
    {
        $userId = \Auth::id();
        $downloads = Download::where('user_id', $userId)->get();
        return view('default')->with('downloads', $downloads);
    }
}
