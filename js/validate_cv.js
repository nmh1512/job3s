function validateCV(selector, rules, objec) {
  let elm = document.querySelector(selector);

  if (elm) {
    if (rules.length > 0) {
      let error = false;
      let title = '';
      let value = elm.innerText;
      rules.forEach((element) => {
        if (error) return;
        error = element.test(value);
        if (error) {
          title = element.title;
          objec.isErorr = Object.keys(element)[0];
          objec.error = error;
          return;
        }
      });

      if (error) {
        elm.classList.add("is_valid");
        if(title) elm.setAttribute('title', title);
      } else {
        elm.classList.remove("is_valid");
        if(title) elm.setAttribute('title', title);
      }
    }
  }

  return objec;
}

validateCV.isRequire = function (message, title) {
  return {
    require: true,
    test(value) {
      return value.trim() ? undefined : message || "Vui lòng nhập trường này";
    },
  };
};

validateCV.isPhoneNumber = function (message, title) {
  return {
    phoneNumber: true,
    test(value) {
      var regex = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
      return regex.test(value)
        ? undefined
        : message || "Trường này phải là số điện thoại";
    },
  };
};

validateCV.isEmail = function (message, title) {
  return {
    email: true,
    test(value) {
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      return emailReg.test(value)
        ? undefined
        : message || "Trường này phải là số điện thoại";
    },
  };
};

validateCV.isDate = function (message, title) {
  return {
    email: true,
    test(value) {
      var emailReg = /^[0-3]?[0-9]\/[01]?[0-9]\/[12][90][0-9][0-9]$/;
      return emailReg.test(value)
        ? undefined
        : message || "Trường này phải là số điện thoại";
    },
  };
};

// cv
let validate = [
  {
    id: "#cv-profile-birthday",
    rules: [validateCV.isRequire("Ngày sinh"), validateCV.isDate("Ngày sinh")],
  },
  {
    id: "#cv-profile-phone",
    rules: [
      validateCV.isRequire("Số điện thoại"),
      validateCV.isPhoneNumber("Số điện thoại"),
    ],
  },
  {
    id: "#cv-profile-address",
    rules: [validateCV.isRequire("Địa chỉ")],
  },
  {
    id: "#cv-profile-fullname",
    rules: [validateCV.isRequire("Họ và tên")],
  },
  {
    id: "#cv-profile-job",
    rules: [validateCV.isRequire("Công việc muốn ứng tuyển")],
  },
  {
    id: "#cv-profile-email",
    rules: [validateCV.isRequire("Email"), validateCV.isEmail("Email")],
  },
];

// cv
if ($(".save_xv").length > 0) {
  $(".save_xv").click(function () {
    let require = [];
    let isValid = [];
    let isError = false;
    validate.forEach((e) => {
      let error = validateCV(e.id, e.rules, {});
      let check = Object.keys(error).length;

      if (check > 0) {
        if (error.hasOwnProperty("isErorr") && error.hasOwnProperty("error")) {
          if (error.isErorr == "require") {
            require = [...require, error.error];
          } else {
            isValid = [...isValid, error.error];
          }
        }
      }
    });

    let pop = document.querySelector("#popup_error_cv");
    let elm = pop.querySelector(".list_erorr");
    if (require.length > 0) {
      elm.innerHTML = `<span>Bạn chưa điền đầy đủ các trường: <span class="cl_red font_w500">${require.join(
        ", "
      )}</span></span>`;
      isError = true;
    } else if (isValid.length > 0) {
      elm.innerHTML = `<span>Các trường trên không hợp lệ: <span class="cl_red font_w500">${isValid.join(
        ", "
      )}</span></span>`;
      isError = true;
    } else {
      isError = false;
    }

    if (isError) {
      viewAndClosePopupUpdate(
        "#popup_error_cv",
        ".main_popup",
        ".close_popup",
        ".cancel",
        ".form_check"
      );
    } else {
      let objectELemet = viewAndClosePopupUpdate(
        "#save_xv",
        ".main_popup",
        ".close_popup",
        ".cancel",
        ".form_check"
      );
      let { infor_menu, box_popup_infor_menu, clearAmintions } = objectELemet;
      let dong_y = infor_menu.querySelector(".dong_y");

      if (dong_y) {
        dong_y.onclick = () => {
          clearAmintions();
          viewAndClosePopupUpdate(
            "#popup_ss",
            ".main_popup",
            "",
            ".cancel",
            "",
            false
          );
        };
      }
    }
  });
}
