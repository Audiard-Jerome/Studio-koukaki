// effet fade in sur les sections avec la class fade-in
const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('active');
      return;
    }
    //entry.target.classList.remove('fade-in');
  });
});
const section = document.querySelectorAll('.entrance');
section.forEach((element) => observer.observe(element));

//Effet rotation plus rapide lors du scroll
var root = document.querySelector(':root');
let lastKnownScrollPosition = 0;
let ticking = false;

function doSomething(scrollPos) {
  root.style.setProperty('--rotation', '1s');
  setTimeout(() =>{
    root.style.setProperty('--rotation', '10s');
  }, 2000 )
}
document.addEventListener("scroll", (event) => {
  lastKnownScrollPosition = window.scrollY;
  if (!ticking) {
    window.requestAnimationFrame(() => {
      doSomething(lastKnownScrollPosition);
      ticking = false;
    });
    ticking = true;
  }
});

// init skrollr sauf si on est sur mobile.
function isMobile() {
  var userAgent = navigator.userAgent.toLowerCase();
  return (
    userAgent.indexOf("android") > -1 ||
    userAgent.indexOf("iphone") > -1 ||
    userAgent.indexOf("ipad") > -1 ||
    userAgent.indexOf("ipod") > -1 ||
    userAgent.indexOf("blackberry") > -1 ||
    userAgent.indexOf("windows phone") > -1
  );
}

if (isMobile()) {
  // code à exécuter si l'utilisateur est sur un appareil mobile
} else {
  var s = skrollr.init();
}



//swiper
var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  loop: true,
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  autoHeight: true,
  speed: 1000,
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: false,
  },
  autoplay :{
    delay: 3000,
    disableOnInteraction: true,
    pauseOnMouseEnter: true,
  }
});

//animation des titres
function addAnimationTitre (titre) {
var animationTitre = titre.querySelectorAll('span');
for (var i = 0; i < animationTitre.length; i++) {
  animationTitre[i].classList.add("animationTitre__mot");
  animationTitre[i].classList.add("animationTitre__mot--"+i);
}
}
const observerTitre = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      addAnimationTitre (entry.target);
      return;
    }
  });
});
const sectionTitre = document.querySelectorAll('.animationTitre');
sectionTitre.forEach((element) => observerTitre.observe(element));

// gestion menu burger
const burger = document.querySelector('.burger');
const menu = document.querySelector('.main-menu');
const menuLink = document.querySelectorAll('.main-menu a');

burger.addEventListener('click', () => {
  burger.classList.toggle('active');
  menu.classList.toggle('active');
})

menuLink.forEach((link) => {
  link.addEventListener('click', () => {
    burger.classList.toggle('active');
    menu.classList.toggle('active');
  });
});




