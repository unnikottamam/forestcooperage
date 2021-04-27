$(document).ready(function () {
  $(".header__toggle").on("click", function (e) {
    e.preventDefault();
    $("body, .header, .mainmenu, .header__toggle").toggleClass("menuactive");
  });
});
