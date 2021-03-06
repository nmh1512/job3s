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

// ???n hi???n type password
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




function isCheckPass (value) {
  // T???i thi???u 6 k?? t???, ??t nh???t m???t k?? t??? hoa, m???t k?? t??? vi???t th?????ng, m???t s??? v?? m???t k?? t??? ?????c bi???t:
  return /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/.test(value);
}

function DropFiles(elementFiles, callBack = () => {}) {
  if (elementFiles) {
    elementFiles.ondrop = function (e) {
      e.preventDefault();
      elementFiles.classList.remove("move_file");
      let files = e.dataTransfer.files[0];
      callBack(files);
    };

    elementFiles.ondragover = function (e) {
      e.preventDefault();
      elementFiles.classList.add("move_file");
    };

    elementFiles.ondragleave = function (e) {
      e.preventDefault();
      elementFiles.classList.remove("move_file");
    };
  }
}

function ChangeFiles(inputFile, selectorAppend, seletClose, dropFiles) {
  let files_input = document.querySelectorAll(inputFile);
  let {
    selecter,
    isTypeFileVaild,
    isMaxSize,
    isDropFile,
    customMessType,
    customMessSize,
    appendError,
    isAppenError,
    classErorr,
  } = dropFiles;
  let isError = false;
  let placeholder;
  if (files_input) {
    function handelFiles(elemeApp, close, files) {
      if (elemeApp) {
        if (files) {
          let elemError = null;
          let parentE = document.querySelector(appendError);
          let errorE = parentE.querySelector(`.${classErorr}` || ".isvalid");

          if (isAppenError && errorE == null) {
            elemError = document.createElement("span");
            elemError.className = classErorr || "isvalid";
          } else {
            elemError = errorE;
          }
          if (isTypeFileVaild) {
            let type = files.type;
            type = type.split("/")[1];

            if (!isTypeFileVaild.includes(type)) {
              isError = true;
              if (elemError)
                elemError.innerText =
                  typeof customMessType === "function"
                    ? customMessType(files, isTypeFileVaild)
                    : "file kh??ng h???p l???";
            } else {
              isError = false;
            }
          }

          if (!isError && isMaxSize) {
            let size = files.size;
            if (size > isMaxSize) {
              isError = true;
              if (elemError)
                elemError.innerText =
                  typeof customMessSize === "function"
                    ? customMessSize(files, isMaxSize)
                    : `file v?????t qua gi???i h???n cho ph??p`;
            } else {
              isError = false;
            }
          }

          if (isError && elemError) {
            if (errorE == null) parentE.appendChild(elemError);
            return;
          } else {
            if (errorE) {
              parentE.removeChild(elemError);
            }
          }
          placeholder = files.name;
          close.dataset.file = 0;
          close.classList.remove("d_none");
        } else {
          placeholder = elemeApp.dataset.placeholder || "Ch??a c?? files n??o";
          close.classList.add("d_none");
        }
        elemeApp.innerText = placeholder;
        close.onclick = () => {
          elemeApp.innerText =
            elemeApp.dataset.placeholder || "Ch??a c?? files n??o";
          close.classList.add("d_none");
          close.onclick = () => {};
        };
      }
    }

    Array.from(files_input).forEach((e) => {
      e.addEventListener("change", () => {
        let parent = e.parentElement;
        let elemeApp = parent.querySelector(selectorAppend);
        let close = parent.querySelector(seletClose);
        let files = e.files[0];

        handelFiles(elemeApp, close, files);
      });

      if (selecter && isDropFile == true) {
        let elemeElem = document.querySelector(selecter);

        if (elemeElem) {
          let elemeApp = elemeElem.querySelector(selectorAppend);
          let close = elemeElem.querySelector(seletClose);
          DropFiles(elemeElem, (files) => {
            handelFiles(elemeApp, close, files);
          });
        }
      }
    });
  }
}

