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

function Copyied(element, classCopyied) {
  let ElementCopy = document.querySelector(classCopyied);

  if (ElementCopy) {
    var r = document.createRange();
    r.selectNode(ElementCopy);
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(r);
    document.execCommand("copy");
    window.getSelection().removeAllRanges();

    ElementCopy.oncopy = function () {
      let child = [...element.children];
      child.forEach((e) => {
        if (e.classList.contains("message_copytied")) {
          e.remove();
          clearTimeout();
        }
      });
      let span = document.createElement("span");
      span.className = "message_copytied";

      span.innerText = "Copied";
      element.appendChild(span);

      let stTimeOut = setTimeout(() => {
        clearTimeout(stTimeOut);
        span.style.transition = "all .4s ease";
        span.style.opacity = "0";
        span.style.overflow = "hidden";
      }, 2000);

      let removeSpan = setTimeout(() => {
        clearTimeout(removeSpan);
        span.remove();
      }, 2500);
    };
  }
}
function viewPopup(selector) {
  let elm = document.querySelector(selector);

  if (elm) {
    elm.classList.remove("hidden");
  }
  return "";
}

function viewAndClosePopupUpdate(
  idPopup,
  selectorChild,
  close_popup,
  selectCancel,
  resertForm,
  isCloseMain = true,
  hiddenTime = false,
  timeHidden = 1000
) {
  viewPopup(idPopup, "hidden");
  let infor_menu = document.querySelector(idPopup);
  let box_popup_infor_menu = infor_menu.querySelector(selectorChild);
  let elmClose = close_popup && infor_menu.querySelector(close_popup);
  let cancel = selectCancel && infor_menu.querySelector(selectCancel);
  let elementForm = resertForm && infor_menu.querySelector(resertForm);

  if (typeof timeHidden != "number") timeHidden = 1000;

  if (infor_menu) {
    box_popup_infor_menu.classList.remove("hidden");
    if (elmClose) {
      elmClose.onclick = () => {
        clearAmintions();
        resertForm(elementForm);
      };
    }

    if (cancel) {
      cancel.onclick = () => {
        clearAmintions();
        resertForm(elementForm);
      };
    }

    if (hiddenTime) {
      let clearTime = setTimeout(() => {
        clearTimeout(clearTime);
        clearAmintions();
        resertForm(elementForm);
      }, timeHidden);
    }

    function hiddenOverlay(e) {
      // lấy vị trí của thẻ
      let minY = box_popup_infor_menu.offsetTop;
      let minX = box_popup_infor_menu.offsetLeft;
      let maxY = parseInt(box_popup_infor_menu.clientHeight) + minY;
      let maxX = parseInt(box_popup_infor_menu.clientWidth) + minX;

      // vị trí con trỏ chuột
      let tro_x = e.x;
      let tro_y = e.y;

      if (!(tro_x >= minX && tro_x <= maxX && tro_y >= minY && tro_y <= maxY)) {
        clearAmintions();
        resertForm(elementForm);

        return false;
      }
    }

    function clearAmintions() {
      infor_menu.removeEventListener("click", hiddenOverlay);
      box_popup_infor_menu.classList.add("animation_zoom_out");
      box_popup_infor_menu.addEventListener("animationend", clearAmintion);

      function clearAmintion() {
        box_popup_infor_menu.classList.remove("animation_zoom_out");
        infor_menu.classList.add("hidden");
        box_popup_infor_menu.classList.add("hidden");
        box_popup_infor_menu.removeEventListener("animationend", clearAmintion);
      }
    }

    function resertForm(element) {
      if (element) {
        element.reset();
        let fiels = element.querySelectorAll("select[name]");
        if (fiels) {
          fiels.forEach((e) => {
            $(e).val(null).trigger("change");
          });
        }
      }
    }
    if (isCloseMain) infor_menu.addEventListener("click", hiddenOverlay);
  }

  return {
    infor_menu,
    box_popup_infor_menu,
    elmClose,
    cancel,
    clearAmintions,
  };
}
