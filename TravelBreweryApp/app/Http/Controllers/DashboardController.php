<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TourDetail;

class DashboardController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours =(string) TourDetail::inRandomOrder()->limit(5)->get();
        return view('dashboard')->with('tours',json_decode($tours,true));
    }
}
