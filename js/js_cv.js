$(document).ready(function () {
  loadData();
  var login_from_prev = 0;
  var prev_alias = "";
});
var base_url = "https://vieclam123.vn/";

function loadData() {
  var path = window.location.pathname;
  path = path.replace("/", "");
  path = path;
  arr_path = path.split("/");
  url = arr_path[0];
  switch (url) {
    case "mau-cv-xin-viec":
      document.cookie = "lang_id=1;path=/";
      var c_cookie = document.cookie;
      break;
    case "mau-cv-tieng-anh":
      document.cookie = "lang_id=2;path=/";
      var c_cookie = document.cookie;
      $("#pre_language").html(
        `<option value="2" selected>Tiáº¿ng Anh</option>`
      );
      $("#pre_language").val("2");
      break;
    case "mau-cv-tieng-nhat":
      document.cookie = "lang_id=3;path=/";
      var c_cookie = document.cookie;
      $("#pre_language").html(
        `<option value="3" selected>Tiáº¿ng Nháº­t</option>`
      );
      $("#pre_language").val("3");
      break;
    case "mau-cv-tieng-trung":
      document.cookie = "lang_id=4;path=/";
      var c_cookie = document.cookie;
      $("#pre_language").html(
        `<option value="4" selected>Tiáº¿ng Trung</option>`
      );
      $("#pre_language").val("4");
      break;
    case "mau-cv-tieng-han":
      document.cookie = "lang_id=5;path=/";
      var c_cookie = document.cookie;
      $("#pre_language").html(
        `<option value="5" selected>Tiáº¿ng HĂ n</option>`
      );
      $("#pre_language").val("5");
      break;
    default:
      break;
  }
  $("body").click(function (event) {
    if (event.target.id == "v_header_tablet") {
      $("#v_header_tablet").fadeOut("fast");
    }
    if (event.target.id == "v_popup_login") {
      $(".v_check_page").val(-1);
      $(".v_popup_login").fadeOut();
    }
    if (event.target.id == "v_logout1") {
      $(".v_logout_maxwidth").slideUp("", function () {
        $(".v_logout").hide();
      });
    }
  });

  $("#v_header_btn_down").click(function () {
    $("#v_header_tablet").css({
      display: "block",
      height: $("body").outerHeight(),
    });

    $("#v_header_dropdown,#v_header_tablet").fadeIn("fast");
    $("#v_header_dropdown").css({
      display: "flex",
    });
    $("#v_alert").slideUp("fast");
  });
  $("#v_header_login,.v_active_like1,#v_tb_login,.q-text-login-now").click(
    function () {
      $("#sign_up_modal").fadeOut();
      $(".v_popup_login").fadeIn();
    }
  );
  $(".v_main_cv_edit2").click(function () {
    var id = $(this).data("id");
    $(".v_check_page").val(id);
    // $("#v_header_tablet").fadeOut();
    $(".v_popup_login").fadeIn();
    login_from_prev = 1;
    prev_alias = "";
  });

  $(".v_main_delete").click(function () {
    var id = $(this);
    $(".v_popup_delete").show();
    $(".v_popup_delete_maxwidth").slideDown("", function () {
      $(this)
        .find(".v_popup_delete_success")
        .click(function () {
          $.ajax({
            url: "/manager/v_delete_your_cv",
            type: "POST",
            dataType: "json",
            data: {
              id: id.data("id"),
            },
            success: function (data) {
              if (data.result == true) {
                window.location.reload();
              }
            },
            error: function () {
              alert("CĂ³ lá»—i xáº£y ra vui lĂ²ng thá»­ láº¡i");
            },
          });
        });
    });
  });
  $(".v_popup_delete_cancel").click(function () {
    $(".v_popup_delete_maxwidth").slideUp("", function () {
      $(".v_popup_delete").hide();
    });
  });
  $(".v_popup_hide").click(function () {
    $(".v_check_page").val(-1);
    $(".v_popup_login").fadeOut();
  });
  $("#v_tb_signup").click(function () {
    $("#v_tb").fadeOut("fast");
    $(".v_popup_login").fadeOut();
  });
  $("#v_logout,#v_logout_tb,.v_logout2").click(function () {
    $("#v_tb,#v_info").fadeOut();
    $(".v_logout").show();
    $(".v_logout_maxwidth").slideDown();
  });
  $(".v_forgot_signup").click(function () {
    $(".v_popup_login").fadeOut();
    $("#sign_up_modal").fadeIn();
  });
  $(".v_logout_cancel").click(function () {
    $(".v_logout_maxwidth").slideUp("", function () {
      $(".v_logout").hide();
    });
  });
  $(".v_header_tb_manage_link").mouseenter(function () {
    $(this).next().next().find(".v_header_manage_before").css("z-index", "-1");
  });
  $(".v_header_tb_manage_link").mouseleave(function () {
    $(this).next().next().find(".v_header_manage_before").css("z-index", "0");
  });
  $(".v_logout_success").click(function () {
    $.ajax({
      url: "/logout_candidate",
      type: "GET",
      dataType: "text",
      success: function (data) {
        window.location.reload();
      },
      error: function () {
        alert("CĂ³ lá»—i xáº£y ra. Vui lĂ²ng thá»­ láº¡i");
      },
    });
  });
  $(".v_header_tb_manage_link").click(function () {
    $(".v_header_tb_manage_link")
      .css("background", "none")
      .find(".v_header_manage_before")
      .hide();
    $(".v_header_tb_manage_link").find(".v_header_manage_after").hide();
    $(".v_header_tb_manage_link")
      .children(".v_header_tb_manage_list")
      .css("color", "#3D3E3E");
    $(".v_header_tb_manage_link")
      .next(".v_header_tb_manage_dropdown")
      .slideUp("fast");

    $(this)
      .css("background", "#2758DD")
      .next(".v_header_tb_manage_dropdown")
      .slideDown("fast");
    $(this).children(".v_header_tb_manage_list").css("color", "white");
    $(this).find(".v_header_manage_before").css("display", "block");
    $(this).find(".v_header_manage_after").css("display", "block");
  });
  $(".v_password_hint").click(function () {
    if ($(this).prev().prev()[0].type == "text") {
      $(this).prev().prev()[0].type = "password";
    } else {
      $(this).prev().prev()[0].type = "text";
    }
  });
  $(".v_header_info").click(function () {
    $("#v_info").slideToggle("fast");
    $("#v_alert").slideUp("fast");
  });
  $("#v_header_alert").click(function () {
    if ($("#v_alert").find(".v_alert_detail").length > 0) {
      $("#v_info").slideUp("fast");
      $("#v_alert").slideToggle("fast");
    }
  });
  $("#v_header_alert_tablet").click(function () {
    $("#v_info").slideUp("fast");
    if ($(".v_alert_detail").length > 0) {
      $("#v_alert").slideToggle("fast");
    }
  });
  $(".v_popup_login_maxwidth").submit(function () {
    $(".v_login_error1").text("");
    var form_data = new FormData();
    var flag = true;
    var email_format =
      /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var email = $(".v_popup_login_input[name=email]").val().trim();
    var pwd = $.trim($(".v_popup_login_input[name=password]").val());
    pwd = pwd.replaceAll(" ", "");
    if (email == "") {
      $(".v_popup_login_input[name=email]")
        .css("border", "1px solid #EB5757")
        .prev()
        .css("color", "#EB5757");
      $(".v_popup_login_input[name=email]")
        .next()
        .text("Vui lĂ²ng nháº­p email");
      flag = false;
    } else {
      if (email.match(email_format) == null) {
        $(".v_popup_login_input[name=email]")
          .css("border", "1px solid #EB5757")
          .prev()
          .css("color", "#EB5757");
        $(".v_popup_login_input[name=email]")
          .next()
          .text("Vui lĂ²ng nháº­p Ä‘Ăºng Ä‘á»‹nh dáº¡ng email");
        flag = false;
      } else {
        $(".v_popup_login_input[name=email]")
          .css("border", "none")
          .prev()
          .css("color", "#A5ABB3");
        $(".v_popup_login_input[name=email]").next().text("");
        form_data.append("email", email);
      }
    }
    if (pwd == "") {
      $(".v_popup_login_input[name=password]")
        .css("border", "1px solid #EB5757")
        .prev()
        .css("color", "#EB5757");
      $(".v_popup_login_input[name=password]")
        .next()
        .text("Vui lĂ²ng nháº­p password");
      flag = false;
    } else {
      $(".v_popup_login_input[name=password]")
        .css("border", "none")
        .prev()
        .css("color", "#A5ABB3");
      $(".v_popup_login_input[name=password]").next().text("");
      form_data.append("password", pwd);
    }
    if (flag == true) {
      $(".v_popup_login_submit").css("pointer-events", "none");
      $.ajax({
        url: "/login_candidate",
        type: "POST",
        processData: false,
        contentType: false,
        dataType: "json",
        async: false,
        data: form_data,
        success: function (data) {
          if (data.result == false) {
            $(".v_login_error1").text(
              "TĂ i khoáº£n hoáº·c máº­t kháº©u khĂ´ng Ä‘Ăºng vui lĂ²ng kiá»ƒm tra láº¡i!"
            );
            $(".v_popup_login_submit").css("pointer-events", "auto");
          } else {
            if (data.active == false) {
              window.location.href = base_url + "xac-thuc-dang-ky-ung-vien";
            } else {
              if ($(".v_check_page").val() == -1) {
                // window.location.reload();
                if ($("#create_new_or_edit").val() == 0) {
                  document.cookie = "use_this=1;path=/";
                  var x = document.cookie;
                } else {
                  document.cookie = "create_new=1;path=/";
                  var x = document.cookie;
                }
                window.location.href = $("#url_create_cv").val();
              } else {
                if ($("#create_new_or_edit").val() == 0) {
                  document.cookie = "use_this=1;path=/";
                  var x = document.cookie;
                } else {
                  document.cookie = "create_new=1;path=/";
                  var x = document.cookie;
                }
                if (login_from_prev == 1) {
                  window.location.href = prev_alias;
                } else {
                  window.location.href = $("#url_create_cv").val();
                }
              }
            }
          }
        },
        error: function () {
          alert("CĂ³ lá»—i xáº£y ra. Vui lĂ²ng thá»­ láº¡i");
        },
      });
    }
    return false;
  });
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $("#v_footer_all_top").fadeIn(800);
    } else {
      $("#v_footer_all_top").fadeOut(800);
    }
  });

  var base_url = "https://vieclam123.vn/";
  var phone_number_OK = true;
  var email_OK = true;
  $(".q-show-pwd").click(function () {
    e = $(this).parent(".form-group").find(".q-inp-fields").attr("type");
    console.log(e);
    if (e == "password") {
      $(this).parent(".form-group").find(".q-inp-fields").attr("type", "text");
    } else {
      $(this)
        .parent(".form-group")
        .find(".q-inp-fields")
        .attr("type", "password");
    }
  });
  $("#show_new_pwd").click(function () {
    e = $(this).parent(".frm-group-inp").find("#new_pwd").attr("type");
    console.log(e);
    if (e == "password") {
      $(this).parent(".frm-group-inp").find("#new_pwd").attr("type", "text");
    } else {
      $(this)
        .parent(".frm-group-inp")
        .find("#new_pwd")
        .attr("type", "password");
    }
  });
  $("#show_re_new_pwd").click(function () {
    e = $(this).parent(".frm-group-inp").find("#re_new_pwd").attr("type");
    console.log(e);
    if (e == "password") {
      $(this).parent(".frm-group-inp").find("#re_new_pwd").attr("type", "text");
    } else {
      $(this)
        .parent(".frm-group-inp")
        .find("#re_new_pwd")
        .attr("type", "password");
    }
  });
  $("#city_2, #city, #cate, #district").change(function () {
    $(this).valid();
  });
  $("#q_frm_sign_up").validate({
    onclick: false,
    onchange: true,
    rules: {
      email: {
        required: true,
        check_valid_email: true,
        check_exist_email: true,
      },
      name: {
        required: true,
        check_special_char: true,
      },
      phone_number: {
        required: true,
        check_valid_phone_num: true,
        check_exist_phone_num: true,
      },
      job_name: {
        required: true,
        check_special_char: true,
      },
      pwd: {
        required: true,
        minlength: 6,
        regex_pass: true,
      },
      re_pwd: {
        required: true,
        minlength: 6,
        equalTo: "#pwd",
      },
      city: {
        required: true,
        is_selected: true,
      },
      district: {
        required: true,
        is_selected: true,
      },
      address: {
        required: true,
      },
      "city_2[]": {
        required: true,
        is_selected: true,
      },
      "cate[]": {
        required: true,
        is_selected: true,
      },
    },
    messages: {
      email: {
        required: "Vui lĂ²ng nháº­p email",
        check_valid_email: "Báº¡n nháº­p chÆ°a Ä‘Ăºng Ä‘á»‹nh dáº¡ng email",
        check_exist_email: "Email Ä‘Ă£ Ä‘Æ°á»£c Ä‘Äƒng kĂ½",
      },
      name: {
        required: "Vui lĂ²ng nháº­p há» tĂªn",
        check_special_char:
          "TĂªn khĂ´ng Ä‘Æ°á»£c chá»©a kĂ­ tá»± Ä‘áº·c biá»‡t vĂ  sá»‘",
      },
      phone_number: {
        required: "Vui lĂ²ng nháº­p sá»‘ Ä‘iá»‡n thoáº¡i",
        check_valid_phone_num:
          "Báº¡n chÆ°a nháº­p Ä‘Ăºng Ä‘á»‹nh dáº¡ng sá»‘ Ä‘iá»‡n thoáº¡i",
        check_exist_phone_num: "Sá»‘ Ä‘iá»‡n thoáº¡i Ä‘Ă£ Ä‘Æ°á»£c Ä‘Äƒng kĂ½",
      },
      job_name: {
        required: "Vui lĂ²ng nháº­p tĂªn cĂ´ng viá»‡c",
        check_special_char:
          "TĂªn cĂ´ng viá»‡c khĂ´ng Ä‘Æ°á»£c chá»©a kĂ­ tá»± Ä‘áº·c biá»‡t vĂ  sá»‘",
      },
      pwd: {
        required: "Vui lĂ²ng nháº­p máº­t kháº©u",
        minlength: "Tá»‘i thiá»ƒu 6 kĂ­ tá»±",
        regex_pass: "Máº­t kháº©u bao gá»“m cáº£ chá»¯ vĂ  sá»‘",
      },
      re_pwd: {
        required: "Vui lĂ²ng nháº­p láº¡i máº­t kháº©u",
        minlength: "Tá»‘i thiá»ƒu 6 kĂ­ tá»±",
        equalTo: "Máº­t kháº©u nháº­p láº¡i chÆ°a trĂ¹ng khá»›p",
      },
      city: {
        required: "Vui lĂ²ng chá»n tá»‰nh thĂ nh",
        is_selected: "Vui lĂ²ng chá»n tá»‰nh thĂ nh",
      },
      district: {
        required: "Vui lĂ²ng nháº­p quáº­n, huyá»‡n",
        is_selected: "Vui lĂ²ng chá»n quáº­n, huyá»‡n",
      },
      address: {
        required: "Vui lĂ²ng nháº­p Ä‘á»‹a chá»‰",
      },
      "city_2[]": {
        required: "vui lĂ²ng chá»n Ä‘á»‹a Ä‘iá»ƒm lĂ m viá»‡c mong muá»‘n ",
        is_selected: "Vui lĂ²ng chá»n Ä‘á»‹a Ä‘iá»ƒm lĂ m viá»‡c mong muá»‘n",
      },
      "cate[]": {
        required: "Vui lĂ²ng chá»n ngĂ nh nghá» mong muá»‘n",
        is_selected: "vui lĂ²ng chá»n ngĂ nh nghá» mong muá»‘n",
      },
    },
    errorPlacement: function (error, element) {
      if (element.attr("name") == "email") {
        // element.parent(".q-form-fields").css("border", "1px solid #EB5757");
        // element.parent(".q-form-fields").find(".q-label").css("color", "#EB5757");
        $("#email-error-container").html(error);
      }
      if (element.attr("name") == "name") {
        // element.parent(".q-form-fields").css("border", "1px solid #EB5757");
        // element.parent(".q-form-fields").find(".q-label").css("color", "#EB5757");
        $("#name-error-container").html(error);
      }
      if (element.attr("name") == "phone_number") {
        // element.parent(".q-form-fields").css("border", "1px solid #EB5757");
        // element.parent(".q-form-fields").find(".q-label").css("color", "#EB5757");
        $("#phone_number-error-container").html(error);
      }
      if (element.attr("name") == "job_name") {
        // element.parent(".q-form-fields").css("border", "1px solid #EB5757");
        // element.parent(".q-form-fields").find(".q-label").css("color", "#EB5757");
        $("#job_name-error-container").html(error);
      }
      if (element.attr("name") == "pwd") {
        // element.parent(".form-group").parent(".q-form-fields").css("border", "1px solid #EB5757");
        // element.parent(".form-group").parent(".q-form-fields").find(".q-label").css("color", "#EB5757");
        $("#pwd-error-container").html(error);
      }
      if (element.attr("name") == "re_pwd") {
        // element.parent(".form-group").parent(".q-form-fields").css("border", "1px solid #EB5757");
        // element.parent(".form-group").parent(".q-form-fields").find(".q-label").css("color", "#EB5757");
        $("#re_pwd-error-container").html(error);
      }
      if (element.attr("name") == "city") {
        // element.parent(".q-form-fields").css("border", "1px solid #EB5757");
        // element.parent(".q-form-fields").find(".q-label").css("color", "#EB5757");
        $("#city-error-container").html(error);
      }
      if (element.attr("name") == "district") {
        // element.parent(".q-form-fields").css("border", "1px solid #EB5757");
        // element.parent(".q-form-fields").find(".q-label").css("color", "#EB5757");
        $("#district-error-container").html(error);
      }
      if (element.attr("name") == "address") {
        // element.parent(".q-form-fields").css("border", "1px solid #EB5757");
        // element.parent(".q-form-fields").find(".q-label").css("color", "#EB5757");
        $("#address-error-container").html(error);
      }
      if (element.attr("name") == "city_2[]") {
        // element.parent(".q-form-fields").css("border", "1px solid #EB5757");
        // element.parent(".q-form-fields").find(".q-label").css("color", "#EB5757");
        $("#city2-error-container").html(error);
      }
      if (element.attr("name") == "cate[]") {
        // element.parent(".q-form-fields").css("border", "1px solid #EB5757");
        // element.parent(".q-form-fields").find(".q-label").css("color", "#EB5757");
        $("#cate-error-container").html(error);
      }
    },
    submitHandler: function (form) {
      $(".q-btn-regis-modal").css("pointer-events", "none");
      $(".q-btn-regis-modal").addClass("button-loading");
      $(".text-waiting").css("display", "block");
      $.ajax({
        url: form.action,
        type: form.method,
        dataType: "json",
        data: $(form).serialize(),
        success: function (response) {
          if (response.kq == true) {
            // window.location.href = base_url + 'xac-thuc-dang-ky-ung-vien';
            alert(
              "LÆ°u thĂ´ng tin thĂ nh cĂ´ng. Táº¡o CV Ä‘á»ƒ hoĂ n táº¥t quĂ¡ trĂ¬nh Ä‘Äƒng kĂ½"
            );
            window.location.reload();
          }
        },
      });
    },
    invalidHandler: function (event, validator) {
      get_user_infor();
    },
  });
  $.validator.addMethod(
    "check_special_char",
    function (value, element) {
      var format = /[!@#$%^&*?{}()|[\]\\0-9]/g;
      if (format.test(value) == true) {
        nameOK = false;
      } else {
        nameOK = true;
      }
      return this.optional(element) || nameOK;
    },
    ""
  );
  $.validator.addMethod(
    "check_valid_email",
    function (value, element) {
      var email_format =
        /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
      if (value.match(email_format) == null) {
        mail_valid = false;
      } else {
        mail_valid = true;
      }
      return this.optional(element) || mail_valid;
    },
    ""
  );
  $.validator.addMethod(
    "check_valid_phone_num",
    function (value, element) {
      var phone_regex = /((0)+([0-9]{9,14})\b)/g;
      return this.optional(element) || phone_regex.test(value);
    },
    ""
  );
  $.validator.addMethod(
    "check_exist_email",
    function (value, element) {
      $.ajax({
        url: base_url + "Ajax/check_email",
        type: "POST",
        dataType: "json",
        async: false,
        data: { email: $.trim(value) },
        success: function (result) {
          if (result.result == true) {
            email_OK = false;
          } else {
            email_OK = true;
          }
        },
      });
      return this.optional(element) || email_OK;
    },
    "Emal Ä‘Ă£ Ä‘Æ°á»£c Ä‘Äƒng kĂ½"
  );
  $.validator.addMethod(
    "check_exist_phone_num",
    function (value, element) {
      $.ajax({
        url: base_url + "Ajax/check_phone_number",
        type: "POST",
        dataType: "json",
        async: false,
        data: { phone_number: value },
        success: function (result) {
          if (result.result == true) {
            phone_number_OK = false;
          } else {
            phone_number_OK = true;
          }
        },
      });
      return this.optional(element) || phone_number_OK;
    },
    ""
  );
  $.validator.addMethod(
    "is_selected",
    function (value, element) {
      if (value == 0 || value == "") {
        return this.optional(element) || false;
      } else {
        return this.optional(element) || true;
      }
    },
    ""
  );
  $("#frm_send_mail_reset").validate({
    onclick: false,
    rules: {
      email: {
        required: true,
        check_valid_email: true,
      },
    },
    messages: {
      email: {
        required: "Báº¡n chÆ°a nháº­p email",
        check_valid_email: "Báº¡n chÆ°a nháº­p Ä‘Ăºng Ä‘á»‹nh dáº¡ng email",
      },
    },
    errorPlacement: function (error, element) {
      if (element.attr("name") == "email") {
        element.css("border", "1px solid #EB5757");
        $("#email-error-container").html(error);
      }
    },
    submitHandler: function (form) {
      $.ajax({
        url: form.action,
        type: form.method,
        dataType: "json",
        data: $(form).serialize(),
        success: function (response) {
          if (response.kq == true) {
            alert(response.message);
          } else {
            alert(response.message);
          }
        },
      });
    },
  });
  $("#frm_reset_pwd").validate({
    onclick: false,
    rules: {
      new_pwd: {
        required: true,
        minlength: 6,
        regex_pass: true,
      },
      re_new_pwd: {
        required: true,
        minlength: 6,
        equalTo: "#new_pwd",
      },
    },
    messages: {
      new_pwd: {
        required: "Báº¡n chÆ°a nháº­p máº­t kháº©u",
        minlength: "Máº­t kháº©u tá»‘i thiá»ƒu 6 kĂ­ tá»±",
        regex_pass: "Máº­t kháº©u bao gá»“m cáº£ chá»¯ vĂ  sá»‘",
      },
      re_new_pwd: {
        required: "Báº¡n chÆ°a nháº­p xĂ¡c nháº­n máº­t kháº©u",
        minlength: "Máº­t kháº©u tá»‘i thiá»ƒu 6 kĂ­ tá»±",
        equalTo: "XĂ¡c nháº­n máº­t kháº©u chÆ°a trĂ¹ng khá»›p",
      },
    },
    errorPlacement: function (error, element) {
      if (element.attr("name") == "new_pwd") {
        element.parent(".q-form-fields").css("border", "1px solid #EB5757");
        element
          .parent(".q-form-fields")
          .find(".q-label")
          .css("color", "#EB5757");
        $("#new_pwd-error-container").html(error);
      }
      if (element.attr("name") == "re_new_pwd") {
        element.parent(".q-form-fields").css("border", "1px solid #EB5757");
        element
          .parent(".q-form-fields")
          .find(".q-label")
          .css("color", "#EB5757");
        $("#re_new_pwd-error-container").html(error);
      }
    },
    submitHandler: function (form) {
      $.ajax({
        url: form.action,
        type: form.method,
        dataType: "json",
        data: $(form).serialize(),
        success: function (response) {
          if (response.result == true) {
            alert(response.message);
            window.location.href = base_url;
          } else {
            alert(response.message);
          }
        },
      });
    },
  });
  $.validator.addMethod(
    "regex_pass",
    function (value, element) {
      var passOK;
      var regex_pas = /^(?=.*?[a-zA-Z])(?=.*?[0-9])/;
      if (regex_pas.test(value) == false) {
        passOK = false;
      } else {
        passOK = true;
      }
      return this.optional(element) || passOK;
    },
    ""
  );
  $(".change-color").click(function () {
    var show = $(".show-change-color");
    if (!show.hasClass("q-show-block")) {
      $(".show-change-color").addClass("q-show-block");
    } else {
      $(".show-change-color").removeClass("q-show-block");
    }
  });
  $(".q-chose-color").click(function () {
    $(this).parents(".change-color").find(".img-menu-bar").remove();
    $(this).parents(".change-color").find(".text-layout").remove();
    $(this).parents(".change-color").find(".v_change_color_cv").remove();
    $(this)
      .parents(".change-color")
      .append(
        '<center><div class="v_change_color_cv" style="background:#' +
          $(this).data("color") +
          '"></div></center>'
      );
    var color_css = $(this).data("color") + ".css";
    var color_href = $("#cv-color-css").attr("href").trim().split("/");
    color_href[color_href.length - 1] = color_css;
    var color_link2 = color_href.join("/");
    $("#cv-color-css").attr("href", color_link2);
  });

  $(".change-language").click(function () {
    var show = $(".show-change-language");
    if (!show.hasClass("q-show-block")) {
      show.addClass("q-show-block");
    } else {
      show.removeClass("q-show-block");
    }
  });
  $(".q-chose-language").click(function () {
    var lang_id = $(this).data("lang_id");
    document.cookie = "lang_id=" + lang_id + "; path=/";
    window.location.reload();
  });

  $(".download-cv").on("click", function () {
    var cv_title = document.getElementById("uname_cv").value;
    cv_title += " - vieclam123.vn.pdf";
    var id_cv = $("#idcv").val();
    update_download_cv_count(id_cv);
    if ($('input[class="inp_check_border"]').length > 0) {
      if ($(".inp_check_border").val() == 1) {
        $("#border_img").css({
          "border-radius": "999em",
        });
        $("#cvo-profile-avatar").css({
          "border-radius": "999em",
        });
      }
    }
    // css font default
    // if ($('#font-selector').val() == 1) {
    //     $("#cv-profile-fullname, #cv-profile-job, #cv-profile-birthday, #cv-profile-sex, #cv-profile-phone, #cv-profile-email, #cv-profile-address").css('font-family', 'Roboto-Regular, sans-serif');
    //     $(".titlecv, .box-title, .skill-name, .box-content, .block-title, .exp-title, .exp-subtitle, .exp-content , .exp-date").css('font-family', 'Roboto-Regular, sans-serif');
    // }
    arr_canvas = $("#page-cv").children().toArray();
    render_pdf(arr_canvas, cv_title);
    if ($("#type_cv").val() == 2) {
      $(".A4").css({
        "margin-bottom": "0.5cm",
      });
    }
  });

  $("#update_image_prev").click(function () {
    var a4 = $(".A4");
    if ($('input[class="inp_check_border"]').length > 0) {
      if ($(".inp_check_border").val() == 1) {
        $("#border_img").css({
          "border-radius": "999em",
        });
        $("#cvo-profile-avatar").css({
          "border-radius": "999em",
        });
      }
    }
    // css font default
    if ($("#font-selector").val() == 1) {
      $(
        "#cv-profile-fullname, #cv-profile-job, #cv-profile-birthday, #cv-profile-sex, #cv-profile-phone, #cv-profile-email, #cv-profile-address"
      ).css("font-family", "Roboto-Regular, sans-serif");
      $(
        ".titlecv, .box-title, .skill-name, .box-content, .block-title, .exp-title, .exp-subtitle, .exp-content , .exp-date"
      ).css("font-family", "Roboto-Regular, sans-serif");
    }
    var arr_img = [];
    var idcv = $("#idcv").val();
    var alias = $(this).attr("data-alias");
    var lang_text = $(".change-language").find(".text-menu-bar").html();
    var type_cv = $("#type_cv").val();
    var lang_id;
    var j = 0;
    if (
      $(".v_change_color_cv").attr("data-color") == "" ||
      $(".v_change_color_cv").attr("data-color") == null
    ) {
      cur_color = $(".show-change-color .color.active").attr("data-color");
    } else {
      cur_color = $(".v_change_color_cv").attr("data-color");
    }
    switch (lang_text) {
      case "Tiáº¿ng Viá»‡t":
        lang_id = 1;
        break;
      case "Tiáº¿ng Anh":
        lang_id = 2;
        break;
      case "Tiáº¿ng Nháº­t":
        lang_id = 3;
        break;
      case "Tiáº¿ng Trung":
        lang_id = 4;
        break;
      case "Tiáº¿ng HĂ n":
        lang_id = 5;
        break;

      default:
        break;
    }
    if ($("#type_cv").val() == 1) {
      var quotes = document.getElementById("page-cv");
      html2canvas(quotes, {
        allowTaint: true,
        onrendered: function (canvas) {
          var img_val = canvas.toDataURL("image/png", 1.0);
          if (img_val.length > 1000000) {
            var array = [];
            for (var i = 0; i < img_val.length; i += 500000) {
              array.push(img_val.slice(i, i + 500000));
            }
            img_val = array;
          }
          arr_img.push(img_val);
          $.ajax({
            cache: false,
            async: false,
            type: "POST",
            url: "https://vieclam123.vn/UpdatePrevImg",
            data: {
              img_val: arr_img,
              idcv: idcv,
              alias: alias,
              lang: lang_id,
              color: cur_color,
              type_cv: type_cv,
            },
            success: function (data) {
              if (data.result == true) {
                alert("Cáº­p nháº­t thĂ nh cĂ´ng");
              }
            },
          });
        },
      });
    } else {
      a4.each(function () {
        html2canvas($(this), {
          allowTaint: true,
          onrendered: function (canvas) {
            var img_val = canvas.toDataURL("image/png", 1.0);
            if (img_val.length > 1000000) {
              var array = [];
              for (var i = 0; i < img_val.length; i += 500000) {
                array.push(img_val.slice(i, i + 500000));
              }
              img_val = array;
            }
            arr_img.push(img_val);
            j++;
            if (j == a4.length) {
              $.ajax({
                cache: false,
                async: false,
                type: "POST",
                url: "https://vieclam123.vn/UpdatePrevImg",
                data: {
                  img_val: arr_img,
                  idcv: idcv,
                  alias: alias,
                  lang: lang_id,
                  color: cur_color,
                  type_cv: type_cv,
                },
                success: function (data) {
                  if (data.result == true) {
                    alert("Cáº­p nháº­t thĂ nh cĂ´ng");
                  }
                },
              });
            }
          },
        });
      });
    }
  });

  $(".sortable").sortable({
    connectWith: ".sortable",
    cancel: "[contenteditable],input",
  });
  $(".check-list-block").sortable({
    start: function (event, ui) {
      start_parent = ui.item.parent();
      prev_ui = ui.item.prev();
      if (start_parent.hasClass("list-block-right")) {
        start_position = "right";
      } else {
        start_position = "left";
      }
    },
    stop: function (event, ui) {
      var stop_parent = ui.item.parent();
      var next_ui_id = "";
      var cur_id = ui.item.find(".q-inp-checkbox")[0].id;
      var target_prev = ui.item.prev();
      var target_next = ui.item.next();
      var dt = $("#" + cur_id.replace("c_", "")).detach();
      elem_id = cur_id.replace("c_", "");
      if (stop_parent.hasClass("list-block-right")) {
        finish_posittion = "right";
      } else {
        finish_posittion = "left";
      }
      // console.log("from:", start_position);
      // console.log("to:", finish_posittion);
      if (start_position == finish_posittion) {
        // console.log(target_prev);
        // console.log(target_next);
      } else {
        if (prev_ui.length > 0) {
          next_ui = prev_ui.next();
          if (next_ui.length > 0) {
            next_ui_id = next_ui.find(".q-inp-checkbox")[0].id;
          } else {
            next_ui_id = prev_ui.find(".q-inp-checkbox")[0].id;
          }
        } else {
          if (
            start_parent.find(".inp-check-block-layout").find(".q-inp-checkbox")
              .length > 0
          ) {
            next_ui_id = start_parent
              .find(".inp-check-block-layout")
              .find(".q-inp-checkbox")[0].id;
          } else {
            next_ui_id = "";
          }
        }
      }
      if (target_prev.length > 0 && target_next.length > 0) {
        target_next_id = ui.item.next().find(".q-inp-checkbox")[0].id;
        $("#" + target_next_id.replace("c_", "")).before(dt);
      } else {
        if (target_prev.length > 0) {
          target_prev_id = ui.item.prev().find(".q-inp-checkbox")[0].id;
          $("#" + target_prev_id.replace("c_", "")).after(dt);
        }
        if (target_next.length > 0) {
          target_next_id = ui.item.next().find(".q-inp-checkbox")[0].id;
          $("#" + target_next_id.replace("c_", "")).before(dt);
        }
        if (target_next.length == 0 && target_prev.length == 0) {
          if (finish_posittion == "left") {
            $(".page-0").find("#sortable").append(dt);
            // console.log($(".page-0").find("#sortable"));
          } else {
            $(".page-1").find("#sort_block").append(dt);
            // console.log($(".page-1").find("#sort_block"));
          }
        }
      }
      if (elem_id.substr(0, 3) == "blo") {
        ui_child = $("#" + elem_id)
          .find("#experience-table")
          .children()
          .toArray();
        real_ui_child = [];
        c_ui_length = 0;
        switch (elem_id) {
          case "block01":
            $(".div_edu").each(function () {
              real_ui_child.push($(this)[0]);
              c_ui_length += 1;
            });
            break;
          case "block02":
            $(".div_exp").each(function () {
              real_ui_child.push($(this)[0]);
              c_ui_length += 1;
            });
            break;
          case "block03":
            $(".div_act").each(function () {
              real_ui_child.push($(this)[0]);
              c_ui_length += 1;
            });
            break;
          case "block04":
            $(".div_pro").each(function () {
              real_ui_child.push($(this)[0]);
              c_ui_length += 1;
            });
            break;
          case "block05":
            $(".div_more").each(function () {
              real_ui_child.push($(this)[0]);
              c_ui_length += 1;
            });
            break;
          default:
            break;
        }
        if (ui_child.length == c_ui_length) {
          $("#" + elem_id)
            .find("#experience-table")
            .append(ui_child);
          for (c = 0; c < c_ui_length; c++) {
            $("#" + elem_id)
              .find(".exp-content")
              .keydown();
          }
        } else {
          $("#" + elem_id)
            .find("#experience-table")
            .append(real_ui_child);
          for (c = 0; c < c_ui_length; c++) {
            $("#" + elem_id)
              .find(".exp-content")
              .keydown();
          }
        }
      } else {
        if (elem_id == "box03") {
          $("#" + elem_id)
            .find(".skill-name")
            .keydown();
        } else {
          $("#" + elem_id)
            .find(".box-content")
            .keydown();
        }
      }
      if (next_ui_id != "") {
        if (next_ui_id.replace("c_", "").substring(0, 3) == "blo") {
          $("#" + next_ui_id.replace("c_", ""))
            .find(".exp-content")
            .keydown();
        } else {
          if (next_ui_id.replace("c_", "") == "box03") {
            $("#" + next_ui_id.replace("c_", ""))
              .find(".skill-name")
              .keydown();
          } else {
            $("#" + next_ui_id.replace("c_", ""))
              .find(".box-content")
              .keydown();
          }
        }
      }
      if (start_position == "left") {
        arr_page = $(".list-block-left").children().toArray();
        for (let i = 0; i < arr_page.length; i++) {
          let id_child = arr_page[i].firstElementChild.id;
          console.log(id_child);
          if (id_child.substr(0, 5) == "c_blo") {
            $("#" + id_child.replace("c_", ""))
              .find(".exp-content")
              .keydown();
          } else {
            if (id_child.replace("c_", "") == "box03") {
              $("#" + id_child.replace("c_", ""))
                .find(".skill-name")
                .keydown();
            } else {
              $("#" + id_child.replace("c_", ""))
                .find(".box-content")
                .keydown();
            }
          }
        }
      } else {
        arr_page = $(".list-block-right").children().toArray();
        for (let i = 0; i < arr_page.length; i++) {
          let id_child = arr_page[i].firstElementChild.id;
          console.log(id_child);
          if (id_child.substr(0, 5) == "c_blo") {
            $("#" + id_child.replace("c_", ""))
              .find(".exp-content")
              .keydown();
          } else {
            if (id_child.replace("c_", "") == "box03") {
              $("#" + id_child.replace("c_", ""))
                .find(".skill-name")
                .keydown();
            } else {
              $("#" + id_child.replace("c_", ""))
                .find(".box-content")
                .keydown();
            }
          }
        }
      }
    },
    connectWith: ".check-list-block",
  });
}

