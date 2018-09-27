<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TourDetail;

class PagesController extends Controller
{
  public function index(){
    //  $title = 'Welcome To Laravel!';
    //return view('pages.index', compact('title'));
    $tours =(string) TourDetail::inRandomOrder()->limit(5)->get();
    // return $tours;
    return view('pages.index')->with('tours',json_decode($tours,true));

  }
  public function test(){
    //  $title = 'Welcome To Laravel!';
    //return view('pages.index', compact('title'));
    return view('pages.test');
  }

  public function itinerary(){
    //  $title = 'Welcome To Laravel!';
    //return view('pages.index', compact('title'));
    return view('pages.itinerary');
  }
  public function signupPage(){
    //  $title = 'Welcome To Laravel!';
    //return view('pages.index', compact('title'));
    return view('pages.signup');
  }
  public function termConditions(){
    //  $title = 'Welcome To Laravel!';
    //return view('pages.index', compact('title'));
    return view('pages.termsconditions');
  }
  public function blogs(){
    //  $title = 'Welcome To Laravel!';
    //return view('pages.index', compact('title'));
    return view('pages.blogs');
  }

}
