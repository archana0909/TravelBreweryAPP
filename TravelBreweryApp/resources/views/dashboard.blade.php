@extends('layouts.app')

@section('content')
<!-- Whatapp icon chat -->
<div class="icon-bar" >
   <a href="https://wa.me/918238566835?text=<?php echo "Hi there! Need help with my travel plan.";?>" class="whatsapp"><i class="fa fa-2x fa-whatsapp" aria-hidden="true"></i></a>
</div>
  <section id="dashboard-header">
    <div class="container-fluid">
      <div class="row">
        <div class=" pull-right col-sm-4 text-center outline-row text-center">
          <h2 class="section-heading">Welcome {{ Auth::user()->name }} </h2>
          <hr>
          @if(Auth::user()->isAdministrator())
          <p> <a href="/itinerary/create">Create a new trip itinerary</a>
          </p>
          @else
            <h3>Let's plan your vacation your way</h3>
          @endif
        </div>
      </div>
    </div>
  </section>
  <!-- TODO:make a board to show top trips here perferably by tags(future) -->
  <section id="iti-portfolio">
    <div class="container">
      <h3 class=text-center>Our Top Tours</h3>
      <hr class="light">
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

<!-- customize ur trip single page form either navigate to a new page or on same page-->
<section>
  <h4 class="text-center">Still not found what you are looking for?
    <br> Send us an email at <b style="color:#3bb5c9;">info@travelbrewery.com</b> and We will design your dream trip  </h4>
</section>
<!-- show feed of insta for latest posts and info -->
<section>

</section>
@endsection