function isOverflown(element) {
  if (element.scrollHeight > 1103) {
    return true;
  } else {
    return false;
  }
}

function getCvPreview(e) {
  var lang_id = getCookie("lang_id");
  $("#pre_language").val(lang_id);
  var alias = $(e).attr("data-alias");
  var name = $(e).attr("data-name");
  var color = $(e).attr("data-color");
  var id_onpage = $(e).attr("data-id_onpage");
  var type_cv = $(e).attr("data-type_cv");
  var lang_id = getCookie("lang_id");
  arr_color = color.split(",");
  switch (arr_color.length) {
    case 1:
      $(".pre-color").css("background", arr_color[0]);
      $(".pre-color2").css("display", "none");
      $(".pre-color3").css("display", "none");
      break;
    case 2:
      $(".pre-color").css("background", arr_color[0]);
      $(".pre-color2").css("display", "block");
      $(".pre-color2").css("background", arr_color[1]);
      $(".pre-color3").css("display", "none");
      break;
    case 3:
      $(".pre-color").css("background", arr_color[0]);
      $(".pre-color2").css("display", "block");
      $(".pre-color2").css("background", arr_color[1]);
      $(".pre-color3").css("display", "block");
      $(".pre-color3").css("background", arr_color[2]);
      break;
    default:
      break;
  }
  $(".pre-color").attr("data-color", arr_color[0]);
  $(".pre-color2").attr("data-color", arr_color[1]);
  $(".pre-color3").attr("data-color", arr_color[2]);
  $(".pre-color").attr("data-alias", alias);
  $(".pre-color2").attr("data-alias", alias);
  $(".pre-color3").attr("data-alias", alias);
  $(".pre-color").attr("data-type_cv", type_cv);
  $(".pre-color2").attr("data-type_cv", type_cv);
  $(".pre-color3").attr("data-type_cv", type_cv);
  $(".name-template-cv").html(name);
  if (type_cv == 2) {
    $(".btn-create-new").attr(
      "data-prev_alias",
      "https://vieclam123.vn/tao-cv/" + alias
    );
    $(".btn-create-new").attr("data-id_onpage", id_onpage);
    $(".btn-use-this").attr(
      "data-prev_alias",
      "https://vieclam123.vn/tao-cv/" + alias
    );
    $(".btn-use-this").attr("data-id_onpage", id_onpage);
  } else {
    $(".btn-create-new").attr(
      "data-prev_alias",
      "https://vieclam123.vn/tao-cv/" + alias + "/1"
    );
    $(".btn-create-new").attr("data-id_onpage", id_onpage);
    $(".btn-use-this").attr(
      "data-prev_alias",
      "https://vieclam123.vn/tao-cv/" + alias + "/1"
    );
    $(".btn-use-this").attr("data-id_onpage", id_onpage);
  }

  $("#popup_preview_cv").show("effect");
  $.ajax({
    type: "POST",
    url: "https://vieclam123.vn/GetPreviewImg",
    dataType: "json",
    data: {
      alias: alias,
      color: arr_color[0],
      lang_id: lang_id,
      type_cv: type_cv,
    },
    success: function (result) {
      var list_img = "";
      var list_img2 = "";
      if (result.result) {
        for (var i = 0; i < result.list.length; i++) {
          list_img +=
            '<img src="https://vieclam123.vn/' + result.list[i] + '">';
          list_img2 +=
            `<div class="d-wrap-img">
                                        <img src="https://vieclam123.vn/` +
            result.list[i] +
            `">
                                        <button class="btn-zoom-cv" onclick="show_cv_zoom()">+</button>
                                    </div>`;
        }
        $(".popup-preview-cv .content-cv").html(list_img2);
        $("#show_img_zoom").html(list_img);
      }
    },
  });
}

function getCvPreviewLang(e) {
  console.log($(e).attr("data-alias"));
  var alias = $(e).attr("data-alias");
  var name = $(e).attr("data-name");
  var color = $(e).attr("data-color");
  var id_onpage = $(e).attr("data-id_onpage");
  var lang_id = $(e).attr("data-lang");
  var type_cv = $(e).attr("data-type_cv");
  arr_color = color.split(",");
  var html_chose_lang = "";
  switch (lang_id) {
    case "2":
      html_chose_lang =
        html_chose_lang +
        `<p class="pre-heading2">NgĂ´n ngá»¯</p>
            <select name="pre_language" id="pre_language" onchange="chose_pre_lang();">
                <option value="2" selected>Tiáº¿ng Anh</option>
            </select>`;
      break;
    case "3":
      html_chose_lang =
        html_chose_lang +
        `<p class="pre-heading2">NgĂ´n ngá»¯</p>
            <select name="pre_language" id="pre_language" onchange="chose_pre_lang();">
                <option value="3" selected>Tiáº¿ng Nháº­t</option>
            </select>`;
      break;
    case "4":
      html_chose_lang =
        html_chose_lang +
        `<p class="pre-heading2">NgĂ´n ngá»¯</p>
            <select name="pre_language" id="pre_language" onchange="chose_pre_lang();">
                <option value="4" selected>Tiáº¿ng Trung</option>
            </select>`;
      break;
    case "5":
      html_chose_lang =
        html_chose_lang +
        `<p class="pre-heading2">NgĂ´n ngá»¯</p>
            <select name="pre_language" id="pre_language" onchange="chose_pre_lang();">
                <option value="5" selected>Tiáº¿ng HĂ n</option>
            </select>`;
      break;
    default:
      break;
  }
  $(".d-chose-language").html(html_chose_lang);
  switch (arr_color.length) {
    case 1:
      $(".pre-color").css("background", arr_color[0]);
      $(".pre-color2").css("display", "none");
      $(".pre-color3").css("display", "none");
      break;
    case 2:
      $(".pre-color").css("background", arr_color[0]);
      $(".pre-color2").css("display", "block");
      $(".pre-color2").css("background", arr_color[1]);
      $(".pre-color3").css("display", "none");
      break;
    case 3:
      $(".pre-color").css("background", arr_color[0]);
      $(".pre-color2").css("display", "block");
      $(".pre-color2").css("background", arr_color[1]);
      $(".pre-color3").css("display", "block");
      $(".pre-color3").css("background", arr_color[2]);
      break;
    default:
      break;
  }
  $(".pre-color").attr("data-color", arr_color[0]);
  $(".pre-color2").attr("data-color", arr_color[1]);
  $(".pre-color3").attr("data-color", arr_color[2]);
  $(".pre-color").attr("data-alias", alias);
  $(".pre-color2").attr("data-alias", alias);
  $(".pre-color3").attr("data-alias", alias);
  $(".pre-color").attr("data-type_cv", type_cv);
  $(".pre-color2").attr("data-type_cv", type_cv);
  $(".pre-color3").attr("data-type_cv", type_cv);
  $(".name-template-cv").html(name);
  $(".btn-create-new").attr(
    "data-prev_alias",
    "https://vieclam123.vn/tao-cv/" + alias
  );
  $(".btn-create-new").attr("data-id_onpage", id_onpage);
  $(".btn-use-this").attr(
    "data-prev_alias",
    "https://vieclam123.vn/tao-cv/" + alias
  );
  $(".btn-use-this").attr("data-id_onpage", id_onpage);
  $("#popup_preview_cv").show("effect");
  $.ajax({
    type: "POST",
    url: "https://vieclam123.vn/GetPreviewImg",
    dataType: "json",
    data: {
      alias: alias,
      color: arr_color[0],
      lang_id: lang_id,
      type_cv: type_cv,
    },
    success: function (result) {
      var list_img = "";
      var list_img2 = "";
      if (result.result) {
        for (var i = 0; i < result.list.length; i++) {
          list_img +=
            '<img src="https://vieclam123.vn/' + result.list[i] + '">';
          list_img2 +=
            `<div class="d-wrap-img">
                                        <img src="https://vieclam123.vn/` +
            result.list[i] +
            `">
                                        <button class="btn-zoom-cv" onclick="show_cv_zoom()">+</button>
                                    </div>`;
        }
        $(".popup-preview-cv .content-cv").html(list_img2);
        $("#show_img_zoom").html(list_img);
      }
    },
  });
}

