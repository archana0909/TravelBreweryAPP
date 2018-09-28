<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
  public function submitEnquiryonIti(Request $request)
    {
        $data = $request->all();
         //if($_POST){
           $to = "info@travelbrewery.com"; // this is your Email address
           $name = $data['Name'];    //     this is the sender's Email address
           $from=$data['Email'];
           $phone =$data['Phone'];
           $query=$data['Query'];
           // $tripTitle=$data['tripTitle'];
           //  $tripLink=$data['tripLink'];

          $subject = "Ypu have new Customer!!";
           $message = $name . " \n showed interest in your "."\n\n Contact Details \n\n Name:" .$name ."\n Email: " .$from . "\n\n Contact Number:" . $phone ."\n\nQUERY BY CUSTOMER \n" .$query;

           $headers = "From:" . $from;
           $headers2 = "From:" . $to;
           mail($to,$subject,$message,$headers);
        return redirect()->action('TourDetailsController@index');
    }
}
