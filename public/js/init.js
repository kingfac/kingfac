/* const swiper = new Swiper('.swiper-container', {
    // Optional parameters
    //direction: 'vertical',
    loop: true,
    autoplay : {
      delay : 1000
    },
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    /* navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }, */

// And if we need scrollbar
/* scrollbar: {
  el: '.swiper-scrollbar',
},
}); */


new Splide('.splide', {
  type: 'loop',
  autoplay: true,
  pauseOnHover: false,
  arrows: false
}).mount();

new Splide('#actuSplide', {
  type: 'loop',
  autoplay: true,
  pauseOnHover: false,
  arrows: true
}).mount();

const scrolleur = document.querySelector('#scrolleur');
scrolleur.classList.add('scale-0');
window.addEventListener('scroll', (e) => {
  //console.log(document.body.scrollTop);
  if (document.body.scrollTop >= 400 || document.documentElement.scrollTop >= 400) {
    scrolleur.classList.remove('scale-0');
    //scrolleur.classList.add('block');
  }
  else {
    scrolleur.classList.add('scale-0');
    //scrolleur.classList.remove('block')
  }
});


/* document.addEventListener('alpine:init', () => {
  Alpine.data('app', () => ({
      open: false,

      toggle() {
          this.open = ! this.open
      }
  }))
}) */

 