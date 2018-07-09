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
     * Show the application dashboard.solicitud
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('stephanie.index');
    }
    public function solicitud()
    {
        return view('stephanie.solicitud');
    }
    public function solicitudes()
    {
        return view('stephanie.solicitudes');
    }
}
