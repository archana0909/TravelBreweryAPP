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
      $('#enquiry-form').addClass('fixed');

    }
    if ($(window).scrollTop() < $(window).height()) {
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
  $('#query-form').bootstrapValidator({
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
    $('#query-form').bootstrapValidator(data.bv.getOptions());
  });
  $('#signup-form').bootstrapValidator({
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
  .on('error.field.bv', '[name="Phone"]', function(e, data){
    // change the data-bv-trigger value to keydown
    //  $(e.target).attr('data-bv-trigger','keydown');
    // destroy the plugin
    // console.info(data.bv.getOptions());
    data.bv.destroy();
    // console.info(data.bv.getOptions());
    // initialize the plugin
    $('#signup-form').bootstrapValidator(data.bv.getOptions());
  });

  $('#signup-form,#enquiry-form').on('status.field.bv', function(e, data) {
    formIsValid = true;
    $('.form-group',$(this)).each( function() {
      formIsValid = formIsValid && $(this).hasClass('has-success');
    });
  });
  //Reset form on closing Modal
  $('.resetForm').click(function(){
    $('#signup-form').trigger('reset');
  });

  $('#signup-button').click(function(e){
    if ($('#text-name').val().length != 0 && $('#email-input').val().length != 0 && $('#tel-input').val().length != 0 &&formIsValid)
    {
      var data = {
        Name: $("#text-name").val().trim(),
        Email: $("#email-input").val().trim(),
        Phone: $("#tel-input").val().trim(),
        Query:null
      };
      $.ajax({
        type: "POST",
        url: "submit-signup-form.php",
        data: data,
        success: function(){
          $('#itineraryModal').modal('show');

          fbq('track', 'Lead', {
            value: 0.00,
            currency: 'USD'
          });

        }
      });
    }
    else
    alert("Please review the form!!");
  });
  $('#query-button').click(function(e){
    if ($('#text-name').val().length != 0 && $('#email-input').val().length != 0 && $('#tel-input').val().length != 0 && $('#query-input').val().length!=0)
    {
      var data = {
        Name: $("#text-name").val().trim(),
        Email: $("#email-input").val().trim(),
        Phone: $("#tel-input").val().trim(),
        Query:$("#query-input").val().trim()
      };
      $.ajax({
        type: "POST",
        url: "submit-signup-form.php",
        data: data,
        success: function(){
          $('#query-form').trigger('reset');

        }
      });
    }
    else
    alert("Please review the form!!");
  });
})(jQuery); // End of use strict
