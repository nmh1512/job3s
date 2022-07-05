function showHiddenPopup(className, classHidden) {
  let element = document.querySelector(className);

  if (element) {
    element.classList.toggle(classHidden);
  }
}

function activeHeader(selector, classActive) {
  let element = document.querySelector(selector);

  if (element) {
    element.classList.add(classActive);
  }
}

function removeClass(selector, classActive) {
  let element = document.querySelector(selector);

  if (element) {
    element.classList.remove(classActive);
  }
}

function clickToggleClass(element, listSelectName, className) {
  let panrentElement = document.querySelector(listSelectName);

  if (element && panrentElement) {
    let children = panrentElement.children;

    for (let i = 0; i < children.length; i++) {
      if (children[i].classList.contains(className)) {
        children[i].classList.remove(className);
      }
    }
    element.classList.add(className);
  }
}

function activeChangeTable(
  element,
  classList,
  classNameAv,
  contentParent,
  contentView,
  classCTAC
) {
  function change(className, clView, acView) {
    if (className != "") {
      let elHeader = document.querySelector(className);

      if (elHeader) {
        let chidren = [...elHeader.children];

        if (chidren) {
          chidren.forEach((e) => {
            if (e.classList.contains(clView)) {
              e.classList.add(acView);
              e.style.display = "block";
            } else {
              if (e.classList.contains(acView)) {
                e.classList.remove(acView);
                e.style.display = "none";
              }
            }
          });
        }
      }
    }
  }
  if (element) {
    let panretClass = document.querySelector(classList);

    if (panretClass) {
      let chidrenEL = [...panretClass.children];

      chidrenEL.forEach((e) => {
        if (e.classList.contains(classNameAv)) {
          e.classList.remove(classNameAv);
        }
      });

      element.classList.add(classNameAv);
      change(contentParent, contentView, classCTAC);
    }
  }
}

