<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function index(){
    //  $title = 'Welcome To Laravel!';
    //return view('pages.index', compact('title'));
    return view('pages.index');
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

  public function test1(){
    //  $title = 'Welcome To Laravel!';
    //return view('pages.index', compact('title'));
    return view('pages.test');
  }
}