function getCvPreviewCandi(e) {
  var save_id = $(e).attr("data-saved_id");
  var alias = $(e).attr("data-alias");
  var name = $(e).attr("data-name");
  var color = $(e).attr("data-color");
  var id_onpage = $(e).attr("data-id_onpage");
  var data_lang = $(e).attr("data-lang");
  var user_color = $(e).attr("user-color");
  arr_color = color.split(",");
  // switch (arr_color.length) {
  //     case 1:
  //         $(".pre-color").css("background", arr_color[0]);
  //         $(".pre-color2").css("display", "none");
  //         $(".pre-color3").css("display", "none");
  //         break;
  //     case 2:
  //         $(".pre-color").css("background", arr_color[0]);
  //         $(".pre-color2").css("display", "block");
  //         $(".pre-color2").css("background", arr_color[1]);
  //         $(".pre-color3").css("display", "none");
  //         break;
  //     case 3:
  //         $(".pre-color").css("background", arr_color[0]);
  //         $(".pre-color2").css("display", "block");
  //         $(".pre-color2").css("background", arr_color[1]);
  //         $(".pre-color3").css("display", "block");
  //         $(".pre-color3").css("background", arr_color[2]);
  //         break;
  //     default:
  //         break;
  // }
  switch (data_lang) {
    case "vi":
      $("#pre_language").val(1);
      break;
    case "en":
      $("#pre_language").val(2);
      break;
    case "jp":
      $("#pre_language").val(3);
      break;
    case "cn":
      $("#pre_language").val(4);
      break;
    case "kr":
      $("#pre_language").val(5);
      break;
    default:
      break;
  }
  $(".pre-color").attr("data-color", arr_color[0]);
  $(".pre-color2").attr("data-color", arr_color[1]);
  $(".pre-color3").attr("data-color", arr_color[2]);
  $(".pre-color").attr("data-alias", alias);
  $(".pre-color2").attr("data-alias", alias);
  $(".pre-color3").attr("data-alias", alias);
  $(".name-template-cv").html(name);
  $(".btn-create-new").attr(
    "data-prev_alias",
    "https://vieclam123.vn/tao-cv/" + alias
  );
  $(".btn-create-new").attr("data-id_onpage", id_onpage);
  $(".btn-use-this").attr(
    "data-prev_alias",
    "https://vieclam123.vn/tao-cv/" + alias
  );
  $(".btn-use-this").attr("data-id_onpage", id_onpage);
  $("#popup_preview_cv").show("effect");
  $(document).keydown(function (e) {
    if (e.keyCode == 27) {
      if ($("#popup_zomm_cv").css("display") == "block") {
        close_zoom();
        return false;
      }
      close_preview();
      if ($("#show-manage-layout").is(":visible") == true) {
        $("#show-manage-layout").hide();
        $(".tips").fadeIn();
        $(".tips-and-suggestion").hide();
      }
      if ($("#popup_preview_content_cv").is(":visible") == true) {
        close_preview_content();
      }
    }
  });
  $("[contenteditable]").keydown(function (e) {
    if (e.keyCode === 13) {
      document.execCommand("insertHTML", false, "<br/>");
      return false;
    }
  });
  $.ajax({
    type: "POST",
    url: "https://vieclam123.vn/GetPreviewImgCandi",
    dataType: "json",
    data: {
      alias: alias,
      color: arr_color[0],
      lang_id: 1,
      save_id: save_id,
    },
    success: function (result) {
      var list_img = "";
      var list_img2 = "";
      if (result.result) {
        for (var i = 0; i < result.list.length; i++) {
          list_img +=
            '<img src="https://vieclam123.vn/' + result.list[i] + '">';
          list_img2 +=
            `<div class="d-wrap-img">
                                        <img src="https://vieclam123.vn/` +
            result.list[i] +
            `">
                                        <button class="btn-zoom-cv" onclick="show_cv_zoom()">+</button>
                                    </div>`;
        }
        $(".popup-preview-cv .content-cv").html(list_img2);
        $("#show_img_zoom").html(list_img);
        $("#pre_language").css("pointer-events", "none");
        $(".d-chose-pre-color").css("pointer-events", "none");
        $(".pre-color").css("background", "#" + user_color);
      }
    },
  });
}

function open_win(alias) {
  window.open("https://vieclam123.vn/" + alias);
}

function close_window_fn() {
  window.close();
}

function close_window() {
  setTimeout(close_window_fn, 10000);
}

function close_preview_content() {
  $("#popup_preview_content_cv").fadeOut();
}

function show_layout_p0(e) {
  var block_id = $(e).attr("id");
  switch (block_id) {
    case "c_box02":
      if ($("#box02").is(":visible") == true) {
        $("#box02").hide();
      } else {
        $("#box02").show();
      }
      break;
    case "c_box03":
      if ($("#box03").is(":visible") == true) {
        $("#box03").hide();
      } else {
        $("#box03").show();
      }
      break;
    case "c_box04":
      if ($("#box04").is(":visible") == true) {
        $("#box04").hide();
      } else {
        $("#box04").show();
      }
      break;
    case "c_box05":
      if ($("#box05").is(":visible") == true) {
        $("#box05").hide();
      } else {
        $("#box05").show();
      }
      break;
    case "c_box06":
      if ($("#box06").is(":visible") == true) {
        $("#box06").hide();
      } else {
        $("#box06").show();
      }
      break;
    case "c_box07":
      if ($("#box07").is(":visible") == true) {
        $("#box07").hide();
      } else {
        $("#box07").show();
      }
      break;
    default:
      break;
  }
}

function show_layout_p1(e) {
  block_id = $(e).attr("id");
  switch (block_id) {
    case "c_block01":
      if ($("#block01").is(":visible") == true) {
        $("#block01").hide();
      } else {
        $("#block01").show();
      }
      break;
    case "c_block02":
      if ($("#block02").is(":visible") == true) {
        $("#block02").hide();
      } else {
        $("#block02").show();
      }
      break;
    case "c_block03":
      if ($("#block03").is(":visible") == true) {
        $("#block03").hide();
      } else {
        $("#block03").show();
      }
      break;
    case "c_block04":
      if ($("#block04").is(":visible") == true) {
        $("#block04").hide();
      } else {
        $("#block04").show();
      }
      break;
    case "c_block05":
      if ($("#block05").is(":visible") == true) {
        $("#block05").hide();
      } else {
        $("#block05").show();
      }
      break;
    default:
      break;
  }
}

function get_content_prev_firsttime() {
  var alias = "";
  lang_id = $("#temp_cv_lang").val();
  $(".inp-rad").each(function () {
    if ($(this).is(":checked") == true) {
      alias = $(this).attr("id");
    }
  });
  if (alias != "") {
    $.ajax({
      type: "POST",
      url: base_url + "get_cv_prev_content",
      async: false,
      dataType: "Json",
      data: {
        alias: alias,
        lang_id: lang_id,
        type_cv: $("#type_cv").val(),
      },
      success: function (result) {
        var html = "";
        if (result.result == true) {
          for (var i = 0; i < result.list.length; i++) {
            html +=
              `<div class="d-wrap-img">
                            <img src="https://vieclam123.vn/` +
              result.list[i] +
              `">
                        </div>`;
          }
          $("#content-cv-prev").html(html);
        }
      },
    });
    $("#popup_preview_content_cv").fadeIn();
  }
}

function get_content_prev(e) {
  lang_id = $("#temp_cv_lang").val();
  alias = $(e).attr("id");
  cv_name = $(e).attr("data-name");
  $("#name_tmp_cv_prev").html(cv_name);
  $.ajax({
    type: "POST",
    url: base_url + "get_cv_prev_content",
    async: false,
    dataType: "Json",
    data: {
      alias: alias,
      lang_id: lang_id,
      type_cv: $("#type_cv").val(),
    },
    success: function (result) {
      var html = "";
      if (result.result == true) {
        for (var i = 0; i < result.list.length; i++) {
          html +=
            `<div class="d-wrap-img">
                        <img src="https://vieclam123.vn/` +
            result.list[i] +
            `">
                    </div>`;
        }
        $("#content-cv-prev").html(html);
      }
    },
  });
}

function change_tmp_cv_lang() {
  var alias = "";
  lang_id = $("#temp_cv_lang").val();
  $(".inp-rad").each(function () {
    if ($(this).is(":checked") == true) {
      alias = $(this).attr("id");
    }
  });
  if (alias != "") {
    $.ajax({
      type: "POST",
      url: base_url + "get_cv_prev_content",
      async: false,
      dataType: "Json",
      data: {
        alias: alias,
        lang_id: lang_id,
        type_cv: $("#type_cv").val(),
      },
      success: function (result) {
        var html = "";
        if (result.result == true) {
          for (var i = 0; i < result.list.length; i++) {
            html +=
              `<div class="d-wrap-img">
                            <img src="https://vieclam123.vn/` +
              result.list[i] +
              `">
                        </div>`;
          }
          $("#content-cv-prev").html(html);
        }
      },
    });
  }
}

function change_tmp_cv_cate() {
  var id_cate = $("#temp_cv_cate").val();
  var type_cv = $("#type_cv").val();
  $.ajax({
    type: "POST",
    url: base_url + "get_template",
    dataType: "Json",
    data: { id_cate_cv: id_cate, type_cv: type_cv },
    success: function (result) {
      var html = "";
      for (var i = 0; i < result.length; i++) {
        html +=
          `<div class="item-cv-chose">
                <input class="inp-rad" type="radio" name="name-cv" id="` +
          result[i].alias +
          `" value="` +
          result[i].alias +
          `" data-name="` +
          result[i].name_cv +
          `" onclick="get_content_prev(this)">
                <label class="lbl-inp-rad" for="` +
          result[i].alias +
          `">` +
          result[i].name_cv +
          `</label>
            </div>`;
      }
      $("#list_temp_cv").html(html);
    },
  });
}

function edit_this_tempplate_cv() {
  var alias = "";
  $(".inp-rad").each(function () {
    if ($(this).is(":checked") == true) {
      alias = $(this).attr("id");
    }
  });
  if (alias != "") {
    if ($("#type_cv").val() == 2) {
      window.location.href = "/tao-cv/" + alias;
    } else {
      window.location.href = "/tao-cv/" + alias + "/1";
    }
  }
}

function check_login(e) {
  id = $(e).attr("data-id_onpage");
  $("#popup_preview_cv").hide();
  $(".v_popup_login").fadeIn();
  $(".v_check_page").val(id);
  prev_alias = $(e).attr("data-prev_alias");
  login_from_prev = 1;
}

function change_template(e) {
  var base_url = "https://vieclam123.vn/";
  var alias = $(e).attr("data-alias");
  var idcv = $(e).attr("data-idcv");
  var type_cv = $(e).attr("data-type_cv");
  if (type_cv == 1) {
    alias = alias + "/1";
  }
  window.location.href = "/tao-cv/" + alias;
  return;
  $("#alias_cv").val(alias);
  $("#idcv").val(idcv);
  var ar_data = $.exportData(1, 1);
  $.ajax({
    url: base_url + "create_index_cv/" + alias,
    type: "POST",
    dataType: "json",
    data: { alias: alias, ar_data: ar_data },
    async: false,
    success: function (result) {
      window.location.href = "/tao-cv/" + alias;
    },
  });
}

function change_css(link_file) {
  console.log(link_file);
  $("#cv-color-css").attr("href", link_file);
}

function close_preview() {
  $("#popup_preview_cv").css("display", "none");
}

function show_cv_zoom() {
  $("#popup_zomm_cv").css("display", "block");
}

function close_zoom() {
  $("#popup_zomm_cv").css("display", "none");
  $(".popup-preview-cv").css("display", "block");
}

function doCommand(sCmd) {
  document.execCommand(sCmd, false, "");
}

function re_send_email(id, email) {
  $.ajax({
    url: "https://vieclam123.vn/re_send_email",
    type: "POST",
    dataType: "json",
    data: {
      id: id,
      email: email,
    },
    success: function (data) {
      if (data.result == true) {
        alert(data.msg);
      } else {
        alert(data.msg);
      }
    },
  });
}

function chose_pre_color(e) {
  $(e)
    .parent(".d-chose-pre-color")
    .find(".chose-pre-color")
    .removeClass("active");
  if (!$(e).hasClass("active")) {
    $(e).addClass("active");
  } else {
    $(e).removeClass("active");
  }
  alias = $(e).attr("data-alias");
  color = $(e).attr("data-color");
  type_cv = $(e).attr("data-type_cv");
  lang_id = $("#pre_language").val();
  $.ajax({
    type: "POST",
    url: "https://vieclam123.vn/GetPreviewImg",
    dataType: "json",
    data: {
      alias: alias,
      color: color,
      lang_id: lang_id,
      type_cv: type_cv,
    },
    success: function (result) {
      var list_img = "";
      var list_img2 = "";
      if (result.result) {
        for (var i = 0; i < result.list.length; i++) {
          list_img +=
            '<img src="https://vieclam123.vn/' + result.list[i] + '">';
          list_img2 +=
            `<div class="d-wrap-img">
                                        <img src="https://vieclam123.vn/` +
            result.list[i] +
            `">
                                        <button class="btn-zoom-cv" onclick="show_cv_zoom()">+</button>
                                    </div>`;
        }
        $(".popup-preview-cv .content-cv").html(list_img2);
        $("#show_img_zoom").html(list_img);
      }
    },
  });
}

function chose_pre_lang() {
  alias = $(".pre-color").attr("data-alias");
  lang_id = $("#pre_language").val();
  color = $(".d-chose-pre-color").find(".active").attr("data-color");
  type_cv = $(".pre-color").attr("data-type_cv");
  $.ajax({
    type: "POST",
    url: "https://vieclam123.vn/GetPreviewImg",
    dataType: "json",
    data: {
      alias: alias,
      color: color,
      lang_id: lang_id,
      type_cv: type_cv,
    },
    success: function (result) {
      var list_img = "";
      var list_img2 = "";
      if (result.result) {
        for (var i = 0; i < result.list.length; i++) {
          list_img +=
            '<img src="https://vieclam123.vn/' + result.list[i] + '">';
          list_img2 +=
            `<div class="d-wrap-img">
                                        <img src="https://vieclam123.vn/` +
            result.list[i] +
            `">
                                        <button class="btn-zoom-cv" onclick="show_cv_zoom()">+</button>
                                    </div>`;
        }
        $(".popup-preview-cv .content-cv").html(list_img2);
        $("#show_img_zoom").html(list_img);
      }
    },
  });
}
$(document).keydown(function (e) {
  // ESCAPE key pressed
  if (e.keyCode == 27) {
    if ($("#popup_zomm_cv").css("display") == "block") {
      close_zoom();
      return false;
    }
    close_preview();
    if ($("#show-manage-layout").is(":visible") == true) {
      $("#show-manage-layout").hide();
      $(".tips").fadeIn();
      $(".tips-and-suggestion").hide();
    }
    if ($("#popup_preview_content_cv").is(":visible") == true) {
      close_preview_content();
    }
  }
});

function create_new(e) {
  alias = $(e).attr("href");
  str_alias = alias.replace("/tao-cv/", "");
  $.ajax({
    url: "https://vieclam123.vn/EditOrCreate",
    type: "POST",
    dataType: "json",
    data: {
      create_new: 1,
    },
    success: function (data) {
      if (data.result == true) {
        window.location.href = alias;
      }
    },
  });
}

function edit(e) {
  alias = $(e).attr("href");
  str_alias = alias.replace("/tao-cv/", "");
  $.ajax({
    url: "https://vieclam123.vn/EditOrCreate",
    type: "POST",
    dataType: "json",
    data: {
      use_this: 1,
    },
    success: function (data) {
      if (data.result == true) {
        window.location.href = alias;
      }
    },
  });
}

function create_new_cv(e) {
  var alias = $(e).attr("data-prev_alias");
  $.ajax({
    url: "https://vieclam123.vn/EditOrCreate",
    type: "POST",
    dataType: "json",
    data: {
      create_new: 1,
    },
    success: function (data) {
      if (data.result == true) {
        window.location.href = alias;
      }
    },
  });
  return false;
}

function edit_this_cv(e) {
  var alias = $(e).attr("data-prev_alias");
  $.ajax({
    url: "https://vieclam123.vn/EditOrCreate",
    type: "POST",
    dataType: "json",
    data: {
      use_this: 1,
    },
    success: function (data) {
      if (data.result == true) {
        window.location.href = alias;
      }
    },
  });
  return false;
}

function removeVietnameseTones(str) {
  str = str.replace(
    /Ă |Ă¡|áº¡|áº£|Ă£|Ă¢|áº§|áº¥|áº­|áº©|áº«|Äƒ|áº±|áº¯|áº·|áº³|áºµ/g,
    "a"
  );
  str = str.replace(/Ă¨|Ă©|áº¹|áº»|áº½|Ăª|á»|áº¿|á»‡|á»ƒ|á»…/g, "e");
  str = str.replace(/Ă¬|Ă­|á»‹|á»‰|Ä©/g, "i");
  str = str.replace(
    /Ă²|Ă³|á»|á»|Ăµ|Ă´|á»“|á»‘|á»™|á»•|á»—|Æ¡|á»|á»›|á»£|á»Ÿ|á»¡/g,
    "o"
  );
  str = str.replace(/Ă¹|Ăº|á»¥|á»§|Å©|Æ°|á»«|á»©|á»±|á»­|á»¯/g, "u");
  str = str.replace(/á»³|Ă½|á»µ|á»·|á»¹/g, "y");
  str = str.replace(/Ä‘/g, "d");
  str = str.replace(
    /Ă€|Ă|áº |áº¢|Ăƒ|Ă‚|áº¦|áº¤|áº¬|áº¨|áºª|Ä‚|áº°|áº®|áº¶|áº²|áº´/g,
    "A"
  );
  str = str.replace(/Ăˆ|Ă‰|áº¸|áºº|áº¼|Ă|á»€|áº¾|á»†|á»‚|á»„/g, "E");
  str = str.replace(/ĂŒ|Ă|á»|á»ˆ|Ä¨/g, "I");
  str = str.replace(
    /Ă’|Ă“|á»Œ|á»|Ă•|Ă”|á»’|á»|á»˜|á»”|á»–|Æ |á»œ|á»|á»¢|á»|á» /g,
    "O"
  );
  str = str.replace(/Ă™|Ă|á»¤|á»¦|Å¨|Æ¯|á»ª|á»¨|á»°|á»¬|á»®/g, "U");
  str = str.replace(/á»²|Ă|á»´|á»¶|á»¸/g, "Y");
  str = str.replace(/Ä/g, "D");
  // Some system encode vietnamese combining accent as individual utf-8 characters
  // Má»™t vĂ i bá»™ encode coi cĂ¡c dáº¥u mÅ©, dáº¥u chá»¯ nhÆ° má»™t kĂ­ tá»± riĂªng biá»‡t nĂªn thĂªm hai dĂ²ng nĂ y
  str = str.replace(/\u0300|\u0301|\u0303|\u0309|\u0323/g, ""); // ̀€ ̀ ̀ƒ ̀‰ ̀£  huyá»n, sáº¯c, ngĂ£, há»i, náº·ng
  str = str.replace(/\u02C6|\u0306|\u031B/g, ""); // Ë† ̀† ̀›  Ă‚, Ă, Ä‚, Æ , Æ¯
  // Remove extra spaces
  // Bá» cĂ¡c khoáº£ng tráº¯ng liá»n nhau
  str = str.replace(/ + /g, " ");
  str = str.trim();
  // Remove punctuations
  // Bá» dáº¥u cĂ¢u, kĂ­ tá»± Ä‘áº·c biá»‡t
  str = str.replace(
    /!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'|\"|\&|\#|\[|\]|~|\$|_|`|-|{|}|\||\\/g,
    " "
  );
  return str;
}

