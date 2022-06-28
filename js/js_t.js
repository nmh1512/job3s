function hiddenHeader(className) {
  let element = document.querySelector(className);

  if (element) {
    element.classList.add("hidden");
  }
}

function showHiddenPopup(className, classHidden) {
  let element = document.querySelector(className);

  if (element) {
    element.classList.toggle(classHidden);
  }
}

function toogleLike(element, className) {
  if (element) {
    element.classList.toggle(className);
  }
}

function onInput(element, className, classActv) {
  if (element) {
    let value = element.value.trim();
    let el = document.querySelector(className);

    if (el) {
      if (value) {
        el.classList.remove(classActv);
      } else {
        el.classList.add(classActv);
      }
    }
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

function hoverItem(panrentElement, element, className) {
  let Elements = document.querySelectorAll(panrentElement);
  if (element && Elements) {
    element.classList.add(className);
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

function rmClassColor(
  element,
  listSelectName,
  className,
  defaultColor,
  changeColor,
  classNameHeaders = "",
  classHeaderView = "",
  acHeader = "",
  classContent = "",
  classContentView = ""
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
            } else {
              if (e.classList.contains(acView)) {
                e.classList.remove(acView);
              }
            }
          });
        }
      }
    }
  }

  let panrentElement = document.querySelector(listSelectName);

  if (element && panrentElement) {
    let children = panrentElement.children;

    // thay đổi phần header ẩn hiện header
    change(classNameHeaders, classHeaderView, acHeader);

    // thay đổi nội dung
    change(classContent, classContentView, acHeader);

    //
    for (let i = 0; i < children.length; i++) {
      if (children[i].classList.contains(className)) {
        let elColor = children[i].querySelectorAll("svg path");

        if (elColor) {
          elColor.forEach((e) => {
            if (e.getAttribute("stroke")) {
              e.setAttribute("stroke", defaultColor);
            } else {
              e.setAttribute("fill", defaultColor);
            }
          });
        }
        children[i].classList.remove(className);
      }
    }
    let elChangeColor = element.querySelectorAll("svg path");

    if (elChangeColor) {
      elChangeColor.forEach((e) => {
        if (e.getAttribute("stroke")) {
          e.setAttribute("stroke", changeColor);
        } else {
          e.setAttribute("fill", changeColor);
        }
      });
    }
    element.classList.add(className);
  }
}

function showHidden(
  selectorParent,
  element,
  selectorHidden,
  className,
  tl1,
  tl2,
  img1,
  img2
) {
  let parentEl = document.querySelector(selectorParent);
  let hiddenEl = document.querySelector(selectorHidden);

  if (parentEl && hiddenEl) {
    parentEl.classList.toggle(className);

    if (!parentEl.classList.contains(className)) {
      hiddenEl.style.right = `${0}px`;
      element.querySelector("span").innerText = tl1;
      element.querySelector("div img").src = img1;
    } else {
      let width = hiddenEl.offsetWidth;
      hiddenEl.style.right = `-${width}px`;
      element.querySelector("span").innerText = tl2;
      element.querySelector("div img").src = img2;
    }
  }
}

function handelLike(element, classActive, changeColor, defaultColor) {
  if (element) {
    let path = element.querySelector("svg path");

    if (path) {
      element.classList.toggle(classActive);

      if (element.classList.contains(classActive)) {
        path.setAttribute("fill", changeColor);
        path.setAttribute("stroke", changeColor);
      } else {
        path.setAttribute("fill", "");
        path.setAttribute("stroke", defaultColor);
      }
    }
  }
}

