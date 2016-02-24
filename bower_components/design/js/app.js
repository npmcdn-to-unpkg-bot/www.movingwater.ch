// @codekit-prepend "../../jquery/dist/jquery.js"
// @codekit-prepend "../../masonry/dist/masonry.pkgd.js"
// @codekit-prepend "../../slick-carousel/slick/slick.js"
// @codekit-prepend "../../slick-lightbox/dist/slick-lightbox.js"
// @codekit-prepend "../../Tweetie/tweetie.js"
// @codekit-prepend "../../instafeed.js/instafeed.js" 

$(function($){
  "use strict";
  // Touch Device Detection
  var isTouchDevice = 'ontouchstart' in document.documentElement;
  if( isTouchDevice ) {
    $('body').addClass('touch');
    $('body').removeClass('no-touch');
  }
});

$(document).ready(function () {
  "use strict";
  // Tweetie.js
  $('.twitter').twittie({
    'apiPath': '/assets/api/tweet.php',
    dateFormat: '%d. %b %Y',
    template: '<div class="tweet"><div class="date">{{date}}</div> {{tweet}}</div><a href="{{url}}" class="tweet-url" target="_blank"><i class="mdi mdi-twitter"></i></a>',
    count: 4,
  });
  
  // Modal / Lightbox
  $('.lightboxset').slickLightbox({
    itemSelector: 'a.lightbox',
    caption: 'caption',
    background: 'rgba(255,255,255,.95)'
  });
    $('.lightboxset-insta').slickLightbox({
    itemSelector: 'a.lightbox-insta',
    caption: 'caption',
    background: 'rgba(255,255,255,.95)',
    closeOnBackdropClick: false,
  });

  // instafeed.js
  var feed = new Instafeed({
    get: 'user',
    userId: '2068733587',
//    clientId: '64f035a24df04ea596d8f773031d6757'
    accessToken: '2068733587.64f035a.a57f649daec54ac78ca1bfa2c63910b5',
//    template: '<div class="insta-item"><a href="{{link}}" target="_blank"><img src="{{image}}" /></a></div>',
    template: '<div class="insta-item"><div class="insta-image"><img src="{{image}}" alt="{{caption}}"></div><div class="insta-caption"><p>...{{caption}}...</p><p class="small"><i class="mdi mdi-heart"></i> {{likes}} | <i class="mdi mdi-comment"></i> {{comments}}</p><a class="button" href="{{link}}" target="_blank">Auf Instagram zeigen</a></div></div>',
    limit: '20',
    resolution: 'standard_resolution',
    after: function() {
      $('#instafeed').slick({
        dots: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
          {
            breakpoint: 640,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: false,
            }
          } 
        ],
      });
    },
  });
  feed.run();
});
// Navigationbar size
function init() {
  "use strict";
  window.addEventListener('scroll', function(){
      var distanceY = window.pageYOffset || document.documentElement.scrollTop,
          shrinkOn = 130;
      if (distanceY > shrinkOn) {
          $('nav').addClass('smaller').prop('class');
      } else {
          if ($('nav').hasClass('smaller')) {
              $('nav').removeClass('smaller').prop('class');
          }
      }
  });
}
window.onload = init();
 
$(window).on('load', function(){
  "use strict";
  // masonry
  $('.work').masonry({
    // options
    itemSelector: '.work-item',
    columnWidth: '.grid-sizer',
    gutter: '.gutter-sizer',
    percentPosition: true,
  });
  
  // Set .hover for touch-devices
  $('.touch .work figure, .touch .partners figure, .touch .instagram .insta-item').click(function (e) {  
    if($(this).hasClass('hover')) {
      $(this).removeClass('hover');
    } else {
      $('.work figure, .partners figure, .instagram .insta-item').removeClass('hover');
      $(this).addClass('hover');
      e.preventDefault();
    }
  }); 
  
});