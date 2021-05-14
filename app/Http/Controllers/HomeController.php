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
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('adminHome');
    }

    public function rtHome()
    {
        return view('rtHome');
    }
    public function rwHome()
    {
        return view('rwHome');
    }
    public function sekretarisHome()
    {
        return view('sekretarisHome');
    }
    public function bendaharaHome()
    {
        return view('bendaharaHome');
    }
}
