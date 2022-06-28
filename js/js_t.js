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

function viewAndClosePopup(idPopup, selectorChild) {
  // hienpopup(idPopup);
  showHiddenPopup(idPopup, "hidden");
  let infor_menu = document.querySelector(idPopup);
  if (infor_menu) {
    function hiddenOverlay(e) {
      // e.stopPropagation();
      let box_popup_infor_menu = document.querySelector(selectorChild);

      // lấy vị trí của thẻ
      let minY = box_popup_infor_menu.offsetTop;
      let minX = box_popup_infor_menu.offsetLeft;
      let maxY = parseInt(box_popup_infor_menu.clientHeight) + minY;
      let maxX = parseInt(box_popup_infor_menu.clientWidth) + minX;

      // vị trí con trỏ chuột
      let tro_x = e.x;
      let tro_y = e.y;

      if (!(tro_x >= minX && tro_x <= maxX && tro_y >= minY && tro_y <= maxY)) {
        infor_menu.classList.add("hidden");
      }
    }
    infor_menu.addEventListener("click", hiddenOverlay);
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

      span.innerText = "Copy thành công";
      element.appendChild(span);

      let stTimeOut = setTimeout(() => {
        span.style.transition = "all .4s ease";
        span.style.opacity = "0";
        span.style.overflow = "hidden";
      }, 2000);

      let removeSpan = setTimeout(() => {
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

function scrollHeader(classSildBar, classContent, classHeader) {
  function getStyleNumber(element, attri) {
    let text = window.getComputedStyle(element).getPropertyValue(attri);
    var number = text.match(/\d/g);
    number = number.join("");

    return parseInt(number);
  }

  let sliderBar = document.querySelector(classSildBar);
  let content = document.querySelector(classContent);
  let header = document.querySelector(classHeader);

  if (sliderBar && content && header) {
    let widthBody = document.body.clientWidth;
    let widthSliderBar = sliderBar.offsetWidth;
    // let widthContent = content.offsetWidth;
    let pdLeft = getStyleNumber(content, "padding-left");
    let pdRight = getStyleNumber(content, "padding-right");
    let topContent = getStyleNumber(content, "padding-top");
    let heightHeader = header.clientHeight;
    let NewPdTop = topContent + heightHeader;

    content.style.paddingTop = `${NewPdTop}px`;

    header.style.position = "fixed";
    header.style.zIndex = "99";
    header.style.right = `${pdRight}px`;
    header.style.left = `${widthSliderBar + pdLeft}px`;
    header.style.top = `${topContent}px`;
    header.style.width = `${widthBody - widthSliderBar - pdLeft - pdRight}px`;

    function ScrollFixed() {
      let top = header.offsetTop;
      let maxTop = heightHeader + top;
      let y = window.pageYOffset;

      if (y > maxTop) {
        header.style.top = `0px`;
      } else {
        header.style.top = `${topContent}px`;
      }
    }

    window.addEventListener("scroll", ScrollFixed);
  }
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
