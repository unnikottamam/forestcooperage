window.jQuery = $;
window.$ = $;

import "@fancyapps/fancybox/dist/jquery.fancybox.min.js";
import "slick-carousel";
import AOS from "aos";

AOS.init({
  duration: 700,
});

$(window).on("load", function () {
  AOS.refresh();
});
$(function () {
  AOS.init();
});

import "./main";
