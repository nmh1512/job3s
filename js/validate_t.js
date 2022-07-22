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
  });
}

// login nhà tuyển dụng
if ($("#from_login_ntd").length > 0) {
  $("#from_login_ntd").validate({
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
        validatePassword: true,
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
        validatePassword: `Nhập mật khẩu tối thiểu 6 ký tự bao gồm chữ hoa, chữ thường và ít nhất một chữ số`,
        equalTo: "Mật khẩu nhập lại chưa chính xác",
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
  });
}

// tạo tin tuyển dụng
if ($("#add_tuyen_dung").length > 0) {
  var error = false;

  $("#add_tuyen_dung").validate({
    // rules: {
    //   title_recruit: "required",
    //   main_job: "required",
    //   professions: "required",
    //   sl_tuyen: "required",
    //   working_form: "required",
    //   gender: "required",
    //   job_description: "required",
    // },
    // messages: {
    //   title_recruit: "Vui lòng nhập tiêu đề tin tuyển dụng",
    //   main_job: "Vui lòng chọn ngành nghề chính",
    //   professions: "Vui lòng chọn ngành nghề phụ",
    //   sl_tuyen: "Vui lòng nhập số lượng cần tuyển",
    //   working_form: "Vui lòng chọn hình thức làm việc",
    //   gender: "Vui lòng chọn giới tính",
    //   job_description: "Vui lòng nhập mô tả công việc",
    // },
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
      })

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
    appendErorr(this)
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
