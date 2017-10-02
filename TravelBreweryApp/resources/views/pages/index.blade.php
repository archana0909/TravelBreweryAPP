@extends('layouts.app')
@section('content')

  <header>
    <div class="header-content">
    <div class="header-content-inner">
      <h1 id="homeHeading">Brewing Custom Tours Only For You</h1>
      <hr>
      <p><h3>We offer customised vacation packages for Solo, Group and Couple travellers across Europe, South East Asia, Dubai and Mauritius</h3></p>
      <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
    </div>
  </div>
  </header>
    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <h2 class="section-heading text-center">Brewing Custom Tours With Love
              <i class="fa fa-heart text-primary heart-icon"></i>
            </h2>
            <hr class="light">
            <p class="text-faded">Planning and implementing an interesting and fulfilling trip is much like brewing a
              fine drink. Every step requires patience and careful attention, if the process is not followed well,
              the end result can often be quite underwhelming, leaving a bitter after taste.
              <br/><br/>
              At The Travel Brewery, we put great stress on various stages of trip planning,
              from conceptualizing to choosing the best possible itinerary and finally to the execution.
              The effort is to offer something unique where in you get to explore the beautiful European
              sights just like a local.
              <br/><br/>
              No more boring schedules and fixed itineraries, we offer you affordable
              international vacation packages that give you unlimited freedom.
              <p><h2 class="text-center">#travellikealocal</h2></p>
            </p>
          </div>
        </div>
        <div class="icon-aboutus row">
          <div class="col-lg-4 text-center">
            <img class="img-icon" src="{{ asset('img/icons/snorkel.png')}}" title="Snorkel" alt="Image of a snorkel, Explore the hidden gems of the city with guided tours and suggestions by travel brewery" >
            <h4>EXPLORE</h4>
          </div>
          <div class="col-lg-4 text-center">
            <img class="img-icon" src="{{ asset('img/icons/balloon.png')}}" title="Hot Air Ballon" alt="Image of Hot Air ballon, Experience the city like a local">
            <h4>EXPERIENCE</h4>
          </div>
          <div class="col-lg-4 text-center">
            <img class="img-icon" src="{{ asset('img/icons/drink.png')}}" title="Drink" alt="Enjoy the evenings with new friends you make on the tour ">
            <h4>ENJOY</h4>
          </div>

        </div>
        <div class="text-center custom-padding">
          <a href="#services" class="page-scroll btn btn-default ">
            <i class="fa fa-2x fa-chevron-down  text-primary sr-icons"></i>
          </a>
        </div>
      </div>
    </section>
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 text-center">
            <h2 class="section-heading"> What's Included in your itinerary </h2>
            <hr>
          </div>
        </div>
        <div class="icon-aboutus row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-hotel text-primary sr-icons"></i>
              <h3>Accomodation</h3>
              <p class="text-muted">We find the best places to stay at central locations with great facilities</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-train text-primary sr-icons"></i>
              <h3>Logistics</h3>
              <p class="text-muted">We take care of your inter city and intra city travel,
                making it easier for you to explore each city</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
              <div class="service-box">
                <i class="fa fa-4x fa-group text-primary sr-icons"></i>
                <h3>Activities</h3>
                <p class="text-muted">Enjoy an in depth walking tour during the day,<br/>go for amazing pub crawls at night !!!</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
              <div class="service-box">
                <i class="fa fa-4x fa-qq text-primary sr-icons"></i>
                <h3>Trip Assistance</h3>
                <p class="text-muted">Ask us anything - before, during and after the trip.<br/>
                  Our in house expert will travel along you on our backpacking trips.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="iti-portfolio">
          <div class="container">
            <h3 class=text-center>Our Top Tours</h3>
            <hr class="light">
            <div class="row">
              <div class="col-md-12">
                <div class="carousel slide multi-item-carousel" id="iti-carousel">
                  <div class="carousel-inner">
                    <div class="item active">
                      <div class="col-xs-4"><a href="eastern-europe-holiday.php">
                        <article class="caption">
                          <img class="caption-media" src="{{ asset('img/tn_header-iti-1.jpg')}}" alt="Vacation Package to East Europe" title="travel tips">
                          <div class="caption-overlay">
                            <h4 class="caption-overlay-title">Diwali In Europe</h4>
                            <p class="article-desc">
                              12 Days/11 Nights Tour in East Europe for Rs 113,999 only!
                            </p>
                          </div>
                        </article>
                      </a>
                    </div>
                  </div>
                  <div class="item">
                    <div class="col-xs-4"><a href="royal-italian-holiday.php">
                      <article class="caption">
                        <img class="caption-media" src="{{ asset('img/tn_header-iti-2.jpg') }} " alt="Vacation Package to Italy" title="travel tips">
                        <div class="caption-overlay">
                          <h4 class="caption-overlay-title">Royal Italian Sojourn</h4>
                          <p class="article-desc">
                            7 Nights/8 Days Tour of Rome, Florence and Venice for Rs 91,999 only!
                          </p>
                        </div>
                      </article>
                    </a>
                  </div>
                </div>
                <div class="item">
                  <div class="col-xs-4"><a href="bali-vacation-package.php">
                    <article class="caption">
                      <img class="caption-media" src="http://www.travelbrewery.com/blog/wp-content/uploads/2017/09/bali-237196_640.jpg" alt="Vacation Package to Bali" title="Bali Tour">
                      <div class="caption-overlay">
                        <h4 class="caption-overlay-title">The Indonesian Retreat</h4>
                        <p class="article-desc">
                          6 Days / 5 Nights Tour of Bali, Indonesia for Rs 52,999 only!
                        </p>
                      </div>
                    </article>
                  </a>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4"><a href="amazing-dubai-package.php">
                  <article class="caption">
                    <img class="caption-media" src="http://www.travelbrewery.com/blog/wp-content/uploads/2017/09/dubai-1505040_1920.jpg" alt="Vacation Package to Dubai" title="Dubai Tour">
                    <div class="caption-overlay">
                      <h4 class="caption-overlay-title">Amazing Dubai</h4>
                      <p class="article-desc">
                        5 Days/ 4 Nights Tour in the Amazing Dubai only for Rs 40,999/-!
                      </p>
                    </div>
                  </article>
                </a>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#iti-carousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
          <a class="right carousel-control" href="#iti-carousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="tours">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading">UPCOMING TRIPS</h2>
        <h3 class="section-heading"><a href="backpack-eastern-europe.php">THE EAST EUROPEAN SOJOURN</a></h3>
        <hr class="primary">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 text-center">
        <div class="service-box">
          <i class="fa fa-4x fa-globe text-primary sr-icons"></i>
          <h3>5 Countries</h3>
          <!-- <p class="text-muted"></p> -->
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="service-box">
          <i class="fa fa-4x fa-building text-primary sr-icons"></i>
          <i class="fa fa-3x fa-building text-primary sr-icons"></i>

          <h3>5 Cities</h3>
          <!-- <p class="text-muted">We update dependencies to keep things fresh.</p> -->
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="service-box">
          <i class="fa fa-4x fa-calendar text-primary sr-icons"></i>
          <h3>12 Nights</h3>
          <!-- <p class="text-muted">You have to make your websites with love these days!</p> -->
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="service-box">
          <i class="fa fa-2x fa-child text-primary sr-icons"></i>
          <i class="fa fa-4x fa-child text-primary sr-icons"></i>
          <i class="fa fa-2x fa-child text-primary sr-icons"></i>

          <h3>Unlimited Fun</h3>
          <!-- <p class="text-muted">You can use this theme as is, or you can make changes!</p> -->
        </div>
      </div>
    </div>
  </div>
</section>
<aside class="bg-dark">
  <div class="container text-center">
    <div class="call-to-action">
      <h2>Let's Get Started!</h2>
      <hr class="primary">
      <p>Explore and experience Eastern and Central Europe like a local. Enjoy Affordable European Vacations
        at unbelievable prices.</p> <p>Don't believe us? Check out the trip details. Limited slots on offer!</p>
        <a href="backapck-eastern-europe.php" class="btn btn-default btn-xl sr-button">Trip Details</a>
      </div>
    </div>
  </aside>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 text-center">
          <h2 class="section-heading">Contact Us</h2>
          <hr class="primary">
        </div>
        <div class="col-lg-4 col-lg-offset-2 text-center">
          <i class="fa fa-phone fa-3x sr-contact"></i>
          <p>+91-7016768700</p>
        </div>
        <div class="col-lg-4 text-center">
          <i class="fa fa-envelope-o fa-3x sr-contact"></i>
          <p><a href="mailto:info@travelbrewery.com">info@travelbrewery.com</a></p>
        </div>
      </div>
    </div>
  </section>

@endsection
