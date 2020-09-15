(function($, window, document, undefined) {
    "use strict";

    $(document).ready(function() {
        var $cache = {
            window: $(window),
            document: $(document),
            html: $("html").eq(0),
            body: $("body").eq(0),
            jsToTop: $(".js-to-top"),
            jsScrollTo: $(".js-scroll-to"),
            siteWrap: $(".site-wrap"),
            siteNav: $(".site-nav")
        };

        var IM = {
            init: function() {
                this.utils.init();
            },
            utils: {
                init: function() {
                    this.scrollTo();
                    this.dataCss();
                    this.scrollMagic();
                    this.mobileMenu();
                    this.siteNavSticky();
                    this.galleryBuilder();
										this.swiperSetup();
										this.openAnim();
								},
								openAnim: function(){
									//Open page animations
									var openTween = new TimelineMax();
									openTween.to(".site-nav .logo img", 0.5, { opacity: 1, left: 0 });
									openTween.to(".site-nav .btn-primary", 0.2, { opacity: 1 });
									openTween.to(".site-nav .social-icons", 0.2, { opacity: 1 });
									openTween.staggerTo(
										".site-nav .menu > li",
										0.2,
										{
											opacity: 1,
											top: 0
										},
										0.1
										);
									openTween.to(".page-header h1", 0.3, { opacity: 1 });
									
									},
                siteNavSticky: function() {
									if ($cache.window.scrollTop() > 0) {
										$cache.siteNav.addClass("sticky");
									}
									$cache.window.scroll(function() {
                        if ($cache.window.scrollTop() > 0) {
                            $cache.siteNav.addClass("sticky");
                        } else {
                            $cache.siteNav.removeClass("sticky");
                        }
                    });
                },
                mobileMenu: function() {
                    /* stop jump to top if link is # */
                    $('a[href="#"]').on("click", function(e) {
                        e.preventDefault();
                    });
										
										$('.menu-item-682 a, .menu-item-683 a').attr('target', '_blank');

                    $(".menu__mobile .menu li.menu-item-has-children > a").after('<i class="fal fa-angle-down"></i>');

                    $(".menu__mobile .menu li.menu-item-has-children i").on(
                        "click",
                        function() {
                            $(this)
                                .closest(".menu-item-has-children")
                                .find("> .sub-menu")
                                .toggleClass("active");
                        }
                    );

                    var tl = new TimelineLite({ paused: true, reversed: true });

                    tl.to(".menu__mobile", 0.1, {
                        zIndex: 9999,
                        opacity: 1,
                        left: 0
                    });
                    tl.staggerTo(
                        ".menu__mobile .menu > li",
                        0.25, { left: 0, opacity: 1 },
                        0.1
                    );

                    $('[data-toggle="menu"]').on("click", function() {
                        tl.reversed() ? tl.play() : tl.reverse();
                    });
                },
                scrollTo: function() {
                    // Animate the scroll to top
                    $cache.jsToTop.on("click", function(e) {
                        e.preventDefault();
                        $("html, body").animate({ scrollTop: 0 }, 300);
                    });

                    // Animate scroll to id
                    $cache.jsScrollTo.on("click", function(e) {
                        e.preventDefault();
                        var href = $(this).attr("href"),
                            scrollPoint = $(href).offset();
                        $("html, body").animate({ scrollTop: scrollPoint.top },
                            300
                        );
                    });
                },
                dataCss: function() {
                    // background images
                    $("[data-bg-image]").each(function() {
                        var $this = $(this);
                        $this.css({
                            "background-image": 'url("' + $this.data("bgImage") + '")'
                        });
                    });

                    // background colors
                    $("[data-bg-color]").each(function() {
                        var $this = $(this);
                        $this.css({
                            "background-color": $this.data("bgColor")
                        });
                    });
                },
                scrollMagic: function() {
                    var $blocks = $cache.siteWrap.children(".block"),
                        controller = new ScrollMagic.Controller();

                    $blocks.each(function(i, item) {
                        new ScrollMagic.Scene({
                                triggerElement: item,
                                duration: item.outerHeight,
                                triggerHook: 0.9,
                                reverse: false
                            })
                            .on("enter", function() {
                                var $current = $blocks.eq(i);
                                // Example usage

                                var tl = new TimelineMax({
                                    paused: true,
                                    force3D: true,
                                    ease: Circ.easeInOut
                                });
                                var tl2 = new TimelineMax({
                                    paused: true,
                                    force3D: true,
                                    ease: Circ.easeInOut
                                });

                                tl.to($current.find(".fade-in-left"), 0.6, {
                                    autoAlpha: 1,
                                    left: 0
                                });
                                tl.to($current.find(".fade-in-right"), 0.6, {
                                    autoAlpha: 1,
                                    right: 0
                                });
                                tl2.to($current.find(".fade-in"), 0.6, {
                                    autoAlpha: 1
                                });
                                tl2.to($current.find(".fade-in-bottom"), 0.6, {
                                    autoAlpha: 1,
                                    bottom: 0
                                });
                                tl.play();
                                tl2.play();
                            })
                            // Comment "addIndicators()" in/out to use
                            // .addIndicators()
                            .addTo(controller);
                    });
                },
                galleryBuilder: function() {
									$('h5.toggle').on('click', function(){
										$(this).parent().toggleClass('closed');
									});
                },
                swiperSetup: function() {
										
									if($('#block-5e4498b572322').length > 0){
										var testimonial_home = new Swiper(".swiper--testimonials", {
											slidesPerView: "auto",
											centeredSlides: true,
											loop: true,
											pagination: {
													el: ".swiper-pagination",
													clickable: true
											}
										});
									}else{
											var singleGallerySwiper = new Swiper(".swiper-container", {
													slidesPerView: 1,
													centeredSlides: true,
													loop: true,
													autoHeight: true, //enable auto height
													spaceBetween: 20,
													navigation: {
														nextEl: '.swiper-button-next',
														prevEl: '.swiper-button-prev',
													},
											});
									}
                }
            }
        };

        IM.init();
    });
})(jQuery, window, document);