function autocomplete(inp, arr, alias) {
  var currentFocus;
  var base_url = "https://vieclam123.vn/";
  inp.addEventListener("input", function (e) {
    var a,
      b,
      i,
      total,
      val = this.value;
    closeAllLists();
    if (!val) {
      $("#v_cv_profession").css("display", "block");
      return false;
    }
    currentFocus = -1;
    $("#v_cv_profession").css("display", "none");
    a = document.createElement("div");
    a.setAttribute("id", this.id + "autocomplete-list");
    a.setAttribute("class", "autocomplete-items");
    this.parentNode.appendChild(a);
    for (i = 0; i < arr.length; i++) {
      if (
        removeVietnameseTones(arr[i].toUpperCase()).includes(
          removeVietnameseTones(val.toUpperCase())
        ) == true
      ) {
        // arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()
        // if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
        b = document.createElement("a");
        b.setAttribute("class", "item-listing");
        b.setAttribute("href", base_url + alias[i]);
        // b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
        // b.innerHTML += arr[i].substr(val.length);
        b.innerHTML += arr[i];
        b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
        b.addEventListener("click", function (e) {
          inp.value = this.getElementsByTagName("input")[0].value;
          closeAllLists();
        });
        a.appendChild(b);
      }
    }
  });
  inp.addEventListener("keydown", function (e) {
    var x = document.getElementById(this.id + "autocomplete-list");
    if (x) x = x.getElementsByTagName("a");
    if (e.keyCode == 40) {
      currentFocus++;
      addActive(x);
    } else if (e.keyCode == 38) {
      currentFocus--;
      addActive(x);
    } else if (e.keyCode == 13) {
      if (currentFocus > -1) {
        if (x) x[currentFocus].click();
      }
    }
  });

  function addActive(x) {
    if (!x) return false;
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = x.length - 1;
    x[currentFocus].classList.add("autocomplete-active");
  }

  function removeActive(x) {
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }

  function closeAllLists(elmnt) {
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  document.addEventListener("click", function (e) {
    closeAllLists(e.target);
  });
}

function resend_mail_reset_pwd() {
  $(".btn-submit-forget").click();
}
function close_invite_fr() {
  $("#popup_invite").hide();
}
function invite_your_friend() {
  var email_format =
    /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  email = $.trim($("#inp_friend_email").val());
  id_owner = $("#uid_cv").val();
  id_cv = $("#idcv").val();
  name_owner = $("#uname_cv").val();
  if (email.match(email_format) == null) {
    mail_valid = false;
  } else {
    mail_valid = true;
  }
  if (mail_valid == true) {
    $("#inp-friend-email-error").text("");
  } else {
    $("#inp-friend-email-error").text(
      "Báº¡n chÆ°a nháº­p Ä‘Ăºng Ä‘á»‹nh dáº¡ng email"
    );
    return;
  }
  $.ajax({
    url: "/invite_friend",
    type: "POST",
    dataType: "Json",
    async: false,
    data: {
      email: email,
      id_owner: id_owner,
      name_owner: name_owner,
      id_cv: id_cv,
    },
    success: function (result) {
      $("#popup_invite").hide();
      console.log(result);
      html =
        `
            <div>
                <div class="item-email-invited">
                    <p class="email-invited">` +
        email +
        `</p>
                    <span onclick="remove_invitation(this);"><i class="fa fa-times" style="color: #7f7f7f"></i></span>
                </div>
            </div>`;
      $("#list_user_email").append(html);
      alert("Má»i báº¡n bĂ¨ thĂ nh cĂ´ng");
    },
    error: function (error) {
      console.log(error);
    },
  });
}
function show_hide_user_email(e) {
  if ($(".popup-invite-foooter").is(":visible") == false) {
    $("#list_user_email").hide();
    $(".popup-invite-foooter").show();
  }
  if ($(e).val() == "") {
    $("#list_user_email").show();
    $(".popup-invite-foooter").hide();
  }
}
function remove_invitation(e) {
  console.log($(e).parent().text());
  $(e).parent().parent().remove();
}
function update_download_cv_count(id) {
  id_cv = id;
  $.ajax({
    url: "/update_download_cv",
    type: "POST",
    dataType: "Json",
    data: {
      id_cv: id_cv,
    },
    success: function (result) {
      console.log("abc");
    },
  });
}
function update_view_cv(alias) {
  alias = alias;
  $.ajax({
    url: "",
    type: "POST",
    dataType: "json",
    data: { alias: alias },
    success: function (result) {},
    error: function (error) {},
  });
}
function download_cv() {
  var quotes = document.getElementById("page-cv");
  var cv_title = document.getElementById("cv-title").innerHTML;
  var id_cv = $("#idcv").val();
  update_download_cv_count(id_cv);
  if ($('input[class="inp_check_border"]').length > 0) {
    if ($(".inp_check_border").val() == 1) {
      $("#border_img").css({
        "border-radius": "999em",
      });
      $("#cvo-profile-avatar").css({
        "border-radius": "999em",
      });
    }
  }
  // css font default
  if ($("#font-selector").val() == 1) {
    $(
      "#cv-profile-fullname, #cv-profile-job, #cv-profile-birthday, #cv-profile-sex, #cv-profile-phone, #cv-profile-email, #cv-profile-address"
    ).css("font-family", "Roboto-Regular, sans-serif");
    $(
      ".titlecv, .box-title, .skill-name, .box-content, .block-title, .exp-title, .exp-subtitle, .exp-content , .exp-date"
    ).css("font-family", "Roboto-Regular, sans-serif");
  }
  $(".A4").css({
    "margin-bottom": "0px",
  });
  cv_title = cv_title + ".pdf";
  var opt = {
    margin: 0,
    filename: cv_title,
    image: {
      quality: 0.98,
    },
    html2canvas: {
      scale: 3,
      dpi: 96,
      letterRendering: false,
    },
    jsPDF: {
      unit: "mm",
      format: [210, 297.1],
      orientation: "portrait",
    },
  };
  html2pdf(quotes, opt);

  $(".A4").css({
    "margin-bottom": "0.5cm",
  });
}
function get_user_infor() {
  var email = $("#email").val();
  var name = $("#name").val();
  var phone_number = $("#phone_number").val();
  var position = $("#job_name").val();
  var password = $("#pwd").val();
  var city = $("#city").val();
  var district = $("#district").val();
  var address = $("#address").val();
  var desired_city = $("#city_2").val();
  var desired_cate = $("#cate").val();
  var formData = new FormData();
  formData.append("email", email);
  formData.append("position", position);
  formData.append("password", password);
  formData.append("desired_city", desired_city);
  formData.append("desired_cate", desired_cate);
  formData.append("name", name);
  formData.append("phone_number", phone_number);
  formData.append("city", city);
  formData.append("district", district);
  formData.append("address", address);
  $.ajax({
    type: "POST",
    url: "/Cv/get_user_infor",
    data: formData,
    processData: false,
    contentType: false,
    success: function (result) {},
  });
}

$(document).mouseup(function (e) {
  if ($(".form_fillter").css("display") !== "none") {
    var container = $("#v_cv_with_job");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      $(".form_fillter").hide();
    }
  } else {
    console.log("11");
    $("#v_cv_with_job").click(function () {
      $("#v_cv_with_job").css({
        height: "auto",
        overflow: "unset",
      });
      $(".form_fillter").css({
        top: "1px",
        display: "block",
      });
    });
  }
});

