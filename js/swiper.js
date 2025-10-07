if (".slider-page-title-home".length > 0) {
    var swiper = new Swiper(".slider-page-title-home", {
        spaceBetween: 0,
        slidesPerView: 1,
        pagination: {
            el: ".page-title-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".page-title-next",
            prevEl: ".page-title-prev",
        },
    });
}

if ($(".silde-follow-item").length > 0) {
    var swiper = new Swiper(".silde-follow-item", {
        slidesPerView: 5,
        spaceBetween: 30,
        breakpoints: {
            0: {
                slidesPerView: 1.3,
            },
            550: {
                slidesPerView: 3.2,
            },
            767: {
                slidesPerView: 3.5,
            },
            991:{
                slidesPerView: 5,
            }
        },
    });
}

if ($(".slide-testimonials").length > 0) {
    var swiper = new Swiper(".slide-testimonials", {
        slidesPerView: 1,
        spaceBetween: 26,
        navigation: {
            nextEl: ".section-testimonial-next",
            prevEl: ".section-testimonial-prev",
        },
    });
}

if ($(".slide-our-menu").length > 0) {
    var swiper = new Swiper(".slide-our-menu", {
        slidesPerView: 3,
        spaceBetween: 30,
        navigation: {
            nextEl: ".our-product-next",
            prevEl: ".our-product-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1.2,
                spaceBetween: 15
            },
            750: {
                slidesPerView: 2.3,
            },
            991: {
                slidesPerView: 3,
            },
        },
    });
}


if ($(".partner-slide").length > 0) {
    var swiper = new Swiper(".partner-slide", {
        spaceBetween: 30,
        slidesPerView: 6,
        observer: true,
        observeParents: true,
        loop: true,
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },
        speed: 10000,
        breakpoints: {
            0: {
                slidesPerView: 3,
                spaceBetween: 10,
            },
            450: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
            868: {
                slidesPerView: 6,
                spaceBetween: 30,
            },
        },
    });
}

if ($(".slide-product").length > 0) {
    var swiper = new Swiper(".slide-product", {
        slidesPerView: 3,
        spaceBetween: 26,
        navigation: {
            nextEl: ".our-product-next",
            prevEl: ".our-product-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1.2,
            },
            400: {
                slidesPerView: 1.5,
            },
            750: {
                slidesPerView: 3,
            },
            1280: {
                slidesPerView: 3,
            },
        },
    });
}
if ($(".slide-layout-3").length > 0) {
    var swiper = new Swiper(".slide-layout-3", {
        slidesPerView: 3,
        spaceBetween: 30,
        breakpoints: {
            0: {
                slidesPerView: 1.2,
            },
            400: {
                slidesPerView: 1.2,
            },
            767: {
                slidesPerView: 2.3,
            },
            991: {
                slidesPerView: 3,
            },
        },
    });
}

if ($(".thumbs-slider").length > 0) {
    var direction = $(".tf-product-media-thumbs").data("direction");
    var thumbs = new Swiper(".tf-product-media-thumbs", {
      spaceBetween: 30,
      slidesPerView: "3",
      slideTo: 1,
      direction: "vertical",
      observer: true,
      observeParents: true,
      breakpoints: {
        0: {
          direction: "horizontal",
          slidesPerView: 3,
        },
        1150: {
          direction: "horizontal",
          direction: direction,
        },
      },
      450: {
        direction: "horizontal",
      },
    });
    var main = new Swiper(".tf-product-media-main", {
      spaceBetween: 0,
      observer: true,
      observeParents: true,
      thumbs: {
        swiper: thumbs,
      },
    });
}