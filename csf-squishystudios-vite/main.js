import './style.scss'

/*swiper*/
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

/*animation 404*/
gsap.timeline({repeat:-1})
.to('#plateau2', {rotate: '-20vw', duration: 1, ease: 'ease-out', yoyo:true},1)
.to('#plateau2', {rotate: '20vw', duration: 1, ease: 'ease-in'},2)
.to('#plateau2', {rotate: '0vw', duration: 1.2, ease: 'ease-in'},3)

gsap.timeline() .to('#carousel1', {rotate: 360, duration: 4, ease:Linear.easeNone, repeat:-1})

/*animation monocycle*/
var playmono = document.querySelector('#mono-don');

	playmono.addEventListener('click', () => {
	
	gsap.timeline()
	.to('#roue', {x: '-40vw', duration: 2, ease: 'ease-out', yoyo:true, repeat:1},0)
	.to('#monocycle', {x: '-40vw', duration: 2, ease: 'ease-out', yoyo:true, repeat:1},0)
	
	  gsap.timeline() .to('#roue', {rotate: -500, duration: 2, repeat: 0, ease: 'ease-out', yoyo:true, repeat:1})
	
	gsap.timeline()
	.to('#roue2', {x: '-40vw', duration: 2, ease: 'ease-out', yoyo:true, repeat:1},0)
	.to('#monocycle2', {x: '-40vw', duration: 2, ease: 'ease-out', yoyo:true, repeat:1},0)
	
	  gsap.timeline() .to('#roue2', {rotate: -500, duration: 2, repeat: 0, ease: 'ease-out', yoyo:true, repeat:1})
		});

/*hamburger toggle*/
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

/*animation hover hamburger*/
const hover = gsap.timeline()
	.to(upper, 0.1, {attr: {d: "M8,2 L2,2"}, x: 1, y: 1, ease:Power2.easeInOut, }, )
	.to(lower, 0.1, {attr: {d: "M8,8 L2,8"}, x: 1, y: -1, ease:Power2.easeInOut, }, )
	.to(middle, 0.1, {attr: {d: "M2,5 L8,5"}, x: 1, ease:Power2.easeInOut, }, );

	hamburger.addEventListener("mouseenter", () => hover.play());
	hamburger.addEventListener("mouseleave", () => hover.reverse());



