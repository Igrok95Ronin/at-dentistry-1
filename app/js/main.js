const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 50,
      stretch: 1,
      scale: 2,
      depth: 1950,
      modifier: 1,
      slideShadows: false,
    },




    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  

  });
  