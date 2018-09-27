<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TourCity;
use App\InclExcl;
use App\TourDetail;

class TourDetailsController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */

  public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

  public function index()
  {
    //$tours = TourDetail::orderBy('created_at','desc')->paginate(10);
    $tours =(string) TourDetail::all();
    // return $tours;
    return view('tourdetails.index')->with('tours',json_decode($tours,true));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $incl=(string)InclExcl::all()->where('type',true);
    $excl=(string)InclExcl::all()->where('type',false);

    return view('tourdetails.create')
    ->with('incl',json_decode($incl,true))
    ->with('excl',json_decode($excl,true));
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $data=$request->all();
    $dayTitles=$data['dayTitle'];
    $dayDescriptions=$data['dayDesc'];
    $dayPictures=$data['cityImg'];
    $incl=$data['tourincl'];
    $excl=$data['tourexcl'];
    //create tourdetail and save
    $tourDetail=new TourDetail;
    $tourDetail->title=$data['title'];
    $tourDetail->headerImg=$data['headerImg'];
    $tourDetail->price=$data['price'];
    $tourDetail->startCountry=$data['flyTo'];
    $tourDetail->returnCountry=$data['returnFrom'];
    $tourDetail->tripStartDate=$data['startDate'];
    $tourDetail->tripEndDate=($data['endDate']==null?'':$data['endDate']);
    $tourDetail->tripDuration=$data['duration'];
    $tourDetail->tourDesc=$data['desc'];
    $tourDetail->save();

    //EXTRACT TOURCITY
    $tourCityArr = [];

    foreach ($dayTitles as $key => $value) {
      $tc=new TourCity;
      $tc->tourCityTitle = $dayTitles[$key];
      $tc->description = $dayDescriptions[$key];
      $tc->photo=$dayPictures[$key];
      array_push($tourCityArr,$tc);
  }
    $tourDetail->tourCities()->saveMany($tourCityArr);
    //  here comes the selected incl/excl
  $tourDetail->inclExcl()->syncWithoutDetaching($incl);
  $tourDetail->inclExcl()->syncWithoutDetaching($excl);
  return redirect()->action('TourDetailsController@index');
}

/**
* Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{
  $tour =TourDetail::find($id);
  $tourCities =TourDetail::find($id)->tourCities;
  $incl=(string)TourDetail::find($id)->inclExcl->where('type',true);
  $excl=(string)TourDetail::find($id)->inclExcl->where('type',false);
  return view('tourdetails.show')->with('tour',json_decode($tour,true))
  ->with('tourCities',json_decode($tourCities,true))
  ->with('incl',json_decode($incl,true))
  ->with('excl',json_decode($excl,true));
}

/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
  $tour =TourDetail::find($id);
  $tourCities =TourDetail::find($id)->tourCities;
  $incl=(string)TourDetail::find($id)->inclExcl->where('type',true);
  $excl=(string)TourDetail::find($id)->inclExcl->where('type',false);
  return view('tourdetails.show')->with('tour',json_decode($tour,true))
  ->with('tourCities',json_decode($tourCities,true))
  ->with('incl',json_decode($incl,true))
  ->with('excl',json_decode($excl,true));
}

/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
  //
}

/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{
  //
}

}
