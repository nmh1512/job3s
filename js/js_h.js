function show_popup_choose(e) {
  $(".popup_choose").each(function () {
    if (!$(this).is($(e).find(".popup_choose"))) {
      $(this).hide();
    }
  });
  $(e).toggleClass("bg_white");
  $(e).find(".popup_choose").slideToggle();
}

$(window).click(function (e) {
  if (!$(e.target).is(".show_popup_choose")) {
    $(".show_popup_choose").removeClass("bg_white");
    $(".show_popup_choose").removeClass("bg_s_green");
    $(".popup_choose").hide();
  }
});

// $(window).click(function (e) {
//   if (!$(e.target).is(".show_popup")) {
//     $(".popup").addClass('display_none');

//   }
// });
$('.login').click(function() {
  $(this).toggleClass('bg_s_green')
})

function showPopup(ele) {
  $(ele).removeClass("display_none");
}
$(".dong_popup").each(function () {
  $(this).click(function () {
    var ele = $(this).parents(".popupItem");
    ele.addClass("animation_zoom_out");

    ele.on("animationend", function () {
      $(".popupItem").removeClass("animation_zoom_out");
      $(".popup_chung").addClass("display_none");
      ele.addClass("display_none");
      ele.unbind();
    });
  });
});
