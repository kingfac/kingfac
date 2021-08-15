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



const scrolleur = document.querySelector('#scrolleur');
const nav = document.querySelector('#nav');
scrolleur.classList.add('scale-0');
nav.classList.add('absolute');
window.addEventListener('scroll', (e) => {
  
  //console.log(document.body.scrollTop);
  if (document.body.scrollTop >= 400 || document.documentElement.scrollTop >= 400) {
    scrolleur.classList.remove('scale-0');
    nav.classList.remove('absolute');
    nav.classList.add('fixed');
     
  }
  else {
    scrolleur.classList.add('scale-0');
    //scrolleur.classList.remove('block')
    nav.classList.add('absolute');
    nav.classList.remove('fixed');
  }
});


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


/* document.addEventListener('alpine:init', () => {
  Alpine.data('app', () => ({
      open: false,

      toggle() {
          this.open = ! this.open
      }
  }))
}) */

 