<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Event;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        return view('home');
    }

    public function users()
    {
        $users = User::all();
        return view('admin/users')->with('users', $users);
    }

    public function landing()
    {
        $events = Event::all();
        return view('welcome')->with('events', $events);
    }

    public function about()
    {
        return view('about');
    }

    
}
