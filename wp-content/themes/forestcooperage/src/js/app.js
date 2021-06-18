window.jQuery = $;
window.$ = $;

import Alert from "bootstrap/js/dist/alert";
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

var alertList = document.querySelectorAll(".alert");
alertList.forEach(function (alert) {
  new Alert(alert);
});

import "./main";
