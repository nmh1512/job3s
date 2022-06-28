$(".sign_in").click(function () {
  $(this).toggleClass('bg_white');
  $(".signin_choose").toggle();
  
});

$(window).click(function (e) {
  if (!$(e.target).is(".sign_in")) {
    $(".sign_in").removeClass('bg_white');
    $(".signin_choose").hide();
  }
});


