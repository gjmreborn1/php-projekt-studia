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
        // TODO tu return view('home') a tam jakos layout w srodku uwzgledniany
        // w tym layoucie jest navbar, logout/wyswietlanie nicku, redirecty /login <--> /home wszystkie sa
        return view('layouts/app');
    }
}
