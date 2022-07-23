function validateUser($email) {
  var mailFormat =
    /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})|([0-9]{10})+$/;
  return mailFormat.test($email);
}

$.validator.addMethod("validatePassword", function (value, element) {
  return (
    this.optional(element) ||
    /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d@$!%*#?&]{6,}$/.test(value)
  );
});

function validateEmail(email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test(email);
}

$(".is_check_space").keypress(function (event) {
  var character = String.fromCharCode(event.keyCode);
  return !/\s/.test(character);
});

$(".is_check_first_space").on("input", function (event) {
  var value = $(this).val().trimStart();
  $(this).val(value);
});

$(".is_check_number").keypress(function (event) {
  var character = String.fromCharCode(event.keyCode);
  return /[0-9]/.test(character);
});

// Login ứng viên
if ($("#authe_uv").length > 0) {
  $("#authe_uv").validate({
    rules: {
      email: {
        required: true,
        email: validateEmail($(email).val()),
      },
      password: {
        required: true,
        validatePassword: true,
      },
    },
    messages: {
      email: {
        required: "Vui lòng nhập email",
        email: "Trường này phải là email",
      },
      password: {
        required: "Vui lòng nhập mật khẩu",
        validatePassword:
          "Nhập mật khẩu tối thiểu 6 ký tự bao gồm chữ hoa, chữ thường và ít nhất một chữ số",
      },
    },
    errorPlacement: function (error, element) {
      let parent = $(element).parents(".form_group");
      if (parent.length > 0) {
        $(parent).append(error);
      }
    },
  });
}

// đăng ký ứng viên
if ($("#register_uv").length > 0) {
  $("#register_uv").validate({
    rules: {
      fullname: {
        required: true,
      },
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        validatePassword: true,
      },
      confirm_password: {
        required: true,
        validatePassword: true,
        equalTo: "#password",
      },
    },
    messages: {
      email: {
        required: "Vui lòng nhập email",
        email: "Trường này phải là email",
      },
      fullname: {
        required: "Vui lòng nhập họ và tên",
      },
      password: {
        required: "Vui lòng nhập mật khẩu",
        validatePassword: `Nhập mật khẩu tối thiểu 6 ký tự bao gồm chữ hoa, chữ thường và ít nhất một chữ số`,
      },
      confirm_password: {
        required: "Vui lòng nhập xác nhận mật khẩu",
        validatePassword: `Nhập mật khẩu tối thiểu 6 ký tự bao gồm chữ hoa, chữ thường và ít nhất một chữ số`,
        equalTo: "Mật khẩu nhập lại chưa chính xác",
      },
    },
    errorPlacement: function (error, element) {
      let parent = $(element).parents(".form_group");
      if (parent.length > 0) {
        $(parent).append(error);
      }
    },
    submitHandler: function () {
      var email = $("#email").val();
      var password = $("#password").val();
      var fullname = $("#fullname").val();
      $(".btn_register").prop("disabled", true);
      $(".load_data").css("display", "flex");
      $.ajax({
        type: "POST",
        url: "../ajax/dangky_uv.php",
        data: {
          email: email,
          password: password,
          fullname: fullname,
        },
        success: function (data) {
          $(".load_data").css("display", "none");
          $(".btn_register").prop("disabled", false);
          if (data == 1) {
            $(".error_trungemail").text("Email này đã được đăng ký tài khoản");
          } else {
            alert("Tạo tài khoản ứng viên thành công!");
            location.href = "http://localhost:8825/";
          }
        },
      });
    },
  });
}

// login nhà tuyển dụng
if ($("#from_login_ntd").length > 0) {
  $("#from_login_ntd").validate({
    rules: {
      // email: {
      //   email: validateEmail($(email).val()),
      // },
      // password: {
      //   validatePassword: true,
      // },
    },
    messages: {
      // email: {
      //   email: "Trường này phải là email",
      // },
      // password: {
      //   validatePassword:
      //     "Nhập mật khẩu tối thiểu 6 ký tự bao gồm chữ hoa, chữ thường và ít nhất một chữ số",
      // },
    },
    errorPlacement: function (error, element) {
      let parent = $(element).parents(".form_group");
      if (parent.length > 0) {
        $(parent).append(error);
      }
    },
    submitHandler: function () {
      var account = $("#account").val();
      var password = $("#password").val();
      var type = 2;
      $.ajax({
        type: "POST",
        url: "../ajax/login.php",
        data: {
          account: account,
          password: password,
          type: type,
        },
        success: function (data) {
          console.log(data);
          if (data == 1) {
            $(".error_account").text(
              "Tài khoản hoặc mật khẩu không chính xác!"
            );
            $(".error_account").removeClass("hidden");
          } else {
            location.href = "http://localhost:8825/";
          }
        },
      });
    },
  });
}

