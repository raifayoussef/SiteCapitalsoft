/*=============== SWIPER JS ===============*/
let swiperCards = new Swiper(".card__content", {
  loop: true,
  spaceBetween: 5,
  grabCursor: true,

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints:{
    600: {
      slidesPerView: 1,
    },
    968: {
      slidesPerView: 5,
    },
  },
  
  autoplay: {
    delay: 3000, // Delay in milliseconds between slides
    disableOnInteraction: false, // Prevent autoplay when user interacts with the swiper
  },
});
