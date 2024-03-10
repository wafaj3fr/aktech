/*--------------------- Copyright (c) 2020 -----------------------
[Master Javascript]
Project: Multifarious Services - Responsive HTML Template 
Version: 1.0.0
Assigned to: Theme Forest
-------------------------------------------------------------------*/
(function($) {
    "use strict";
    /*-----------------------------------------------------
    	Function  Start
    -----------------------------------------------------*/
    var Multifarious = {
        initialised: false,
        version: 1.0,
        mobile: false,
        init: function() {
            if (!this.initialised) {
                this.initialised = true;
            } else {
                return;
            }

            /*-----------------------------------------------------
            	Function Calling
            -----------------------------------------------------*/
            this.preLoader();
            this.wowAnimation();
            this.navMenu();
            this.partner();
            this.counter();
            this.topButton();
            this.golBanner();
            this.goalTestimonial();
            this.thumbSlider();
            this.blogSlider();
            this.tourService();
            this.tourPackageSlider();
            this.gymVideo();
            this.ScrollTop();
            this.searchBox();
        },

        /*-----------------------------------------------------
        	Fix Preloader
        -----------------------------------------------------*/
        preLoader: function() {
            $(window).on('load', function() {
                $(".preloader_wrapper").removeClass('preloader_active');
            });
            jQuery(window).on('load', function() {
                setTimeout(function() {
                    jQuery('.preloader_open').addClass('loaded');
                }, 100);
            });
        },

        /*-----------------------------------------------------
            Fix Search Bar & Cart
        -----------------------------------------------------*/
        searchBox: function() {
            $('.searchBtn').on("click", function() {
                $('.searchBox').addClass('show');
            });
            $('.closeBtn').on("click", function() {
                $('.searchBox').removeClass('show');
            });
            $('.searchBox').on("click", function() {
                $('.searchBox').removeClass('show');
            });
            $(".search_bar_inner").on('click', function() {
                event.stopPropagation();
            });
        },

        /*-----------------------------------------------------
        	Fix Animation 
        -----------------------------------------------------*/
        wowAnimation: function() {
            new WOW().init();
        },

        /*-----------------------------------------------------
         	Fixed Header
     		-----------------------------------------------------*/
        ScrollTop: function() {
            if ($('.fixed_header').length > 0) {
                $(window).scroll(function() {
                    var scroll = $(window).scrollTop();
                    if (scroll >= 130) {
                        $(".fixed_header").addClass("full_width_head");
                    } else {
                        $(".fixed_header").removeClass("full_width_head");
                    }
                    if (scroll >= 200) {
                        $(".fixed_header").addClass("fixed animated fadeInDown");
                    } else {
                        $(".fixed_header").removeClass("fixed animated fadeInDown");
                    }

                });
            }
        },
        /*-----------------------------------------------------
        	Fix Mobile Menu 
        -----------------------------------------------------*/
        navMenu: function() {
            var w = window.innerWidth;
            if (w <= 991) {
                $(".main_menu_wrapper>ul li").on('click', function() {
                    $(this).find('ul.sub_menu').slideToggle();
                    $(this).toggleClass("open");
                });
                $(".main_menu_wrapper>ul").on('click', function() {
                    event.stopPropagation();
                });
                $(".menu_btn").on('click', function(e) {
                    event.stopPropagation();
                    $(".main_menu_wrapper, .menu_btn_wrap").toggleClass("open");
                });
                $("body").on('click', function() {
                    $(".main_menu_wrapper, .menu_btn_wrap").removeClass("open");
                });
            }
        },

        /*-----------------------------------------------------
        	Fix Partner Slider 
        -----------------------------------------------------*/
        partner: function() {
            var PartnerSwiper = new Swiper('.partner_slider.swiper-container', {
                autoHeight: false,
                autoplay: true,
                spaceBetween: 30,
                slidesPerView: 8,
                loop: true,
                speed: 2000,
                autoplay: {
                    delay: 1000,
                },
                breakpoints: {
                    0: {
                        slidesPerView: 2,
                        spaceBetween: 0,
                    },
                    575: {
                        slidesPerView: 2,
                        spaceBetween: 10,
                    },
                    767: {
                        slidesPerView: 4,
                        spaceBetween: 20,
                    },
                    992: {
                        slidesPerView: 6,
                        spaceBetween: 20,
                    },
                    1200: {
                        slidesPerView: 6,
                        spaceBetween: 30,
                    },
                },
            });
        },

        /*-----------------------------------------------------
        	Fix Counter
        -----------------------------------------------------*/
        counter: function() {
            if ($('.counter_holder').length > 0) {
                var a = 0;
                $(window).scroll(function() {
                    var topScroll = $('.counter_holder').offset().top - window.innerHeight;
                    if (a == 0 && $(window).scrollTop() > topScroll) {
                        $('.count_no').each(function() {
                            var $this = $(this),
                                countTo = $this.attr('data-count');
                            $({
                                countNum: $this.text()
                            }).animate({
                                countNum: countTo
                            }, {
                                duration: 5000,
                                easing: 'swing',
                                step: function() {
                                    $this.text(Math.floor(this.countNum));
                                },
                                complete: function() {
                                    $this.text(this.countNum);
                                }
                            });
                        });
                        a = 1;
                    }
                });
            };
        },

        /*-----------------------------------------------------
        	Fix GoToTopButton
        -----------------------------------------------------*/
        topButton: function() {
            var scrollTop = $("#scroll");
            $(window).on('scroll', function() {
                if ($(this).scrollTop() < 500) {
                    scrollTop.removeClass("active");
                } else {
                    scrollTop.addClass("active");
                }
            });
            $('#scroll').click(function() {
                $("html, body").animate({
                    scrollTop: 0
                }, 2000);
                return false;
            });

            $(function() {
                $('.go_to_demo').click(function() {
                    $('html, body').animate({ scrollTop: $('#go_to_demo').offset().top }, 'slow');
                    return false;
                });
            });
        },

        /*-----------------------------------------------------
        	Fix Testimonial Slider 
        -----------------------------------------------------*/

        goalTestimonial: function() {
            var testimonialSwiper = new Swiper('.swiper-container.testimonials', {
                autoHeight: false,
                autoplay: false,
                loop: true,
                spaceBetween: 0,
                centeredSlides: false,
                speed: 1500,
                autoplay: {
                    delay: 1000,
                },
                pagination: {
                    el: '.pagination',
                    clickable: true,
                },
            });
        },

        thumbSlider: function() {
            var galleryThumbs = new Swiper('.gallery-thumbs', {
                spaceBetween: 10,
                centeredSlides: true,
                slidesPerView: '3',
                touchRatio: 0.2,
                slideToClickedSlide: true,
                loop: true,
                loopedSlides: 3,
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },
                    575: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },
                    767: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 10,
                    },
                    992: {
                        slidesPerView: 3,
                        spaceBetween: 10,
                    },
                    1200: {
                        slidesPerView: 3,
                        spaceBetween: 10,
                    },
                },
            });
            var galleryTop = new Swiper('.gallery-top', {
                spaceBetween: 0,
                navigation: {
                    nextEl: '.thumbNext',
                    prevEl: '.thumbPrev',
                },
                loop: true,
                loopedSlides: 3,
                thumbs: {
                    swiper: galleryThumbs,
                },
            });
        },

        /*-----------------------------------------------------
        	Fix Goal Banner Slider 
        -----------------------------------------------------*/
        golBanner: function() {
            var bannerSwiper = new Swiper('.swiper-container.saf_banner_slider', {
                autoHeight: false,
                autoplay: true,
                loop: true,
                spaceBetween: 0,
                centeredSlides: false,
                speed: 2000,
                autoplay: {
                    delay: 3000,
                },
                keyboard: {
                    enabled: true,
                },
                navigation: {
                    nextEl: '.ButtonNext',
                    prevEl: '.ButtonPrev',
                },
                pagination: {
                    el: '.pagination',
                    clickable: true,
                },
            });
        },

        /*-----------------------------------------------------
        	Fix Safty Blog Slider 
        -----------------------------------------------------*/
        blogSlider: function() {
            var blogSlider = new Swiper('.blogSlider', {
                autoHeight: false,
                 autoplay: true,
                spaceBetween: 30,
                slidesPerView: 2,
                 loop: true,
                 speed: 2000,
                 centeredSlides: false,
                 autoplay: {
                     delay: 1000,
                 },
                navigation: {
                    nextEl: '.blogPrev',
                    prevEl: '.blogNext',
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        spaceBetween: 15,
                    },
                    575: {
                        slidesPerView: 1,
                        spaceBetween: 15,
                    },
                    767: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                    992: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                    1200: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                },
            });
        },
        /*-----------------------------------------------------
        	Fix Tour Service Slider 
        -----------------------------------------------------*/
        tourService: function() {
            var tourService = new Swiper('.tour_service.swiper-container', {
                autoHeight: false,
                autoplay: true,
                spaceBetween: 30,
                slidesPerView: 4,
                loop: true,
                speed: 3000,
                centeredSlides: false,
                autoplay: {
                    delay: 2000,
                },
                navigation: {
                    nextEl: '.next',
                    prevEl: '.prev',
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        spaceBetween: 15,
                    },
                    575: {
                        slidesPerView: 1,
                        spaceBetween: 15,
                    },
                    767: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 1,
                        spaceBetween: 30,
                    },
                    992: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                    1200: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                    1920: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                },
            });
        },

        /*-----------------------------------------------------
        	Fix Tour Package Slider 
        -----------------------------------------------------*/
        tourPackageSlider: function() {
            var tourPackageSlider = new Swiper('.tour_package.swiper-container', {
                autoHeight: false,
                autoplay: true,
                spaceBetween: 30,
                slidesPerView: 4,
                loop: true,
                speed: 3000,
                centeredSlides: false,
                autoplay: {
                    delay: 2000,
                },
                pagination: {
                    el: '.bullets',
                    clickable: true,
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        spaceBetween: 15,
                    },
                    575: {
                        slidesPerView: 1,
                        spaceBetween: 15,
                    },
                    767: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                    992: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                    1200: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                    1920: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                },
            });
        },

        /*-----------------------------------------------------
        	Fix Video Popup
        -----------------------------------------------------*/
        gymVideo: function() {
            if ($('.video_popup').length > 0) {
                $('.video_popup').magnificPopup({
                    type: 'iframe',
                    iframe: {
                        markup: '<div class="mfp-iframe-scaler">' +
                            '<div class="mfp-close"></div>' +
                            '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                            '<div class="mfp-title">Some caption</div>' +
                            '</div>',
                        patterns: {
                            youtube: {
                                index: 'youtube.com/',
                                id: 'v=',
                                src: 'https://www.youtube.com/embed/8lQzkwqhKTk'
                            }
                        }
                    }
                });
            }
        },


    };

    Multifarious.init();

})(jQuery);

