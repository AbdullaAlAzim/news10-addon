(function ($) {
"use strict";

    var News10Global = function ($scope, $) {

        // Js Start
            $('[data-background]').each(function() {
                $(this).css('background-image', 'url('+ $(this).attr('data-background') + ')');
            });

        $(".preloader").fadeOut();
        if($('.wow').length){
            new WOW({
                offset: 100,
                mobile: true
            }).init()
        }

        jQuery(window).on('scroll', function() {
            if (jQuery(window).scrollTop() > 250) {
                jQuery('.news10-sticky-header').addClass('sticky-on')
            } else {
                jQuery('.news10-sticky-header').removeClass('sticky-on')
            }
        });

        $(".news10-icon-lightbox a").magnificPopup({
            type: 'iframe',
            iframe: {
                patterns: {
                    youtube: {
                        index: 'youtube.com/',
                        id: 'v=',
                        src: 'https://www.youtube.com/embed/%id%?autoplay=1'
                    },
                    vimeo: {
                        index: 'vimeo.com/',
                        id: '/',
                        src: '//player.vimeo.com/video/%id%?autoplay=1'
                    },
                    gmaps: {
                        index: '//maps.google.',
                        src: '%id%&output=embed'
                    }
                },
                srcAction: 'iframe_src',
            }
        });

        // Js End

    };

    var News10Nav = function ($scope, $) {

        $scope.find('#news-main-builder-header').each(function () {
            var settings = $(this).data('news10');

        // Js Start
            $('.open_mobile_menu').on("click", function() {
                $('.mobile_menu_wrap').toggleClass("mobile_menu_on");
            });
            $('.open_mobile_menu').on('click', function () {
                $('body').toggleClass('mobile_menu_overlay_on');
            });
            if($('.mobile_menu li.dropdown ul').length){
                $('.mobile_menu li.dropdown').append('<div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>');
                $('.mobile_menu li.dropdown .dropdown-btn').on('click', function() {
                    $(this).prev('ul').slideToggle(500);
                });
            }
        // Js End
        });

    };

//travel banner
    var travel_bannner = function ($scope, $) {

        $scope.find('.news10-banner-section').each(function () {
            var settings = $(this).data('news10');

        // Js Start
              var swiper = new Swiper(".news10-banner-slider-wraper", {
                loop: true,
                spaceBetween: 0,
                slidesPerView: 1,
                speed: 1000,
                    navigation: {
                    nextEl: "#banner-next",
                    prevEl: "#banner-prev",
                    },
            });
        // Js End
        });
    };

//insgrame slider
  var story_ins = function ($scope, $) {

        $scope.find('.news10-instagram-story-section').each(function () {
            var settings = $(this).data('news10');

        // Js Start
                var swiper2 = new Swiper(".news10-instagram-wrapper", {
                loop: true,
                spaceBetween: 0,
                slidesPerView: 1,
                speed: 1000,
                    navigation: {
                    nextEl: "#instra-next",
                    prevEl: "#instra-prev",
                    },
                breakpoints: {
                    1200: {
                        slidesPerView: 5,
                        spaceBetween: 30
                    },
                    1000: {
                        slidesPerView: 4,
                        spaceBetween: 30
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    },
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10
                    },
                }
            });
        // Js End
        });
    };

    //food slider
  var food = function ($scope, $) {

        $scope.find('.news10-food-banner-section').each(function () {
            var settings = $(this).data('news10');

        // Js Start
          
              var swiper = new Swiper(".news10-food-banner-wrapper", {
                loop: true,
                spaceBetween: 0,
                slidesPerView: 1,
                speed: 1000,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                    renderBullet: function (index, className) {
                    return '<span class="' + className + '">' + (index + 1) + "</span>";
                    },
                },
            });


        // Js End
        });
    };
