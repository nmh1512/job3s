function show_popup_choose(e) {
  $(e).toggleClass("bg_white");
  $(e).find(".popup_choose").toggle();
}

$(window).click(function (e) {
  if (!$(e.target).is(".show_popup_choose")) {
    $(".show_popup_choose").removeClass("bg_white");
    $(".popup_choose").hide();
  }
});

// $(window).click(function (e) {
//   if (!$(e.target).is(".show_popup")) {
//     $(".popup").addClass('display_none');

//   }
// });

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
      ele.unbind()
    });
    
  });
});
