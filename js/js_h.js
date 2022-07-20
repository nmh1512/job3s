function show_popup_choose(e) {
  $(".popup_choose").each(function () {
    if (!$(this).is($(e).find(".popup_choose"))) {
      $(this).hide();
    }
  });
  $(e).toggleClass("bg_white");
  $(e).find(".popup_choose").show();
  $(e).addClass("removePopup");
}
checkContact();

function checkContact() {
  if ($("#toggle_contact").is(":checked")) {
    $(".choose_contact").removeClass("display_none");
    $('.text_contact').css('color, #009638')
  } else {
    $(".choose_contact").addClass("display_none");
    $('.text_contact').css('color, #FF4040')

  }
}
$("#toggle_contact").change(function() {
  checkContact();
});

checkJob();
function checkJob() {
  if($('#trangthai_timviec').is(":checked")) {
    $('.text_job').css('color, #009638')
    $('.text_job').text('Trạng thái tìm việc đang bật')
    $('.img_edit_job').show()
  } else {
    $('.text_job').css('color, #FF4040')
    $('.text_job').text('Trạng thái tìm việc đang tắt')
    $('.img_edit_job').hide()

  }
}
$("#trangthai_timviec").change(function() {
  checkJob();
});
// $(".inf").click(function () {
//   $(".popup_account").slideToggle(1);
// });

// var header_icon_remind = $(".inf");
// var popup_remind_acount = $(".popup_account");
// $(window).click(function (e) {
//   if (
//     !header_icon_remind.is(e.target) &&
//     header_icon_remind.has(e.target).length == 0 &&
//     !popup_remind_acount.is(e.target) &&
//     popup_remind_acount.has(e.target).length == 0
//   ) {
//     popup_remind_acount.hide();
//   }
  
// });
// $(window).click(function (e) {
//   if (!$(e.target).is(".show_popup")) {
//     $(".popup").addClass('display_none');

//   }
// });
$(".login").click(function () {
  $(this).toggleClass("bg_s_green");
});

// function showPopup(ele) {
//   $(ele).removeClass("display_none");
// }
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