function navigatePopup({
  controllList,
  navigateContentList,
  defaultActive = 0,
  customDataList = "navigate",
  activeControl = "active_control",
  activeNavigate = "active_navigate",
  callBack = () => {}
}) {
  let controllELem = document.querySelector(controllList);
  let contentNVList = document.querySelector(navigateContentList);
  if (defaultActive == "" || typeof defaultActive == "string")
    defaultActive = 0;

  if (controllELem && contentNVList) {
    let chilControl = [...controllELem.children];
    let chilNavigateList = [...contentNVList.children];
    let mxLeng = chilControl.length - 1;
    let ix = 0;

    chilControl.forEach((e, index) => {
      e.setAttribute(`data-${customDataList}`, index);
      chilNavigateList[index].setAttribute(
        `data-${customDataList || "navigate"}`,
        index
      );
      if (index == defaultActive) {
        ix = index;
      }
      if (mxLeng == index) {
        let ct = acitveContent(
          chilControl[ix],
          controllList,
          chilNavigateList,
          activeNavigate
        );
        
        if(typeof callBack == 'function') callBack(chilControl[ix], ct)

        ix = null;
        mxLeng = null;
      }

      e.onclick = function () {
        let ct = acitveContent(this, controllList, chilNavigateList, activeNavigate);
        if(typeof callBack == 'function') callBack(this, ct);
      };
    });

    function acitveContent(element, listControl, elementList, classActiveList) {
      if (element && elementList) {
        let dataID = element.dataset[customDataList];
        // remove class control
        clickToggleClass(element, listControl, activeControl);

        let content;
        elementList.forEach((e) => {
          let i = e.dataset[customDataList];
          if (i != dataID) {
            e.style.display = "none";
            if (classActiveList) {
              if (e.classList.contains(classActiveList))
                e.classList.remove(classActiveList);
            }
          } else {
            e.style.display = "block";
            if (classActiveList) {
              if (!e.classList.contains(classActiveList))
                e.classList.add(classActiveList);
            }

            content = e;
          }
        });

        return content;
      }
    }
  }
}

function changeAjax({
  listElem,
  classChange,
  fucCustom = () => {},
  callBack = () => {},
}) {
  let elemPr = document.querySelector(listElem);
  if (classChange) {
    let chil = [...elemPr.children];

    if (chil) {
      chil.forEach((e) => {
        e.onclick = function () {
          clickToggleClass(this, listElem, classChange);
          if (typeof fucCustom === "function")
            fucCustom(this, listElem, classChange);
          if (typeof callBack === "function")
            callBack(this, listElem, classChange);
        };
      });
    }
  }
}


function moreShows({
  elem,
  classMore
}) {
  // l???y element
  let children = $(elem).children(classMore);
  let tabID = $(elem).data("tab");

  if (children.length <= 0) {
    let chilbody = $("body").children(`${classMore}[data-tab=${tabID}]`);
    $(chilbody).slideUp("fast", () => {
      let prop = $(chilbody).prop("style");
      prop.removeProperty("top");
      prop.removeProperty("right");
      $(chilbody).appendTo($(elem));

    });
  } else {
    $(children).attr("data-tab", tabID);
    $(children).appendTo($("body"));

    let x = $("body").innerWidth();

    // l???y t???a ????? c???a th??? click
    let topClick = $(elem).offset().top;
    let heightClick = $(elem).outerHeight(true);
    let leftClick = $(elem).offset().left;
    let widthClick = $(elem).outerWidth(true);

    let rightChild = Math.ceil(x - (leftClick + widthClick));

    $(children).css({
      top: `${topClick + heightClick + 10}px`,
      right: `${rightChild}px`,
    });

    $(children).slideDown("fast");
  }
}

function startChange(selectorListStart, addClass, removeCl = "") {
  let elemListStart = document.querySelector(selectorListStart);

  function fillStart(listStart, classAdd, index, removeClass = "") {
    if (listStart) {
      listStart.forEach((e, i) => {
        if (i <= index) {
          e.classList.add(classAdd);
          if (removeCl) e.classList.remove(removeCl);
        } else {
          e.classList.remove(classAdd);
          if (removeCl) e.classList.add(removeCl);
        }
      });
    }
  }

  if (elemListStart) {
    let childrenStart = [...elemListStart.children];

    if (childrenStart) {
      childrenStart.forEach((e, index) => {
        e.setAttribute("data-start", index);
        e.onclick = function () {
          let i = this.dataset.start;
          if (i) {
            fillStart(childrenStart, addClass, i);
          }
        };
      });
    }
  }
}


