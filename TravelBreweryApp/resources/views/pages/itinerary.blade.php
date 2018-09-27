@extends('layouts.app')
@section('content')

<?php
setlocale(LC_MONETARY, 'en_US');
$headerBackimg ="img/header-iti-2.jpg";
$headerHeading="The &nbsp;&nbsp;Royal&nbsp;&nbsp; Italian&nbsp;&nbsp; Sojourn";
$tripStartDate="October/November 2017 </br> (Flexible Departures Available)";
$tripEndDate="";
$tripDuration="8 Days / 7 Nights";
$flyToDest="Venice";
$flyBackFrom="Rome";
$packagePrice=91999;
$tourTag="The Royal Italian Sojourn";
$tourDesc="Explore the scenic beauty &amp; lip smacking food of Italy during the month of October and November. \n\n We have designed the perfect itinerary for you!!";
?>
<!-- Section for header -->
<section id="iti-header" style="background-image:url(<?php echo $headerBackimg; ?>)">
  <div class="section-wrap">
    <h1 class="section-heading"><?php echo $headerHeading; ?></h1>
    <div class="section-desc">
      <h3 ><?php echo $tripDuration; ?></h3>
      <p class="price">price per adult &nbsp;<strong style="color:#ffd700;"><i class="fa fa-inr"></i> <?php echo money_format('%!i',$packagePrice) ?>/-</strong></p>
    </div>
    <h3 style="color:#ffd700;"><i class="fa fa-hashtag"></i><?php echo $tourTag; ?></h3>
  </div>
</section>

