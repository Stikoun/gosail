$(document).ready(function(){
    $('#testimonials-slider').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2,
        dots: true,
        appendDots: $('.slick-control-wrapper'),
        prevArrow: $('.slick-prev'),
        nextArrow: $('.slick-next'),
        responsive: [
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
    });

    $('#gallery-slider').slick({
        centerMode: true,
        centerPadding: '201px',
        slidesToShow: 4,
        arrows: false,
        responsive: [
            {
                breakpoint: 1300,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 2
                }
            },
            {
              breakpoint: 900,
              settings: {
                centerMode: false,
                slidesToShow: 3,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 600,
              settings: {
                centerMode: false,
                slidesToShow: 2,
                slidesToScroll: 1
              }
            }
          ]
    });

    $(".accordion").accordionjs({
        closeAble   : true,
        slideSpeed  : 500
    });

    $('.control').click(function () {
        $video = $('.video-wrapper video');

        if ($video.get(0).paused) {
            $video.get(0).play();
            $(this).removeClass('paused');
        }
        else {
            $video.get(0).pause(); 
            $(this).addClass('paused'); 
        }
    });
  });

