<link href="https://fonts.googleapis.com/css?family=Raleway:400,600|Monoton" rel="stylesheet" type="text/css">
@extends('layouts.app')
@section('content')
<!-- Whatapp icon chat -->
<div class="icon-bar" >
  <a href="https://wa.me/918238566835?text=<?php echo "I'm interested in ".$tour['title']." \n \n Share more details please.";?>" class="whatsapp"><i class="fa fa-2x fa-whatsapp" aria-hidden="true"></i></a>
</div>
<!-- Section for header -->
<section id="iti-header" style="background-image:url({{$tour['headerImg']}})">
  <div class="section-wrap">
    <h1 id="iti-title"class="section-heading">{{$tour['title']}}</h1>
    <div class="section-desc">
      <h3 >{{$tour['tripDuration']}}</h3>
      <p class="price">price per adult &nbsp;<strong style="color:#ffd700;"><i class="fa fa-inr"></i> <?php echo money_format('%!i',$tour['price']) ?> + 5 % GST **</strong></p>
    </div>
    <h3 style="color:#ffd700;"><i class="fa fa-hashtag"></i>{{$tour['title']}}</h3>

  </div>
</section>

<!-------section for Itinerary----- -->
<section id="iti-summary">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
        <div class="row">
          <div class="tour-overview col-sm-6">
            <p class="text"><i class="fa fa-2x fa-clock-o" aria-hidden="true"></i>&nbsp;{{$tour['tripDuration']}}</p>
          </div>
          <div class="tour-overview col-sm-6">
            <p class="text"><i class="fa fa-2x  fa-calendar-check-o" aria-hidden="true"></i>&nbsp;<strong>Tour Dates&nbsp; :&nbsp;</strong>{{$tour['tripStartDate']}} - {{$tour['tripEndDate']}}</p>
          </div>
          <div class="tour-overview col-sm-6">
            <p class="text"><i class="fa fa-2x fa-plane" aria-hidden="true"></i>&nbsp;<strong>Fly To &nbsp; :&nbsp;</strong>{{$tour['startCountry']}}</p>
          </div>
          <div class="tour-overview col-sm-6">
            <p class="text"><i class="fa fa-2x  fa-plane fa-flip-horizontal" aria-hidden="true"></i>&nbsp;&nbsp;<strong>Return From&nbsp; :&nbsp;</strong>{{$tour['returnCountry']}}</p>
          </div>
          <div class="col-sm-8">
            <strong>** {{$tour['Imp_info']}}</strong>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--itinerary details here-->