<!-------section for Itinerary----- -->
<section id="iti-summary">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
        <div class="row">
          <div class="tour-overview col-sm-6">
            <p class="text"><i class="fa fa-2x fa-clock-o" aria-hidden="true"></i>&nbsp;<?php echo $tripDuration ?></p>
          </div>
          <div class="tour-overview col-sm-6">
            <p class="text"><i class="fa fa-2x  fa-calendar-check-o" aria-hidden="true"></i>&nbsp;<strong>Tour Dates&nbsp; :&nbsp;</strong><?php echo $tripStartDate; ?></p>
          </div>
          <div class="tour-overview col-sm-6">
            <p class="text"><i class="fa fa-2x fa-plane" aria-hidden="true"></i>&nbsp;<strong>Fly To &nbsp; :&nbsp;</strong><?php echo $flyToDest ?></p>
          </div>
          <div class="tour-overview col-sm-6">
            <p class="text"><i class="fa fa-2x  fa-plane fa-flip-horizontal" aria-hidden="true"></i>&nbsp;&nbsp;<strong>Return From&nbsp; :&nbsp;</strong><?php echo $flyBackFrom ?></p>
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
          <a class="page-scroll" href="#iti-detail">Trip Detail</a>
        </li>
        <li class="nav-item">
          <a class="page-scroll" href="#iti-itinerary">Itinerary</a>
        </li>
        <li class="nav-item">
          <a class="page-scroll"  href="#iti-photos">Photos</a>
        </li>

      </ul>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <div class="iti-page-view" id="iti-detail" >
          <h2>
            <i class="fa fa-info-circle" aria-hidden="true"></i>
            Tour Details
          </h2>
          <div><?php echo $tourDesc; ?>
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
                  <li class="list_style"><i class="fa fa-check" style="color:#3BB5C9"></i>&nbsp;International Flights</li>
                  <li class="list_style"><i class="fa fa-check" style="color:#3BB5C9"></i>&nbsp;Airport Transfers in Berlin and Budapest</li>
                  <li class="list_style"><i class="fa fa-check" style="color:#3BB5C9"></i>&nbsp;Stay in centrally located Hotel or Apartments</li>
                  <li class="list_style"><i class="fa fa-check" style="color:#3BB5C9"></i>&nbsp;Breakfast</li>
                  <li class="list_style"><i class="fa fa-check" style="color:#3BB5C9"></i>&nbsp;Inter City Transfer by bus or train</li>
                  <li class="list_style"><i class="fa fa-check" style="color:#3BB5C9"></i>&nbsp;Unlimited Intra-city travel by Metro/Bus/Trams</li>
                  <li class="list_style"><i class="fa fa-check" style="color:#3BB5C9"></i>&nbsp;All Taxes and Service Charges</li>
                  <li class="list_style"><i class="fa fa-check" style="color:#3BB5C9"></i>&nbsp;Trip and Travel assistance</li>
                  <li class="list_style"><i class="fa fa-check" style="color:#3BB5C9"></i>&nbsp;Concierge service by a Travel Brewery Expert</li>
                </ul>
              </div>
            </div>
            <div class="row outline">
              <div class="col-xs-6">
                <h4>Price Excludes</h4>
              </div>
              <div class="col-xs-6">
                <ul class="inline-list-style">
                  <li class="list_style"><i class="fa fa-times" style="color:#414141"></i>&nbsp;Visa charges, to be paid to VFS global directly</li>
                  <li class="list_style"><i class="fa fa-times" style="color:#414141"></i>&nbsp;Travel Insurance</li>
                  <li class="list_style"><i class="fa fa-times" style="color:#414141"></i>&nbsp;Any tips/local taxes</li>
                  <li class="list_style"><i class="fa fa-times" style="color:#414141"></i>&nbsp;Meals other than Breakfast</li>
                  <li class="list_style"><i class="fa fa-times" style="color:#414141"></i>&nbsp;Paid Attractions</li>
                  <li class="list_style"><i class="fa fa-times" style="color:#414141"></i>&nbsp;Anything not mentioned above</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <br>

        <!--Itinerary details-->

        <div class="iti-page-view row outline" id="iti-itinerary" >
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
                      <strong class="iti-heading">Fly From India and Land in <?php echo $flyToDest; ?></strong>

                    </div>
                  </div>
                </div>
              </li>
              <li>
                <span class="fa-stack ">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa-li fa fa-map-marker fa-stack-1x fa-inverse"></i>
                </span>
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="card">
                        <div class="card-header" role="tab" id="heading0">
                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
                            <strong class="iti-heading">2 Nights in Venice</strong>
                          </a>
                        </div>
                        <div id="collapse0" class="collapse in" role="tabpanel" aria-labelledby="heading0">
                          <div class="card-block">
                            <hr class="light"/>
                            <p class="iti-text">

                              Visit &amp; explore the most romantic city in the world. It is an experience to cherish and remember forever, hire a gondola to ride the numerous canals or spend your evenings at the St. Mark's Square absorbing the surreal atmosphere.
                            </p>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </li>
              <li>
                <span class="fa-stack ">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa-li fa fa-map-marker fa-stack-1x fa-inverse"></i>
                </span>
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="card">
                        <div class="card-header" role="tab" id="heading1">
                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" aria-controls="collapse1">
                            <strong class="iti-heading">2 nights in Florence</strong>
                          </a>
                        </div>
                        <div id="collapse1" class="collapse" role="tabpanel" aria-labelledby="heading1">
                          <div class="card-block">
                            <hr class="light"/>
                            <p class="iti-text">
                              Florence is the capital of Italy's Tuscany region and is known to be home to legendary Rennaissance art and architecture. Vist attractions such as the Duomo and Uffizi Gallery, spend your evenings in the old town walking around the beautiful city. Shopping lovers head to The Mall for discounts up to 40% on brands like Gucci and Prada!
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <span class="fa-stack ">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa-li fa fa-map-marker fa-stack-1x fa-inverse"></i>
                </span>
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="card">
                        <div class="card-header" role="tab" id="heading2">
                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            <strong class="iti-heading">3 nights in Rome</strong>
                          </a>
                        </div>
                        <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2">
                          <div class="card-block">
                            <hr class="light"/>
                            <p class="iti-text">
                              Italy's capital and one of the most historical cities in the world, a city with a strong metropolitan feel whose every lane and building tells a story. Visit famous monuments like Pantheon, Colloseum and Trevi Fountain to get a taste of life during the Roman Times. Spare a day to visit the Vatican City which houses the headquarters of Roman Catholic Church, the St Peter's Basillica and Michelangelo's most reknowned piece of work - Fresco's of The Sistine Chapel.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li >
                <span class="fa-stack ">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa-li fa fa-plane fa-stack-1x fa-inverse"></i>
                </span>
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-sm-12">
                      <strong class="iti-heading">Fly back to India from <?php echo $flyBackFrom; ?></strong>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>

        <div class="container-fluid outline iti-page-view" id="iti-photos">
          <div class="carousel slide" id="carousel-photos-1" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img alt="Rome"
                src="http://www.travelbrewery.com/blog/wp-content/uploads/2017/09/rome-1.jpg" data-holder-rendered="true">
              </div>
              <div class="item">
                <img alt="Rome"
                src="http://www.travelbrewery.com/blog/wp-content/uploads/2017/09/rome-2.jpg" data-holder-rendered="true">
              </div>
              <div class="item">
                <img alt="Florence"
                src="http://www.travelbrewery.com/blog/wp-content/uploads/2017/09/florence-1.jpg" data-holder-rendered="true">
              </div>
              <div class="item">
                <img alt="Florence"
                src="http://www.travelbrewery.com/blog/wp-content/uploads/2017/09/florence-2.jpg" data-holder-rendered="true">
              </div>
              <div class="item">
                <img alt="Venice"
                src="http://www.travelbrewery.com/blog/wp-content/uploads/2017/09/venice-1.jpg" data-holder-rendered="true">
              </div>
              <div class="item">
                <img alt="Venice"
                src="http://www.travelbrewery.com/blog/wp-content/uploads/2017/09/venice-2.jpg" data-holder-rendered="true">
              </div>
              <div class="item">
                <img alt="Venice"
                src="http://www.travelbrewery.com/blog/wp-content/uploads/2017/09/venice-3.jpg" data-holder-rendered="true">
              </div>
              <a href="#carousel-photos-1" class="left carousel-control" role="button" data-slide="prev"> <span
                class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span
                class="sr-only">Previous</span> </a>
                <a href="#carousel-photos-1"class="right carousel-control" role="button" data-slide="next"> <span
                  class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span
                  class="sr-only">Next</span> </a></div>
                </div>
              </div>
              <br>
            </div>
          </div>
        </div>
      </section>
      <aside class="submit-enquiry" id="enquiry-form">
        <?php include 'submit-enquiry.php'; ?>
      </aside>
      @endsection
