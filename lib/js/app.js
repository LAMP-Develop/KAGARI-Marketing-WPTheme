// drawer
$(window).on('load resize', function() {
  var w = $(window).width();
  var x = 980;
  if (w <= x) {
    $('.drawer').drawer();
  }
});

// Scroll event
$(window).on('load scroll', function() {
  var s = $(window).scrollTop();
  if (s >= 400) {
    $('#header').addClass('scroll-on');
  } else {
    $('#header').removeClass('scroll-on');
  }
});

$(function() {
  // selectで画面変異
  $('select[name=pulldown1]').change(function() {
    if ($(this).val() != '') {
      window.location.href = $(this).val();
    }
  });
  $('#location').click(function() {
    if ($(this).val() != '') {
      window.location.href = $('select[name=pulldown2]').val();
    }
  });

  // Smooth scroll
  $('a[href^="#"]').on('click', function() {
    var speed = 500;
    var href = $(this).attr("href");
    var hh = $('#header').outerHeight();
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - hh;
    $('body,html').animate({
      scrollTop: position
    }, speed, 'swing');
    return false;
  });

  // toggle
  $('#faq .dl-wrap dl dt').on('click', function() {
    $(this).next().slideToggle();
    $(this).toggleClass('dt-active');
  });

  // サービス
  $('.slider').slick({
    infinite: true,
    centerMode: true,
    autoplay: true,
    autoplaySpeed: 3000,
    slidesToScroll: 1,
    centerPadding: 'auto',
    slidesToShow: 5,
    prevArrow: '<button class="slide-arrow prev-arrow"></button>',
    nextArrow: '<button class="slide-arrow next-arrow"></button>',
    responsive: [{
      breakpoint: 768,
      settings: {
        centerMode: true,
        centerPadding: 'auto',
        slidesToShow: 3
      }
    }]
  });
});