// đăng ký nhà tuyển dụng
if ($("#from_resgiter_ntd").length > 0) {
  $("#from_resgiter_ntd").validate({
    rules: {
      fullname: "required",
      gender: "required",
      workplace: "required",
      company: "required",
      city: "required",
      district: "required",
      phone_number: {
        required: true,
        minlength: 10,
        maxlength: 15,
      },
      email: {
        required: true,
        email: validateEmail($(email).val()),
      },
      password: {
        required: true,
        validatePassword: true,
      },
      confirm_password: {
        required: true,
        equalTo: "#password",
      },
    },
    messages: {
      fullname: {
        required: "Vui lòng nhập họ và tên",
      },
      gender: {
        required: "Vui lòng chọn giới tính",
      },
      phone_number: {
        required: "Vui lòng nhập số điện thoại cá nhân",
        minlength: "Số điện thoại có tối thiểu 10 số và nhiều nhất là 15 số",
        maxlength: "Số điện thoại có tối thiểu 10 số và nhiều nhất là 15 số",
      },
      workplace: {
        required: "Vui lòng chọn vị trí công tác",
      },
      city: {
        required: "Vui lòng chọn tỉnh thành phố",
      },
      district: {
        required: "Vui lòng chọn quận huyện",
      },
      company: {
        required: "Vui lòng chọn tên công ty",
      },
      email: {
        required: "Vui lòng nhập email",
        email: "Trường này phải là email",
      },
      password: {
        required: "Vui lòng nhập mật khẩu",
        validatePassword:
          "Nhập mật khẩu tối thiểu 6 ký tự bao gồm chữ hoa, chữ thường và ít nhất một chữ số",
      },
      confirm_password: {
        required: "Vui lòng nhập xác nhận mật khẩu",
        equalTo: "Mật khẩu không trùng khớp",
      },
    },
    errorPlacement: function (error, element) {
      let parent = $(element).parents(".form_group");
      var elem = $(element);
      if (elem.hasClass("select2-hidden-accessible")) {
        element = $(element).parents(".custom_select").parent();
        $(element).append(error);
      } else {
        $(parent).append(error);
      }
    },
    submitHandler: function () {
      var email = $("#email").val();
      var password = $("#password").val();
      var fullname = $("#fullname").val();
      var phone_number = $("#phone_number").val();
      var gender = $("#gender").val();
      var company = $("#company").val();
      var workplace = $("#workplace").val();
      var city = $("#city").val();
      var district = $("#district").val();
      var skype = $("#skype").val();
      $(".btn_register").prop("disabled", true);
      $(".load_data").css("display", "flex");
      $.ajax({
        type: "POST",
        url: "../ajax/dangky_nth.php",
        data: {
          email: email,
          password: password,
          fullname: fullname,
          phone_number: phone_number,
          gender: gender,
          company: company,
          workplace: workplace,
          city: city,
          district: district,
          skype: skype,
        },
        success: function (data) {
          $(".load_data").css("display", "none");
          $(".btn_register").prop("disabled", false);
          if (data == 1) {
            $(".error_trungcty").text("Công ty này đã được đăng ký tài khoản");
          } else if (data == 2) {
            $(".error_trungemail").text("Email này đã được đăng ký tài khoản");
          } else if (data == 3) {
            $(".error_trungcty").text("Công ty này đã đăng ký tài khoản");
            $(".error_trungemail").text("Email này đã được đăng ký tài khoản");
          } else {
            alert("Tạo tài khoản nhà tuyển dụng thành công!");
            location.href = "http://localhost:8825/";
          }
        },
      });
    },
  });
}

// tạo tin tuyển dụng
if ($("#add_tuyen_dung").length > 0) {
  var error = false;

  $("#add_tuyen_dung").validate({
    rules: {
      title_recruit: "required",
      main_job: "required",
      professions: "required",
      sl_tuyen: "required",
      working_form: "required",
      gender: "required",
      job_description: "required",
    },
    messages: {
      title_recruit: "Vui lòng nhập tiêu đề tin tuyển dụng",
      main_job: "Vui lòng chọn ngành nghề chính",
      professions: "Vui lòng chọn ngành nghề phụ",
      sl_tuyen: "Vui lòng nhập số lượng cần tuyển",
      working_form: "Vui lòng chọn hình thức làm việc",
      gender: "Vui lòng chọn giới tính",
      job_description: "Vui lòng nhập mô tả công việc",
    },
    errorPlacement: function (error, element) {
      let parent = $(element).parent().parent();
      var elem = $(element);
      if (elem.hasClass("select2-hidden-accessible")) {
        element = $(element).parents(".custom_select").parent();
        $(element).append(error);
      } else {
        $(parent).append(error);
      }
    },
    submitHandler: function (form) {
      $(".is_error").each(function () {
        appendErorr(this);
      });

      if (error) return false;
      form.submit();
    },
  });

  function appendErorr(elem) {
    let value = $(elem).val().trim();
    let parent = $(elem).parent().parent();
    let value_ml = parseInt($(".ml_change").val());
    let ele = $(parent)[0].querySelector(".error");
    let label = document.createElement("label");
    label.className = "error";
    label.innerText = elem.dataset["erorr"];

    if ((value == "" || value == null) && value_ml == 1) {
      error = true;
      if (!ele) {
        $(parent).append(label);
      }
    } else {
      error = false;
      if ($(parent)[0].contains(ele)) {
        $(ele).remove();
      }
    }
    span = null;
    value = null;
    value_ml = null;
  }

  $(".is_error").blur(function () {
    appendErorr(this);
  });

  $(".is_error").on("input", function () {
    let parent = $(this).parent().parent();
    let ele = $(parent)[0].querySelector(".error");
    if ($(parent)[0].contains(ele)) {
      $(ele).remove();
    }
  });

  $(".ml_change").change(function () {
    let val = $(this).val();
    if (val == 1) {
      $(".ml_tk").removeClass("none_im");
    } else {
      $(".ml_tk").addClass("none_im");
    }
  });
}

$("select")
  .select2()
  .on("change", function (e) {
    $(this).valid();
  });
