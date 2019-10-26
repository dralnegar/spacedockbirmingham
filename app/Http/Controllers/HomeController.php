<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $pageDetails;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->pageDetails['title'] = 'Spacedock Birmingham';
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->pageDetails['currentPage'] = 'home';
        return view('home', $this->pageDetails);
    }
    
    public function facebook()
    {
        $this->pageDetails['currentPage'] = 'facebook';
        return view('facebook', $this->pageDetails);
    }

    public function messageBoard()
    {
        $this->pageDetails['currentPage'] = 'messageBoard';
        return view('messageboard', $this->pageDetails);
    }

    public function zines()
    {
        $this->pageDetails['currentPage'] = 'zines';
        return view('zines', $this->pageDetails);
    }

    public function promenade()
    {
        $this->pageDetails['currentPage'] = 'promenade';
        return view('promenade', $this->pageDetails);
    }

    public function events()
    {
        $this->pageDetails['currentPage'] = 'events';
        return view('events', $this->pageDetails);
    }

    public function starfleet()
    {
        
        $this->pageDetails['currentPage'] = 'starfleet';
        return view('starfleet', $this->pageDetails);
    }

    public function other()
    {
        $this->pageDetails['currentPage'] = 'other';
        return view('other', $this->pageDetails);
    }

    public function members()
    {
        $this->pageDetails['currentPage'] = 'members';
        return view('members', $this->pageDetails);
    }

    
}
