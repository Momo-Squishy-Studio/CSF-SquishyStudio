import gsap from "gsap";
import './style.scss'

var upper = document.getElementsByClassName('upper');
var middle = document.getElementsByClassName('middle');
var lower = document.getElementsByClassName('lower');
var hamburger = document.getElementsByClassName('hamburger')

hamburger.addEventListener('click', function() {
    gsap.timeline()
    .to(upper, 0.5, {attr: {d: "M8,2 L2,8"}, x: 1, ease:Power2.easeInOut}, 'start')
    .to(middle, 0.5, {autoAlpha: 0}, 'start')
    .to(lower, 0.5, {attr: {d: "M8,8 L2,2"}, x: 1, ease:Power2.easeInOut}, 'start');
  });