// xuống dòng page
$(document).on("keydown", "[contenteditable]", function (e) {
  var array_content = [
    "box01",
    "box02",
    "box03",
    "box04",
    "box05",
    "box06",
    "box07",
    "block01",
    "block02",
    "block03",
    "block04",
    "block05",
  ];
  ct = $(this);

  if (e.keyCode == 13) {
    e.preventDefault();
    const selection = window.getSelection(),
      range = selection.getRangeAt(0),
      node = document.getSelection().anchorNode,
      pNode = node.parentNode;

    var tag = pNode.nodeName.toLowerCase();

    if (e.ctrlKey) {
      tag = prompt("Entet tag name", "div");
    } else
      switch (tag) {
        case "P":
          tag = "br";
          break;
        case "div":
          tag = "br";
          break;
        case "span":
          tag = "br";
          break;
        case "br":
          tag = NULL;
          break;
        default:
          tag = "br";
      }

    const el = document.createElement(tag);

    range.deleteContents();
    range.insertNode(el);

    if ("br" === tag) {
      range.setStartAfter(el);
      range.setEndAfter(el);
    } else {
      range.setStart(el, 0);
      range.setEnd(el, 0);
    }
    selection.removeAllRanges();
    selection.addRange(range);
    e.stopPropagation();
  }
  a4_height = $(".A4").innerHeight();
  h_cv_top = $("#cv-top").innerHeight();
  class_name = ct[0].className;
  page1_avail_height = 1123 - h_cv_top;
  // console.log(ct[0].className);
  remove = [];
  let dt = "";
  let j = 0;
  arr_child_dt_length = 0;
  switch (class_name) {
    case "exp-title":
      e = ct.parent().parent().parent().parent().parent().parent();
      ct_parent = ct.parent().parent().parent().parent();
      if (ct_parent.parent().parent().hasClass("page-0")) {
        layout = "left";
      } else {
        layout = "right";
      }
      if (e.hasClass("A4")) {
        if (ct.parent().parent().parent().parent().hasClass("page-0")) {
          layout = "left";
        } else {
          layout = "right";
        }
        e = $(this).parent().parent().parent().parent();
        ct_parent = ct.parent().parent();
      }
      parent_id = ct_parent[0].id;
      div_height = ct_parent[0].scrollHeight;
      div_width = ct_parent[0].offsetWidth;
      first_sibling = ct_parent.parent()[0].firstElementChild;
      prev_sibling = ct_parent[0].previousElementSibling;
      if (prev_sibling != null) {
        div_height = first_sibling.scrollHeight;
        div_width = first_sibling.offsetWidth;
      }
      last_sibling = ct_parent.parent()[0].lastElementChild;
      next_sibling = ct_parent[0].nextElementSibling;
      next_sibling_id = "";
      this_page = e.parent().parent();
      prev_page = this_page.prev();
      next_page = this_page.next();
      long = e[0].scrollHeight;
      if (prev_page.length > 0) {
        max_height = a4_height;
        if (layout == "right") {
          p1_height = prev_page.children().children(".page-1")[0].scrollHeight;
        } else {
          p1_height = prev_page.children().children(".page-0")[0].scrollHeight;
        }
        if (prev_page.hasClass("A2")) {
          accept_height = a4_height;
        } else {
          accept_height = page1_avail_height;
        }
        if (div_height + p1_height < accept_height) {
          if (prev_sibling == null) {
            if (array_content.indexOf(parent_id) == -1) {
              if (ct_parent.hasClass("div_edu")) {
                dy = ct.parent("#" + parent_id).detach();
                $("#block01").find("#experience-table").append(dy);
              }
              if (ct_parent.hasClass("div_exp")) {
                dy = ct.parent("#" + parent_id).detach();
                $("#block02").find("#experience-table").append(dy);
              }
              if (ct_parent.hasClass("div_act")) {
                dy = ct.parent("#" + parent_id).detach();
                $("#block03").find("#experience-table").append(dy);
              }
              if (ct_parent.hasClass("div_pro")) {
                dy = ct.parent("#" + parent_id).detach();
                $("#block04").find("#experience-table").append(dy);
              }
              if (ct_parent.hasClass("div_more")) {
                dy = ct.parent("#" + parent_id).detach();
                $("#block05").find("#experience-table").append(dy);
              }
            } else {
              dy = $("#" + parent_id).detach();
              if (layout == "right") {
                prev_page.find(".page-1").find(".sortable").append(dy);
              } else {
                prev_page.find(".page-0").find(".sortable").append(dy);
              }
            }
          } else {
            first_sibling_id = first_sibling.id;
            if (array_content.indexOf(first_sibling_id) == -1) {
              dy = ct_parent
                .parent()
                .find("#" + first_sibling_id)
                .detach();
              if (dy.hasClass("div_edu")) {
                $("#block01").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_exp")) {
                $("#block02").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_act")) {
                $("#block03").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_pro")) {
                $("#block04").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_more")) {
                $("#block05").find("#experience-table").append(dy);
              }
            } else {
              dy = $("#" + first_sibling_id).detach();
              if (layout == "right") {
                prev_page.find(".page-1").find(".sortable").append(dy);
              } else {
                prev_page.find(".page-0").find(".sortable").append(dy);
              }
            }
          }
          page1_empty = this_page
            .find(".page-1")
            .find(".sortable")
            .children()
            .toArray();
          page2_empty = this_page
            .find(".page-0")
            .find(".sortable")
            .children()
            .toArray();
          if (page1_empty.length == 0 && page2_empty.length == 0) {
            this_page.remove();
          }
        }
      } else {
        max_height = page1_avail_height;
      }
      if (long > max_height) {
        if (next_sibling == null) {
          arr_child_dt = $("#" + parent_id)
            .find("#experience-table")
            .children()
            .toArray();
          arr_child_dt_length = arr_child_dt.length;
          while (long > max_height && arr_child_dt.length > 0) {
            var child_dt = arr_child_dt.pop();
            long = long - child_dt.scrollHeight;
            $(child_dt).detach();
            remove.unshift($(child_dt));
            j++;
          }
          if (j == arr_child_dt_length) {
            $("#" + parent_id)
              .find("#experience-table")
              .append(remove);
            switch (parent_id) {
              case "block01":
                $(".div_edu").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + parent_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block02":
                $(".div_exp").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + parent_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block03":
                $(".div_act").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + parent_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block04":
                $(".div_pro").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + parent_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block05":
                $(".div_more").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + parent_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              default:
                break;
            }
            dt = $("#" + parent_id).detach();
          } else {
            dt = remove;
          }
        } else {
          last_sibling_id = last_sibling.id;
          arr_child_dt = $("#" + last_sibling_id)
            .find("#experience-table")
            .children()
            .toArray();
          arr_child_dt_length = arr_child_dt.length;
          while (long > max_height && arr_child_dt.length > 0) {
            var child_dt = arr_child_dt.pop();
            long = long - child_dt.scrollHeight;
            $(child_dt).detach();
            remove.unshift($(child_dt));
            j++;
          }
          if (j == arr_child_dt_length) {
            $("#" + last_sibling_id)
              .find("#experience-table")
              .append(remove);
            switch (last_sibling_id) {
              case "block01":
                $(".div_edu").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + last_sibling_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block02":
                $(".div_exp").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + last_sibling_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block03":
                $(".div_act").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + last_sibling_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block04":
                $(".div_pro").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + last_sibling_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block05":
                $(".div_more").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + last_sibling_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              default:
                break;
            }
            dt = $("#" + last_sibling_id).detach();
          } else {
            dt = remove;
          }
        }
      }
      if (next_page.length > 0) {
        if (layout == "right") {
          this_page.next().find(".page-1").find(".sortable").prepend(dt);
          width_check = this_page
            .next()
            .find(".page-1")
            .find(".sortable")
            .find(".exp-content")[0].offsetWidth;
          if (width_check <= div_width || width_check - div_width < 40) {
            this_page
              .next()
              .find(".page-1")
              .find(".sortable")
              .find(".exp-content")
              .keydown();
          }
        } else {
          this_page.next().find(".page-0").find(".sortable").prepend(dt);
          width_check = this_page
            .next()
            .find(".page-1")
            .find(".sortable")
            .find(".exp-content")[0].offsetWidth;
          if (width_check <= div_width || width_check - div_width < 40) {
            this_page
              .next()
              .find(".page-0")
              .find(".sortable")
              .find(".exp-content")
              .keydown();
          }
        }
      } else {
        if (remove.length > 0) {
          var a4 = $(
            '<div class="A4 A2"><div class="pages"><div class="page page-0"><div class="sortable"></div></div><div class="page page-1"><div class="sortable"></div></div></div></div>'
          );
          if (layout == "right") {
            a4.children().children(".page-1").children().append(dt);
            this_page.after(a4);
          } else {
            a4.children().children(".page-0").children().append(dt);
            this_page.after(a4);
          }
        } else {
          if (dt != "" && dt != null) {
            var a4 = $(
              '<div class="A4 A2"><div class="pages"><div class="page page-0"><div class="sortable"></div></div><div class="page page-1"><div class="sortable"></div></div></div></div>'
            );
            if (layout == "right") {
              a4.children().children(".page-1").children().append(dt);
              this_page.after(a4);
            } else {
              a4.children().children(".page-0").children().append(dt);
              this_page.after(a4);
            }
          }
        }
      }
      break;
    case "exp-content":
      e = ct.parent().parent().parent().parent().parent();
      ct_parent = ct.parent().parent().parent();
      if (ct_parent.parent().parent().hasClass("page-0")) {
        layout = "left";
      } else {
        layout = "right";
      }
      if (e.hasClass("A4")) {
        if (ct.parent().parent().parent().hasClass("page-0")) {
          layout = "left";
        } else {
          layout = "right";
        }
        e = ct.parent().parent().parent();
        ct_parent = ct.parent();
      }
      parent_id = ct_parent[0].id;
      div_height = ct_parent[0].scrollHeight;
      div_width = ct_parent[0].offsetWidth;
      // console.log(div_width);
      first_sibling = ct_parent.parent()[0].firstElementChild;
      prev_sibling = ct_parent[0].previousElementSibling;
      if (prev_sibling != null) {
        div_height = first_sibling.scrollHeight;
        div_width = first_sibling.offsetWidth;
      }
      next_sibling = ct_parent[0].nextElementSibling;
      last_sibling = ct_parent.parent()[0].lastElementChild;
      next_sibling_id = "";
      this_page = e.parent().parent();
      prev_page = this_page.prev();
      next_page = this_page.next();
      long = e[0].scrollHeight;
      if (prev_page.length > 0) {
        max_height = a4_height;
        if (layout == "right") {
          p1_height = prev_page.children().children(".page-1")[0].scrollHeight;
        } else {
          p1_height = prev_page.children().children(".page-0")[0].scrollHeight;
        }
        if (prev_page.hasClass("A2")) {
          accept_height = a4_height;
        } else {
          accept_height = page1_avail_height;
        }
        // console.log(div_height,p1_height,accept_height);
        if (div_height + p1_height < accept_height) {
          if (prev_sibling == null) {
            if (array_content.indexOf(parent_id) == -1) {
              if (ct_parent.hasClass("div_edu")) {
                dy = ct.parent("#" + parent_id).detach();
                $("#block01").find("#experience-table").append(dy);
              }
              if (ct_parent.hasClass("div_exp")) {
                dy = ct.parent("#" + parent_id).detach();
                $("#block02").find("#experience-table").append(dy);
              }
              if (ct_parent.hasClass("div_act")) {
                dy = ct.parent("#" + parent_id).detach();
                $("#block03").find("#experience-table").append(dy);
              }
              if (ct_parent.hasClass("div_pro")) {
                dy = ct.parent("#" + parent_id).detach();
                $("#block04").find("#experience-table").append(dy);
              }
              if (ct_parent.hasClass("div_more")) {
                dy = ct.parent("#" + parent_id).detach();
                $("#block05").find("#experience-table").append(dy);
              }
            } else {
              dy = $("#" + parent_id).detach();
              if (layout == "right") {
                prev_page.find(".page-1").find(".sortable").append(dy);
              } else {
                prev_page.find(".page-0").find(".sortable").append(dy);
              }
            }
          } else {
            first_sibling_id = first_sibling.id;
            if (array_content.indexOf(first_sibling_id) == -1) {
              dy = ct_parent
                .parent()
                .find("#" + first_sibling_id)
                .detach();
              if (dy.hasClass("div_edu")) {
                $("#block01").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_exp")) {
                $("#block02").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_act")) {
                $("#block03").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_pro")) {
                $("#block04").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_more")) {
                $("#block05").find("#experience-table").append(dy);
              }
            } else {
              dy = $("#" + first_sibling_id).detach();
              if (layout == "right") {
                prev_page.find(".page-1").find(".sortable").append(dy);
              } else {
                prev_page.find(".page-0").find(".sortable").append(dy);
              }
            }
          }
          page1_empty = this_page
            .find(".page-1")
            .find(".sortable")
            .children()
            .toArray();
          page2_empty = this_page
            .find(".page-0")
            .find(".sortable")
            .children()
            .toArray();
          if (page1_empty.length == 0 && page2_empty.length == 0) {
            this_page.remove();
          }
        }
      } else {
        max_height = page1_avail_height;
      }
      if (long > max_height) {
        if (next_sibling == null) {
          arr_child_dt = $("#" + parent_id)
            .find("#experience-table")
            .children()
            .toArray();
          arr_child_dt_length = arr_child_dt.length;
          while (long > max_height && arr_child_dt.length > 0) {
            var child_dt = arr_child_dt.pop();
            long = long - child_dt.scrollHeight;
            $(child_dt).detach();
            remove.unshift($(child_dt));
            j++;
          }
          if (j == arr_child_dt_length) {
            $("#" + parent_id)
              .find("#experience-table")
              .append(remove);
            switch (parent_id) {
              case "block01":
                $(".div_edu").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + parent_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block02":
                $(".div_exp").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + parent_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block03":
                $(".div_act").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + parent_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block04":
                $(".div_pro").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + parent_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block05":
                $(".div_more").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + parent_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              default:
                break;
            }
            dt = $("#" + parent_id).detach();
          } else {
            dt = remove;
          }
        } else {
          last_sibling_id = last_sibling.id;
          arr_child_dt = $("#" + last_sibling_id)
            .find("#experience-table")
            .children()
            .toArray();
          arr_child_dt_length = arr_child_dt.length;
          while (long > max_height && arr_child_dt.length > 0) {
            var child_dt = arr_child_dt.pop();
            long = long - child_dt.scrollHeight;
            $(child_dt).detach();
            remove.unshift($(child_dt));
            j++;
          }
          if (j == arr_child_dt_length) {
            $("#" + last_sibling_id)
              .find("#experience-table")
              .append(remove);
            switch (last_sibling_id) {
              case "block01":
                $(".div_edu").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + last_sibling_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block02":
                $(".div_exp").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + last_sibling_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block03":
                $(".div_act").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + last_sibling_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block04":
                $(".div_pro").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + last_sibling_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block05":
                $(".div_more").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + last_sibling_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              default:
                break;
            }
            dt = $("#" + last_sibling_id).detach();
          } else {
            dt = remove;
          }
        }
        if (next_page.length > 0) {
          if (layout == "right") {
            this_page.next().find(".page-1").find(".sortable").prepend(dt);
            width_check = this_page
              .next()
              .find(".page-1")
              .find(".sortable")
              .find(".exp-content")[0].offsetWidth;
            if (width_check <= div_width || width_check - div_width < 40) {
              this_page
                .next()
                .find(".page-1")
                .find(".sortable")
                .find(".exp-content")
                .keydown();
            }
          } else {
            this_page.next().find(".page-0").find(".sortable").prepend(dt);
            if (
              this_page
                .next()
                .find(".page-0")
                .find(".sortable")
                .find(".exp-content").length
            ) {
              width_check = this_page
                .next()
                .find(".page-0")
                .find(".sortable")
                .find(".exp-content")[0].offsetWidth;
              if (width_check <= div_width || width_check - div_width < 40) {
                this_page
                  .next()
                  .find(".page-0")
                  .find(".sortable")
                  .find(".exp-content")
                  .keydown();
              }
            }
          }
        } else {
          if (remove.length > 0) {
            var a4 = $(
              '<div class="A4 A2"><div class="pages"><div class="page page-0"><div class="sortable"></div></div><div class="page page-1"><div class="sortable"></div></div></div></div>'
            );
            if (layout == "right") {
              a4.children().children(".page-1").children().append(dt);
              this_page.after(a4);
            } else {
              a4.children().children(".page-0").children().append(dt);
              this_page.after(a4);
            }
          } else {
            if (dt != "" && dt != null) {
              var a4 = $(
                '<div class="A4 A2"><div class="pages"><div class="page page-0"><div class="sortable"></div></div><div class="page page-1"><div class="sortable"></div></div></div></div>'
              );
              if (layout == "right") {
                a4.children().children(".page-1").children().append(dt);
                this_page.after(a4);
              } else {
                a4.children().children(".page-0").children().append(dt);
                this_page.after(a4);
              }
            }
          }
        }
      }
      break;
    case "exp-subtitle":
      e = ct.parent().parent().parent().parent().parent().parent();
      ct_parent = ct.parent().parent().parent().parent();
      if (ct_parent.parent().parent().hasClass("page-0")) {
        layout = "left";
      } else {
        layout = "right";
      }
      if (e.hasClass("A4")) {
        if (ct.parent().parent().parent().parent().hasClass("page-0")) {
          layout = "left";
        } else {
          layout = "right";
        }
        e = ct.parent().parent().parent().parent();
        ct_parent = ct.parent().parent();
      }
      parent_id = ct_parent[0].id;
      div_height = ct_parent[0].scrollHeight;
      div_width = ct_parent[0].offsetWidth;
      first_sibling = ct_parent.parent()[0].firstElementChild;
      prev_sibling = ct_parent[0].previousElementSibling;
      if (prev_sibling != null) {
        div_height = first_sibling.scrollHeight;
        div_width = first_sibling.offsetWidth;
      }
      last_sibling = ct_parent.parent()[0].lastElementChild;
      next_sibling = ct_parent[0].nextElementSibling;
      next_sibling_id = "";
      this_page = e.parent().parent();
      prev_page = this_page.prev();
      next_page = this_page.next();
      long = e[0].scrollHeight;
      if (prev_page.length > 0) {
        max_height = a4_height;
        if (layout == "right") {
          p1_height = prev_page.children().children(".page-1")[0].scrollHeight;
        } else {
          p1_height = prev_page.children().children(".page-0")[0].scrollHeight;
        }
        if (prev_page.hasClass("A2")) {
          accept_height = a4_height;
        } else {
          accept_height = page1_avail_height;
        }
        if (div_height + p1_height < accept_height) {
          if (prev_sibling == null) {
            if (array_content.indexOf(parent_id) == -1) {
              if (ct_parent.hasClass("div_edu")) {
                dy = ct
                  .parent()
                  .parent("#" + parent_id)
                  .detach();
                $("#block01").find("#experience-table").append(dy);
              }
              if (ct_parent.hasClass("div_exp")) {
                dy = ct
                  .parent()
                  .parent("#" + parent_id)
                  .detach();
                $("#block02").find("#experience-table").append(dy);
              }
              if (ct_parent.hasClass("div_act")) {
                dy = ct
                  .parent()
                  .parent("#" + parent_id)
                  .detach();
                $("#block03").find("#experience-table").append(dy);
              }
              if (ct_parent.hasClass("div_pro")) {
                dy = ct
                  .parent()
                  .parent("#" + parent_id)
                  .detach();
                $("#block04").find("#experience-table").append(dy);
              }
              if (ct_parent.hasClass("div_more")) {
                dy = ct
                  .parent()
                  .parent("#" + parent_id)
                  .detach();
                $("#block05").find("#experience-table").append(dy);
              }
            } else {
              dy = $("#" + parent_id).detach();
              if (layout == "right") {
                prev_page.find(".page-1").find(".sortable").append(dy);
              } else {
                prev_page.find(".page-0").find(".sortable").append(dy);
              }
            }
          } else {
            first_sibling_id = first_sibling.id;
            if (array_content.indexOf(first_sibling_id) == -1) {
              dy = ct_parent
                .parent()
                .parent()
                .find("#" + first_sibling_id)
                .detach();
              if (dy.hasClass("div_edu")) {
                $("#block01").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_exp")) {
                $("#block02").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_act")) {
                $("#block03").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_pro")) {
                $("#block04").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_more")) {
                $("#block05").find("#experience-table").append(dy);
              }
            } else {
              dy = $("#" + first_sibling_id).detach();
              if (layout == "right") {
                prev_page.find(".page-1").find(".sortable").append(dy);
              } else {
                prev_page.find(".page-0").find(".sortable").append(dy);
              }
            }
          }
          page1_empty = this_page
            .find(".page-1")
            .find(".sortable")
            .children()
            .toArray();
          page2_empty = this_page
            .find(".page-0")
            .find(".sortable")
            .children()
            .toArray();
          if (page1_empty.length == 0 && page2_empty.length == 0) {
            this_page.remove();
          }
        }
      } else {
        max_height = page1_avail_height;
      }
      if (long > max_height) {
        if (next_sibling == null) {
          arr_child_dt = $("#" + parent_id)
            .find("#experience-table")
            .children()
            .toArray();
          arr_child_dt_length = arr_child_dt.length;
          while (long > max_height && arr_child_dt.length > 0) {
            var child_dt = arr_child_dt.pop();
            long = long - child_dt.scrollHeight;
            $(child_dt).detach();
            remove.unshift($(child_dt));
            j++;
          }
          if (j == arr_child_dt_length) {
            $("#" + parent_id)
              .find("#experience-table")
              .append(remove);
            switch (parent_id) {
              case "block01":
                $(".div_edu").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + parent_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block02":
                $(".div_exp").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + parent_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block03":
                $(".div_act").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + parent_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block04":
                $(".div_pro").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + parent_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block05":
                $(".div_more").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + parent_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              default:
                break;
            }
            dt = $("#" + parent_id).detach();
          } else {
            dt = remove;
          }
        } else {
          last_sibling_id = last_sibling.id;
          arr_child_dt = $("#" + last_sibling_id)
            .find("#experience-table")
            .children()
            .toArray();
          arr_child_dt_length = arr_child_dt.length;
          while (long > max_height && arr_child_dt.length > 0) {
            var child_dt = arr_child_dt.pop();
            long = long - child_dt.scrollHeight;
            $(child_dt).detach();
            remove.unshift($(child_dt));
            j++;
          }
          if (j == arr_child_dt_length) {
            $("#" + last_sibling_id)
              .find("#experience-table")
              .append(remove);
            switch (last_sibling_id) {
              case "block01":
                $(".div_edu").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + last_sibling_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block02":
                $(".div_exp").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + last_sibling_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block03":
                $(".div_act").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + last_sibling_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block04":
                $(".div_pro").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + last_sibling_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block05":
                $(".div_more").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + last_sibling_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              default:
                break;
            }
            dt = $("#" + last_sibling_id).detach();
          } else {
            dt = remove;
          }
        }
        if (next_page.length > 0) {
          if (layout == "right") {
            this_page.next().find(".page-1").find(".sortable").prepend(dt);
            width_check = this_page
              .next()
              .find(".page-1")
              .find(".sortable")
              .find(".exp-content")[0].offsetWidth;
            if (width_check <= div_width || width_check - div_width < 40) {
              this_page
                .next()
                .find(".page-1")
                .find(".sortable")
                .find(".exp-content")
                .keydown();
            }
          } else {
            this_page.next().find(".page-0").find(".sortable").prepend(dt);
            width_check = this_page
              .next()
              .find(".page-0")
              .find(".sortable")
              .find(".exp-content")[0].offsetWidth;
            if (width_check <= div_width || width_check - div_width < 40) {
              this_page
                .next()
                .find(".page-0")
                .find(".sortable")
                .find(".exp-content")
                .keydown();
            }
          }
        } else {
          if (remove.length > 0) {
            var a4 = $(
              '<div class="A4 A2"><div class="pages"><div class="page page-0"><div class="sortable"></div></div><div class="page page-1"><div class="sortable"></div></div></div></div>'
            );
            if (layout == "right") {
              a4.children().children(".page-1").children().append(dt);
              this_page.after(a4);
            } else {
              a4.children().children(".page-0").children().append(dt);
              this_page.after(a4);
            }
          } else {
            if (dt != "" && dt != null) {
              var a4 = $(
                '<div class="A4 A2"><div class="pages"><div class="page page-0"><div class="sortable"></div></div><div class="page page-1"><div class="sortable"></div></div></div></div>'
              );
              if (layout == "right") {
                a4.children().children(".page-1").children().append(dt);
                this_page.after(a4);
              } else {
                a4.children().children(".page-0").children().append(dt);
                this_page.after(a4);
              }
            }
          }
        }
      }
      break;
    case "block-title":
      e = $(this).parent().parent().parent().parent();
      ct_parent = ct.parent().parent();
      if (e.hasClass("page-0")) {
        layout = "left";
      } else {
        layout = "right";
      }
      parent_id = ct_parent[0].id;
      div_height = ct_parent[0].scrollHeight;
      div_width = ct_parent[0].offsetWidth;
      first_sibling = ct_parent.parent()[0].firstElementChild;
      prev_sibling = ct_parent[0].previousElementSibling;
      if (prev_sibling != null) {
        div_height = first_sibling.scrollHeight;
        div_width = first_sibling.offsetWidth;
      }
      last_sibling = ct_parent.parent()[0].lastElementChild;
      next_sibling = ct_parent[0].nextElementSibling;
      next_sibling_id = "";
      this_page = e.parent().parent();
      prev_page = this_page.prev();
      next_page = this_page.next();
      long = e[0].scrollHeight;
      if (prev_page.length > 0) {
        max_height = a4_height;
        if (layout == "left") {
          p1_height = prev_page.children().children(".page-0")[0].scrollHeight;
        } else {
          p1_height = prev_page.children().children(".page-1")[0].scrollHeight;
        }
        if (prev_page.hasClass("A2")) {
          accept_height = a4_height;
        } else {
          accept_height = page1_avail_height;
        }
        if (div_height + p1_height < accept_height) {
          if (prev_sibling == null) {
            if (array_content.indexOf(parent_id) == -1) {
              dy = ct_parent
                .parent()
                .find("#" + parent_id)
                .detach();
              if (ct_parent.hasClass("div_edu")) {
                $("#block01").find("#experience-table").append(dy);
              }
              if (ct_parent.hasClass("div_exp")) {
                $("#block02").find("#experience-table").append(dy);
              }
              if (ct_parent.hasClass("div_act")) {
                $("#block03").find("#experience-table").append(dy);
              }
              if (ct_parent.hasClass("div_pro")) {
                $("#block04").find("#experience-table").append(dy);
              }
              if (ct_parent.hasClass("div_more")) {
                $("#block05").find("#experience-table").append(dy);
              }
            } else {
              dy = $("#" + parent_id).detach();
              if (layout == "right") {
                prev_page.find(".page-1").find(".sortable").append(dy);
              } else {
                prev_page.find(".page-0").find(".sortable").append(dy);
              }
            }
          } else {
            first_sibling_id = first_sibling.id;
            if (array_content.indexOf(first_sibling_id) == -1) {
              dy = ct_parent
                .parent()
                .find("#" + first_sibling_id)
                .detach();
              if (dy.hasClass("div_edu")) {
                $("#block01").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_exp")) {
                $("#block02").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_act")) {
                $("#block03").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_pro")) {
                $("#block04").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_more")) {
                $("#block05").find("#experience-table").append(dy);
              }
            } else {
              dy = $("#" + first_sibling_id).detach();
              if (layout == "right") {
                prev_page.find(".page-1").find(".sortable").append(dy);
              } else {
                prev_page.find(".page-0").find(".sortable").append(dy);
              }
            }
          }
          page1_empty = this_page
            .find(".page-1")
            .find(".sortable")
            .children()
            .toArray();
          page2_empty = this_page
            .find(".page-0")
            .find(".sortable")
            .children()
            .toArray();
          if (page1_empty.length == 0 && page2_empty.length == 0) {
            this_page.remove();
          }
        }
      } else {
        max_height = page1_avail_height;
      }
      if (long > max_height) {
        next_sibling = ct.parent().parent()[0].nextElementSibling;
        last_sibling = ct.parent().parent().parent()[0].lastElementChild;
        next_sibling_id = "";
        parent_id = ct.parent().parent()[0].id;
        if (next_sibling == null) {
          arr_child_dt = $("#" + parent_id)
            .find("#experience-table")
            .children()
            .toArray();
          arr_child_dt_length = arr_child_dt.length;
          while (long > max_height && arr_child_dt.length > 0) {
            var child_dt = arr_child_dt.pop();
            long = long - child_dt.scrollHeight;
            $(child_dt).detach();
            remove.unshift($(child_dt));
            j++;
          }
          if (j == arr_child_dt_length) {
            $("#" + parent_id)
              .find("#experience-table")
              .append(remove);
            switch (parent_id) {
              case "block01":
                $(".div_edu").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + parent_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block02":
                $(".div_exp").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + parent_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block03":
                $(".div_act").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + parent_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block04":
                $(".div_pro").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + parent_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block05":
                $(".div_more").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + parent_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              default:
                break;
            }
            dt = $("#" + parent_id).detach();
          } else {
            dt = remove;
          }
        } else {
          last_sibling_id = last_sibling.id;
          arr_child_dt = $("#" + last_sibling_id)
            .find("#experience-table")
            .children()
            .toArray();
          arr_child_dt_length = arr_child_dt.length;
          while (long > max_height && arr_child_dt.length > 0) {
            var child_dt = arr_child_dt.pop();
            long = long - child_dt.scrollHeight;
            $(child_dt).detach();
            remove.unshift($(child_dt));
            j++;
          }
          if (j == arr_child_dt_length) {
            $("#" + last_sibling_id)
              .find("#experience-table")
              .append(remove);
            switch (last_sibling_id) {
              case "block01":
                $(".div_edu").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + last_sibling_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block02":
                $(".div_exp").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + last_sibling_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block03":
                $(".div_act").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + last_sibling_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block04":
                $(".div_pro").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + last_sibling_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block05":
                $(".div_more").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + last_sibling_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              default:
                break;
            }
            dt = $("#" + last_sibling_id).detach();
          } else {
            dt = remove;
          }
        }
      }
      if (next_page.length > 0) {
        if (layout == "right") {
          this_page.next().find(".page-1").find(".sortable").prepend(dt);
          width_check = this_page
            .next()
            .find(".page-1")
            .find(".sortable")
            .find(".exp-content")[0].offsetWidth;
          if (width_check <= div_width || width_check - div_width < 40) {
            this_page
              .next()
              .find(".page-1")
              .find(".sortable")
              .find(".exp-content")
              .keydown();
          }
        } else {
          this_page.next().find(".page-0").find(".sortable").prepend(dt);
          width_check = this_page
            .next()
            .find(".page-0")
            .find(".sortable")
            .find(".exp-content")[0].offsetWidth;
          if (width_check <= div_width || width_check - div_width < 40) {
            this_page
              .next()
              .find(".page-0")
              .find(".sortable")
              .find(".exp-content")
              .keydown();
          }
        }
      } else {
        if (remove.length > 0) {
          var a4 = $(
            '<div class="A4 A2"><div class="pages"><div class="page page-0"><div class="sortable"></div></div><div class="page page-1"><div class="sortable"></div></div></div></div>'
          );
          if (layout == "right") {
            a4.children().children(".page-1").children().append(dt);
            this_page.after(a4);
          } else {
            a4.children().children(".page-0").children().append(dt);
            this_page.after(a4);
          }
        } else {
          if (dt != "" && dt != null) {
            var a4 = $(
              '<div class="A4 A2"><div class="pages"><div class="page page-0"><div class="sortable"></div></div><div class="page page-1"><div class="sortable"></div></div></div></div>'
            );
            if (layout == "right") {
              a4.children().children(".page-1").children().append(dt);
              this_page.after(a4);
            } else {
              a4.children().children(".page-0").children().append(dt);
              this_page.after(a4);
            }
          }
        }
      }
      break;
    case "exp-date":
      e = ct.parent().parent().parent().parent().parent().parent();
      ct_parent = ct.parent().parent().parent().parent();
      if (e.hasClass("A4")) {
        e = ct.parent().parent().parent().parent();
        ct_parent = ct.parent().parent();
      }
      parent_id = ct_parent[0].id;
      div_height = ct_parent[0].scrollHeight;
      div_width = ct_parent[0].offsetWidth;
      first_sibling = ct_parent.parent()[0].firstElementChild;
      prev_sibling = ct_parent[0].previousElementSibling;
      if (prev_sibling != null) {
        div_height = first_sibling.scrollHeight;
        div_width = first_sibling.offsetWidth;
      }
      last_sibling = ct_parent.parent()[0].lastElementChild;
      next_sibling = ct_parent[0].nextElementSibling;
      next_sibling_id = "";
      this_page = e.parent().parent();
      prev_page = this_page.prev();
      next_page = this_page.next();
      long = e[0].scrollHeight;
      if (prev_page.length > 0) {
        max_height = a4_height;
        p1_height = prev_page.children().children(".page-1")[0].scrollHeight;
        if (prev_page.hasClass("A2")) {
          accept_height = a4_height;
        } else {
          accept_height = page1_avail_height;
        }
        if (div_height + p1_height < accept_height) {
          if (prev_sibling == null) {
            if (array_content.indexOf(parent_id) == -1) {
              dy = ct_parent
                .parent()
                .find("#" + parent_id)
                .detach();
              if (ct_parent.hasClass("div_edu")) {
                $("#block01").find("#experience-table").append(dy);
              }
              if (ct_parent.hasClass("div_exp")) {
                $("#block02").find("#experience-table").append(dy);
              }
              if (ct_parent.hasClass("div_act")) {
                $("#block03").find("#experience-table").append(dy);
              }
              if (ct_parent.hasClass("div_pro")) {
                $("#block04").find("#experience-table").append(dy);
              }
              if (ct_parent.hasClass("div_more")) {
                dy = $("#" + parent_id).detach();
                $("#block05").find("#experience-table").append(dy);
              }
            } else {
              dy = $("#" + parent_id).detach();
              if (layout == "left") {
                prev_page.find(".page-0").find(".sortable").append(dy);
              } else {
                prev_page.find(".page-0").find(".sortable").append(dy);
              }
            }
          } else {
            first_sibling_id = first_sibling.id;
            if (array_content.indexOf(first_sibling_id) == -1) {
              dy = ct_parent
                .parent()
                .find("#" + first_sibling_id)
                .detach();
              if (dy.hasClass("div_edu")) {
                $("#block01").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_exp")) {
                $("#block02").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_act")) {
                $("#block03").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_pro")) {
                $("#block04").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_more")) {
                $("#block05").find("#experience-table").append(dy);
              }
            } else {
              dy = $("#" + first_sibling_id).detach();
              if (layout == "left") {
                prev_page.find(".page-0").find(".sortable").append(dy);
              } else {
                prev_page.find(".page-1").find(".sortable").append(dy);
              }
            }
          }
          page1_empty = this_page
            .find(".page-1")
            .find(".sortable")
            .children()
            .toArray();
          page2_empty = this_page
            .find(".page-0")
            .find(".sortable")
            .children()
            .toArray();
          if (page1_empty.length == 0 && page2_empty.length == 0) {
            this_page.remove();
          }
        }
      } else {
        max_height = page1_avail_height;
      }
      if (long > max_height) {
        next_sibling = ct
          .parent()
          .parent()
          .parent()
          .parent()[0].nextElementSibling;
        last_sibling = ct
          .parent()
          .parent()
          .parent()
          .parent()
          .parent()[0].lastElementChild;
        next_sibling_id = "";
        parent_id = ct.parent().parent().parent().parent()[0].id;
        if (next_sibling == null) {
          arr_child_dt = $("#" + parent_id)
            .find("#experience-table")
            .children()
            .toArray();
          arr_child_dt_length = arr_child_dt.length;
          while (long > max_height && arr_child_dt.length > 0) {
            var child_dt = arr_child_dt.pop();
            long = long - child_dt.scrollHeight;
            $(child_dt).detach();
            remove.unshift($(child_dt));
            j++;
          }
          if (j == arr_child_dt_length) {
            $("#" + parent_id)
              .find("#experience-table")
              .append(remove);
            switch (parent_id) {
              case "block01":
                $(".div_edu").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + parent_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block02":
                $(".div_exp").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + parent_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block03":
                $(".div_act").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + parent_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block04":
                $(".div_pro").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + parent_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block05":
                $(".div_more").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + parent_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              default:
                break;
            }
            dt = $("#" + parent_id).detach();
          } else {
            dt = remove;
          }
        } else {
          last_sibling_id = last_sibling.id;
          arr_child_dt = $("#" + last_sibling_id)
            .find("#experience-table")
            .children()
            .toArray();
          arr_child_dt_length = arr_child_dt.length;
          while (long > max_height && arr_child_dt.length > 0) {
            var child_dt = arr_child_dt.pop();
            long = long - child_dt.scrollHeight;
            $(child_dt).detach();
            remove.unshift($(child_dt));
            j++;
          }
          if (j == arr_child_dt_length) {
            $("#" + last_sibling_id)
              .find("#experience-table")
              .append(remove);
            switch (last_sibling_id) {
              case "block01":
                $(".div_edu").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + last_sibling_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block02":
                $(".div_exp").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + last_sibling_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block03":
                $(".div_act").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + last_sibling_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block04":
                $(".div_pro").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + last_sibling_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              case "block05":
                $(".div_more").each(function () {
                  if ($(this).parent().hasClass("sortable")) {
                    dx = $(this).detach();
                    $("#" + last_sibling_id)
                      .find("#experience-table")
                      .append(dx);
                  }
                });
                break;
              default:
                break;
            }
            dt = $("#" + last_sibling_id).detach();
          } else {
            dt = remove;
          }
        }
      }
      if (next_page.length > 0) {
        this_page.next().find(".page-1").find(".sortable").prepend(dt);
      } else {
        if (remove.length > 0) {
          var a4 = $(
            '<div class="A4 A2"><div class="pages"><div class="page page-0"><div class="sortable"></div></div><div class="page page-1"><div class="sortable"></div></div></div></div>'
          );
          a4.children().children(".page-1").children().append(dt);
          this_page.after(a4);
        }
      }
      break;
    case "box-title":
      e = ct.parent().parent().parent().parent().parent();
      ct_parent = ct.parent().parent().parent();
      if (ct_parent.parent().parent().hasClass("page-0")) {
        layout = "left";
      } else {
        layout = "right";
      }
      parent_id = ct_parent[0].id;
      div_height = ct_parent[0].scrollHeight;
      first_sibling = ct_parent.parent()[0].firstElementChild;
      prev_sibling = ct_parent[0].previousElementSibling;
      if (prev_sibling != null) {
        div_height = first_sibling.scrollHeight;
      }
      this_page = e.parent().parent();
      prev_page = this_page.prev();
      next_page = this_page.next();
      long = e[0].scrollHeight;
      if (prev_page.length > 0) {
        max_height = a4_height;
        if (layout == "left") {
          p0_height = prev_page.children().children(".page-0")[0].scrollHeight;
        } else {
          p0_height = prev_page.children().children(".page-1")[0].scrollHeight;
        }
        if (prev_page.hasClass("A2")) {
          accept_height = a4_height;
        } else {
          accept_height = page1_avail_height;
        }
        if (div_height + p0_height < accept_height) {
          if (prev_sibling == null) {
            dy = $("#" + parent_id).detach();
            if (layout == "left") {
              prev_page.find(".page-0").find(".sortable").append(dy);
            } else {
              prev_page.find(".page-1").find(".sortable").append(dy);
            }
          } else {
            first_sibling_id = first_sibling.id;
            if (array_content.indexOf(first_sibling_id) == -1) {
              dy = e.find("#" + first_sibling_id);
              if (dy.hasClass("div_edu")) {
                $("#block01").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_exp")) {
                $("#block02").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_act")) {
                $("#block03").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_pro")) {
                $("#block04").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_more")) {
                $("#block05").find("#experience-table").append(dy);
              }
            } else {
              dy = $("#" + first_sibling_id).detach();
              if (layout == "right") {
                prev_page.find(".page-1").find(".sortable").append(dy);
              } else {
                prev_page.find(".page-0").find(".sortable").append(dy);
              }
            }
          }
          page1_empty = this_page
            .find(".page-1")
            .find(".sortable")
            .children()
            .toArray();
          page2_empty = this_page
            .find(".page-0")
            .find(".sortable")
            .children()
            .toArray();
          if (page1_empty.length == 0 && page2_empty.length == 0) {
            this_page.remove();
          }
        }
      } else {
        max_height = page1_avail_height;
      }
      if (long > max_height) {
        next_sibling = ct.parent().parent().parent()[0].nextElementSibling;
        last_sibling = ct
          .parent()
          .parent()
          .parent()
          .parent()[0].lastElementChild;
        next_sibling_id = "";
        if ((parent_id = "box03")) {
        }
        if (next_sibling == null) {
          dt = $("#" + parent_id).detach();
        } else {
          next_sibling_id = next_sibling.id;
          if (next_sibling_id == "box03") {
          }
          dt = $("#" + next_sibling_id).detach();
        }
        if (next_page.length > 0) {
          if (layout == "left") {
            this_page.next().find(".page-0").find(".sortable").prepend(dt);
          } else {
            this_page.next().find(".page-1").find(".sortable").prepend(dt);
          }
        } else {
          var a4 = $(
            '<div class="A4 A2"><div class="pages"><div class="page page-0"><div class="sortable"></div></div><div class="page page-1"><div class="sortable"></div></div></div></div>'
          );
          if (layout == "left") {
            a4.children().children(".page-0").children().append(dt);
            this_page.after(a4);
          } else {
            a4.children().children(".page-1").children().append(dt);
            this_page.after(a4);
          }
        }
      }
      break;
    case "box-content":
      e = ct.parent().parent().parent().parent();
      ct_parent = ct.parent().parent();
      if (ct_parent.parent().parent().hasClass("page-0")) {
        layout = "left";
      } else {
        layout = "right";
      }
      parent_id = ct_parent[0].id;
      div_height = ct_parent[0].scrollHeight;
      first_sibling = ct_parent.parent()[0].firstElementChild;
      prev_sibling = ct_parent[0].previousElementSibling;
      if (prev_sibling != null) {
        div_height = first_sibling.scrollHeight;
      }
      this_page = e.parent().parent();
      prev_page = this_page.prev();
      next_page = this_page.next();
      long = e[0].scrollHeight;
      if (prev_page.length > 0) {
        max_height = a4_height;
        if (layout == "left") {
          p0_height = prev_page.children().children(".page-0")[0].scrollHeight;
        } else {
          p0_height = prev_page.children().children(".page-1")[0].scrollHeight;
        }
        if (prev_page.hasClass("A2")) {
          accept_height = a4_height;
        } else {
          accept_height = page1_avail_height;
        }
        if (div_height + p0_height < accept_height) {
          if (prev_sibling == null) {
            dy = $("#" + parent_id).detach();
            if (layout == "left") {
              prev_page.find(".page-0").find(".sortable").append(dy);
            } else {
              prev_page.find(".page-1").find(".sortable").append(dy);
            }
          } else {
            first_sibling_id = first_sibling.id;
            if (array_content.indexOf(first_sibling_id) == -1) {
              dy = e.find("#" + first_sibling_id);
              if (dy.hasClass("div_edu")) {
                $("#block01").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_exp")) {
                $("#block02").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_act")) {
                $("#block03").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_pro")) {
                $("#block04").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_more")) {
                $("#block05").find("#experience-table").append(dy);
              }
            } else {
              dy = $("#" + first_sibling_id).detach();
              if (layout == "right") {
                prev_page.find(".page-1").find(".sortable").append(dy);
              } else {
                prev_page.find(".page-0").find(".sortable").append(dy);
              }
            }
          }
          page1_empty = this_page
            .find(".page-1")
            .find(".sortable")
            .children()
            .toArray();
          page2_empty = this_page
            .find(".page-0")
            .find(".sortable")
            .children()
            .toArray();
          if (page1_empty.length == 0 && page2_empty.length == 0) {
            this_page.remove();
          }
        }
      } else {
        max_height = page1_avail_height;
      }
      if (long > max_height) {
        next_sibling = ct.parent().parent()[0].nextElementSibling;
        next_sibling_id = "";
        if (next_sibling == null) {
          dt = $("#" + parent_id).detach();
        } else {
          next_sibling_id = next_sibling.id;
          dt = $("#" + next_sibling_id).detach();
        }
        if (next_page.length > 0) {
          if (layout == "right") {
            this_page.next().find(".page-1").find(".sortable").prepend(dt);
          } else {
            this_page.next().find(".page-0").find(".sortable").prepend(dt);
          }
        } else {
          var a4 = $(
            '<div class="A4 A2"><div class="pages"><div class="page page-0"><div class="sortable"></div></div><div class="page page-1"><div class="sortable"></div></div></div></div>'
          );
          if (layout == "right") {
            a4.children().children(".page-1").children().append(dt);
            this_page.after(a4);
          } else {
            a4.children().children(".page-0").children().append(dt);
            this_page.after(a4);
          }
        }
      }
      break;
    case "skill-name":
      e = ct.parent().parent().parent().parent().parent();
      ct_parent = ct.parent().parent().parent();
      if (ct_parent.parent().parent().hasClass("page-0")) {
        layout = "left";
      } else {
        layout = "right";
      }
      parent_id = ct_parent[0].id;
      div_height = ct_parent[0].scrollHeight;
      first_sibling = ct_parent.parent()[0].firstElementChild;
      prev_sibling = ct_parent[0].previousElementSibling;
      if (prev_sibling != null) {
        div_height = first_sibling.scrollHeight;
      }
      next_sibling = ct_parent[0].nextElementSibling;
      last_sibling = ct_parent.parent()[0].lastElementChild;
      next_sibling_id = "";
      this_page = e.parent().parent();
      prev_page = this_page.prev();
      next_page = this_page.next();
      long = e[0].scrollHeight;
      if (prev_page.length > 0) {
        max_height = a4_height;
        if (layout == "left") {
          p0_height = prev_page.children().children(".page-0")[0].scrollHeight;
        } else {
          p0_height = prev_page.children().children(".page-1")[0].scrollHeight;
        }
        if (prev_page.hasClass("A2")) {
          accept_height = a4_height;
        } else {
          accept_height = page1_avail_height;
        }
        if (div_height + p0_height < accept_height) {
          if (prev_sibling == null) {
            dy = $("#" + parent_id).detach();
            if (layout == "left") {
              prev_page.find(".page-0").find(".sortable").append(dy);
            } else {
              prev_page.find(".page-1").find(".sortable").append(dy);
            }
          } else {
            first_sibling_id = first_sibling.id;
            if (array_content.indexOf(first_sibling_id) == -1) {
              dy = e.find("#" + first_sibling_id);
              if (dy.hasClass("div_edu")) {
                $("#block01").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_exp")) {
                $("#block02").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_act")) {
                $("#block03").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_pro")) {
                $("#block04").find("#experience-table").append(dy);
              }
              if (dy.hasClass("div_more")) {
                $("#block05").find("#experience-table").append(dy);
              }
            } else {
              dy = $("#" + first_sibling_id).detach();
              if (layout == "right") {
                prev_page.find(".page-1").find(".sortable").append(dy);
              } else {
                prev_page.find(".page-0").find(".sortable").append(dy);
              }
            }
          }
          page1_empty = this_page
            .find(".page-1")
            .find(".sortable")
            .children()
            .toArray();
          page2_empty = this_page
            .find(".page-0")
            .find(".sortable")
            .children()
            .toArray();
          if (page1_empty.length == 0 && page2_empty.length == 0) {
            this_page.remove();
          }
        }
      } else {
        max_height = page1_avail_height;
      }
      if (long > max_height) {
        if ((parent_id = "box03")) {
        }
        if (next_sibling == null) {
          dt = $("#" + parent_id).detach();
        } else {
          next_sibling_id = next_sibling.id;
          if (next_sibling_id == "box03") {
            dt = $("#" + next_sibling_id).detach();
          } else {
            if (next_sibling_id.substring(0, 3) == "blo") {
              $("#" + next_sibling_id)
                .find(".exp-content")
                .keydown();
            } else {
              dt = $("#" + next_sibling_id).detach();
            }
          }
        }
        if (next_page.length > 0) {
          if (layout == "left") {
            this_page.next().find(".page-0").find(".sortable").prepend(dt);
          } else {
            this_page.next().find(".page-1").find(".sortable").prepend(dt);
          }
        } else {
          var a4 = $(
            '<div class="A4 A2"><div class="pages"><div class="page page-0"><div class="sortable"></div></div><div class="page page-1"><div class="sortable"></div></div></div></div>'
          );
          if (layout == "left") {
            a4.children().children(".page-0").children().append(dt);
            this_page.after(a4);
          } else {
            a4.children().children(".page-1").children().append(dt);
            this_page.after(a4);
          }
        }
      }
      break;
    default:
      break;
  }
});

