$(document).ready(function () {
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll > 50) {
      $('#nav-bar').css('background', 'rgb(2 37 58)');
    } else {
      $('#nav-bar').css('background', '');
    }
  });
});

const root = document.documentElement;
const marqueeElementsDisplayed = getComputedStyle(root).getPropertyValue(
  '--marquee-elements-displayed',
);

const marqueeContent = document.querySelector('ul.marquee-content');
const marqueeContent2 = document.querySelector('ul.marquee-content2');
const marqueeContent3 = document.querySelector('ul.marquee-content3');
root.style.setProperty('--marquee-elements', marqueeContent.children.length);
root.style.setProperty('--marquee-elements', marqueeContent2.children.length);
root.style.setProperty('--marquee-elements', marqueeContent3.children.length);

for (let i = 0; i < marqueeElementsDisplayed; i++) {
  marqueeContent.appendChild(marqueeContent.children[i].cloneNode(true));
}
for (let i = 0; i < marqueeElementsDisplayed; i++) {
  marqueeContent2.appendChild(marqueeContent2.children[i].cloneNode(true));
}
for (let i = 0; i < marqueeElementsDisplayed; i++) {
  marqueeContent3.appendChild(marqueeContent3.children[i].cloneNode(true));
}
// new video slider
// carasol

$(document).ready(function () {
  $('.owl-carousel').owlCarousel();
});
var owl = $('.owl-carousel');
owl.owlCarousel({
  items: 4,
  loop: true,
  margin: 10,
  autoplay: true,
  autoplayTimeout: 1000,
  autoplayHoverPause: true,
});
$('.play').on('click', function () {
  owl.trigger('play.owl.autoplay', [1000]);
});
$('.stop').on('click', function () {
  owl.trigger('stop.owl.autoplay');
});
