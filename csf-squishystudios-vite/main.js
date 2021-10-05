import './style.scss'

const upper = document.querySelector('.upper');
const middle = document.querySelector('middle');
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

/*gsap.timeline()
	.to(upper, 0.5, {attr: {d: "M8,2 L2,8"}, x: 1, ease:Power2.easeInOut}, 'start')
	.to(middle, 0.5, {autoAlpha: 0}, 'start')
	.to(lower, 0.5, {attr: {d: "M8,8 L2,2"}, x: 1, ease:Power2.easeInOut}, 'start');*/