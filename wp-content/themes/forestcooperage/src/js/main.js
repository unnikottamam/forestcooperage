$(document).ready(function () {
  $("a[href='#menutoggle']").on("click", function (e) {
    e.preventDefault();
    $("body, .header, .header__menu").toggleClass("menuactive");
  });

  $("a[href='#down']").on("click", function (e) {
    e.preventDefault();
    e.preventDefault();
    $("html, body").animate(
      {
        scrollTop: $($(this).parents("section").next()).offset().top,
      },
      300
    );
  });

  $(".sidegallery__slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    autoplay: true,
    autoplaySpeed: 5000,
    dots: true,
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

  $(function () {
    var header = $(".header");
    $(window).scroll(function () {
      var scroll = $(window).scrollTop();
      if (scroll >= 180) {
        header.addClass("active");
      } else {
        header.removeClass("active");
      }
    });
  });
});
