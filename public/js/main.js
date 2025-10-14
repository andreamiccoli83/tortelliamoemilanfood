/**
    preloader;
    headerFixed;
    retinaLogos;
    video;
    topSearch;
    counter;
    btnMobile;
    tabs;
    changeValue;
    styleShop;
    btnQuantity;
    infiniteScroll;
    goTop;
**/

(function ($) {
    ("use strict");
    // preloader
    var preloader = function () {
        setTimeout(function () {
            $(".preload-container").fadeOut("slow", function () {
                $(this).remove();
            });
        }, 1000);
    };

    // headerFixed
    var headerFixed = function () {
        if ($("header").hasClass("header-fixed")) {
            var nav = $("#header-main");
            if (nav.length) {
                var offsetTop = nav.offset().top,
                    headerHeight = nav.height(),
                    injectSpace = $("<div>", {
                        height: headerHeight,
                    });
                injectSpace.hide();

                if ($("header").hasClass("style-absolute")) {
                    injectSpace.hide();
                } else {
                    injectSpace.insertAfter(nav);
                }

                $(window).on("load scroll", function () {
                    if ($(window).scrollTop() > offsetTop + headerHeight) {
                        nav.addClass("is-fixed");
                    } else {
                        nav.removeClass("is-fixed");
                    }
                    if ($(window).scrollTop() > 300) {
                        nav.addClass("is-small");
                    } else {
                        nav.removeClass("is-small");
                    }
                });
            }
        }
    };

    // retinaLogos
    var retinaLogos = function () {
        var retina = window.devicePixelRatio > 1 ? true : false;
        if (retina) {
            var tfheader = $("#logo_header").data("retina");
            $(".header-logo")
                .find("img")
                .attr({ src: tfheader, width: "187px", height: "47px" });

            var tfmobile = $("#mobile-logo_header").data("retina");
            $(".mobile-nav-wrap")
                .find("img")
                .attr({ src: tfmobile, width: "150px", height: "47px" });

            var tffooter = $("#logo_footer").data("retina");
            $(".footer-logo")
                .find("img")
                .attr({ src: tffooter, width: "205px", height: "53px" });
        }
    };

    // Video
    var video = function () {
        if ($("div").hasClass("widget-video")) {
            $(".popup-youtube").magnificPopup({
                type: "iframe",
            });
        }
    };

    // topSearch
    var topSearch = function () {
        $(document).on("click", function (e) {
            var clickID = e.target.id;
            if (clickID !== "s") {
                $(".top-search").removeClass("active");
            }
        });
        $(document).on("click", function (e) {
            var clickID = e.target.class;
            if (clickID !== "a111") {
                $(".show-search").removeClass("active");
            }
        });

        $(".show-search").on("click", function (event) {
            event.stopPropagation();
        });
        $(".form-search").on("click", function (event) {
            event.stopPropagation();
        });
        $(".show-search").on("click", function (event) {
            if (!$(".top-search").hasClass("active")) {
                $(".top-search").addClass("active");
                event.preventDefault();
            } else $(".top-search").removeClass("active");
            event.preventDefault();
            if (!$(".show-search").hasClass("active"))
                $(".show-search").addClass("active");
            else $(".show-search").removeClass("active");
        });
    };

    //counter
    var counter = function () {
        if ($(document.body).hasClass("counter-scroll")) {
            var a = 0;
            $(window).scroll(function () {
                var oTop = $(".counter").offset().top - window.innerHeight;
                if (a == 0 && $(window).scrollTop() > oTop) {
                    if ($().countTo) {
                        $(".counter")
                            .find(".number")
                            .each(function () {
                                var to = $(this).data("to"),
                                    speed = $(this).data("speed");
                                $(this).countTo({
                                    to: to,
                                    speed: speed,
                                });
                            });
                    }
                    a = 1;
                }
            });
        }
    };

    //btnmobile
    var btnMobile = function () {
        if ($("header").hasClass("header")) {
            $(".mobile-button").on("click", function () {
                $(this)
                    .closest("#header-main")
                    .find(".mobile-nav-wrap")
                    .toggleClass("active");
            });
            $(".mobile-nav-close").on("click", function () {
                $(this)
                    .closest("#header-main")
                    .find(".mobile-nav-wrap")
                    .toggleClass("active");
            });
            $(".mobile-nav-wrap .overlay-mobile-nav").on("click", function () {
                $(this)
                    .closest("#header-main")
                    .find(".mobile-nav-wrap")
                    .toggleClass("active");
            });

            $(document).on(
                "click",
                ".menu-item-has-children-mobile",
                function () {
                    var args = { duration: 300 };
                    if ($(this).hasClass("active")) {
                        $(this).children(".sub-menu-mobile").slideUp(args);
                        $(this).removeClass("active");
                    } else {
                        $(".sub-menu-mobile").slideUp(args);
                        $(this).children(".sub-menu-mobile").slideDown(args);
                        $(".menu-item-has-children-mobile").removeClass(
                            "active"
                        );
                        $(this).addClass("active");
                    }
                }
            );
        }
    };

    //tabs
    var tabs = function () {
        if ($(".widget-tabs").length > 0) {
            $(".widget-tabs").each(function () {
                var $widgetContentTab = $(this).find(".widget-content-tab");
                var $widgetMenuTab = $(this).find(".widget-menu-tab");
                
                if ($widgetContentTab.length && $widgetMenuTab.length) {
                    $widgetContentTab.children().hide();
                    $widgetContentTab.children(".active").show();
                    
                    $widgetMenuTab
                        .children(".item-title")
                        .on("click", function () {
                            var liActive = $(this).index();
                            var contentActive = $(this)
                                .siblings()
                                .removeClass("active")
                                .parents(".widget-tabs")
                                .find(".widget-content-tab")
                                .children()
                                .eq(liActive);
                            contentActive.addClass("active").fadeIn("slow");
                            contentActive.siblings().removeClass("active");
                            $(this)
                                .addClass("active")
                                .parents(".widget-tabs")
                                .find(".widget-content-tab")
                                .children()
                                .eq(liActive)
                                .siblings()
                                .hide();
                        });
                }
            });
        }
    };

    //changeValue
    var changeValue = function () {
        if ($(".tf-dropdown-sort").length > 0) {
            $(".select-item").click(function (event) {
                $(this)
                    .closest(".tf-dropdown-sort")
                    .find(".text-sort-value")
                    .text($(this).find(".text-value-item").text());

                $(this)
                    .closest(".dropdown-menu")
                    .find(".select-item.active")
                    .removeClass("active");

                $(this).addClass("active");
            });
        }
    };

    //styleShop
    var styleShop = function () {
        if ($("section").hasClass("section-shop")) {
            $(".btn-list").on("click", function () {
                $(".wg-shop-content")
                    .find(".col-md-6")
                    .removeClass("col-md-6")
                    .addClass("col-xl-12");
                $(".wg-shop-content")
                    .find(".product-item")
                    .addClass("style-list");
            });
            $(".btn-grid").on("click", function () {
                $(".wg-shop-content")
                    .find(".col-xl-12")
                    .removeClass("col-xl-12")
                    .addClass("col-md-6");
                $(".wg-shop-content")
                    .find(".product-item")
                    .removeClass("style-list");
            });
        }
    };

    var btnQuantity = function () {
        $(".minus-btn").on("click", function (e) {
            e.preventDefault();
            var $this = $(this);
            var $input = $this.closest("div").find("input");
            var value = parseInt($input.val());

            if (value > 1) {
                value = value - 1;
            }

            $input.val(value);
        });

        $(".plus-btn").on("click", function (e) {
            e.preventDefault();
            var $this = $(this);
            var $input = $this.closest("div").find("input");
            var value = parseInt($input.val());

            if (value > 0) {
                value = value + 1;
            }

            $input.val(value);
        });
    };

    //infiniteScroll
    var infiniteScroll = function () {
        $(".fl-item").slice(0, 9).show();
        $(".fl-item1").slice(0, 6).show();
        $(".fl-item2").slice(0, 3).show();
        $(".fl-item3").slice(0, 9).show();
        $(".fl-item4").slice(0, 6).show();

        if ($(".showmore-item").length > 0) {
            $(".btn-showmore").on("click", function () {
                setTimeout(() => {
                    $(".fl-item:hidden").slice(0, 3).show();
                    if ($(".fl-item:hidden").length == 0) {
                        $(".view-more-button").hide();
                    }
                }, 600);
            });
        }

        if ($(".showmore-item1").length > 0) {
            $(".btn-showmore1").on("click", function () {
                setTimeout(() => {
                    $(".fl-item1:hidden").slice(0, 3).show();
                    if ($(".fl-item1:hidden").length == 0) {
                        $(".view-more-button1").hide();
                    }
                }, 600);
            });
        }

        if ($(".showmore-item2").length > 0) {
            $(".btn-showmore2").on("click", function () {
                setTimeout(() => {
                    $(".fl-item2:hidden").slice(0, 3).show();
                    if ($(".fl-item2:hidden").length == 0) {
                        $(".view-more-button2").hide();
                    }
                }, 600);
            });
        }

        if ($(".showmore-item3").length > 0) {
            $(".btn-showmore3").on("click", function () {
                setTimeout(() => {
                    $(".fl-item3:hidden").slice(0, 3).show();
                    if ($(".fl-item3:hidden").length == 0) {
                        $(".view-more-button3").hide();
                    }
                }, 600);
            });
        }

        if ($(".showmore-item4").length > 0) {
            $(".btn-showmore4").on("click", function () {
                setTimeout(() => {
                    $(".fl-item4:hidden").slice(0, 3).show();
                    if ($(".fl-item4:hidden").length == 0) {
                        $(".view-more-button4").hide();
                    }
                }, 600);
            });
        }
    };

    //goTop
    var goTop = function () {
        if ($("div").hasClass("progress-wrap")) {
            var progressPath = document.querySelector(".progress-wrap path");
            if (!progressPath) return; // Exit if element doesn't exist
            var pathLength = progressPath.getTotalLength();
            progressPath.style.transition =
                progressPath.style.WebkitTransition = "none";
            progressPath.style.strokeDasharray = pathLength + " " + pathLength;
            progressPath.style.strokeDashoffset = pathLength;
            progressPath.getBoundingClientRect();
            progressPath.style.transition =
                progressPath.style.WebkitTransition =
                    "stroke-dashoffset 10ms linear";
            var updateprogress = function () {
                var scroll = $(window).scrollTop();
                var height = $(document).height() - $(window).height();
                var progress = pathLength - (scroll * pathLength) / height;
                progressPath.style.strokeDashoffset = progress;
            };
            updateprogress();
            $(window).scroll(updateprogress);
            var offset = 200;
            var duration = 200;
            jQuery(window).on("scroll", function () {
                if (jQuery(this).scrollTop() > offset) {
                    jQuery(".progress-wrap").addClass("active-progress");
                } else {
                    jQuery(".progress-wrap").removeClass("active-progress");
                }
            });
            jQuery(".progress-wrap").on("click", function (event) {
                event.preventDefault();
                jQuery("html, body").animate({ scrollTop: 0 }, duration);
                return false;
            });
        }
    };

    // Dom Ready
    $(function () {
        preloader();
        headerFixed();
        retinaLogos();
        video();
        topSearch();
        counter();
        btnMobile();
        tabs();
        changeValue();
        styleShop();
        btnQuantity();
        infiniteScroll();
        goTop();
    });
})(jQuery);
