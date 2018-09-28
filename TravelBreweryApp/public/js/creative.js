(function($) {
  "use strict"; // Start of use strict
  var formIsValid=true;
  // jQuery for page scrolling feature - requires jQuery Easing plugin
  $(document).on('click', 'a.page-scroll', function(event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top - 50)
    }, 1250, 'easeInOutExpo');
    event.preventDefault();
  });

  // Highlight the top nav as scrolling occurs
  $('body').scrollspy({
    target: '.navbar-fixed-top',
    offset: 51
  });

  $("#feedback-home .owl-carousel").owlCarousel({
    items:1,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:7000,
    autoplayHoverPause:false
  });

  $("#iti-portfolio .owl-carousel").owlCarousel({
    items:2,
    center:true,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:false
  });

  // Closes the Responsive Menu on Menu Item Click
  $('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
  });

  // Offset for Main Navigation
  $('#mainNav').affix({
    offset: {
      top: 100
    }

  });

  $('#euroTripNav').affix({
    offset: {
      top: 100
    }
  });

  $('.multi-item-carousel').carousel({
    interval: false
  });

  // for every slide in carousel, copy the next slide's item in the slide.
  // Do the same for the next, next item.
  $('.multi-item-carousel .item').each(function(){
    var next = $(this).next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    if (next.next().length>0) {
      next.next().children(':first-child').clone().appendTo($(this));
    } else {
      $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
    }
  });
  $(window).scroll(function () {
    //if you hard code, then use console
    //.log to determine when you want the
    //nav bar to stick.
    //console.log($(window).scrollTop())
    if ($(window).scrollTop() > $(window).height()) {
      $('#tripdetail-navbar').addClass('navbar-fixed');
      // $('html, body').animate({padding-top: '-=120px'}, 800);
      $('.iti-page-view').css('padding-top',120);
      $('#enquiry-form').addClass('fixed');

    }
    if ($(window).scrollTop() < $(window).height()) {
      $('.iti-page-view').css('padding-top',50);
      $('#tripdetail-navbar').removeClass('navbar-fixed');
      $('#enquiry-form').removeClass('fixed');
    }
  });

  // Initialize and Configure Scroll Reveal Animation
  window.sr = ScrollReveal();
  sr.reveal('.sr-icons', {
    duration: 600,
    scale: 0.3,
    distance: '0px'
  }, 200);
  sr.reveal('.sr-button', {
    duration: 1000,
    delay: 200
  });
  sr.reveal('.sr-contact', {
    duration: 600,
    scale: 0.3,
    distance: '0px'
  }, 300);

  // Initialize and Configure Magnific Popup Lightbox Plugin
  $('.popup-gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
    }
  });
  //Form Validation
  $('#query-iti').bootstrapValidator({
    trigger: 'blur',
    fields: {
      Name: {
        validators: {
          notEmpty: {
            message: 'Your  Name is required'
          },
          regexp: {
            regexp: /^[a-zA-Z ]+$/,
            message: 'Your name cannot have numbers or symbols'
          }
        }
      },
      Email: {
        validators: {
          notEmpty: {
            message: 'The email is required'
          },
          emailAddress: {
            message: 'The input is not a valid email address'
          }
        }
      },
      Phone: {
        validators: {
          notEmpty: {
            message: 'The phone number is required'
          },
          regexp: {
            regexp: /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/,
            message: 'The input is not a valid Indian phone number'
          }
        }
      }
    }
  })
  .on('error.field.bv', '[name="Query"]', function(e, data){
    // change the data-bv-trigger value to keydown
    //  $(e.target).attr('data-bv-trigger','keydown');
    // destroy the plugin
    // console.info(data.bv.getOptions());
    data.bv.destroy();
    // console.info(data.bv.getOptions());
    // initialize the plugin
    $('#query-iti').bootstrapValidator(data.bv.getOptions());
  });

  $('#query-iti').on('status.field.bv', function(e, data) {
    formIsValid = true;
    $('.form-group',$(this)).each( function() {
      formIsValid = formIsValid && $(this).hasClass('has-success');
    });
  });

  // Submit enquiry on itinerary page
  $('#submit-form').click(function(e){
    event.preventDefault();
    if ($('#name').val().length != 0 && $('#email').val().length != 0 && $('#telephone').val().length != 0 && $('#message').val().length!=0)
    {
      var url= 'https://script.google.com/macros/s/AKfycbyT2Uu6ZvhV189Fqx23bRgyso2x7e3HNwWcpujNa3wToczTc73D/exec';

      $.ajax({
        url: url,
        type: "GET",
        dataType: "json",
        data: $('form#query-iti').serializeArray(),
        success: function(){
          $('#query-iti').trigger('reset');
        alert("Thank you for sign up !! \n You will shortly receive a detailed itinerary of the trip. Cheers!!");
        }
      });
        // ,
        // error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
        //   console.log(JSON.stringify(jqXHR));
        //   console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
        // }
      }
    else
    alert("Please review the form!!");
  });

  //Copy the tourcity detail form in itinerary.create page

  function clone(){
      $(".iti-parent").children(".sub-iti").first().clone()
        .appendTo(".iti-parent")
        .on('click', 'button.remove', remove);

};

$("#iti-clone").on("click", clone);

})(jQuery); // End of use strict