// --------------------------
function boxClick(e) {
  $("#form_" + e).hasClass("hidden")
    ? ($("#form_" + e).removeClass("hidden"),
      $("#form_" + e + " .bx-b").slideDown(500))
    : ($("#form_" + e + " .bx-b").slideUp(500),
      $("#form_" + e).addClass("hidden"));
}

function removeAdd(e) {
  $("#form_" + e).remove();
}

function seeImg(e, t) {
  $.ajax({
    cache: !1,
    type: "POST",
    url: "site/view_letter",
    data: {
      id: e,
      type: t,
    },
    success: function () {},
  });
  var a = document.getElementById("lbx_" + e);
  (a.style.display = "block"),
    ($("#lbx_" + e + " .close")[0].onclick = function () {
      a.style.display = "none";
    });
}

function check_tk() {
  var e = document.getElementById("warning");
  (e.style.display = "block"),
    ($("#warning .close")[0].onclick = function () {
      e.style.display = "none";
    });
}

function login(e) {
  var e = $("#cv-profile-job").text(),
    t = $("#cv-profile-phone").text(),
    a = $("#cv-profile-email").text(),
    i = $("#cv-profile-address").text(),
    s = $("#cv-profile-fullname").text();
  if ("" != $("#cvid").val()) {
    if ("" == t || "" == a || "" == s || "" == i) {
      "" == s &&
        (document.getElementById("cv-profile-fullname").style.outline =
          "1px dashed red"),
        "" == t &&
          (document.getElementById("cv-profile-phone").style.outline =
            "1px dashed red"),
        "" == a &&
          (document.getElementById("cv-profile-email").style.outline =
            "1px dashed red"),
        "" == i &&
          (document.getElementById("cv-profile-address").style.outline =
            "1px dashed red");
      var l =
        '<div class="v-modal" style="z-index: 2009;"></div><div tabindex="-1" class="el-message-box__wrapper" style="z-index: 2010;">';
      return (
        (l +=
          '<div class="el-message-box"><div class="el-message-box__header"><div class="el-message-box__title">ThĂ´ng bĂ¡o</div></div><div class="el-message-box__content"><div class="el-message-box__status el-icon-warning"></div><div class="el-message-box__message" style="margin-left: 50px;">'),
        (l +=
          "<span style='color:red;'>Vui lĂ²ng nháº­p Ä‘áº§y Ä‘á»§ thĂ´ng tin: <span  style='color:red;'>Email, sá»‘ Ä‘iá»‡n thoáº¡i, há» tĂªn, ngĂ y sinh, giá»›i tĂ­nh vĂ  Ä‘á»‹a chá»‰ </span>trong khung Ä‘á» trÆ°á»›c khi lÆ°u CV</div></div>"),
        (l += '<div class="el-message-box__btns">'),
        (l +=
          '<button type="button" onclick="hide()" class="el-button el-button--default"><span>Há»§y bá»</span></button>'),
        $("body").append(l),
        !1
      );
    }
    if (!/^[0-9]+$/.test(t))
      return (
        (l =
          '<div class="v-modal" style="z-index: 2009;"></div><div tabindex="-1" class="el-message-box__wrapper" style="z-index: 2010;">'),
        (l +=
          '<div class="el-message-box"><div class="el-message-box__header"><div class="el-message-box__title">ThĂ´ng bĂ¡o</div></div><div class="el-message-box__content"><div class="el-message-box__status el-icon-warning"></div><div class="el-message-box__message" style="margin-left: 50px;">'),
        (l += "Sá»‘ Ä‘iá»‡n thoáº¡i khĂ´ng há»£p lá»‡</div></div>"),
        (l += '<div class="el-message-box__btns">'),
        (l +=
          '<button type="button" onclick="hide()" class="el-button el-button--default"><span>Há»§y bá»</span></button>'),
        $("body").append(l),
        !1
      );
  }

  $("#logincv").modal("show"),
    // $("#boxLos").hide(),
    //  $("#registercv").hide(),
    null != e ? $("#boxlink").val(e) : $("#boxlink").val(window.location.href);
}

function resg() {
  var e = $("#cv-profile-job").text(),
    t = $("#cv-profile-phone").text(),
    a = $("#cv-profile-email").text(),
    i = $("#cv-profile-address").text(),
    s = $("#cv-profile-fullname").text();
  d = $("#cv-profile-birthday").text();
  g = $("#cv-profile-sex").text();

  if ("" != $("#cvid").val()) {
    if ("" == t || "" == a || "" == s || "" == i || d == "" || g == "") {
      "" == d &&
        (document.getElementById("cv-profile-birthday").style.outline =
          "1px dashed red"),
        "" == g &&
          (document.getElementById("cv-profile-sex").style.outline =
            "1px dashed red"),
        "" == s &&
          (document.getElementById("cv-profile-fullname").style.outline =
            "1px dashed red"),
        "" == t &&
          (document.getElementById("cv-profile-phone").style.outline =
            "1px dashed red"),
        "" == a &&
          (document.getElementById("cv-profile-email").style.outline =
            "1px dashed red"),
        "" == i &&
          (document.getElementById("cv-profile-address").style.outline =
            "1px dashed red");
      var l =
        '<div class="v-modal" style="z-index: 2009;"></div><div tabindex="-1" class="el-message-box__wrapper" style="z-index: 2010;">';
      return (
        (l +=
          '<div class="el-message-box"><div class="el-message-box__header"><div class="el-message-box__title">ThĂ´ng bĂ¡o</div></div><div class="el-message-box__content"><div class="el-message-box__status el-icon-warning"></div><div class="el-message-box__message" style="margin-left: 50px;">'),
        (l +=
          "Vui lĂ²ng nháº­p Ä‘áº§y Ä‘á»§ thĂ´ng tin: <span  style='color:red;'>Email, sá»‘ Ä‘iá»‡n thoáº¡i, há» tĂªn, ngĂ y sinh, giá»›i tĂ­nh vĂ  Ä‘á»‹a chá»‰ </span>trong khung Ä‘á» trÆ°á»›c khi lÆ°u CV</div></div>"),
        (l += '<div class="el-message-box__btns">'),
        (l +=
          '<button type="button" onclick="hide()" class="el-button el-button--default"><span>Há»§y bá»</span></button>'),
        $("body").append(l),
        !1
      );
    }
    if (!/^[0-9]+$/.test(t))
      return (
        (l =
          '<div class="v-modal" style="z-index: 2009;"></div><div tabindex="-1" class="el-message-box__wrapper" style="z-index: 2010;">'),
        (l +=
          '<div class="el-message-box"><div class="el-message-box__header"><div class="el-message-box__title">ThĂ´ng bĂ¡o</div></div><div class="el-message-box__content"><div class="el-message-box__status el-icon-warning"></div><div class="el-message-box__message" style="margin-left: 50px;">'),
        (l += "Sá»‘ Ä‘iá»‡n thoáº¡i khĂ´ng há»£p lá»‡</div></div>"),
        (l += '<div class="el-message-box__btns">'),
        (l +=
          '<button type="button" onclick="hide()" class="el-button el-button--default"><span>Há»§y bá»</span></button>'),
        $("body").append(l),
        !1
      );
  }
  $("#form_res #cv_id").val($("#idcv").val()),
    $("#form_res #email").val(a),
    $("#form_res #name").val(s),
    $("#form_res #mobile").val(t),
    $("#form_res #cv_title").val(e),
    $("#form_res #diachi").val(i),
    $("#boxlink").val(window.location.href),
    $("#registercv").modal("show");
}

function resetpass() {
  $("#logincv").hide(), $("#boxLos").show();
}

function exit() {
  $("#logincv").hide(),
    $("#registercv").hide(),
    $("#boxLos").hide(),
    $("#loadjs").empty();
}

function form(e) {
  var t = document.getElementById("form_" + e);
  (t.style.display = "block"),
    ($("#form_" + e + " .huy")[0].onclick = function () {
      return !(t.style.display = "none");
    });
}

function addMore(e) {
  if (($("#form_" + e).remove(), 11 == e))
    var t =
        "Liá»‡t kĂª cĂ¡c Äiá»ƒm máº¡nh cá»§a báº¡n phĂ¹ há»£p vá»›i cĂ´ng viá»‡c á»©ng tuyá»ƒn",
      a = "Äiá»ƒm máº¡nh",
      i = "diemmanh";
  13 == e &&
    ((t =
      "Liá»‡t kĂª cĂ¡c ká»¹ nÄƒng cá»§a báº¡n phĂ¹ há»£p vá»›i cĂ´ng viá»‡c á»©ng tuyá»ƒn"),
    (a = "Ká»¹ nÄƒng"),
    (i = "kynang"));
  var s =
    '<div class="bx" id="form_' +
    e +
    '"><div class="bx-t"><strong>' +
    a +
    '<i class="list-icon ico22"></i></strong><a href="javascript:void(0)" onclick="removeAdd(' +
    e +
    ')" title="delete"><i class="list-icon ico23"></i></a></div><div class="bx-b"><form accept="" method="post"><textarea name="' +
    i +
    '" rows="10" placeholder="' +
    t +
    '"></textarea></p><a href="" class="btn3">Cáº­p nháº­t</a><div class="clr"></div></form></div><a href="javascript:void(0)" onclick="boxClick(' +
    e +
    ')" id="btn-hidden"><i class="list-icon ico24"></i></a></div>';
  $("#list-add").append(s);
}

function loadModal() {
  var e = document.getElementById("myModal");
  document.getElementById("imgZoom"),
    (e.style.display = "block"),
    (document.getElementsByClassName("close")[0].onclick = function () {
      e.style.display = "none";
    });
}

function btnDownCV() {
  var e = $("#idcv").val(),
    t = $("#uid_cv").val(),
    a = $("#cv-title").text();
  "" == a && (a = $("#cv_alias").val()),
    $.ajax({
      cache: !1,
      type: "POST",
      url: "cv24h/SaveCvCheck",
      data: {
        id: e,
      },
      success: function (i) {
        if ("false" == i)
          return (
            $("body").append(
              '<div class="v-modal" style="z-index: 2009;"></div><div tabindex="-1" class="el-message-box__wrapper" style="z-index: 2010;"><div class="el-message-box"><div class="el-message-box__header"><div class="el-message-box__title">ThĂ´ng bĂ¡o</div></div><div class="el-message-box__content"><div class="el-message-box__status el-icon-warning1"></div><div class="el-message-box__message" style="margin-left: 50px;">LÆ°u CV trÆ°á»›c khi táº£i vá» mĂ¡y!</div></div><div class="el-message-box__btns"><button type="button" onclick="hide()" class="el-button el-button--default el-button--primary "><span>Äá»“ng Ă½</span></button></div></div></div>'
            ),
            !1
          );
        $.ajax({
          cache: !1,
          type: "POST",
          url: "cv24h/updatedownloadcv",
          data: {
            id: e,
          },
          dataType: "json",
          success: function () {},
        }),
          "" == a && (a = "cv_" + t + "_" + e),
          (window.location.href =
            "download-cvpdf/cv.php?idcv=" +
            e +
            "&iduser=" +
            t +
            "&cvname=" +
            a),
          $("#box_down").hide();
      },
    });
}

function printImg(e) {
  if ("" == e) return alert("LÆ°u trÆ°á»›c khi in !"), !1;
  var t = window.open("");
  t.document.write(
    '<img src="' + e + '" onload="window.print();window.close()" />'
  ),
    t.focus();
}

var max_pages = 10;
var page_count = 0;
var count_loop = 1;

function check(el) {
  var curOverf = el.style.overflow;

  if (!curOverf || curOverf === "visible") el.style.overflow = "hidden";

  var isOverflowing =
    el.clientWidth < el.scrollWidth || el.clientHeight < el.scrollHeight;

  el.style.overflow = curOverf;

  return isOverflowing;
}

