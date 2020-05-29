! function(o) {
    "use strict";
    o(window).on("load", function() {
            o(".preloader").delay("500").fadeOut(2e3)
        }),
        o(document).ready(function() {
            o(document).on("click", ".side-menu-wrap .side-menu-ul .sidenav__item .menu-plus-icon", function() {
                    return o(this).closest(".sidenav__item").siblings().removeClass("active").find(".side-sub-menu").slideUp(200), o(this).closest(".sidenav__item").toggleClass("active").find(".side-sub-menu").slideToggle(200), !1
                }),
                o(document).on("click", ".logo-right-button .side-menu-open", function() {
                    o(".side-nav-container").addClass("active")
                }),
                o(document).on("click", ".humburger-menu .side-menu-close", function() {
                    o(".side-nav-container").removeClass("active")
                }),
                //100 < o(window).scrollTop() ? o(".header-menu-wrapper").addClass("header-fixed") : o(".header-menu-wrapper").removeClass("header-fixed"), 300 < o(window).scrollTop() ? i("#scroll-top").addClass("back-btn-shown") : o("#back-to-top").removeClass("back-btn-shown"), 
                o(".skillbar").each(function() {
                    o(this).find(".skillbar-bar").animate({
                        width: o(this).attr("data-percent")
                    }, 6e3)
                });
            var e = o("#scroll-top"),
                t = document.querySelector(".header-menu-wrapper"),
                i = t.offsetTop;
            o(window).on("scroll", function() {
                100 < o(window).scrollTop() ? o(".header-menu-wrapper").addClass("header-fixed") : o(".header-menu-wrapper").removeClass("header-fixed"),
                    300 <= o(this).scrollTop() ? e.show() : e.hide()
            }), o(document).on("click", "#scroll-top", function() {
                o("html, body").animate({
                    scrollTop: 0
                }, 1e3)
            }), o(".homepage-slide1").owlCarousel({
                items: 1,
                nav: !0,
                dots: !0,
                autoplay: !1,
                loop: !0,
                smartSpeed: 5e3,
                animateOut: "lightSpeedOut",
                animateIn: "fadeIn",
                active: !0,
                navText: ["<i class='la la-angle-left'></i>", "<i class='la la-angle-right'></i>"]
            }), o(".homepage-slide1").on("translate.owl.carousel", function() {
                o(".single-slide-item .slider__title, .single-slide-item .slider__text").removeClass("animated fadeInUp").css("opacity", "0"), o(".single-slide-item .theme-btn, .single-slide-item .video-play-btn").removeClass("animated fadeInDown").css("opacity", "0")
            }), o(".homepage-slide1").on("translated.owl.carousel", function() {
                o(".single-slide-item .slider__title, .single-slide-item .slider__text").addClass("animated fadeInUp").css("opacity", "1"), o(".single-slide-item .theme-btn, .single-slide-item .video-play-btn").addClass("animated fadeInDown").css("opacity", "1")
            }), o(".course-carousel").owlCarousel({
                loop: !0,
                items: 3,
                nav: !0,
                dots: !1,
                smartSpeed: 500,
                autoplay: !1,
                margin: 30,
                navText: ["<i class='la la-angle-left'></i>", "<i class='la la-angle-right'></i>"],
                responsive: {
                    320: {
                        items: 1
                    },
                    992: {
                        items: 3
                    }
                }
            }), o(".view-more-carousel").owlCarousel({
                loop: !0,
                items: 2,
                nav: !1,
                dots: !0,
                smartSpeed: 500,
                autoplay: !0,
                margin: 15,
                responsive: {
                    320: {
                        items: 1
                    },
                    768: {
                        items: 2
                    }
                }
            }), o(".view-more-carousel2").owlCarousel({
                loop: !0,
                items: 3,
                nav: !1,
                dots: !0,
                smartSpeed: 500,
                autoplay: !0,
                margin: 15,
                responsive: {
                    320: {
                        items: 1
                    },
                    768: {
                        items: 3
                    }
                }
            }), o(".counter").counterUp({
                delay: 20,
                oncomplete: function() { o(this).append('+'); },
                time: 2e3
            }), o(".video-play-btn").magnificPopup({
                type: "video"
            }), o(".testimonial-wrap").owlCarousel({
                loop: true,
                items: 10,
                nav: !1,
                dots: true,
                smartSpeed: 500,
                autoplay: true,
                margin: 30,
                autoHeight: true,
                responsive: {
                    320: {
                        items: 1
                    },
                    767: {
                        items: 2
                    },
                    992: {
                        items: 2
                    },
                    1025: {
                        items: 2
                    },
                    1440: {
                        items: 2
                    }
                }
            }), o(".client-logo").owlCarousel({
                loop: !0,
                items: 5,
                nav: !1,
                dots: !1,
                smartSpeed: 500,
                autoplay: true,
                responsive: {
                    0: {
                        items: 2
                    },
                    481: {
                        items: 3
                    },
                    768: {
                        items: 4
                    },
                    992: {
                        items: 5
                    }
                }
            }), o(".blog-post-carousel").owlCarousel({
                loop: !0,
                items: 3,
                nav: !1,
                dots: !0,
                smartSpeed: 500,
                autoplay: !1,
                margin: 30,
                responsive: {
                    320: {
                        items: 1
                    },
                    992: {
                        items: 3
                    }
                }
            }), o('[data-toggle="tooltip"]').tooltip(), o(document).on("click", ".faq-heading", function() {
                return o(this).closest(".faq-panel").siblings().removeClass("active").find(".faq-content").slideUp(200), o(this).closest(".faq-panel").toggleClass("active").find(".faq-content").slideToggle(200), !1
            }), o(document).on("click", ".portfolio-filter li", function() {
                var e = o(this).attr("data-filter");
                o(".portfolio-list").isotope({
                    filter: e
                }), o(".portfolio-filter li").removeClass("active"), o(this).addClass("active")
            }), o(".portfolio-list").isotope({
                itemSelector: ".single-portfolio-item",
                percentPosition: !0,
                masonry: {
                    columnWidth: ".single-portfolio-item",
                    horizontalOrder: !0
                }
            }), o("[data-fancybox]").fancybox({
                buttons: ["zoom", "share", "slideShow", "fullScreen", "download", "thumbs", "close"]
            }), o.fancybox.defaults.animationEffect = "zoom", o("#map").length && initMap("map", 40.717499, -74.044113, "images/map-marker.png"), o(document).on("click", ".input-number-increment", function() {
                var e = o(this).parents(".input-number-group").find(".input-number"),
                    t = parseInt(e.val(), 10);
                e.val(t + 1)
            }), o(document).on("click", ".input-number-decrement", function() {
                var e = o(this).parents(".input-number-group").find(".input-number"),
                    t = parseInt(e.val(), 10);
                e.val(t - 1)
            })
        })
}(jQuery);