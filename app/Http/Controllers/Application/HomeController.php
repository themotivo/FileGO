<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;

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
     * Show the Home.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('application.home');
    }

}