function snipMe() {
  page_count++;
  if (page_count > max_pages) {
    return;
  }
  var long = $(this).children().children(".page-0")[0].scrollHeight;
  var long2 = $(this).children().children(".page-1")[0].scrollHeight;
  var page_0 = $(this).children().children(".page-0");
  var page_1 = $(this).children().children(".page-1");
  var children_0 = page_0.children().children().toArray();
  var children_1 = page_1.children().children().toArray();
  var removed_0 = [];
  var removed_1 = [];
  var h_cv_topp = $("#cv-top").innerHeight();
  var h_page_1 = 1123 - h_cv_topp;
  var h_page = 1123;
  if (count_loop <= 1) {
    //check trang 1: khá»‘i box (bĂªn trĂ¡i)
    while (long > h_page_1 && children_0.length > 0) {
      var child_0 = children_0.pop();
      var tmp_id = child_0.id;
      switch (tmp_id) {
        case "block01":
          arr_block_child = $("#block01")
            .find("#experience-table")
            .children()
            .toArray();
          block_child_length = arr_block_child.length;
          arr_tmp = [];
          if (block_child_length > 1) {
            c_while = q = 0;
            while (long > h_page_1) {
              c_while += 1;
              child_block = arr_block_child.pop();
              long = long - child_block.scrollHeight;
              $(child_block).detach();
              arr_tmp.unshift(child_block);
              if (c_while == block_child_length) {
                if (long > h_page_1) {
                  $("#block01").find("#experience-table").append(arr_tmp);
                  $(child_0).detach();
                  removed_0.unshift($(child_0));
                  break;
                } else {
                  $("#block01").find("#experience-table").append(arr_tmp);
                  $(child_0).detach();
                  removed_0.unshift($(child_0));
                  break;
                }
              }
              if (c_while < block_child_length) {
                if (long < h_page_1) {
                  for (k = arr_tmp.length; k >= 0; k--) {
                    removed_0.unshift(arr_tmp[k]);
                  }
                }
              }
              q++;
            }
          } else {
            long = long - child_0.scrollHeight;
            $(child_0).detach();
            removed_0.unshift($(child_0));
          }
          break;
        case "block02":
          arr_block_child = $("#block02")
            .find("#experience-table")
            .children()
            .toArray();
          block_child_length = arr_block_child.length;
          arr_tmp = [];
          if (block_child_length > 1) {
            c_while = q = 0;
            while (long > h_page_1) {
              c_while += 1;
              child_block = arr_block_child.pop();
              long = long - child_block.scrollHeight;
              $(child_block).detach();
              arr_tmp.unshift(child_block);
              if (c_while == block_child_length) {
                if (long > h_page_1) {
                  $("#block02").find("#experience-table").append(arr_tmp);
                  $(child_0).detach();
                  removed_0.unshift($(child_0));
                  break;
                } else {
                  $("#block02").find("#experience-table").append(arr_tmp);
                  $(child_0).detach();
                  removed_0.unshift($(child_0));
                  break;
                }
              }
              if (c_while < block_child_length) {
                if (long < h_page_1) {
                  for (k = arr_tmp.length; k >= 0; k--) {
                    removed_0.unshift(arr_tmp[k]);
                  }
                }
              }
              q++;
            }
          } else {
            long = long - child_0.scrollHeight;
            $(child_0).detach();
            removed_0.unshift($(child_0));
          }
          break;
        case "block03":
          arr_block_child = $("#block03")
            .find("#experience-table")
            .children()
            .toArray();
          block_child_length = arr_block_child.length;
          arr_tmp = [];
          if (block_child_length > 1) {
            c_while = 0;
            while (long > h_page_1) {
              c_while += 1;
              child_block = arr_block_child.pop();
              long = long - child_block.scrollHeight;
              $(child_block).detach();
              arr_tmp.unshift(child_block);
              if (c_while == block_child_length) {
                if (long > h_page_1) {
                  $(child_0).find("#experience-table").append(arr_tmp);
                  $(child_0).detach();
                  removed_0.unshift($(child_0));
                  break;
                } else {
                  $(child_0).find("#experience-table").append(arr_tmp);
                  $(child_0).detach();
                  removed_0.unshift($(child_0));
                  break;
                }
              }
              if (c_while < block_child_length) {
                if (long2 < h_page_1) {
                  for (k = arr_tmp.length; k >= 0; k--) {
                    removed_0.unshift(arr_tmp[k]);
                  }
                }
              }
            }
          } else {
            long = long - child_0.scrollHeight;
            $(child_0).detach();
            removed_0.unshift($(child_0));
          }
          break;
        case "block04":
          arr_block_child = $("#block04")
            .find("#experience-table")
            .children()
            .toArray();
          block_child_length = arr_block_child.length;
          arr_tmp = [];
          if (block_child_length > 1) {
            c_while = q = 0;
            while (long > h_page_1) {
              c_while += 1;
              child_block = arr_block_child.pop();
              long = long - child_block.scrollHeight;
              $(child_block).detach();
              arr_tmp.unshift(child_block);
              if (c_while == block_child_length) {
                if (long > h_page_1) {
                  $("#block04").find("#experience-table").append(arr_tmp);
                  $(child_0).detach();
                  removed_0.unshift($(child_0));
                  break;
                } else {
                  $("#block04").find("#experience-table").append(arr_tmp);
                  $(child_0).detach();
                  removed_0.unshift($(child_0));
                  break;
                }
              }
              if (c_while < block_child_length) {
                if (long < h_page_1) {
                  for (k = arr_tmp.length; k >= 0; k--) {
                    removed_0.unshift(arr_tmp[k]);
                  }
                }
              }
              q++;
            }
          } else {
            long = long - child_0.scrollHeight;
            $(child_0).detach();
            removed_0.unshift($(child_0));
          }
          break;
        case "block05":
          arr_block_child = $("#block05")
            .find("#experience-table")
            .children()
            .toArray();
          block_child_length = arr_block_child.length;
          arr_tmp = [];
          if (block_child_length > 1) {
            c_while = 0;
            while (long > h_page_1) {
              c_while += 1;
              child_block = arr_block_child.pop();
              long = long - child_block.scrollHeight;
              $(child_block).detach();
              arr_tmp.unshift(child_block);
              if (c_while == block_child_length) {
                if (long > h_page_1) {
                  $(child_0).find("#experience-table").append(arr_tmp);
                  $(child_0).detach();
                  removed_0.unshift($(child_0));
                  break;
                } else {
                  $(child_0).find("#experience-table").append(arr_tmp);
                  $(child_0).detach();
                  removed_0.unshift($(child_0));
                  break;
                }
              }
              if (c_while < block_child_length) {
                if (long < h_page_1) {
                  for (k = arr_tmp.length; k >= 0; k--) {
                    removed_0.unshift(arr_tmp[k]);
                  }
                }
              }
            }
          } else {
            long = long - child_0.scrollHeight;
            $(child_0).detach();
            removed_0.unshift($(child_0));
          }
          break;
        default:
          long = long - child_0.scrollHeight;
          $(child_0).detach();
          removed_0.unshift($(child_0));
          break;
      }
    }
    //check trang 1: khá»‘i block (bĂªn pháº£i)
    while (long2 > h_page_1 && children_1.length > 0) {
      var child_1 = children_1.pop();
      var tmp_id = child_1.id;
      switch (tmp_id) {
        case "block01":
          arr_block_child = $("#block01")
            .find("#experience-table")
            .children()
            .toArray();
          block_child_length = arr_block_child.length;
          arr_tmp = [];
          if (block_child_length > 1) {
            c_while = q = 0;
            while (long2 > h_page_1) {
              c_while += 1;
              child_block = arr_block_child.pop();
              long2 = long2 - child_block.scrollHeight;
              $(child_block).detach();
              arr_tmp.unshift(child_block);
              if (c_while == block_child_length) {
                if (long2 > h_page_1) {
                  $("#block02").find("#experience-table").append(arr_tmp);
                  $(child_1).detach();
                  removed_1.unshift($(child_1));
                  break;
                } else {
                  $("#block02").find("#experience-table").append(arr_tmp);
                  $(child_1).detach();
                  removed_1.unshift($(child_1));
                  break;
                }
              }
              if (c_while < block_child_length) {
                if (long2 < h_page_1) {
                  for (k = arr_tmp.length; k >= 0; k--) {
                    removed_1.unshift(arr_tmp[k]);
                  }
                }
              }
              q++;
            }
          } else {
            long2 = long2 - child_1.scrollHeight;
            $(child_1).detach();
            removed_1.unshift($(child_1));
          }
          break;
        case "block02":
          arr_block_child = $("#block02")
            .find("#experience-table")
            .children()
            .toArray();
          block_child_length = arr_block_child.length;
          arr_tmp = [];
          if (block_child_length > 1) {
            c_while = q = 0;
            while (long2 > h_page_1) {
              c_while += 1;
              child_block = arr_block_child.pop();
              long2 = long2 - child_block.scrollHeight;
              $(child_block).detach();
              arr_tmp.unshift(child_block);
              if (c_while == block_child_length) {
                if (long2 > h_page_1) {
                  $("#block02").find("#experience-table").append(arr_tmp);
                  $(child_1).detach();
                  removed_1.unshift($(child_1));
                  break;
                } else {
                  $("#block02").find("#experience-table").append(arr_tmp);
                  $(child_1).detach();
                  removed_1.unshift($(child_1));
                  break;
                }
              }
              if (c_while < block_child_length) {
                if (long2 < h_page_1) {
                  for (k = arr_tmp.length; k >= 0; k--) {
                    removed_1.unshift(arr_tmp[k]);
                  }
                }
              }
              q++;
            }
          } else {
            long2 = long2 - child_1.scrollHeight;
            $(child_1).detach();
            removed_1.unshift($(child_1));
          }
          break;
        case "block03":
          arr_block_child = $("#block03")
            .find("#experience-table")
            .children()
            .toArray();
          block_child_length = arr_block_child.length;
          arr_tmp = [];
          if (block_child_length > 1) {
            c_while = 0;
            while (long2 > h_page_1) {
              c_while += 1;
              child_block = arr_block_child.pop();
              long2 = long2 - child_block.scrollHeight;
              $(child_block).detach();
              arr_tmp.unshift(child_block);
              if (c_while == block_child_length) {
                if (long2 > h_page_1) {
                  $(child_1).find("#experience-table").append(arr_tmp);
                  $(child_1).detach();
                  removed_1.unshift($(child_1));
                  break;
                } else {
                  $(child_1).find("#experience-table").append(arr_tmp);
                  $(child_1).detach();
                  removed_1.unshift($(child_1));
                  break;
                }
              }
              if (c_while < block_child_length) {
                if (c_while < block_child_length) {
                  if (long2 < h_page_1) {
                    for (k = arr_tmp.length; k >= 0; k--) {
                      removed_1.unshift(arr_tmp[k]);
                    }
                  }
                }
              }
            }
          } else {
            long2 = long2 - child_1.scrollHeight;
            $(child_1).detach();
            removed_1.unshift($(child_1));
          }
          break;
        case "block04":
          arr_block_child = $("#block04")
            .find("#experience-table")
            .children()
            .toArray();
          block_child_length = arr_block_child.length;
          arr_tmp = [];
          if (block_child_length > 1) {
            c_while = q = 0;
            while (long2 > h_page_1) {
              c_while += 1;
              child_block = arr_block_child.pop();
              long2 = long2 - child_block.scrollHeight;
              $(child_block).detach();
              arr_tmp.unshift(child_block);
              if (c_while == block_child_length) {
                if (long2 > h_page_1) {
                  $("#block04").find("#experience-table").append(arr_tmp);
                  $(child_1).detach();
                  removed_1.unshift($(child_1));
                  break;
                } else {
                  $("#block04").find("#experience-table").append(arr_tmp);
                  $(child_1).detach();
                  removed_1.unshift($(child_1));
                  break;
                }
              }
              if (c_while < block_child_length) {
                if (long2 < h_page_1) {
                  for (k = arr_tmp.length; k >= 0; k--) {
                    removed_1.unshift(arr_tmp[k]);
                  }
                }
              }
              q++;
            }
          } else {
            long2 = long2 - child_1.scrollHeight;
            $(child_1).detach();
            removed_1.unshift($(child_1));
          }
          break;
        case "block05":
          arr_block_child = $("#block05")
            .find("#experience-table")
            .children()
            .toArray();
          block_child_length = arr_block_child.length;
          arr_tmp = [];
          if (block_child_length > 1) {
            c_while = 0;
            while (long2 > h_page_1) {
              c_while += 1;
              child_block = arr_block_child.pop();
              long2 = long2 - child_block.scrollHeight;
              $(child_block).detach();
              arr_tmp.unshift(child_block);
              if (c_while == block_child_length) {
                if (long2 > h_page_1) {
                  $(child_1).find("#experience-table").append(arr_tmp);
                  $(child_1).detach();
                  removed_1.unshift($(child_1));
                  break;
                } else {
                  $(child_1).find("#experience-table").append(arr_tmp);
                  $(child_1).detach();
                  removed_1.unshift($(child_1));
                  break;
                }
              }
              if (c_while < block_child_length) {
                if (long2 < h_page_1) {
                  for (k = arr_tmp.length; k >= 0; k--) {
                    removed_1.unshift(arr_tmp[k]);
                  }
                }
              }
            }
          } else {
            long2 = long2 - child_1.scrollHeight;
            $(child_1).detach();
            removed_1.unshift($(child_1));
          }
          break;
        default:
          long2 = long2 - child_1.scrollHeight;
          $(child_1).detach();
          removed_1.unshift($(child_1));
          break;
      }
    }
  } else {
    //check trang 2+ khá»‘i box (bĂªn trĂ¡i)
    while (long > h_page && children_0.length > 0) {
      var child_0 = children_0.pop();
      var tmp_id = child_0.id;
      switch (tmp_id) {
        case "block01":
          arr_block_child = $("#block01")
            .find("#experience-table")
            .children()
            .toArray();
          block_child_length = arr_block_child.length;
          arr_tmp = [];
          if (block_child_length > 1) {
            c_while = q = 0;
            while (long > h_page) {
              c_while += 1;
              child_block = arr_block_child.pop();
              long = long - child_block.scrollHeight;
              $(child_block).detach();
              arr_tmp.unshift(child_block);
              if (c_while == block_child_length) {
                if (long > h_page) {
                  $("#block01").find("#experience-table").append(arr_tmp);
                  $(child_0).detach();
                  removed_0.unshift($(child_0));
                  break;
                } else {
                  $("#block01").find("#experience-table").append(arr_tmp);
                  $(child_0).detach();
                  removed_0.unshift($(child_0));
                  break;
                }
              }
              if (c_while < block_child_length) {
                if (long < h_page) {
                  for (k = arr_tmp.length; k >= 0; k--) {
                    removed_0.unshift(arr_tmp[k]);
                  }
                }
              }
              q++;
            }
          } else {
            long = long - child_0.scrollHeight;
            $(child_0).detach();
            removed_0.unshift($(child_0));
          }
          break;
        case "block02":
          arr_block_child = $("#block02")
            .find("#experience-table")
            .children()
            .toArray();
          block_child_length = arr_block_child.length;
          arr_tmp = [];
          if (block_child_length > 1) {
            c_while = q = 0;
            while (long > h_page) {
              c_while += 1;
              child_block = arr_block_child.pop();
              long = long - child_block.scrollHeight;
              $(child_block).detach();
              arr_tmp.unshift(child_block);
              if (c_while == block_child_length) {
                if (long > h_page) {
                  $("#block02").find("#experience-table").append(arr_tmp);
                  $(child_0).detach();
                  removed_0.unshift($(child_0));
                  break;
                } else {
                  $("#block02").find("#experience-table").append(arr_tmp);
                  $(child_0).detach();
                  removed_0.unshift($(child_0));
                  break;
                }
              }
              if (c_while < block_child_length) {
                if (long < h_page) {
                  for (k = arr_tmp.length; k >= 0; k--) {
                    removed_0.unshift(arr_tmp[k]);
                  }
                }
              }
              q++;
            }
          } else {
            long = long - child_0.scrollHeight;
            $(child_0).detach();
            removed_0.unshift($(child_0));
          }
          break;
        case "block03":
          arr_block_child = $("#block03")
            .find("#experience-table")
            .children()
            .toArray();
          block_child_length = arr_block_child.length;
          arr_tmp = [];
          if (block_child_length > 1) {
            c_while = 0;
            while (long > h_page) {
              c_while += 1;
              child_block = arr_block_child.pop();
              long = long - child_block.scrollHeight;
              $(child_block).detach();
              arr_tmp.unshift(child_block);
              if (c_while == block_child_length) {
                if (long > h_page) {
                  $(child_0).find("#experience-table").append(arr_tmp);
                  $(child_0).detach();
                  removed_0.unshift($(child_0));
                  break;
                } else {
                  $(child_0).find("#experience-table").append(arr_tmp);
                  $(child_0).detach();
                  removed_0.unshift($(child_0));
                  break;
                }
              }
              if (c_while < block_child_length) {
                if (long < h_page) {
                  for (k = arr_tmp.length; k >= 0; k--) {
                    removed_0.unshift(arr_tmp[k]);
                  }
                }
              }
            }
          } else {
            long = long - child_0.scrollHeight;
            $(child_0).detach();
            removed_0.unshift($(child_0));
          }
          break;
        case "block04":
          arr_block_child = $("#block04")
            .find("#experience-table")
            .children()
            .toArray();
          block_child_length = arr_block_child.length;
          arr_tmp = [];
          if (block_child_length > 1) {
            c_while = q = 0;
            while (long > h_page) {
              c_while += 1;
              child_block = arr_block_child.pop();
              long = long - child_block.scrollHeight;
              $(child_block).detach();
              arr_tmp.unshift(child_block);
              if (c_while == block_child_length) {
                if (long > h_page) {
                  $("#block04").find("#experience-table").append(arr_tmp);
                  $(child_0).detach();
                  removed_0.unshift($(child_0));
                  break;
                } else {
                  $(child_0).find("#experience-table").append(arr_tmp);
                  $(child_0).detach();
                  removed_0.unshift($(child_0));
                  break;
                }
              }
              if (c_while < block_child_length) {
                if (long < h_page) {
                  for (k = arr_tmp.length; k >= 0; k--) {
                    removed_0.unshift(arr_tmp[k]);
                  }
                }
              }
              q++;
            }
          } else {
            long = long - child_0.scrollHeight;
            $(child_0).detach();
            removed_0.unshift($(child_0));
          }
          break;
        case "block05":
          arr_block_child = $("#block05")
            .find("#experience-table")
            .children()
            .toArray();
          block_child_length = arr_block_child.length;
          arr_tmp = [];
          if (block_child_length > 1) {
            c_while = 0;
            while (long > h_page) {
              c_while += 1;
              child_block = arr_block_child.pop();
              long = long - child_block.scrollHeight;
              $(child_block).detach();
              arr_tmp.unshift(child_block);
              if (c_while == block_child_length) {
                if (long > h_page) {
                  $(child_0).find("#experience-table").append(arr_tmp);
                  $(child_0).detach();
                  removed_0.unshift($(child_0));
                  break;
                } else {
                  $(child_0).find("#experience-table").append(arr_tmp);
                  $(child_0).detach();
                  removed_0.unshift($(child_0));
                  break;
                }
              }
              if (c_while < block_child_length) {
                if (long < h_page) {
                  for (k = arr_tmp.length; k >= 0; k--) {
                    removed_0.unshift(arr_tmp[k]);
                  }
                }
              }
            }
          } else {
            long = long - child_0.scrollHeight;
            $(child_0).detach();
            removed_0.unshift($(child_0));
          }
          break;
        default:
          long = long - child_0.scrollHeight;
          $(child_0).detach();
          removed_0.unshift($(child_0));
          break;
      }
    }
    //check trang 2+ khá»‘i block (bĂªn pháº£i)
    while (long2 > h_page && children_1.length > 0) {
      var child_1 = children_1.pop();
      var tmp_id = child_1.id;
      switch (tmp_id) {
        case "block01":
          arr_block_child = $("#block01")
            .find("#experience-table")
            .children()
            .toArray();
          block_child_length = arr_block_child.length;
          arr_tmp = [];
          if (block_child_length > 1) {
            c_while = q = 0;
            while (long2 > h_page_1) {
              c_while += 1;
              child_block = arr_block_child.pop();
              long2 = long2 - child_block.scrollHeight;
              $(child_block).detach();
              arr_tmp.unshift(child_block);
              if (c_while == block_child_length) {
                if (long2 > h_page_1) {
                  $("#block02").find("#experience-table").append(arr_tmp);
                  $(child_1).detach();
                  removed_1.unshift($(child_1));
                  break;
                } else {
                  $("#block02").find("#experience-table").append(arr_tmp);
                  $(child_1).detach();
                  removed_1.unshift($(child_1));
                  break;
                }
              }
              if (c_while < block_child_length) {
                if (long2 < h_page_1) {
                  for (k = arr_tmp.length; k >= 0; k--) {
                    removed_1.unshift(arr_tmp[k]);
                  }
                }
              }
              q++;
            }
          } else {
            long2 = long2 - child_1.scrollHeight;
            $(child_1).detach();
            removed_1.unshift($(child_1));
          }
          break;
        case "block02":
          arr_block_child = $("#block02")
            .find("#experience-table")
            .children()
            .toArray();
          block_child_length = arr_block_child.length;
          arr_tmp = [];
          if (block_child_length > 1) {
            c_while = q = 0;
            while (long2 > h_page) {
              c_while += 1;
              child_block = arr_block_child.pop();
              long2 = long2 - child_block.scrollHeight;
              $(child_block).detach();
              arr_tmp.unshift(child_block);
              if (c_while == block_child_length) {
                if (long2 > h_page) {
                  $("#block02").find("#experience-table").append(arr_tmp);
                  $(child_1).detach();
                  removed_1.unshift($(child_1));
                  break;
                } else {
                  $("#block02").find("#experience-table").append(arr_tmp);
                  $(child_1).detach();
                  removed_1.unshift($(child_1));
                  break;
                }
              }
              if (c_while < block_child_length) {
                if (long2 < h_page) {
                  for (k = arr_tmp.length; k >= 0; k--) {
                    removed_1.unshift(arr_tmp[k]);
                  }
                }
              }
              q++;
            }
          } else {
            long2 = long2 - child_1.scrollHeight;
            $(child_1).detach();
            removed_1.unshift($(child_1));
          }
          break;
        case "block03":
          arr_block_child = $("#block03")
            .find("#experience-table")
            .children()
            .toArray();
          block_child_length = arr_block_child.length;
          arr_tmp = [];
          if (block_child_length > 1) {
            c_while = 0;
            while (long2 > h_page) {
              c_while += 1;
              child_block = arr_block_child.pop();
              long2 = long2 - child_block.scrollHeight;
              $(child_block).detach();
              arr_tmp.unshift(child_block);
              if (c_while == block_child_length) {
                if (long2 > h_page) {
                  $(child_1).find("#experience-table").append(arr_tmp);
                  $(child_1).detach();
                  removed_1.unshift($(child_1));
                  break;
                } else {
                  $(child_1).find("#experience-table").append(arr_tmp);
                  $(child_1).detach();
                  removed_1.unshift($(child_1));
                  break;
                }
              }
              if (c_while < block_child_length) {
                if (long2 < h_page) {
                  for (k = arr_tmp.length; k >= 0; k--) {
                    removed_1.unshift(arr_tmp[k]);
                  }
                }
              }
            }
          } else {
            long2 = long2 - child_1.scrollHeight;
            $(child_1).detach();
            removed_1.unshift($(child_1));
          }
          break;
        case "block04":
          arr_block_child = $("#block04")
            .find("#experience-table")
            .children()
            .toArray();
          block_child_length = arr_block_child.length;
          arr_tmp = [];
          if (block_child_length > 1) {
            c_while = q = 0;
            while (long2 > h_page) {
              c_while += 1;
              child_block = arr_block_child.pop();
              long2 = long2 - child_block.scrollHeight;
              $(child_block).detach();
              arr_tmp.unshift(child_block);
              if (c_while == block_child_length) {
                if (long2 > h_page) {
                  $("#block04").find("#experience-table").append(arr_tmp);
                  $(child_1).detach();
                  removed_1.unshift($(child_1));
                  console.log("hihi4");
                  break;
                } else {
                  $(child_1).find("#experience-table").append(arr_tmp);
                  $(child_1).detach();
                  removed_1.unshift($(child_1));
                  break;
                }
              }
              if (c_while < block_child_length) {
                if (long2 < h_page) {
                  for (k = arr_tmp.length; k >= 0; k--) {
                    removed_1.unshift(arr_tmp[k]);
                  }
                }
              }
              q++;
            }
          } else {
            long2 = long2 - child_1.scrollHeight;
            $(child_1).detach();
            removed_1.unshift($(child_1));
          }
          break;
        case "block05":
          arr_block_child = $("#block05")
            .find("#experience-table")
            .children()
            .toArray();
          block_child_length = arr_block_child.length;
          arr_tmp = [];
          if (block_child_length > 1) {
            c_while = 0;
            while (long2 > h_page) {
              c_while += 1;
              child_block = arr_block_child.pop();
              long2 = long2 - child_block.scrollHeight;
              $(child_block).detach();
              arr_tmp.unshift(child_block);
              if (c_while == block_child_length) {
                if (long2 > h_page) {
                  $(child_1).find("#experience-table").append(arr_tmp);
                  $(child_1).detach();
                  removed_1.unshift($(child_1));
                  break;
                } else {
                  $(child_1).find("#experience-table").append(arr_tmp);
                  $(child_1).detach();
                  removed_1.unshift($(child_1));
                  break;
                }
              }
              if (c_while < block_child_length) {
                if (long2 < h_page) {
                  for (k = arr_tmp.length; k >= 0; k--) {
                    removed_1.unshift(arr_tmp[k]);
                  }
                }
              }
            }
          } else {
            long2 = long2 - child_1.scrollHeight;
            $(child_1).detach();
            removed_1.unshift($(child_1));
          }
          break;
        default:
          long2 = long2 - child_1.scrollHeight;
          $(child_1).detach();
          removed_1.unshift($(child_1));
          break;
      }
    }
  }
  count_loop += 1;
  if (removed_0.length > 0 || removed_1.length > 0) {
    var a4 = $(
      '<div class="A4 A2"><div class="pages"><div class="page page-0"><div class="sortable"></div></div><div class="page page-1"><div class="sortable"></div></div></div></div>'
    );
    if (removed_0.length > 0)
      a4.children().children(".page-0").children().append(removed_0);
    if (removed_1.length > 0)
      a4.children().children(".page-1").children().append(removed_1);
    $(this).after(a4);
    snipMe.call(a4[0]);
  }
}

