$(".nav_menu_btn button").click(function () {
  toggleNav();
});
$(".nav_resp").click(function (e) {
  var t = $(this).children("div").offset().top;
  var h = $(this).children("div").outerHeight();
  var y = e.offsetY;
  if (t < y || h > y) {
    toggleNav();
  }
});

function toggleNav() {
  $(".nav_resp").slideToggle();
  $(".nav_menu_btn button").toggleClass(".bg_e5_86");
  $(".nav_menu_btn button").toggleClass("bg_white");
  $(".nav_header").toggleClass("bg_white");
}
