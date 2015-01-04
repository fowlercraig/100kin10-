// @codekit-prepend "../javascripts/easing.js"; 
// @codekit-prepend "../javascripts/jquery.onepage-scroll.min.js";
// @codekit-prepend "../javascripts/jquery.clearable.js"; 
// @codekit-prepend "../bower_components/velocity/velocity.js"; 
// @codekit-prepend "../bower_components/slides/source/slides.min.jquery.js";
// @codekit-prepend "../bower_components/Jquery-Collapse/src/jquery.collapse.js";
// @codekit-prepend "../bower_components/superfish/dist/js/superfish.min.js";
// @codekit-prepend "../bower_components/mixitup2/build/jquery.mixitup.min.js";
// @codekit-prepend "../bower_components/mixitup-pagination/build/jquery.mixitup-pagination.min.js";
// @codekit-prepend "../bower_components/jquery-waypoints/waypoints.min.js";
// @codekit-prepend "../bower_components/jquery-waypoints/shortcuts/sticky-elements/waypoints-sticky.js";
// @codekit-prepend "../bower_components/Naver/jquery.fs.naver.js";
// @codekit-prepend "../bower_components/Sizer/jquery.fs.sizer.js";
// @codekit-prepend "../bower_components/HeadShrinker-master/jquery.headshrinker.js";


//SmartAjax_load('/assets/javascripts', function(){