/*-----------------------------------------------------
	Fix Contact Form Submission
-----------------------------------------------------*/
// Contact Form Submission
function checkRequire(formId, targetResp) {
    targetResp.html('');
    var email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
    var url = /(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?/;
    var image = /\.(jpe?g|gif|png|PNG|JPE?G)$/;
    var mobile = /^[\s()+-]*([0-9][\s()+-]*){6,20}$/;
    var facebook = /^(https?:\/\/)?(www\.)?facebook.com\/[a-zA-Z0-9(\.\?)?]/;
    var twitter = /^(https?:\/\/)?(www\.)?twitter.com\/[a-zA-Z0-9(\.\?)?]/;
    var google_plus = /^(https?:\/\/)?(www\.)?plus.google.com\/[a-zA-Z0-9(\.\?)?]/;
    var check = 0;
    $('#er_msg').remove();
    var target = (typeof formId == 'object') ? $(formId) : $('#' + formId);
    target.find('input , textarea , select').each(function() {
        if ($(this).hasClass('require')) {
            if ($(this).val().trim() == '') {
                check = 1;
                $(this).focus();
                $(this).parent('div').addClass('form_error');
                targetResp.html('You missed out some fields.');
                $(this).addClass('error');
                return false;
            } else {
                $(this).removeClass('error');
                $(this).parent('div').removeClass('form_error');
            }
        }
        if ($(this).val().trim() != '') {
            var valid = $(this).attr('data-valid');
            if (typeof valid != 'undefined') {
                if (!eval(valid).test($(this).val().trim())) {
                    $(this).addClass('error');
                    $(this).focus();
                    check = 1;
                    targetResp.html($(this).attr('data-error'));
                    return false;
                } else {
                    $(this).removeClass('error');
                }
            }
        }
    });
    return check;
}
$(".submitForm").on('click', function() {
    var _this = $(this);
    var targetForm = _this.closest('form');
    var errroTarget = targetForm.find('.response');
    var check = checkRequire(targetForm, errroTarget);

    if (check == 0) {
        var formDetail = new FormData(targetForm[0]);
        formDetail.append('form_type', _this.attr('form-type'));
        $.ajax({
            method: 'post',
            url: 'ajaxmail.php',
            data: formDetail,
            cache: false,
            contentType: false,
            processData: false
        }).done(function(resp) {
            console.log(resp);
            if (resp == 1) {
                targetForm.find('input').val('');
                targetForm.find('textarea').val('');
                errroTarget.html('<p style="color:green;">Mail has been sent successfully.</p>');
            } else {
                errroTarget.html('<p style="color:red;">Something went wrong please try again latter.</p>');
            }
        });
    }
});

const serviceCards = document.querySelectorAll('.accordion-card');

serviceCards.forEach(card => {
  card.addEventListener('click', () => {
    const details = card.querySelector('.service-details');
    details.classList.toggle('show'); // Toggle visibility on click
  });
});

const myCarouselElement = document.querySelector('#carouselIndicators')
        const carousel = new bootstrap.Carousel(myCarouselElement, {
        interval: 2000,
        touch: false
})