//food categoy
  var foodcat = function ($scope, $) {

        $scope.find('.news10food-categories-section').each(function () {
            var settings = $(this).data('news10');
        // Js Start
               var swiper = new Swiper(".news10-food-categories-wrapper", {
                loop: true,
                spaceBetween: 0,
                slidesPerView: 1,
                speed: 1000,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                breakpoints: {
                    991: {
                        slidesPerView: 2,
                        spaceBetween: 30
                    },
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 20
                    },
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10
                    },
                }
            });
        // Js End
        });
    };




    //food categoy
  var instagram_flo = function ($scope, $) {

        $scope.find('.news10-food-instagram-follow').each(function () {
            var settings = $(this).data('news10');
        // Js Start
                var swiper = new Swiper(".news10-food-instagram-follow-wrapper", {
                loop: true,
                spaceBetween: 0,
                slidesPerView: 1,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false
                },
                speed: 1000,
                    navigation: {
                    nextEl: "#instra-next",
                    prevEl: "#instra-prev",
                    },
                breakpoints: {
                    1200: {
                        slidesPerView: settings['slider_key'],
                    },
                    1000: {
                        slidesPerView: 4,
                    },
                    768: {
                        slidesPerView: 3,
                    },
                    400: {
                        slidesPerView: 2,
                    },
                    320: {
                        slidesPerView: 1,
                    },
                }
            });
        // Js End
        });
    };


    //

      //food categoy
  var fasion_ban = function ($scope, $) {

        $scope.find('.news10-post-categories-section').each(function () {
            var settings = $(this).data('news10');
        // Js Start
           var swiper = new Swiper(".news10-cetegoris-top-slide", {
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false
                },
                    speed: 500,
                    loop: true,
                    pagination: {
                    el: ".swiper-pagination",
                    type: "fraction"
                },
                navigation: {
                    nextEl: "#banner-next",
                    prevEl: "#banner-prev",
                },
                on: {
                init: function () {
                    $(".swiper-progress-bar").removeClass("animate");
                    $(".swiper-progress-bar").removeClass("active");
                    $(".swiper-progress-bar").eq(0).addClass("animate");
                    $(".swiper-progress-bar").eq(0).addClass("active");
                },
                slideChangeTransitionStart: function () {
                    $(".swiper-progress-bar").removeClass("animate");
                    $(".swiper-progress-bar").removeClass("active");
                    $(".swiper-progress-bar").eq(0).addClass("active");
                },
                slideChangeTransitionEnd: function () {
                    $(".swiper-progress-bar").eq(0).addClass("animate");
                }
                }
            });
        // Js End
        });
    };
       

    var trending_ban = function ($scope, $) {

    $scope.find('.news10-trending-news-section').each(function () {
        var settings = $(this).data('news10');
    // Js Start
      var swiper = new Swiper(".news10-trending-news-slide-wraper", {
            loop: true,
            spaceBetween: 0,
            slidesPerView: 1,
            speed: 1000,
                navigation: {
                nextEl: "#ctgNews-next",
                prevEl: "#ctgNews-prev",
                },
        });
    // Js End
    });
};




    var feature_story = function ($scope, $) {

    $scope.find('.news10-featured-story-news-section').each(function () {
        var settings = $(this).data('news10');
    // Js Start
     var swiper = new Swiper(".news10-featured-slide-wrapper", {
                loop: true,
                spaceBetween: 0,
                slidesPerView: 1,
                speed: 1000,
                    navigation: {
                    nextEl: "#featured-next",
                    prevEl: "#featured-prev",
                    },
                breakpoints: {
                    1200: {
                        slidesPerView: 4,
                        spaceBetween: 30
                    },
                    1000: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    },
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10
                    },
                }
            });
    // Js End
    });
};




   var news10_newscat = function ($scope, $) {

    $scope.find('.news10-top-categories-section').each(function () {
        var settings = $(this).data('news10');
    // Js Start
     var swiper = new Swiper(".news10-news-categories-slideer", {
              
        loop: true,
            autoplay: true,
            spaceBetween: 0,
            slidesPerView: 4,
            speed: 1000,
                navigation: {
                nextEl: "#topcategories-next",
                prevEl: "#topcategories-prev",
                },
            breakpoints: {
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 30
                },
                1000: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
               }

        });
    // Js End
    });
};



   var news10_newscat = function ($scope, $) {

    $scope.find('.news10-top-categories-section').each(function () {
        var settings = $(this).data('news10');
    // Js Start
     var swiper = new Swiper(".news10-news-categories-slideer", {
              
        loop: true,
            autoplay: true,
            spaceBetween: 0,
            slidesPerView: 4,
            speed: 1000,
                navigation: {
                nextEl: "#topcategories-next",
                prevEl: "#topcategories-prev",
                },
            breakpoints: {
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 30
                },
                1000: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
               }

        });
    // Js End
    });
};



   var mostpopular = function ($scope, $) {

    $scope.find('.news10-most-popular-section').each(function () {
        var settings = $(this).data('news10');
    // Js Start
     var swiper = new Swiper(".news10-mostpopular-slide", {
              
        loop: true,
            autoplay: true,
            spaceBetween: 0,
            slidesPerView: 1,
            speed: 1000,
                navigation: {
                nextEl: "#mostpopular-next",
                prevEl: "#mostpopular-prev",
                },

        });
    // Js End
    });
};



   var enterten = function ($scope, $) {

    $scope.find('.news10-entertainment-news').each(function () {
        var settings = $(this).data('news10');
    // Js Start
     var swiper = new Swiper(".entertainment-slide-wrapper", {
              
        loop: true,
                autoplay: true,
                spaceBetween: 30,
                slidesPerView: 2,
                speed: 1000,
                    navigation: {
                    nextEl: "#entertainment-next",
                    prevEl: "#entertainment-prev",
                    },
                    breakpoints: {
                        1200: {
                            slidesPerView: 2,
                            spaceBetween: 30
                        },
                        1000: {
                            slidesPerView: 2,
                            spaceBetween: 30
                        },
                        640: {
                            slidesPerView: 1,
                            spaceBetween: 20
                        },
                        320: {
                            slidesPerView: 1,
                            spaceBetween: 10
                        },
                    },
                

        });
    // Js End
    });
};



   var videoposty = function ($scope, $) {

    $scope.find('.news10-video-news-section').each(function () {
        var settings = $(this).data('news10');
    // Js Start
     var swiper = new Swiper(".news10-video-news-slide", {
              
                loop: true,
                autoplay: true,
                spaceBetween: 30,
                slidesPerView: 2,
                speed: 1000,
                    navigation: {
                    nextEl: "#entertainment-next",
                    prevEl: "#entertainment-prev",
                    },
                    breakpoints: {
                        1200: {
                            slidesPerView: 2,
                            spaceBetween: 30
                        },
                        1000: {
                            slidesPerView: 2,
                            spaceBetween: 30
                        },
                        640: {
                            slidesPerView: 1,
                            spaceBetween: 20
                        },
                        320: {
                            slidesPerView: 1,
                            spaceBetween: 10
                        },
                    },

              });

         var popup = $(".venobox");
        $(popup).venobox();
    // Js End
    });
};



   var sportsnews = function ($scope, $) {

    $scope.find('.news10-sports-news-section').each(function () {
        var settings = $(this).data('news10');
    // Js Start
     var swiper = new Swiper(".sports-slide-wrapper", {
              
            loop: true,
            autoplay: true,
            spaceBetween: 0,
            slidesPerView: 1,
            speed: 1000,
                navigation: {
                nextEl: "#entertainment-next",
                prevEl: "#entertainment-prev",
                },
                

        });
    // Js End
    });
};

   var dontmiss = function ($scope, $) {

    $scope.find('.news10-don-t-miss-section').each(function () {
        var settings = $(this).data('news10');
    // Js Start
     var swiper = new Swiper(".news10-miss-slide-wraper", {
              
            loop: true,
            autoplay: true,
            spaceBetween: 0,
            slidesPerView: 6,
            speed: 1000,
            breakpoints: {
                1200: {
                    slidesPerView: 6,
                },
                1000: {
                    slidesPerView: 4,
                },
                640: {
                    slidesPerView: 3,
                },
                320: {
                    slidesPerView: 1,
                },
            }
                

        });
    // Js End
    });
};


  var breaki = function ($scope, $) {

    $scope.find('.news-tech-breaking').each(function () {
        var settings = $(this).data('news10');
    // Js Start
     var swiper = new Swiper(".news10-techheader-breaking", {
              
            loop: true,
            autoplay: true,
            spaceBetween: 0,
            slidesPerView: 1,
            speed: 1000,
                navigation: {
                nextEl: "#breakingnews-next",
                prevEl: "#breakingnews-prev",
                },
                

        });
    // Js End
    });
};


  var breaki = function ($scope, $) {

    $scope.find('.news-tech-breaking').each(function () {
        var settings = $(this).data('news10');
    // Js Start
     var swiper = new Swiper(".news10-techheader-breaking", {
              
            loop: true,
            autoplay: true,
            spaceBetween: 0,
            slidesPerView: 1,
            speed: 1000,
                navigation: {
                nextEl: "#breakingnews-next",
                prevEl: "#breakingnews-prev",
                },
                

        });
    // Js End
    });
};

  var news10treandingnews = function ($scope, $) {

    $scope.find('.news10-trending-news').each(function () {
        var settings = $(this).data('news10');
    // Js Start
  
    var swiper = new Swiper(".news10-trading-news-slide", {
            loop: true,
            autoplay: true,
            spaceBetween: 0,
            slidesPerView: 3,
            speed: 1000,
                navigation: {
                nextEl: "#Trending-next",
                prevEl: "#Trending-prev",
                },
            breakpoints: {
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                1000: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
            }
        });


    // Js End
    });
};


  var tech_blgo = function ($scope, $) {

    $scope.find('.news10-latest-technology').each(function () {
        var settings = $(this).data('news10');
    // Js Start
  
       var swiper11 = new Swiper(".news10-row-slide", {
            loop: true,
            autoplay: true,
            spaceBetween: 0,
            slidesPerView: 3,
            speed: 1000,
                navigation: {
                nextEl: "#technology-next",
                prevEl: "#technology-prev",
                },
            breakpoints: {
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 30
                },
                1000: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
            }
        });


    // Js End
    });
};



  var gadget = function ($scope, $) {

    $scope.find('.news10-new-from-gadgets ').each(function () {
        var settings = $(this).data('news10');
    // Js Start
  
   var swiper11 = new Swiper(".news10-gadgets-slide-wraper", {
            loop: true,
            autoplay: true,
            spaceBetween: 0,
            slidesPerView: 3,
            speed: 1000,
            breakpoints: {
                1200: {
                    slidesPerView: 6,
                    spaceBetween: 30
                },
                1000: {
                    slidesPerView: 4,
                    spaceBetween: 30
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
            }
        });


    // Js End
    });
};




 
    $(window).on('elementor/frontend/init', function () {
        if (elementorFrontend.isEditMode()) {
            console.log('Elementor editor mod loaded');
            elementorFrontend.hooks.addAction('frontend/element_ready/global', News10Global);
            elementorFrontend.hooks.addAction('frontend/element_ready/nav-builder.default', News10Nav);
            elementorFrontend.hooks.addAction('frontend/element_ready/news10-banner.default', travel_bannner);
            elementorFrontend.hooks.addAction('frontend/element_ready/news10-instagram.default', story_ins);
            elementorFrontend.hooks.addAction('frontend/element_ready/news10foodbanner.default', food);
            elementorFrontend.hooks.addAction('frontend/element_ready/news10-foodcat.default', foodcat);
            elementorFrontend.hooks.addAction('frontend/element_ready/instagramfollow.default', instagram_flo);
            elementorFrontend.hooks.addAction('frontend/element_ready/news10fasionbanner.default', fasion_ban);
            elementorFrontend.hooks.addAction('frontend/element_ready/news10trendingnews.default', trending_ban);
            elementorFrontend.hooks.addAction('frontend/element_ready/news10featurestory.default', feature_story);
            elementorFrontend.hooks.addAction('frontend/element_ready/topnewscat.default', news10_newscat);
            elementorFrontend.hooks.addAction('frontend/element_ready/techpoplarnews.default', mostpopular);
            elementorFrontend.hooks.addAction('frontend/element_ready/news10entertain.default', enterten);
            elementorFrontend.hooks.addAction('frontend/element_ready/videonewstech.default', videoposty);
            elementorFrontend.hooks.addAction('frontend/element_ready/news10sportblog.default', sportsnews);
            elementorFrontend.hooks.addAction('frontend/element_ready/news10techdontmiss.default', dontmiss);
            elementorFrontend.hooks.addAction('frontend/element_ready/header-style.default', breaki);
            elementorFrontend.hooks.addAction('frontend/element_ready/news10newstreanding.default', news10treandingnews);
            elementorFrontend.hooks.addAction('frontend/element_ready/news10newstechnology.default', tech_blgo);
            elementorFrontend.hooks.addAction('frontend/element_ready/news10gadget.default', gadget);
           

        }
        else {
            console.log('Elementor frontend mod loaded');
            elementorFrontend.hooks.addAction('frontend/element_ready/global', News10Global);
            elementorFrontend.hooks.addAction('frontend/element_ready/nav-builder.default', News10Nav);
            elementorFrontend.hooks.addAction('frontend/element_ready/news10-banner.default', travel_bannner);
             elementorFrontend.hooks.addAction('frontend/element_ready/news10-instagram.default', story_ins);
            elementorFrontend.hooks.addAction('frontend/element_ready/news10foodbanner.default', food);
            elementorFrontend.hooks.addAction('frontend/element_ready/instagramfollow.default', instagram_flo);
            elementorFrontend.hooks.addAction('frontend/element_ready/news10fasionbanner.default', fasion_ban);
            elementorFrontend.hooks.addAction('frontend/element_ready/news10trendingnews.default', trending_ban);
            elementorFrontend.hooks.addAction('frontend/element_ready/news10featurestory.default', feature_story);
            elementorFrontend.hooks.addAction('frontend/element_ready/topnewscat.default', news10_newscat);
            elementorFrontend.hooks.addAction('frontend/element_ready/techpoplarnews.default', mostpopular);
            elementorFrontend.hooks.addAction('frontend/element_ready/news10entertain.default', enterten);
            elementorFrontend.hooks.addAction('frontend/element_ready/videonewstech.default', videoposty);
            elementorFrontend.hooks.addAction('frontend/element_ready/news10sportblog.default', sportsnews);
            elementorFrontend.hooks.addAction('frontend/element_ready/news10techdontmiss.default', dontmiss);
            elementorFrontend.hooks.addAction('frontend/element_ready/header-style.default', breaki);
            elementorFrontend.hooks.addAction('frontend/element_ready/news10newstreanding.default', news10treandingnews);
            elementorFrontend.hooks.addAction('frontend/element_ready/news10newstechnology.default', tech_blgo);
            elementorFrontend.hooks.addAction('frontend/element_ready/news10gadget.default', gadget);
            
           
        }
    });
console.log('addon js loaded');
})(jQuery);