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
           $name = $data['name'];    //     this is the sender's Email address
           $from=$data['email'];
           $phone =$data['telephone'];
           $query=$data['message'];
            $tripTitle=$data['tripTitle'];
         if(isset($query)&&!empty($query))
           {
             $subject = "Query by an Interested Customer";
           $message = $name . " \n showed interest in your ".$tripTitle."\n\n Contact Details \n\n Name:" .$name ."\n Email: " .$from . "\n\n Contact Number:" . $phone ."\n\nQUERY BY CUSTOMER \n" .$query;

           }
           else {
             $subject = "Sign Up Details for Interested Customer";
           }
           $headers = "From:" . $from;
           $headers2 = "From:" . $to;
           mail($to,$subject,$message,$headers);
        return redirect()->action('TourDetailsController@index');
    }
}
