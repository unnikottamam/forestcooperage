$(document).ready(function () {
  $(".header__toggle").on("click", function (e) {
    e.preventDefault();
    $("body, .header, .mainmenu, .header__toggle").toggleClass("menuactive");
  });

  $(".sidegallery__slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    autoplay: true,
    autoplaySpeed: 5000,
    dots: true
  });

  $(".productlist__item").on("click", function (e) {
    e.preventDefault();
    if ($(this).hasClass("active")) {
      $(".productlist__item").removeClass("active");
    } else {
      $(".productlist__item").removeClass("active");
      $(this).addClass("active");
    }
  });

  $(".faqsec__inn h3").on("click", function (e) {
    e.preventDefault();
    if ($(this).parents(".faqsec__item").hasClass("active")) {
      $(".faqsec__item").removeClass("active");
    } else {
      $(".faqsec__item").removeClass("active");
      $(this).parents(".faqsec__item").addClass("active");
    }
  });
});
