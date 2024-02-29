var swiper = new Swiper(".book-slider", {
        loop : true,
        centeredSlides : true,
        autoplay: {
            delay: 3500,
            disableOnInteraction:false,
        },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        600: {
          slidesPerView: 2,
        },
        1224: {
          slidesPerView: 3,
        },
      },
    });


