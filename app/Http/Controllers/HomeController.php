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
    
    public function facebook()
    {
        return view('facebook');
    }

    public function messageBoard()
    {
        return view('messageboard');
    }

    public function zines()
    {
        return view('zines');
    }

    public function promenade()
    {
        return view('promenade');
    }

    public function events()
    {
        return view('events');
    }

    public function starfleet()
    {
        return view('starfleet');
    }

    public function other()
    {
        return view('other');
    }

    public function members()
    {
        return view('members');
    }

    
}