function onScrollHeader(classHeader, classAdd, startClassPostion) {
  let header = document.querySelector(classHeader);
  let elemenStart = document.querySelector(startClassPostion);

  if (header && elemenStart) {
    window.onscroll = function () {
      let start = elemenStart.offsetTop;
      let y = window.scrollY;

      if (y >= start) {
        if (header.classList.contains(classAdd)) {
          header.classList.remove(classAdd);
        }
      } else {
        header.classList.add(classAdd);
      }
    };
  }
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

function getDatLocation(array) {
  let time;
  function getTime(elementTime) {
    if (!elementTime) {
      clearInterval(time);
    }
    let date = new Date();
    let hours = date.getHours();
    let minute = date.getMinutes();
    let seconds = date.getSeconds();
    let determined = "PM";

    if (hours >= 0 && hours <= 11) {
      determined = "AM";
    }

    let strhours = `0${hours}`.slice(-2);
    let strminute = `0${minute}`.slice(-2);
    let strseconds = `0${seconds}`.slice(-2);

    elementTime.innerText = `${strhours}:${strminute}:${strseconds} ${determined}`;
  }

  function getDate(elementDate) {
    let date = new Date();

    let day = date.getDay();
    let dateO = `0${date.getDate()}`.slice(-2);
    let month = `0${date.getMonth() + 1}`.slice(-2);
    let year = `${date.getFullYear()}`;

    if (day === 0) {
      day = "Chủ nhật";
    } else {
      day = `Thứ ${day + 1}`;
    }

    elementDate.innerText = `${day}, ${dateO}/${month}/${year}`;
  }

  function getLocation(element) {
    if (element) {
      fetch("http://ip-api.com/json/")
        .then((response) => response.json())
        .then((data) => {
          let { city, country } = data;
          element.innerText = `${city}, ${country}`;
        });
    }
  }

  array.forEach((item) => {
    if (item.condition == "time") {
      let timePush = document.querySelector(item.className);
      time = setInterval(() => getTime(timePush));
    } else if (item.condition == "date") {
      let datePush = document.querySelector(item.className);

      getDate(datePush);
    } else if (item.condition == "location") {
      let loctionPush = document.querySelector(item.className);
      getLocation(loctionPush);
    }
  });
}

function randomString(classElement, elementPush, maxLength) {
  let elementClick = document.querySelector(classElement);
  let elementPushs = document.querySelector(elementPush);

  if (elementClick && elementPushs && maxLength) {
    let deg = 0;
    elementClick.onclick = function () {
      if (deg == 360) {
        elementClick.style.removeProperty("transition");
        deg = 0;
      } else {
        deg = 360;
      }
      elementClick.style.transform = `rotate(${deg}deg)`;

      let stringRand =
        "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
      let indexRand = "";
      for (let i = 0; i < maxLength; i++) {
        let index = Math.floor(Math.random() * stringRand.length);
        indexRand += stringRand[index];
      }
      elementPushs.innerText = indexRand;
    };
  }
}

function linkSelector(selector) {
  let cate_375 = document.querySelector(selector);
  if (cate_375) {
    let selector = cate_375.querySelector("select");

    selector.onchange = function (event) {
      let href = event.target.value;

      if (href) {
        window.open(href, "_self");
      }
    };
  }
}

function handle_show_popup(arrays) {
  function singleContent(array) {
    let element = document.querySelector(array.className);
    if (element) {
      if (array.arr === "") {
        element.innerHTML = array.noidung;
      } else {
        element.setAttribute(array.arr, array.noidung);
      }
    }
  }
  if (Array.isArray(arrays)) {
    if (arrays.length > 1) {
      for (let i = 0; i < arrays.length; i++) {
        singleContent(arrays[i]);
      }
    } else {
      singleContent(arrays[0]);
    }
  }
}
// job 3s

// ẩn hiện type password
function eyeChange(selector, selectorInput, classEye) {
  let btn = document.querySelector(selector);
  let input = document.querySelector(selectorInput);
  if (btn && input) {
    let isClick = false;
    btn.onclick = () => {
      if (!isClick) {
        input.type = "text";
        isClick = true;
        btn.classList.add(classEye);
      } else {
        input.type = "password";
        isClick = false;
        btn.classList.remove(classEye);
      }
    };
  }
}

function validateEmail(email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test(email);
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
  resertForm
) {
  viewPopup(idPopup, "hidden");
  let infor_menu = document.querySelector(idPopup);
  let box_popup_infor_menu = infor_menu.querySelector(selectorChild);
  let elmClose = infor_menu.querySelector(close_popup);
  let cancel = infor_menu.querySelector(selectCancel);
  let elementForm = infor_menu.querySelector(resertForm);

  if (infor_menu) {
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
    infor_menu.addEventListener("click", hiddenOverlay);
  }

  return {
    infor_menu,
    box_popup_infor_menu,
    elmClose,
    cancel,
  };
}

function DropFiles(elementFiles, callBack = () => {}) {
  if (elementFiles) {
    elementFiles.ondrop = function (e) {
      e.preventDefault();
      elementFiles.classList.remove('move_file');
      let files = e.dataTransfer.files[0];
      callBack(files);
    };

    elementFiles.ondragover = function (e) {
      e.preventDefault();
      elementFiles.classList.add('move_file');
    };

    elementFiles.ondragleave = function (e) {
      e.preventDefault();
      elementFiles.classList.remove('move_file');
    };
  }
}

function ChangeFiles(inputFile, selectorAppend, seletClose, dropFiles) {
  let files_input = document.querySelectorAll(inputFile);
  let { selecter, isTypeFileVaild, isMaxSize, isDropFile, customMessType, customMessSize,appendError ,isAppenError, classErorr} = dropFiles;
  let isError = false;
  let placeholder;
  if (files_input) {
    function handelFiles(elemeApp, close, files) {
      if (elemeApp) {
        if (files) {
          let elemError = null;
          let parentE =  document.querySelector(appendError);
          let errorE = parentE.querySelector(`.${classErorr}` || '.isvalid');

          if(isAppenError&&errorE==null) {
            elemError = document.createElement('span');
            elemError.className = classErorr || 'isvalid';
          } else {
            elemError = errorE;
          }
          if(isTypeFileVaild) {
            let type = files.type;
            type = type.split('/')[1];

            if(!isTypeFileVaild.includes(type)) {
              isError = true;
              if(elemError)  elemError.innerText = typeof customMessType === 'function'? customMessType (files, isTypeFileVaild):'file không hợp lệ';
            } else {
              isError = false;
            }
          }

          if(!isError&&isMaxSize) {
            let size = files.size;
            if(size > isMaxSize) {
              isError = true;
              if(elemError)  elemError.innerText = typeof customMessSize === 'function'? customMessSize (files, isMaxSize):`file vượt qua giới hạn cho phép`;
            } else {
              isError = false;
            }
          }

          if(isError&&elemError) {
            if(errorE==null) parentE.appendChild(elemError);
            return;
          } else {
            if(errorE) {
              parentE.removeChild(elemError);
            }
          }
          placeholder = files.name;
          close.dataset.file = 0;
          close.classList.remove("d_none");
        } else {
          placeholder = elemeApp.dataset.placeholder || "Chưa có files nào";
          close.classList.add("d_none");
        }
        elemeApp.innerText = placeholder;
        close.onclick = () => {
          elemeApp.innerText =
            elemeApp.dataset.placeholder || "Chưa có files nào";
          close.classList.add("d_none");
          close.onclick = () => {};
        };
      }
    }

    Array.from(files_input).forEach((e) => {
      e.addEventListener('change',() => {
        let parent = e.parentElement;
        let elemeApp = parent.querySelector(selectorAppend);
        let close = parent.querySelector(seletClose);
        let files = e.files[0];

        handelFiles(elemeApp, close, files)
      });

      if (selecter&&isDropFile==true) {
        let elemeElem = document.querySelector(selecter);

        if (elemeElem) {
          let elemeApp =  elemeElem.querySelector(selectorAppend);
          let close = elemeElem.querySelector(seletClose);
          DropFiles(elemeElem, (files) => {
            handelFiles(elemeApp, close, files)
          });
        }
      }
    });
  }
}