function moreShow(elem) {
  // l???y element
  let children = $(elem).children(".popup_more");
  let tbody = $(elem).parents(".table").children("tbody");
  let tabID = $(elem).data("tab");
  // let childrenTab = $(children).attr('data-tab');

  if (children.length <= 0) {
    let chilbody = $("body").children(`.popup_more[data-tab=${tabID}]`);
    $(chilbody).slideUp("fast", () => {
      let prop = $(chilbody).prop("style");
      prop.removeProperty("display");
      prop.removeProperty("top");
      prop.removeProperty("right");
      $(chilbody).appendTo($(elem));
    });
  } else {
    $(children).attr("data-tab", tabID);
    $(children).appendTo($("body"));

    let x = $("body").innerWidth();
    let y = $("body").innerHeight();

    // l???y chi???u cao popup
    let heightChildren = $(children).outerHeight(true);

    // l???y chi???u cao th??? ch???a
    let heightTbody = $(tbody).outerHeight(true);
    // l???y t???o ????? top c???a th??? ch???a
    let topTbody = $(tbody).offset().top;
    // t??m ???????c t???a ????? ch???a t???i ??a c???a th??? ch???a
    let maxTopTbody = topTbody + heightTbody;
    // l???y t???a ????? c???a th??? click
    let topClick = $(elem).offset().top;
    let heightClick = $(elem).outerHeight(true);
    let leftClick = $(elem).offset().left;
    let widthClick = $(elem).outerWidth(true);

    let rightChild = Math.ceil(x - (leftClick + widthClick));

    let max = topClick + heightChildren;

    if (max >= maxTopTbody) {
      $(children).css({
        top: `${topClick - heightChildren - 10}px`,
        right: `${rightChild}px`,
      });
    } else {
      $(children).css({
        top: `${topClick + heightClick + 10}px`,
        right: `${rightChild}px`,
      });
    }

    $(children).slideDown("fast");
  }
}

function sizeChildrenTable(breackpoint, object) {
  let parentTb = document.querySelector(".table_tdd");
  let m = document.querySelector(".tb_ttd");
  let elemCre;
  let maxW = 0;
  if (parentTb) {
    let winWidth = window.innerWidth;
    let th = parentTb.querySelectorAll("thead > tr > th");
    let td = parentTb.querySelectorAll("tbody > tr");

    window.onresize = function () {
      winWidth = window.innerWidth;

      if (winWidth <= breackpoint) {
        resizeTable();
      } else {
        removeStyle();
      }
    };

    if (winWidth <= breackpoint) {
      resizeTable();
    }

    function resizeTable() {

      if(td.length > 0) {
        td.forEach((e, i) => {
          let chil = [...e.children];
          let h = chil[0].getBoundingClientRect().height;
          let w = chil[chil.length - 1].getBoundingClientRect().width;
  
          maxW = w > maxW ? w : maxW;
  
          if (i >= td.length - 1) {
            h -= 0.5;
          }
          chil[chil.length - 1].style.height = `${h}px`;
        });
      } else {
        // m.classList.add('no_result_parent');
        if(!(th[th.length - 1].contains(elemCre))) {
          let w = th[th.length - 1].getBoundingClientRect().width;
          let h = th[th.length - 1].getBoundingClientRect().height;
          let hParent = m.getBoundingClientRect().height;
          let sr = hParent - (m.scrollHeight);
          elemCre = document.createElement(object.tag);
          elemCre.className = object.className;
          elemCre.style.width = `${w}px`;
          elemCre.style.top = `${h}px`;
          elemCre.style.height = `${(hParent - h - 0.5) - (sr)}px`;
          th[th.length - 1].appendChild(elemCre);
        }
      }

      maxW > 0&&(th[th.length - 1].style.width = `${maxW}px`);
      th[th.length - 1].style.height = `${
        th[0].getBoundingClientRect().height
      }px`;
      maxW > 0?(m.style.paddingRight = `${maxW - 1}px`):(m.style.paddingRight = `${th[th.length - 1].getBoundingClientRect().width}px`);
    }

    function removeStyle() {
      if(td.length > 0) {
        td.forEach((e, i) => {
          let chil = [...e.children];
  
          chil[chil.length - 1].style.removeProperty("height");
        });
      } else {
        if((th[th.length - 1].contains(elemCre))) { 
          th[th.length - 1].removeChild(elemCre);
          // parentTb.classList.add('no_result_parent');
        }
      }
      th[th.length - 1].style.removeProperty("width");
      m.style.removeProperty("padding-right");
    }
  }
}


