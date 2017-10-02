
<section id="signup-banner">
    <div class="container-fluid">
      <div class="row">
        <div class="hidden-xs col-sm-8 signup-imgbanner">
          <img class="img-responsive" src="../img/tourists.jpg" />
        </div>

        <div class="col-sm-4 signup-column">
          <h2>Sign up now!! </h2>
          <h4>To get Flat Rs3500 discount on our upcoming European Sojourn Backpacking Trip</h4>
          <br>

          <form id="signup-form"  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group ">
              <label for="example-text-input" class="col-2 col-form-label">Name <span>* </span></label>
              <div class="col-10">
                <input class="form-control" type="text"  name="Name"  id="text-name" placeholder="Your Name">
              </div>
            </div>
            <div class="form-group ">
              <label for="example-email-input" class="col-2 col-form-label">Email <span>* </span></label>
              <div class="col-10">
                <input class="form-control" type="email" name="Email" placeholder="Email" id="email-input">
              </div>
            </div>
            <div class="form-group ">
              <label for="example-tel-input" class="col-2 col-form-label">Telephone <span>* </span></label>
              <div class="col-10">
                <input class="form-control" type="text" name="Phone"  placeholder="Mobile Number(+91-xxxxx-xxxxx)" id="tel-input">
              </div>
            </div>
            <div class="text-center ">
              <button type="button" name="signup-button"  id="signup-button" class="btn btn-primary ">Unlock the Deal</button>

            </div>
            <br>
          </form>
        </div>
        <!-- <div class="col-md-8 signup-imagebanner"></div> -->
      </div>
    </div>
  </section>

  <!-- ------ this section consists of the points to generate interest for users to sign up ------ -->
  <section id="tour-features-east-europe">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <h3 class="offer-heading">We Offer the Best Prices</h3>
          <p>Enjoy the very best of East &amp; Central Europe during our 12 Day Europe Vacation tour through 5 countries,
            expertly planned and designed by travel enthusiasts at The Travel Brewery
            <br>
            <strong>The Trip begins on 22nd December 2017 !!</strong>
            <br/>
          <strong>Trip Cost after discount <span style="color:#ff8060"><s>Rs 60,000</s> </span><span style="color:#38bf57" >56,500 + GST </span></strong></p>
          </div>
          <div class="col-sm-7 col-sm-offset-1">
            <!--Tesetimonials here-->
            <blockquote>
              <h3 class="quote-heading">Conducted the tour Flawlessly !!
                <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></span>
              </h3>
              <p class="quote-content">
                Must say it was an excellent trip thanks to a very meticulous planning by Travel Brewery team.
                They conducted the entire trip flawlessly.
              </p>
              <footer class="testimonial-footer"> Mr. Subodh from our Summer Tour 2017</footer>
            </blockquote>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-5"> <!--Side image round one-->
            <img class="img-style" src="img/world-travel.jpg" title="Travel world with Travel Brewery" alt="Reasons why you should travel with Travel Brewery"/>
          </div>
          <div class="col-sm-7">
            <!--Reasons Why you should visit Europe-->
            <h3 class="offer-heading text-center">6 Reasons to Join Travel Brewery’s East European Backpacking Trip</h3>
            <ul class="inline-list-style">
              <li class="list-style">Explore 5 countries including Germany, Czech Republic, Austria, Bratislava and Hungary in 12 days</li>

              <li class="list-style">Celebrate Christmas in the beautiful city of Prague &amp; New Year’s in the party capital of the world - Budapest</li>

              <li class="list-style">Trip includes a Travel Buddy who will travel along to provide trip assistance during your tour</li>

              <li class="list-style">Travel with a group of diverse individuals, make new friends and plan up future vacations</li>

              <li class="list-style">Enjoy full freedom to self explore every city, no more fixed schedules and itineraries</li>

              <li class="list-style">Price includes stay, airport transfers, breakfast and full inter city and intra city travel</li>

            </ul>
          </div>

        </div>
      </div>

    <!-- Itinerary Redirect Modal -->
    <div class="modal fade" id="itineraryModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <button type="button" class="close resetForm" data-dismiss="modal" aria-label="Close" >
              <span aria-hidden="true">&times;</span>
            </button>
            <h3 class="modal-title" id="ModalLongTitle">Congratulations!! You just Availed Rs3500/- Discount</h3>
          </div>
          <div class="modal-body text-center">
            <p> Now Check out the Itinerary by following the link below
              <br/>
              <a href="backpack-eastern-europe.php">East European Sojourn Backpacking Tour Itinerary</a>
            </p>
          </div>
          <div class="modal-footer">

            <button type="button" class="btn btn-secondary resetForm" data-dismiss="modal" >Close</button>

          </div>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
