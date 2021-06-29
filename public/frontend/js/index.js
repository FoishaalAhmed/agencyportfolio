$(document).ready(function () {
  $(".owl-carousel").owlCarousel();
});
var owl = $(".owl-carousel");
owl.owlCarousel({
  items: 8,
  loop: true,
  margin: 5,
  autoplay: true,
  // preventActionWhenRunning: true,
  autoplayTimeout: 900,
  autoplayHoverPause: true,
  speed: 750,
  mouseDrag: true,
});
$(".play").on("click", function () {
  owl.trigger("play.owl.autoplay", [1000]);
});
$(".stop").on("click", function () {
  owl.trigger("stop.owl.autoplay");
});
