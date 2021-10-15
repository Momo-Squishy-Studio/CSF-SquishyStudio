import './style.scss'

const upper = document.querySelector('.upper');
const middle = document.querySelector('.middle');
const lower = document.querySelector('.lower');
const hamburger = document.querySelector('.hamburger')

hamburger.addEventListener('click', ()=> {
	var x = document.querySelector('.hamburger-toggle');

	if (x.style.display == "block") {
		x.style.display = "none";
		return;
	}
	x.style.display = "block";
});

const swiper = new Swiper('.swiper-container', {
	autoplay: {
		delay: 3000,
	  },
	speed: 1000,
	loop: true,
	slidesPerView: 'auto',
	cubeEffect: {slideShadows: false},
	pagination: {el: '.swiper-pagination', type: 'bullets',},
	navigation: {nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', },
  });

const hover = gsap.timeline()
	.to(upper, 0.1, {attr: {d: "M8,2 L2,2"}, x: 1, y: 1, ease:Power2.easeInOut, }, )
	.to(lower, 0.1, {attr: {d: "M8,8 L2,8"}, x: 1, y: -1, ease:Power2.easeInOut, }, )
	.to(middle, 0.1, {attr: {d: "M2,5 L8,5"}, x: 1, ease:Power2.easeInOut, }, );
	

	hamburger.addEventListener("mouseenter", () => hover.play());
	hamburger.addEventListener("mouseleave", () => hover.reverse());