<section id="iti-view">
  <div class="container-fluid iti-navbar">
    <div class="row">
      <ul class="col-md-12 nav navbar-nav" id="tripdetail-navbar">
        <li class="nav-item">
          <a class="page-scroll" href="<?php echo $_SERVER['REQUEST_URI']."#iti-detail";?>">Trip Detail</a>
        </li>
        <li class="nav-item">
          <a class="page-scroll" href="<?php echo $_SERVER['REQUEST_URI']."#iti-itinerary";?>">Itinerary</a>
        </li>
        <li class="nav-item">
          <a class="page-scroll"  href="<?php echo $_SERVER['REQUEST_URI']."#iti-photos";?>">Photos</a>
        </li>

      </ul>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <div class="iti-page-view" id="iti-detail" >
          <hr class="light">
          <h3>
            <i class="fa fa-info-circle" aria-hidden="true"></i>
            Tour Details
          </h3>
          <div>
            <?php echo nl2br($tour['tourDesc']) ?>
            <hr class="light">
          </div>
          <div class="tripdetails">
            <div class="row outline">
              <div class="col-xs-6">
                <h4>Departure</h4>
              </div>
              <div class="col-xs-6">
                <p>Delhi/Mumbai</p>
              </div>
            </div>
            <div class="row outline">
              <div class="col-xs-6">
                <h4>Departure Time</h4>
              </div>
              <div class="col-xs-6">
                <p>3 Hours Before Flight Time</p>
              </div>
            </div>
            <div class="row outline">
              <div class="col-xs-6">
                <h4>Price Includes</h4>
              </div>
              <div class="col-xs-6">
                <ul class="inline-list-style">
                  <?php foreach ($incl as $inclusion): ?>
                    <li class="list_style"><i class="fa fa-check" style="color:#3BB5C9"></i>&nbsp;{{$inclusion['name'] }}</li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
            <div class="row outline">
              <div class="col-xs-6">
                <h4>Price Excludes</h4>
              </div>
              <div class="col-xs-6">
                <ul class="inline-list-style">
                  <?php foreach ($excl as $exclusion): ?>
                    <li class="list_style"><i class="fa fa-times" style="color:#414141"></i>&nbsp;{{$exclusion['name'] }}</li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <br>
        <!--Itinerary details-->
        <div class="iti-page-view row outline" id="iti-itinerary" >
          <h3>
            <i class="fa fa-list" aria-hidden="true"></i>
            Itinerary
          </h3>

          <div id="accordion" role="tablist" aria-multiselectable="true">
            <ul class="iti-left-desc fa-ul iti-List inline-list-style ">
              <li>
                <span class="fa-stack ">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa-li fa fa-plane fa-stack-1x fa-inverse"></i>
                </span>
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-sm-12">
                      <strong class="iti-heading">Fly From India and Land in {{$tour['startCountry']}}</strong>

                    </div>
                  </div>
                </div>
              </li>
              <?php foreach ($tourCities as $city): ?>
                <?php if ($city['description']!='' || $city['description']!=NULL): ?>
                  <li>
                    <span class="fa-stack ">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa-li fa fa-map-marker fa-stack-1x fa-inverse"></i>
                    </span>
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="card">
                            <div class="card-header" role="tab" id="heading-{{$city['id']}}">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-{{$city['id']}}" aria-expanded="true" aria-controls="collapse-{{$city['id']}}">
                                <strong class="iti-heading">{{$city['tourCityTitle'] }}</strong>
                              </a>
                            </div>
                            <div id="collapse-{{$city['id']}}" class="collapse" role="tabpanel" aria-labelledby="heading-{{$city['id']}}">
                              <div class="card-block">
                                <br>
                                <p class="iti-text">
                                  <?php echo nl2br($city['description']) ?>
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                <?php endif; ?>
              <?php endforeach; ?>
              <li>
                <span class="fa-stack ">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa-li fa fa-plane fa-stack-1x fa-inverse"></i>
                </span>
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-sm-12">
                      <strong class="iti-heading">Fly back to India from {{$tour['returnCountry']}}</strong>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <!-- <br> -->
        <!--Photos-->
        <div class="container-fluid outline iti-page-view" id="iti-photos">
          <h3>
            <i class="fa fa-image" aria-hidden="true"></i>
            Photos
          </h3>
          <div class="carousel slide" id="carousel-photos-1" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <?php $count=0; ?>
              <?php foreach ($tourCities as $city)
              {
                if ($city['photo']!='' || $city['photo']!=NULL)
                {
                  ++$count;
                  if ($count==1){
                    echo "<div class=\"item active\">";
                  }
                  else {
                    echo "<div class=\"item\">";
                  }

                  echo "<img alt=\"".$city['tourCityTitle']."\" src=\"". $city['photo']."\" data-holder-rendered=\"true\">
                  </div>";
                }
              }
              ?>
              <a href="#carousel-photos-1" class="left carousel-control" role="button" data-slide="prev"> <span
                class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span
                class="sr-only">Previous</span> </a>
                <a href="#carousel-photos-1"class="right carousel-control" role="button" data-slide="next"> <span
                  class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span
                  class="sr-only">Next</span> </a></div>
                </div>
              </div>
            </div>
            <!--end photos-->
          </div>
        </div>
      </div>
    </section>
    <aside class="submit-enquiry" id="enquiry-form">
      @include('pages.submitEnquiry')
    </aside>


    @endsection
    