$(document).ready(function () {
  if ($(".menu-tool-bar").length > 0) {
    line_height = parseFloat($("#line_height").val());
    $(
      ".box-content, .exp-content, .exp-title, .exp-date, .exp-subtitle, .skill-name"
    ).css("line-height", "" + line_height);
    $(
      "#cv-profile-birthday, #cv-profile-sex, #cv-profile-phone, #cv-profile-email, #cv-profile-address"
    ).css("line-height", "" + line_height);
    font_size = parseFloat($("#font_size").val());
    $(
      ".box-content, .exp-content, .exp-title, .exp-date, .exp-subtitle, .skill-name"
    ).css("font-size", "" + font_size + "px");
    $(
      "#cv-profile-birthday, #cv-profile-sex, #cv-profile-phone, #cv-profile-email, #cv-profile-address"
    ).css("font-size", "" + font_size + "px");
    font_family = $("#font-selector").val();
    array_font = [
      "",
      "Roboto-Regular, sans-serif",
      "Arial-Narrow",
      "Times-New-Roman",
      "Open-Sans",
    ];
    $(
      "#cv-profile-fullname, #cv-profile-job, #cv-boxtitle, #cv-profile-birthday, #cv-profile-sex, #cv-profile-phone, #cv-profile-email, #cv-profile-address"
    ).css("font-family", array_font[font_family]);
    $(
      ".titlecv, .box-title, .skill-name, .box-content, .block-title, .exp-title, .exp-subtitle, .exp-content, .exp-date"
    ).css("font-family", array_font[font_family]);
  }
  $(".A4").each(function () {
    snipMe.call(this);
  });
  jQuery(window).scroll(function () {
    300 < jQuery(this).scrollTop()
      ? jQuery("#backtop").fadeIn(300)
      : jQuery("#backtop").fadeOut(300);
  }),
    jQuery($(".bg-image").css("width", $(this).width())),
    $(window).on("resize", function () {
      jQuery($(".bg-image").css("width", $(this).width()));
    }),
    jQuery(window).scroll(function () {
      350 < jQuery(this).scrollTop()
        ? jQuery("#search_cp").show()
        : jQuery("#search_cp").hide();
    }),
    jQuery(window).scroll(function () {
      400 < jQuery(this).scrollTop()
        ? jQuery(".ct-company .cp-head").addClass("fixed")
        : jQuery(".ct-company .cp-head").removeClass("fixed");
    }),
    jQuery(window).scroll(function () {
      500 < jQuery(this).scrollTop()
        ? (jQuery(".module.bar").addClass("fixed"),
          jQuery(".list-cago").addClass("fixed"))
        : (jQuery(".module.bar").removeClass("fixed"),
          jQuery(".list-cago").removeClass("fixed"));
    }),
    jQuery(window).scroll(function () {
      400 < jQuery(this).scrollTop()
        ? jQuery(".cv-left").addClass("scroll")
        : jQuery(".cv-left").removeClass("scroll");
    }),
    jQuery("#backtop").click(function () {
      return (
        $("html, body").animate(
          {
            scrollTop: 0,
          },
          800
        ),
        !1
      );
    }),
    jQuery("#box-ef .tit").click(function () {
      $("#ef-" + $(this).attr("data-href") + " .cnt").hasClass("open")
        ? ($("#ef-" + $(this).attr("data-href") + " .cnt").removeClass("open"),
          $("#ef-" + $(this).attr("data-href") + " .cnt").slideUp())
        : ($("#ef-" + $(this).attr("data-href") + " .cnt").addClass("open"),
          $("#ef-" + $(this).attr("data-href") + " .cnt").slideDown());
    }),
    $("#btn-shadow").click(function () {
      $("#btn-mb").removeClass("open"),
        $("#mn-mb > ul").slideUp(300),
        $("#btn-shadow").hide();
    }),
    jQuery("#btn-mb").click(function () {
      $(this).hasClass("open")
        ? ($(this).removeClass("open"),
          $("#btn-shadow").hide(),
          $("#mn-mb > ul").slideUp(300))
        : ($(this).addClass("open"),
          $("#btn-shadow").show(),
          $("#mn-mb > ul").slideDown(300));
    }),
    jQuery("#bt-share").click(function () {
      jQuery("#bt-share").hasClass("open")
        ? jQuery("#bt-share").removeClass("open")
        : jQuery("#bt-share").addClass("open");
    }),
    jQuery(".menu-user > li#fa").click(function () {
      $(this).hasClass("open")
        ? (jQuery("#fa").removeClass("open"),
          jQuery("#fa > a").removeClass("active"))
        : (jQuery("#fa").addClass("open"),
          jQuery("#fa > a").addClass("active"));
    }),
    jQuery(".box-ld #bt-share").click(function () {
      jQuery(this).hasClass("open")
        ? jQuery(this).removeClass("open")
        : jQuery(this).addClass("open");
    }),
    jQuery(".img-thumb a").click(function () {
      var e = $(this).attr("data-href");
      $("#src_img").attr("src", e), $("#src_img1").attr("src", e);
    }),
    $(".r2.hover").hover(
      function () {
        $(this).css("width", "430px");
      },
      function () {
        $(this).css("width", "130px");
      }
    ),
    $(".bx-add .hagtag li a").hover(function () {
      var e = $(this).attr("data-href");
      $(".hg").removeClass("open"), $("#" + e).addClass("open");
    });
  var e = 3;
  $("#add").click(function () {
    var t =
      '<div class="bx" id="form_' +
      ++e +
      '"><div class="bx-t"><strong>GiĂ¡o dá»¥c<i class="list-icon ico22"></i></strong><a href="javascript:void(0)" onclick="removeAdd(' +
      e +
      ')" title="delete"><i class="list-icon ico23"></i></a></div><div class="bx-b"><form accept="" method="post"><p><label>TĂªn tá»• chá»©c</label><input type="text" name="chucvu" value=""></p><p><label>LÄ©nh vá»±c nghiĂªn cá»©u</label><input type="text" name="tencty" value=""></p><p><label>TrĂ¬nh Ä‘á»™</label><input type="text" name="webcty" value=""></p><p><label>Loáº¡i hĂ¬nh giĂ¡o dá»¥c <span>(Äáº¡i há»c, Trung há»c, Trung há»c, KhĂ¡c)</span></label><input type="text" name="nghe" value=""></p><p><span class="r5"><label>Thá»i gian báº¯t Ä‘áº§u</label><input type="text" name="ten" value=""></span><span class="r5"><label>Thá»i gian káº¿t thĂºc</label><input type="text" name="ho" value=""></span><div class="clr"></div></p><p><label class="img-lab"><i class="list-icon ico25"></i>MiĂªu táº£</label><textarea name="mieuta" rows="10"></textarea></p><a href="" class="btn3">Cáº­p nháº­t</a><div class="clr"></div></form></div><a href="javascript:void(0)" onclick="boxClick(' +
      e +
      ')" id="btn-hidden"><i class="list-icon ico24"></i></a></div>';
    $("#list-add").append(t);
  });
}),
  $(document).ready(function () {
    var e = $(this);
    var linkcv = $("#boxlink").val();
  });

function ful() {
  alert("Alert this pages");
}

function hidemsg() {
  $(".v-modal").remove(),
    $(".el-message-box__wrapper").remove(),
    location.reload();
}

function hide() {
  $(".v-modal").remove(), $(".el-message-box__wrapper").remove();
}

// ----------------
$(function () {
  var console = window.console || { log: function () {} };
  var URL = window.URL || window.webkitURL;
  var $image = $("#image");
  var $download = $(".btn-save-image");
  var $dataX = $("#dataX");
  var $dataY = $("#dataY");
  var $dataHeight = $("#dataHeight");
  var $dataWidth = $("#dataWidth");
  var $dataRotate = $("#dataRotate");
  var $dataScaleX = $("#dataScaleX");
  var $dataScaleY = $("#dataScaleY");
  var dataTile = $("#dataTile").val();
  var baseW = $dataWidth.val();
  var baseH = $dataHeight.val();
  var options = {
    aspectRatio: 1 / dataTile,
    preview: ".img-edit-preview",
    dragMode: "move",
    crop: function (e) {
      $dataX.val(Math.round(e.detail.x));
      $dataY.val(Math.round(e.detail.y));
      $dataHeight.val(Math.round(e.detail.height));
      $dataWidth.val(Math.round(e.detail.width));
      $dataRotate.val(e.detail.rotate);
      $dataScaleX.val(e.detail.scaleX);
      $dataScaleY.val(e.detail.scaleY);
    },
  };
  var originalImageURL = $image.attr("src");
  var uploadedImageName = "avatar.jpg";
  var uploadedImageType = "image/jpeg";
  var uploadedImageURL;
  var is_delete = false;

  // Tooltip
  // $('[data-toggle="tooltip"]').tooltip();

  // Cropper
  $image
    .on({
      ready: function (e) {
        //console.log(e.type);
      },
      cropstart: function (e) {
        //console.log(e.type, e.detail.action);
      },
      cropmove: function (e) {
        //console.log(e.type, e.detail.action);
      },
      cropend: function (e) {
        //console.log(e.type, e.detail.action);
      },
      crop: function (e) {
        //console.log(e.type);
      },
      zoom: function (e) {
        //console.log(e.type, e.detail.ratio);
      },
    })
    .cropper(options);

  // Buttons
  if (!$.isFunction(document.createElement("canvas").getContext)) {
    $('button[data-method="getCroppedCanvas"]').prop("disabled", true);
    $("button.btn-save-image").prop("disabled", true);
  }

  if (
    typeof document.createElement("cropper").style.transition === "undefined"
  ) {
    $('button[data-method="rotate"]').prop("disabled", true);
    $('button[data-method="scale"]').prop("disabled", true);
  }

  // Download
  if (typeof $download[0].download === "undefined") {
    $download.addClass("disabled");
  }

  // Options
  $(".docs-toggles").on("change", "input", function () {
    var $this = $(this);
    var name = $this.attr("name");
    var type = $this.prop("type");
    var cropBoxData;
    var canvasData;

    if (!$image.data("cropper")) {
      return;
    }

    if (type === "checkbox") {
      options[name] = $this.prop("checked");
      cropBoxData = $image.cropper("getCropBoxData");
      canvasData = $image.cropper("getCanvasData");

      options.ready = function () {
        $image.cropper("setCropBoxData", cropBoxData);
        $image.cropper("setCanvasData", canvasData);
      };
    } else if (type === "radio") {
      options[name] = $this.val();
    }

    $image.cropper("destroy").cropper(options);
  });

  // Methods
  $(".docs-buttons").on("click", "[data-method]", function () {
    var $this = $(this);
    var data = $this.data();
    var cropper = $image.data("cropper");
    var cropped;
    var $target;
    var result;

    if ($this.prop("disabled") || $this.hasClass("disabled")) {
      return;
    }

    if (cropper && data.method) {
      data = $.extend({}, data); // Clone a new one

      if (typeof data.target !== "undefined") {
        $target = $(data.target);

        if (typeof data.option === "undefined") {
          try {
            data.option = JSON.parse($target.val());
          } catch (e) {
            console.log(e.message);
          }
        }
      }

      cropped = cropper.cropped;

      switch (data.method) {
        case "rotate":
          if (cropped && options.viewMode > 0) {
            $image.cropper("clear");
          }

          break;

        case "getCroppedCanvas":
          if (uploadedImageType === "image/jpeg") {
            if (!data.option) {
              data.option = {};
            }

            data.option.fillColor = "#fff";
          }

          break;
      }

      result = $image.cropper(data.method, data.option, data.secondOption);

      switch (data.method) {
        case "rotate":
          if (cropped && options.viewMode > 0) {
            $image.cropper("crop");
          }

          break;

        case "scaleX":
        case "scaleY":
          $(this).data("option", -data.option);
          break;

        case "getCroppedCanvas":
          if (result) {
            // Bootstrap's Modal
            $("#getCroppedCanvasModal")
              .modal()
              .find(".modal-body")
              .html(result);

            if (!$download.hasClass("disabled")) {
              download.download = uploadedImageName;
              $download.attr("href", result.toDataURL(uploadedImageType));
            }
          }

          break;

        case "destroy":
          if (uploadedImageURL) {
            URL.revokeObjectURL(uploadedImageURL);
            uploadedImageURL = "";
            $image.attr("src", originalImageURL);
          }

          break;
      }

      if ($.isPlainObject(result) && $target) {
        try {
          $target.val(JSON.stringify(result));
        } catch (e) {
          console.log(e.message);
        }
      }
    }
  });

  // Import image
  var $inputImage = $("#inputImage");

  if (URL) {
    $inputImage.change(function () {
      is_delete = false;
      var files = this.files;
      var file;
      if (!$image.data("cropper")) {
        return;
      }

      if (files && files.length) {
        file = files[0];

        if (/^image\/\w+$/.test(file.type)) {
          if (file.size < 5 * 1024 * 1024) {
            uploadedImageName = file.name;
            uploadedImageType = file.type;

            if (uploadedImageURL) {
              URL.revokeObjectURL(uploadedImageURL);
            }

            uploadedImageURL = URL.createObjectURL(file);
            $image
              .cropper("destroy")
              .attr("src", uploadedImageURL)
              .cropper(options);
            $inputImage.val("");
            //Add them
            $(".imageEditor").show();
            $(".editorChooseImage").hide();
            $(".image-controls").show();
            $(".edit-image-btns").show();
            $(".tipCompress").hide();
            $download.removeClass("disabled");
          } else {
            window.alert(
              "Vui lĂ²ng chá»n áº£nh cĂ³ kĂ­ch thÆ°á»›c nhá» hÆ¡n 5MB."
            );
            $download.addClass("disabled");
          }
        } else {
          window.alert("Vui lĂ²ng chá»n file áº£nh (.png, .gif, .jpeg, .jpg).");
          $download.addClass("disabled");
        }
      }
    });
  } else {
    $inputImage.prop("disabled", true).parent().addClass("disabled");
    $download.addClass("disabled");
  }

  // change image
  var $inputImage = $("#inputImage1");

  if (URL) {
    $inputImage.change(function () {
      is_delete = false;
      var files = this.files;
      var file;
      if (!$image.data("cropper")) {
        return;
      }

      if (files && files.length) {
        file = files[0];

        if (/^image\/\w+$/.test(file.type)) {
          if (file.size < 5 * 1024 * 1024) {
            uploadedImageName = file.name;
            uploadedImageType = file.type;

            if (uploadedImageURL) {
              URL.revokeObjectURL(uploadedImageURL);
            }

            uploadedImageURL = URL.createObjectURL(file);
            $image
              .cropper("destroy")
              .attr("src", uploadedImageURL)
              .cropper(options);
            $inputImage.val("");
            //Add them
            $(".imageEditor").show();
            $(".editorChooseImage").hide();
            $(".image-controls").show();
            $(".edit-image-btns").show();
            $(".tipCompress").hide();
            $download.removeClass("disabled");
          } else {
            window.alert(
              "Vui lĂ²ng chá»n áº£nh cĂ³ kĂ­ch thÆ°á»›c nhá» hÆ¡n 5MB"
            );
            $download.addClass("disabled");
          }
        } else {
          window.alert("Vui lĂ²ng chá»n file áº£nh (.png, .gif, .jpeg, .jpg).");
          $download.addClass("disabled");
        }
      }
    });
  } else {
    $inputImage.prop("disabled", true).parent().addClass("disabled");
    $download.addClass("disabled");
  }

  $(".btn-remove-image").click(function () {
    is_delete = true;
    $image.cropper("clear");
    $(".img-edit-preview").find("img").attr("src", "/images/no_avatar.jpg");
    $(".img-edit-preview").find("img").attr("style", "");
    $("#image").attr("src", "/images/no_avatar.jpg");
    $(".imageEditor").hide();
    $(".editorChooseImage").show();
  });
  $(".btn-rotate-right").click(function () {
    $image.cropper("rotate", 90);
  });
  $(".btn-rotate-left").click(function () {
    $image.cropper("rotate", -90);
  });
  $(".btn-zoom-in-image").click(function () {
    $image.cropper("zoom", 0.2);
  });
  $(".btn-zoom-out-image").click(function () {
    $image.cropper("zoom", -0.2);
  });

  $(".btn-save-image").click(function () {
    if (is_delete == true) {
      $("#imageEditorWraper").hide();
      return;
    }
    if ($(this).hasClass("disabled")) {
    } else {
      var dataX = $dataX.val();
      var dataY = $dataY.val();
      var dataHeight = $dataHeight.val();
      var dataWidth = $dataWidth.val();
      var dataRotate = $dataRotate.val();
      var dataScaleX = $dataScaleX.val();
      var dataScaleY = $dataScaleY.val();
      var cropper = $image.data("cropper");
      var result = $image.cropper("getCroppedCanvas", {
        width: baseW,
        height: baseH,
        minWidth: 100,
        minHeight: 100,
        maxWidth: 4000,
        maxHeight: 4000,
        fillColor: "#fff",
        imageSmoothingEnabled: true,
        imageSmoothingQuality: "high",
      });
      var img = result.toDataURL(uploadedImageType);
      $.ajax("/upload_avatar_cv", {
        method: "POST",
        data: { img64: img },
        cache: false,
        success: function (img) {
          b = img.trim();
          $("#cvo-profile-avatar").attr("src", b);
          console.log("Upload success");
        },
        error: function () {
          console.log("Upload error");
        },
      });
      $("#imageEditorWraper").hide();
    }
  });
  $("#cvo-profile-avatar").click(function () {
    $image.cropper("destroy").cropper(options);
    $("#imageEditorWraper").show();
  });
  $(".btn-close-image-editor").click(function () {
    $("#imageEditorWraper").hide();
  });
  $(".click_hidden").click(function () {
    $("#cvo-profile-avatar").click();
  });
});

// ---------------
var PagingSeparator = {
  px2mmConversionRatio: 0.264583333,
  pageHeight: 277.54,
  pageContentHeight: 0,
  printOptions: null,
  documentHeight: 0,
  documentContentHeight: 0,
  totalPages: 0,
  pages: [],
  init: function (t) {
    return (
      (this.printOptions = t.printOptions),
      (this.pageContentHeight =
        this.pageHeight -
        this.printOptions.margins.top -
        this.printOptions.margins.bottom),
      this.update(),
      this
    );
  },
  px2mm: function (t) {
    return t * this.px2mmConversionRatio;
  },
  mm2px: function (t) {
    return t / this.px2mmConversionRatio;
  },
  isReady: function () {
    return null != this.printOptions;
  },
  update: function () {
    this.isReady(),
      (this.pages = []),
      (this.documentHeight = this.px2mm($("#form-cv").height())),
      (this.documentContentHeight =
        this.documentHeight -
        this.printOptions.margins.top -
        this.printOptions.margins.bottom),
      (this.totalPages = Math.ceil(
        this.documentContentHeight / this.pageContentHeight
      ));
    for (var t = 1; t < this.totalPages; t++) {
      var i;
      (i =
        1 == t
          ? this.pageContentHeight + this.printOptions.margins.top
          : this.pages[this.pages.length - 1] + this.pageContentHeight),
        this.pages.push(i);
    }
    return this;
  },
  render: function () {
    if (!this.isReady()) return this;
    for (
      this.update(), $("#form-cv .page_end").remove(), i = 0;
      i < this.pages.length;
      i++
    ) {
      var t = this.pages[i],
        n = i + 2,
        e = $("#page_end")
          .clone()
          .attr("id", "")
          .css("top", t + "mm");
      e
        .find(".paging-arrow")
        .text("Trang " + n)
        .attr("title", "Báº¯t Ä‘áº§u trang sá»‘ " + n)
        .hover(
          function () {
            $(this).parent().css("width", "100%");
          },
          function () {
            $(this).parent().css("width", "1px");
          }
        ),
        e.appendTo($("#form-cv")).show();
    }
    return this;
  },
};