function scrollXSlider({
  parentEl,
  listSL,
  slide,
  next,
  prev
}) {
  let elemParent = document.querySelector(parentEl);

  if (elemParent) {
      let slideElem = elemParent.querySelector(slide);
      let listEL = elemParent.querySelector(listSL);
      let btnPrev = elemParent.querySelector(prev);
      let btnNext = elemParent.querySelector(next);

      if (slideElem && btnNext && btnPrev) {
          let clientW = elemParent.offsetWidth;
          let child = [...listEL.children];
          let start = 0
          let end = child.reduce((init, currentE) => {
              let w = currentE.offsetWidth;
              return init += w;
          }, 0)

          function slider(start) {
              $(slideElem).animate({
                  scrollLeft: start,
              }, 300)
          }

          slideElem.onscroll = (e) => {
              let maxScroll = slideElem.scrollLeft;
              if(maxScroll == end - clientW) {
                  btnNext.classList.add('is_disable');
                  btnPrev.classList.remove('is_disable');
              } else if(maxScroll == 0){
                  btnNext.classList.remove('is_disable');
                  btnPrev.classList.add('is_disable');
              } else{
                  btnPrev.classList.remove('is_disable');
                  btnNext.classList.remove('is_disable');
              }
          }

          btnNext.onclick = () => {
              start += clientW;
              slider(start)
          } 

          
          btnPrev.onclick = () => {
              start -= clientW; 
              if(start < 0) start = 0;
              slider(start)
          } 
      }
  }
}



function sort(arr, key) {
  for (let i = 0; i < arr.length - 1; i++) {
      for (let j = i + 1; j < arr.length; j++) {
          let s = parseInt(arr[j].dataset[key]);
          let d = parseInt(arr[i].dataset[key]);
          if (s < d) {
              let t = arr[i];
              arr[i] = arr[j];
              arr[j] = t;
          }
      }
  }

  return arr;
}

function responsiveLayout({
  elemAppenNew,
  resize = false,
  customClassName = 'parentNew',
}) {
  let elem = document.querySelector(elemAppenNew);
  let childOld = [...elem.children];
  let brPoint = parseInt(elem.dataset['mobile']);
  let divApp = document.createElement('div');
  let arr = []
  divApp.className = customClassName;

  appChildren()

  if(resize) {
      window.onresize = () => {
          appChildren()
      }
  }
  
  function appChildren() {
      let screenClient = window.innerWidth;
      if (screenClient <= brPoint) {
          if (!elem.contains(divApp)) {
              elem.appendChild(divApp)
          } else {
              return;
          }

          childOld.forEach((e) => {
              arr = [...e.children, ...arr];
          })

          arr = sort(arr, 'new');
          arr.forEach((elem) => {
              divApp.appendChild(elem);
          })

      } else {
          if (elem.contains(divApp)) {
              childOld.forEach((e) => {
                  let id = e.dataset['id'];
                  let elems = arr.filter((e) => e.dataset['id'] === id);
                  elems = sort(elems, 'orderold');

                  elems.forEach((elem) => {
                      e.appendChild(elem);
                  })
              })

              elem.removeChild(divApp);
          }
      }
  }
}

function scrollControlMobile ({
  elemView,
  classActive,
  boxCompare
}) {
  let elw = document.querySelector(elemView);
  let compeElem = document.querySelector(boxCompare);

  if(elw && compeElem) {

    function scrollCompare () {
      let top = compeElem.offsetTop;
      let maxSc = (compeElem.offsetHeight) + top;
      let y = window.pageYOffset;

      if(y > maxSc) {
        elw.classList.add(classActive)
      } else {
        elw.classList.remove(classActive)
      }

    }

    window.addEventListener('scroll', scrollCompare)
  }
}