$(function() {

  //$('.page-header').waypoint('sticky');

  // setTimeout(function() {
  //   $("#wrapper, .onepage-pagination").velocity({
  //     opacity: 1,
  //   }, 600);
  // }, 1500);

  // setTimeout(function() {
  //   $("#loading").velocity({
  //     opacity: 0,
  //   }, 600);
  // }, 1200);

  $(window).load(function() {
    $("#loading").velocity({
      opacity: 0,
    }, 600);
    $("#wrapper, .onepage-pagination").velocity({
      opacity: 1,
    }, 600);
  });

  $(".controls a.filter").click(function() {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
  });

  $("#header .menu").naver({
     maxWidth: "740px"
  });
  $(".controls nav").naver({
    maxWidth: "740px"
  });

  $(window).load(function() {
    $('#overlay').velocity({
      top: '100%',
      opacity: 0
    }, {
      delay: 1000
    });
  });

  $('#input').clearable();

  setTimeout(function() {


    var nwh = $('#news-wrapper').height();
    var nwhtb = $('#news-wrapper .toolbar').height();

    setTimeout(function(){

    $('#news-wrapper').velocity({
      bottom: -nwh,
    }, 300, "easeInOutQuint").addClass('hidden');

    $('#news-wrapper').velocity({
      bottom: -(nwh - nwhtb),
    }, 300, "easeInOutQuint");

    }, 2000);

    // setTimeout(function(){

    //   

    // }, 2500);
    

    $('#news-window .open').click(function() {
      $('#news-wrapper').velocity({
        bottom: 0,
      }, 300, "easeInOutQuint").removeClass('hidden');
      $(this).removeClass('active');
      $('#news-wrapper .toolbar .close').addClass('active');
    });

    $('#news-window .close').click(function() {
      $('#news-wrapper').velocity({
        bottom: -nwh,
      }, 300, "easeInOutQuint").addClass('hidden');
      $('#news-wrapper').velocity({
        bottom: -(nwh - nwhtb),
      }, 300, "easeInOutQuint");
      $(this).removeClass('active');
      $('#news-wrapper .toolbar .open').addClass('active');
    });


  }, 1000);


  // $('#news-wrapper').velocity({
  //   bottom: 0,
  // }, 300, "easeInOutQuint");

  $('#news-window .open').click(function() {
    $('#news-wrapper').velocity({
      bottom: 0,
    }, 300, "easeInOutQuint");
  });

  // $('#header').headshrinker({ 
  //   //fontSize: "17px", 
  //   mobileMenu: false,
  //   shrinkMenu: false,
  //   shrinkMenuTop: "269px",
  // });

  var example = $('#header .menu').superfish();

  $('.partners .controls').waypoint('sticky', {
    //offset: 95
  });

  // var divs = $('.page-header .row');
  // var wh = $(window).height();

  // $(window).on('scroll', function() {
  //    var st = $(this).scrollTop();
  //    divs.css({ 'opacity' : (1 - st/(wh/6)) });
  // });

  $("#faqlist").collapse({
    query: '.question .answer'
  });

  var wh = $(window).height();
  var ph = $('.onepage-pagination').height();

  $(".panel_wrapper .panel").css({
    minHeight: wh * .75,
  });

  $('.onepage-pagination').css({
    marginTop: -(ph / 2),
  });

  // $(".onepage-pagination li a[data-index='1']").append(
  //   '<span class="popout one"><span class="type">Vision</span><i></i></span>'
  // );
  $(".onepage-pagination li a[data-index='1']").append(
    '<span class="popout two"><span class="type">The Network</span><i></i></span>'
  );
  $(".onepage-pagination li a[data-index='2']").append(
    '<span class="popout three"><span class="type">Commitment</span><i></i></span>'
  );
  $(".onepage-pagination li a[data-index='3']").append(
    '<span class="popout four"><span class="type">How We Work</span><i></i></span>'
  );
  $(".onepage-pagination li a[data-index='4']").append(
    '<span class="popout five"><span class="type">Partner Support</span><i></i></span>'
  );
  $(".onepage-pagination li a[data-index='5']").append(
    '<span class="popout six"><span class="type">Impact</span><i></i></span>'
  );
  $(".onepage-pagination li a[data-index='6']").append(
    '<span class="popout seven"><span class="type">Press</span><i></i></span>'
  );
  $(".onepage-pagination li a[data-index='7']").append(
    '<span class="popout eight"><span class="type">About</span><i></i></span>'
  );
  $(".onepage-pagination li a[data-index='8']").append(
    '<span class="popout nine"><span class="type">Join Us</span><i></i></span>'
  );

  $(".slides").slides({
    pagination: false,
    generatePagination: false,
    bigTarget: true
  });

  $(window).resize(function() {
    var wh = $(window).height();
    var ww = $(window).width();
    $(".slides .slide").css({
      height: wh,
      width: ww
    });
  }).resize();

  /*================================================
   Borrowed from http://you-know-nothing.com/
   =================================================*/

  var $gallery = $('#partners-grid');
  var $container = $('#containerPartner');
  var $allThumbs = $('li', $gallery);

  var animationTime = 300;
  var animationEasing = 'ease';

  var showContainer = function(data) {

    /* Add html and set container height to auto */
    $container.html(data);
    $container.css('height', 'auto');

    /* Save container height & get active mix */
    var containerHeight = $container.height();
    var $activeThumb = $('li.active', $gallery);

    /* Set container height to 0 & place the container under the active mix */
    $container.css({
      height: 0,
      top: $activeThumb.position().top + $activeThumb.outerHeight()

      /* Then animate the container height to its original height */
    }).velocity({
      height: containerHeight,
      duration: animationTime,
      easing: animationEasing,
    });

    /* Also animation active mix margin bottom to mimicate effect on layout */
    $activeThumb.velocity({
      marginBottom: containerHeight,
      duration: animationTime,
      easing: animationEasing
    });

    $('html, body').stop().animate({
      scrollTop: $activeThumb.offset().top - 50
    }, animationTime);


  }

  var hideContainer = function(callback) {



    /* If container is open, animate, if not set time to 0 */
    var customAnimationTime = ($allThumbs.hasClass('active') ?
      animationTime : 0);

    /* Reset container & all thumb to 0 */
    $container.velocity({
      height: 0,
      duration: ($allThumbs.hasClass('active') ? animationTime : 0),
      easing: animationEasing,
    });

    $allThumbs.velocity({
      marginBottom: 25,
      duration: ($allThumbs.hasClass('active') ? animationTime : 0),
      easing: animationEasing
    });

    if (typeof(callback) == 'function') {
      setTimeout(function() {
        callback();
      }, ($allThumbs.hasClass('active') ? animationTime : 0));
    }

  }

  var loadPage = function(href) {
    jQuery.ajax({
      url: href,
      dataType: "html",
      success: function(data, textStatus, rawRequest) {
        showContainer(data);
        $("#partner .close").click(function() {
          $allThumbs.removeClass('active');
          hideContainer(false);
         });
      },
      error: function(rawRequest, textStatus, errorThrow) {
        showContainer("Error...");
      }
    });
  }

/*================================================
   GALLERY CONTAINER LOGIC
   =================================================*/

  $('.content').on('click', function(e) {
    var $thumb = $(this).find('.active');
    if ($thumb.hasClass('active')) { 
      $allThumbs.removeClass("active"); 
      hideContainer(false);
      return false;
    };
  });

  $allThumbs.find('.readmore.all').on('click', function(e) {
    var $thumb = $(this).parent().parent().parent().parent();


    /* Stop duplicate opening */
    if ($thumb.hasClass('active')) { 
      $allThumbs.removeClass("active"); 
      hideContainer(false);
      return false;
    };

    /* Prevent default action & hide container */
    e.preventDefault();

    /* Hide container then  */
    hideContainer(function() {

      /* remove/set active class */
      $allThumbs.removeClass("active");
      $thumb.addClass("active");

      /* Load character, only if it has a href attribute (avoid bug) */
      if ($thumb.attr('data-href')) loadPage($thumb.attr('data-href'));
      //$gallery.mixItUp();
    });


  });

  /*================================================
  HIDE CONTAINER ON RESIZE
  =================================================*/
  $(window).on('resize', function() {
    $allThumbs.removeClass('active');
    hideContainer(false);
  });

  /*================================================
  Close Container Button
  =================================================*/
  $("#partner .close").click(function() {
    $allThumbs.removeClass('active');
    hideContainer(false);
  });


  /*================================================
  MIX IT UP 2
  https://mixitup.kunkalabs.com/
  =================================================*/

  var filterOnLoad = window.location.hash ? '.'+(window.location.hash).replace('#','') : '.all';

  $gallery.mixItUp({
    animation: {
      duration: 500,
      effects: 'fade scale(0.4)',
      easing: 'ease'
    },
    load: {
      filter: filterOnLoad
    },
    // pagination: {
    //   limit: 48,
    //   generatePagers: true,
    //   prevButtonHTML: '«',
    //   nextButtonHTML: '»'
    // },
    selectors: {
      pagersWrapper: '.pager-list',

    },
    callbacks: {
      onMixStart: function() {

        /* When changing filter, hide container & remove active class on thumb */
        $allThumbs.removeClass('active');
        hideContainer(false);
      },
      onMixEnd: function(state) {
        $("#partners-grid").sizer();
      }
    },
  });

  var inputText;
  var $matching = $();

  // Delay function
  var delay = (function() {
    var timer = 0;
    return function(callback, ms) {
      clearTimeout(timer);
      timer = setTimeout(callback, ms);
    };
  })();

  $("#input").keyup(function() {
    // Delay function invoked to make sure user stopped typing
    delay(function() {
      inputText = $("#input").val().toLowerCase();

      // Check to see if input field is empty
      if ((inputText.length) > 0) {
        $('#partners-grid .item').each(function() {
          $this = $("this");

          // add item to be filtered out if input text matches items inside the title   
          if($(this).find('.partner-title').text().toLowerCase().match(inputText)) {
            $matching = $matching.add(this);
          }
          else {
            // removes any previously matched item
            $matching = $matching.not(this);
          }
        });
        console.log(inputText);
        $gallery.mixItUp('filter', $matching);
      }

      else {
        // resets the filter to show all item if input is empty
        $gallery.mixItUp('filter', '.all');
      }
    }, 200);
  });

  $(function(){
  // check if there is a url hash, and if so, 
  // save it as a variable and prepend a '.' to the start - e.g. '.blue'
  // else, set variable as the default "all"

  
});

});