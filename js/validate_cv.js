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
        elm.removeAttribute('title')
      }
    }
  }

  return objec;
}

validateCV.isRequire = function (message, title) {
  return {
    require: true,
    title,
    test(value) {
      return value.trim() ? undefined : message || "Vui lòng nhập trường này";
    },
  };
};

validateCV.isPhoneNumber = function (message, title) {
  return {
    phoneNumber: true,
    title,
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
    title,
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
    date: true,
    title,
    test(value) {
      var dateReg = /^[0-3]?[0-9]\/[01]?[0-9]\/[12][90][0-9][0-9]$/;
      return dateReg.test(value)
        ? undefined
        : message || "Trường này phải là số điện thoại";
    },
  };
};

validateCV.isYear = function (message, title) {
  return {
    year: true,
    title,
    test(value) {
      var fullDate = /^[0-3]?[0-9]\/[01]?[0-9]\/[12][90][0-9][0-9]$/;
      var yearReg = /^[0-9]{4}$/;
      console.log(yearReg.test(value)||fullDate.test(value))
      return (yearReg.test(value)||fullDate.test(value))
        ? undefined
        : message || "Trường này phải là số điện thoại";
    },
  };
};



// cv
let validate_cv = [
  {
    id: "#cv-profile-birthday",
    rules: [validateCV.isRequire("Ngày sinh", 'Ngày sinh không được để trống'), validateCV.isDate("Ngày sinh", 'Định dạng ngày sinh không hợp lệ')],
  },
  {
    id: "#cv-profile-phone",
    rules: [
      validateCV.isRequire("Số điện thoại", 'Số điện thoại không được để trống'),
      validateCV.isPhoneNumber("Số điện thoại", 'Định dạng số điện thoại không hợp lệ'),
    ],
  },
  {
    id: "#cv-profile-address",
    rules: [validateCV.isRequire("Địa chỉ", 'Địa chỉ không được để trống')],
  },
  {
    id: "#cv-profile-fullname",
    rules: [validateCV.isRequire("Họ và tên", 'Họ tên không được để trống')],
  },
  {
    id: "#cv-profile-job",
    rules: [validateCV.isRequire("Công việc muốn ứng tuyển", 'Công việc muốn ứng tuyển không được để trống')],
  },
  {
    id: "#cv-profile-email",
    rules: [validateCV.isRequire("Email", 'Email không được để trống'), validateCV.isEmail("Email", 'Email không đúng định dạng')],
  },
];

let validate_dxv = [
  {
    id: "#lto-name",
    rules: [validateCV.isRequire("Họ tên", 'Họ tên không được để trống')],
  },
  {
    id: "#lto-address",
    rules: [
      validateCV.isRequire("Địa chỉ", 'Địa chỉ không được để trống')
    ],
  },
  {
    id: "#lto-user-to",
    rules: [validateCV.isRequire("Tên người nhận", 'Tên người nhận không được để trống')],
  },
  {
    id: "#lto-birthday",
    rules: [
      validateCV.isRequire("Ngày sinh", 'Ngày sinh không được để trống'),
      validateCV.isYear("Năm sinh", 'Năm sinh đúng định dạng')
    ],
  }
];

let validate_txv = [
  {
    id: "#lto-name",
    rules: [validateCV.isRequire("Họ tên", 'Họ tên không được để trống')],
  },
  {
    id: "#lto-address",
    rules: [
      validateCV.isRequire("Địa chỉ", 'Địa chỉ không được để trống')
    ],
  },
  {
    id: "#lto-job",
    rules: [
      validateCV.isRequire("Nghề nghiệp", 'Nghề nghiệp không được để trống')
    ],
  },
  {
    id: "#lto-email",
    rules: [validateCV.isRequire("Email", 'Email không được để trống'), validateCV.isEmail("Email", 'Email không đúng định dạng')],
  },
  {
    id: "#lto-phone",
    rules: [
      validateCV.isRequire("Số điện thoại", 'Số điện thoại không được để trống'),
      validateCV.isPhoneNumber("Số điện thoại", 'Định dạng số điện thoại không hợp lệ'),
    ],
  }
];

// cv
if ($(".save_xv").length > 0) {
  $(".save_xv").click(function () {
    let require = [];
    let isValid = [];
    let isError = false;
    validate_cv.forEach((e) => {
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
      let { infor_menu, clearAmintions } = objectELemet;
      let dong_y = infor_menu.querySelector(".dong_y");
      let form = infor_menu.querySelector('.form_check');

      if (dong_y) {
        dong_y.onclick = () => {
          let input = form.querySelector('input');
          let val = (input.value).trim();
          let parent = $(input).parents('.form_group')

          if(val == '') {
            let text = ($(parent).find('span').text()).replaceAll('*','');
            let label = document.createElement('label');
            label.className = 'error';
            label.innerText = `${text} không được để trống`;
            $(parent).append(label);
            label=null;
          } else {
            let error = $(parent).find('.error');
            if(error.length > 0) error.remove();
            clearAmintions();
            viewAndClosePopupUpdate(
              "#popup_ss",
              ".main_popup",
              "",
              ".cancel",
              "",
              false
            );
          }
        };
      }
    }
  });
}

// đơn xin việc
if ($(".save_dxv").length > 0) {
  $(".save_dxv").click(function () {
    let require = [];
    let isValid = [];
    let isError = false;
    validate_dxv.forEach((e) => {
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
      let form = infor_menu.querySelector('.form_check');

      if (dong_y) {
        dong_y.onclick = () => {
          let input = form.querySelector('input');
          let val = (input.value).trim();
          let parent = $(input).parents('.form_group')

          if(val == '') {
            let text = ($(parent).find('span').text()).replaceAll('*','');
            let label = document.createElement('label');
            label.className = 'error';
            label.innerText = `${text} không được để trống`;
            $(parent).append(label);
            label=null;
          } else {
            let error = $(parent).find('.error');
            if(error.length > 0) error.remove();
            clearAmintions();
            viewAndClosePopupUpdate(
              "#popup_ss",
              ".main_popup",
              "",
              ".cancel",
              "",
              false
            );
          }
        };
      }
    }
  });
}

// đơn xin việc
if ($(".save_txv").length > 0) {
  $(".save_txv").click(function () {
    let require = [];
    let isValid = [];
    let isError = false;
    validate_txv.forEach((e) => {
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
      let form = infor_menu.querySelector('.form_check');

      if (dong_y) {
        dong_y.onclick = () => {
          let input = form.querySelector('input');
          let val = (input.value).trim();
          let parent = $(input).parents('.form_group')

          if(val == '') {
            let text = ($(parent).find('span').text()).replaceAll('*','');
            let label = document.createElement('label');
            label.className = 'error';
            label.innerText = `${text} không được để trống`;
            $(parent).append(label);
            label=null;
          } else {
            let error = $(parent).find('.error');
            if(error.length > 0) error.remove();
            clearAmintions();
            viewAndClosePopupUpdate(
              "#popup_ss",
              ".main_popup",
              "",
              ".cancel",
              "",
              false
            );
          }
        };
      }
    }
  });
}