function sliderBarToggle ({
  slideBar,
  classShow,
  breackpoint,
}) {
  let elemSlide = document.querySelector(slideBar);
  let elemClick = document.querySelector(classShow);
  let isClick = true;
  if(elemSlide&&elemClick) {
    let div = document.createElement('div');
    div.className = 'overlay_mb';

    elemClick.onclick = function () {
      if(isClick) {
        elemSlide.style.left='0';
        isClick = false;
        elemSlide.parentElement.appendChild(div);
        if(div) {
          div.onclick = function () {
            elemSlide.style.left='-100%';
            elemSlide.parentElement.removeChild(div);
            div.onclick = null;
            isClick = true;
          }
        }
      }else {
        elemSlide.style.left='-100%';
        isClick = true;
        if(div) {
          elemSlide.parentElement.removeChild(div);
        }
      }
    }

    document.onresize = () => {
      let w = window.innerWidth;

      if(w > breackpoint) {
        elemSlide.style.left='0';
        isClick = false;
      } else {
        elemSlide.style.left='-100%';
        isClick = true;
      }
      let mb = elemClick.parentElement.querySelector(`.overlay_mb`);
      if(mb) elemClick.parentElement.removeChild(mb)
    }
  }
}


function heightVideo() {
  let h = $('.video_peolpe').outerHeight();
  $('.video_peolpe').children().css({
      'height': `${h}px`
  })

  $(window).resize(function() {
      let prop = $('.video_peolpe').children().prop("style");
      prop.removeProperty("height");
      h = $('.video_peolpe').outerHeight();
      $('.video_peolpe').children().css({
          'height': `${h}px`
      })
  })
}


function format(value) {
Number.prototype.format = function (n, x) {
  var re = "\\d(?=(\\d{" + (x || 3) + "})+" + (n > 0 ? "\\." : "$") + ")";
  return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, "g"), "$&.");
};

return value.format();
}

function formatMoney(element) {
let values = element.value;
let pos = values.indexOf(".");
if (values == "") {
  values = 0;
}
if (pos != -1) {
  values = values.replaceAll(".", "");
}
values = parseFloat(values);

valuedd = format(values);

element.value = valuedd.toLocaleString();
}

function findResultJob({
  append,
  valueFind,
  keyFind,
  keyApp,
  keyID = '',
  arrayFind = []
}) {
  if(arrayFind.length < 0) return;
  let elem = document.querySelector(append);
  let option = document.createElement('option');
  option.innerText = '';

  if(elem) {
      let newResult = arrayFind.filter((e) => e[keyFind] != valueFind);

      if(newResult.length > 0) {
          newResult.forEach((e) => {
              let newClone = option.cloneNode(true);
              newClone.innerText = e[keyApp];
              newClone.setAttribute('value', e[keyID||keyFind])
              elem.appendChild(newClone);
          })
      }
  }
}


function createELement(tag, prop, text_node, parentApp = '') {
  let el = document.createElement(tag);
  if (prop) {
      let keys = Object.keys(prop);
      if (keys.length > 0) keys.forEach((e) => el.setAttribute(e, prop[e]))
  }
  el.innerText = text_node;

  if (parentApp) {
      parentApp.appendChild(el);
  }

  return el;
}

function FindKey({
  arr,
  key,
  value,
  selectApp,
  selecteChild,
  keyName,
  keyID
}) {
  let elmPr = document.querySelector(selectApp);
  let elmChil = document.querySelector(selecteChild);
  if (elmPr && elmChil) {
      createELement('option', null, '', elmPr);
      let arrTinh = [];
      if (arr.length > 0) arrTinh = arr.filter((e) => e[key] == value);
      if (arrTinh.length > 0) {
          arrTinh.forEach(e => {
              createELement('option', {
                  value: e[keyID]
              }, e[keyName], elmPr);
          })

          elmPr.onchange = function() {
              let value = elmPr.value;
              let quan = arr.filter((e) => e[key] == value);
              elmChil.innerHTML = null;
              createELement('option', null, '', elmChil);
              if (quan.length > 0) {
                  quan.forEach((e) => {
                    console.log(e)
                      createELement('option', {
                          value: e[keyID]
                      }, e[keyName], elmChil);
                  })
              }
          }
      }
  }

}