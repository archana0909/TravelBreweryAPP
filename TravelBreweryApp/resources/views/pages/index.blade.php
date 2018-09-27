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
<!-- Whatapp icon chat -->
<div class="icon-bar" >
   <a href="https://wa.me/918238566835?text=<?php echo "Hi there! Need help with my travel plan.";?>" class="whatsapp"><i class="fa fa-2x fa-whatsapp" aria-hidden="true"></i></a>
</div>
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
      <div class="col-md-4 text-center">
        <img class="img-icon" src="{{ asset('img/icons/snorkel.png')}}" title="Snorkel" alt="Image of a snorkel, Explore the hidden gems of the city with guided tours and suggestions by travel brewery" >
        <h4>EXPLORE</h4>
      </div>
      <div class="col-md-4 text-center">
        <img class="img-icon" src="{{ asset('img/icons/balloon.png')}}" title="Hot Air Ballon" alt="Image of Hot Air ballon, Experience the city like a local">
        <h4>EXPERIENCE</h4>
      </div>
      <div class="col-md-4 text-center">
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
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 text-center">
            <h2 class="section-heading"> Our Top Tours </h2>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <!-- <div class="carousel slide multi-item-carousel" > -->
            <div class="owl-carousel">
              <?php foreach ($tours as $tour): ?>
              <div class="item ">
                <a href="itinerary/{{$tour['id']}}">
                  <article class="caption">
                    <img class="caption-media" src="{{$tour['headerImg']}}"
                    alt="{{$tour['title']}}">
                    <div class="caption-overlay">
                      <h4 class="caption-overlay-title">{{$tour['title']}}</h4>
                      <p class="caption-overlay-desc">

                        <strong >{{$tour['tripDuration']}} Tour  </strong>&nbsp;| &nbsp;<strong>Starting @ Rs {{$tour['price']}} only!</strong>
                        <!-- 11 Days/10 Nights Tour in East Europe for Rs 59,999 only! -->
                      </p>
                    </div>
                  </article>
                </a>
              </div>
            <?php endforeach; ?>

            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="feedback-home">
      <div class="container text-center">
        <h2 >TESTIMONIALS</h2>
        <hr class="primary">

        <!-- LIST OF REVIEWS  -->
        <div class="owl-carousel">
          <!-- item begin -->
          <div class="item feed-cust container-fluid">
            <div class="row">
              <div class="col-sm-4">
                <div class="cust-img text-center" >
                  <img  class="round-img"src="http://www.travelbrewery.com/blog/wp-content/uploads/2018/02/IMG_20171226_123041.jpg">
                </div>
              </div>
              <div class="col-sm-8">
                <div class="cust-name">
                  <h4>Ankita Ashara</h4>
                </div>
                <div class="feedback-text">
                  <p >
                    Being this traveler across Europe since April 2016, the best trip I had it was with Travel Brewery.
                    Having a tour leader who was equally chill and supportive to whatever questions we throw on him be it
                    in terms of touristy questions, details of a specific place and what not.
                    <br>
                    I was really overwhelmed on the 1st day of the trip only when he went to receive everyone personally at the airport.
                    The amazing set of friends I made on the trip made it to the list of best holidays I ever had.
                    <br>
                    Travel Brewery and Vatsal Jain - both did a super amazing job of making this trip of what I want from this holiday.
                    From welcoming the new year (2018) on the streets of Budapest, watching the Budapest eye and Bollywood music was one of the best night of the trip.
                    Cheers to the team of Travel Brewery. ;-)
                    <br> I look forward for more trips with them in the future..
                    Yaar Vatsal please Japan plan kar le. ;-)
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- end item -->
          <!-- item begin -->
          <div class="item feed-cust container-fluid">
            <div class="row">
              <div class="col-sm-4">
                <div class="cust-img text-center" >
                  <img  class="round-img"src="http://www.travelbrewery.com/blog/wp-content/uploads/2018/02/IMG_20171228_122149.jpg">
                </div>
              </div>
              <div class="col-sm-8">
                <div class="cust-name">
                  <h4>Elina Joseph</h4>
                </div>
                <div class="feedback-text">
                  <p>
                    Being a keen traveller, I have travelled with lot of travel companies but this one has been one of favourites so far,
                    because the company knows how to keep the interest area of all the travellers in mind and give each of them a chance
                    to explore according to their likes.
                    <br>The main thing which I really luved was the organizer asked all of us personally about ur interests/likes/things we wants to do
                    during our trip and tried to complete all of that.Accommodation booked by them - super awesome as all of them were Centrally located...
                    easily approachable ( all of us were roaming around like locals) <br>
                    All the major site attractions were covered including the famous restaurants/cafes/pubs/casinos.
                    The travel agent was very well informed about all the places so the trip was really smooth..full of fun n hassle free.
                    <br>Looking forward for more trips with The Travel Brewery.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- end item -->
          <!-- item begin -->
          <div class="item feed-cust container-fluid">
            <div class="row">
              <div class="col-sm-4">
                <div class="cust-img text-center" >
                  <img  class="round-img"src="http://www.travelbrewery.com/blog/wp-content/uploads/2018/02/IMG_20171226_153050_01.jpg">
                </div>
              </div>
              <div class="col-sm-8">
                <div class="cust-name">
                  <h4>Abhishek Behal</h4>
                </div>
                <div class="feedback-text">
                  <p >
                    Traveled with travelbrewery last month across 5 countries .. Had an amazing time,
                    one of the most memorable trips so far..<br>
                    All together a different experience traveling with strangers who turned into friends by the end of the trip. Vatsal is a well experienced and enterprising trip crafter. He organized for everything possible from accommodations to activities and made our trip worth the while. Prague and Budapest were definitely the high points. Thank you guys, will definitely be traveling with you again soon.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- end item -->
          <!-- item begin -->
          <div class="item feed-cust container-fluid">
            <div class="row">
              <div class="col-sm-4">
                <div class="cust-img text-center" >
                  <img  class="round-img"src="http://www.travelbrewery.com/blog/wp-content/uploads/2018/02/IMG_20171226_122804.jpg">
                </div>
              </div>
              <div class="col-sm-8">
                <div class="cust-name">
                  <h4>Rachit Goyal</h4>
                </div>
                <div class="feedback-text">
                  <p >
                    It was meticulously managed.Taking care of each and everything.
                    <br>Would love to travel more with same group.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- end item -->
        </div>
      </div>
    </section>
    <section id="team" >
      <div class="container">
        <h2 class="section-heading text-center">Know Your Travel Buddy</h2>
        <hr>
        <div class="row">
          <div class=" item col-sm-4">
            <img src="http://www.travelbrewery.com/blog/wp-content/uploads/2018/02/IMG_20171226_150838.jpg" class="round-img">
            <h4 class="text-center">Vatsal Jain</h4>
            <p>An MBA in Finance and a former Investment Banker, Vatsal is a food and coffee lover and can go to great extents to get an authentic travel experience.
              He loves walking and exploring every city as a local, if he is you trip guide, be prepared with a good pair of shoes ;)</p>
            </div>
            <div class="item col-sm-4">
              <img src="http://www.travelbrewery.com/blog/wp-content/uploads/2018/02/UNADJUSTEDNONRAW_thumb_2785.jpg" class="round-img">
              <h4 class="text-center">Archana Sharma</h4>
              <p>Our very own Tech Head, Archana is a former Software Developer at Microsoft.
                The "mom" of our travel family and the most caring trip co-ordinator you can ever ask for,
                a trip with Archana ensures you of unlimited fun, awesome food and unforgettable memories! </p>
              </div>
              <div class="item col-sm-4">
                <img src="http://www.travelbrewery.com/blog/wp-content/uploads/2018/02/UNADJUSTEDNONRAW_thumb_2941.jpg" class="round-img">
                <h4 class="text-center">Prateek Jain</h4>
                <p>A CA whose number crunching skills are mind boggling. Reach out to him for the best travel hacks and best value travel deals across Europe.
                  He loves his beer and if he is your trip guide, well you can rest assured that he will make sure that you trust the best local beers around!</p>
                </div>
              </div>
            </div>
          </section>
          <section id="contact">
            <div class="container">
              <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                  <h2 class="section-heading">Contact Us</h2>
                  <hr class="primary">
                </div>
                <div class="col-sm-4 col-sm-offset-2 text-center">
                  <a href="tel:+91-8238566835"><i class="fa fa-phone fa-3x sr-contact"></i></a>
                  <p>+91-8238566835</p>
                </div>
                <div class="col-sm-4 text-center">
                  <a href="mailto:info@travelbrewery.com"><i class="fa fa-envelope-o fa-3x sr-contact"></i></a>
                  <p>info@travelbrewery.com</p>
                </div>
              </div>
            </div>
          </section>

          @endsection