function sizeTB(className, classW, number, childBl = true) {
  let elements = document.querySelector(className);
  let elementW = document.querySelectorAll(classW);

  if (elements && elementW) {
    let child = childBl ? [...elements.children] : elements;

    if (child) {
      let index = childBl ? child.length : 1;
      let iw = number;

      if (childBl) {
        for (let i = index - number; i <= index - 1; i++) {
          if (elementW[number - iw]) {
            elementW[number - iw].style.width = `${child[i].clientWidth}px`;
            --iw;
          }
        }
      } else {
        elementW[0].style.width = `${child.clientWidth}px`;
      }
    }
  } else {
    window.removeEventListener("resize", sizeTB);
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

function CheckSize(classMaxSize, style) {
  let elMaxSize = document.querySelector(classMaxSize);

  if (elMaxSize) {
    let MaxSize = elMaxSize.offsetWidth;

    if (MaxSize) {
      let childrenElements = [...elMaxSize.children];

      if (childrenElements) {
        let size = 0;
        let row = 0;
        let col = 0;
        childrenElements.forEach((element) => {
          childrenSize(element, MaxSize, style);
        });

        function childrenSize(child, maxSize, style) {
          let widthChild = child.offsetWidth;
          let text = window
            .getComputedStyle(child)
            .getPropertyValue("margin-left");
          var number = text.match(/\d/g);
          number = number.join("");

          size += col == 0 ? widthChild + parseInt(number) : widthChild;
          console.log(col);
          if (size > maxSize) {
            row++;
            size = 0;
            col = 0;
          }

          if (col == 0) {
            styleElement(child, "margin-left", "0px");
          }

          if (row > 0) {
            if (typeof style === "object") {
              for (let key in style) {
                styleElement(child, key, style[key]);
              }
            }
          }

          col += 1;

          function styleElement(element, styleName, valueStyle) {
            element.style[styleName] = valueStyle;
          }
        }
      }
    }
  }
}

function scrollSelector(nextArrow, prevArrow, scrollElement) {
  let elNext = document.querySelector(nextArrow);
  let elPrev = document.querySelector(prevArrow);
  let elementScroll = document.querySelector(scrollElement);

  if (elNext && elPrev && elementScroll) {
    let oneChild = [...elementScroll.children][0];
    let widthEl = [...oneChild.children];
    let isClick = true;
    let widthChild = widthEl[0].clientWidth;
    let maxScroll = widthEl.length * widthChild;
    let scrollX = 0;

    function handelScroll() {
      let x = elementScroll.scrollLeft;
      if (x <= maxScroll) {
        if (isClick === true) {
          scrollX = x + widthChild;
        } else {
          scrollX = x - widthChild;
        }
      } else {
        scrollX = elementScroll.scrollLeftMax;
      }

      $(elementScroll).animate(
        {
          scrollLeft: scrollX,
        },
        300
      );
    }

    elNext.onclick = function () {
      isClick = true;
      handelScroll();
    };

    elPrev.onclick = function () {
      isClick = false;
      handelScroll();
    };
  }
}

function viewScreen(classElementShow, classHidden, pointMin, pointMax) {
  let elementShow = document.querySelector(classElementShow);
  if (elementShow) {
    window.onresize = function () {
      let x = window.innerWidth;

      if (x >= pointMin && x <= pointMax) {
        elementShow.classList.remove(classHidden);
      } else {
        elementShow.classList.add(classHidden);
      }
    };
  } else {
    window.onresize = null;
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

function closeResertValue(classResert, addClassAv) {
  let Elem = document.querySelector(classResert);

  if (Elem) {
    $(Elem)
      .children("input")
      .each((index, element) => {
        $(element).val("");
      });

    $(Elem).addClass(addClassAv);
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

function changeFile(classEl) {
  let el = document.querySelector(classEl);
  let label = document.querySelector('label[for="img_project"]');
  let img = document.querySelector(".view_img img");
  let url = [];
  if (el) {
    el.onchange = function () {
      if (url.length > 0) {
        url.forEach((u) => {
          URL.revokeObjectURL(u);
          url.shift();
        });
      }
      let urlF = URL.createObjectURL(el.files[0]);
      url.push(urlF);
      label.innerText = "Thay đổi ảnh";
      img.setAttribute("src", URL.createObjectURL(el.files[0]));
    };
  }
}

function checkMenuNavigte(object) {
  let { classListParent, classAcitve, navigate } = object;

  if (classListParent) {
    let parentNavi = document.querySelector(classListParent);

    if (parentNavi) {
      let children = parentNavi.querySelectorAll(".khoidanhmuccon");
      let span = parentNavi.querySelector(".border_sc");

      let leftEl = children[0].offsetLeft;
      let widthEl = children[0].offsetWidth;
      let widSpan = span.offsetWidth;
      let wchange = (widthEl - widSpan) / 2;
      let parentW = parentNavi.offsetWidth;
      let childrenW = 0;

      span.style.left = `${leftEl + wchange}px`;
      children[0].classList.add(classAcitve);

      for (let i = 0; i < children.length; i++) {
        childrenW += children[i].offsetWidth;
        if (childrenW > parentW) {
          console.log(children[0]);
          let top = children[0].offsetTop;
          let heightEl = children[0].offsetHeight;
          let hSan = span.offsetHeight;
          let topS = top + heightEl - hSan;

          span.style.top = `${topS}px`;
        }
      }

      children.forEach((e, index) => {
        // childrenW += e.offsetWidth;
        e.onclick = () => {
          let { listParentTb, classViews, classViewActive } = navigate[index];
          leftEl = e.offsetLeft;
          widthEl = e.offsetWidth;
          widSpan = span.offsetWidth;
          wchange = (widthEl - widSpan) / 2;
          if (childrenW > parentW) {
            let top = e.offsetTop;
            let heightEl = e.offsetHeight;
            let hSan = span.offsetHeight;
            let topS = top + heightEl - hSan;

            span.style.top = `${topS}px`;
          }
          span.style.left = `${leftEl + wchange}px`;

          activeChangeTable(
            e,
            classListParent,
            classAcitve,
            listParentTb,
            classViews,
            classViewActive
          );
        };
      });
    }
  }
}

function AddAppendEl(object, addEventChil = () => {}) {
  let { classEvent, callBack, parentTB, classTable, elementAppen, cloneInput, notFirst} = object;
  let parent = document.querySelector(parentTB);

  if (parent) {
    let nodeEv = parent.querySelector(classEvent);
    let tableApp = parent.querySelector(classTable);

    if (nodeEv && tableApp) {
      let appenE = tableApp.querySelector(elementAppen);
      let clone = appenE.children[0].cloneNode(true);
      if(notFirst) {
        appenE.removeChild(appenE.children[0]);
      } else {
        let childrenEl = [...appenE.children];
        childrenEl.forEach((e, index)=>{
          addEventChil(index, appenE, e);
        })
      }

      nodeEv.onclick = function () {
        let childrenBd = [...appenE.children];
        let indexCl = childrenBd.length;
        let cloneNew = callBack(indexCl, clone);
        let nodeCloneFile;
        if(cloneInput) {
          nodeCloneFile = cloneInput(cloneNew);
        }
        appenE.appendChild(cloneNew);
        addEventChil(indexCl, appenE, cloneNew ,nodeCloneFile);
      };
    }
  }
}



// nghiên cứu
function viewPopup(selector) {
  let elm = document.querySelector(selector);

  if (elm) {
      elm.classList.remove('popup_transition');
  }
}
//idPopup, selectorChild, close_popup, cancel
function viewAndClosePopup(array) {
  array.forEach((e) => {
      let {
          clickElem,
          idPopup,
          selectorChild,
          close_popup,
          classHiddenShow,
          isVaild
      } = e;
      let elemEv = document.querySelector(clickElem);
      
      if (elemEv) {
          elemEv.onclick = () => {
              let checkVaild;

              if(isVaild != undefined) {
                  checkVaild = isVaild
              }  else {
                  checkVaild = false;
              }
              viewPopup(idPopup, classHiddenShow);
              let infor_menu = document.querySelector(idPopup);
              if (infor_menu) {
                  let elmClose = infor_menu.querySelector(close_popup);

                  if (elmClose) {
                      elmClose.onclick = () => {
                          infor_menu.classList.add(classHiddenShow)
                      }
                  }

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
                          infor_menu.classList.add(classHiddenShow);
                          return false;
                      }
                  }
                  infor_menu.addEventListener("click", hiddenOverlay);
              }
          }
      }

  })


}

// viewAndClosePopup([
//   {
//       clickElem: '.btn_dd',
//       idPopup: '#popup_them_ql',
//       selectorChild: '.main_popup',
//       classHiddenShow: 'popup_transition',
//       close_popup: '.close_popup',
//       // isVaild: true
//    }
// ])

