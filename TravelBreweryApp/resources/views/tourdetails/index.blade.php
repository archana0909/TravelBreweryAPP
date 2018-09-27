@extends('layouts.app')
@section('content')
<!-- Whatapp icon chat -->
<div class="icon-bar" >
   <a href="https://wa.me/918238566835?text=<?php echo "Hi there! Need help with my travel plan.";?>" class="whatsapp"><i class="fa fa-2x fa-whatsapp" aria-hidden="true"></i></a>
</div>
<!-- add a background to it  -->
<section id="iti-all">
  <!--  add a scrollable container here -->
  <div class="container-fluid">
    <!-- <hr class="light"> -->
    <!-- <h1 id="homeHeading" class="text-center">BREWING CUSTOM TOURS FOR YOU</h1>
    <hr/> -->
    <div class="row">
      <div class="col-sm-12" >
        <?php foreach ($tours as $tour): ?>
          <div class="col-sm-3 iti-thumbnail">
            <div class="item">
             <h4 class="iti-title"><a href="itinerary/{{$tour['id']}}">{{$tour['title']}}</a>
               <!--  TODO:Add option to edit or delete iti for an admin-->
            <!-- <span class="pull-right">  <i class="iti-like fa fa-heart" style="color:#f1f1f1"></i></span></h4> -->
                <article class="">
                  <a href="itinerary/{{$tour['id']}}"><img class="caption-media" src="{{$tour['headerImg']}}" alt="{{$tour['title']}}"></a>
                  <div class="">
                    <hr class="light">
                    <p class="article-desc">
                      <strong style="color:#3BB5C9;">{{$tour['tripDuration']}} Tour  </strong>&nbsp;| &nbsp;<strong style="color:#2d2121;">Starting @ Rs {{$tour['price']}} only!</strong>
                    </p>
                  </div>
                </article>
              </a>
            </div>

          </div>
        <?php endforeach; ?>
      </div>


      </div>

    </div>
  </section>
  @endsection
