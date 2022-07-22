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

  // Tooltip
  $('[data-toggle="tooltip"]').tooltip();

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

  // Keyboard
  /*$(document.body).on('keydown', function (e) {

    if (!$image.data('cropper') || this.scrollTop > 300) {
      return;
    }

    switch (e.which) {
      case 37:
        e.preventDefault();
        $image.cropper('move', -1, 0);
        break;

      case 38:
        e.preventDefault();
        $image.cropper('move', 0, -1);
        break;

      case 39:
        e.preventDefault();
        $image.cropper('move', 1, 0);
        break;

      case 40:
        e.preventDefault();
        $image.cropper('move', 0, 1);
        break;
    }

  });
*/

  // Import image
  var $inputImage = $("#inputImage");

  if (URL) {
    $inputImage.change(function () {
      var files = this.files;
      var file;
      if (!$image.data("cropper")) {
        return;
      }

      if (files && files.length) {
        file = files[0];

        if (/^image\/\w+$/.test(file.type)) {
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
          /////////////
        } else {
          window.alert("Please choose an image file.");
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
      var files = this.files;
      var file;
      if (!$image.data("cropper")) {
        return;
      }

      if (files && files.length) {
        file = files[0];

        if (/^image\/\w+$/.test(file.type)) {
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
          /////////////
        } else {
          window.alert("Please choose an image file.");
          $download.addClass("disabled");
        }
      }
    });
  } else {
    $inputImage.prop("disabled", true).parent().addClass("disabled");
    $download.addClass("disabled");
  }

  $(".btn-remove-image").click(function () {
    $image.cropper("destroy").cropper(options);
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
      $("#cvo-profile-avatar").attr("src", img);
      // $.ajax("../ajax/ajax_image_upload_cv_uv.php", {
      //   method: "POST",
      //   data: { img64: img },
      //   cache: false,
      //   // dataType : 'json',
      //   success: function (img) {
      //     b = img.trim();
      //     $("#cvo-profile-avatar").attr("src", b);
      //     console.log("Upload success");
      //   },
      //   error: function () {
      //     console.log("Upload error");
      //   },
      // });
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
});

// var PagingSeparator = {
//   px2mmConversionRatio: 0.264583333,
//   pageHeight: 277.54,
//   pageContentHeight: 0,
//   printOptions: null,
//   documentHeight: 0,
//   documentContentHeight: 0,
//   totalPages: 0,
//   pages: [],
//   init: function (t) {
//     return (
//       (this.printOptions = t.printOptions),
//       (this.pageContentHeight =
//         this.pageHeight -
//         this.printOptions.margins.top -
//         this.printOptions.margins.bottom),
//       this.update(),
//       this
//     );
//   },
//   px2mm: function (t) {
//     return t * this.px2mmConversionRatio;
//   },
//   mm2px: function (t) {
//     return t / this.px2mmConversionRatio;
//   },
//   isReady: function () {
//     return null != this.printOptions;
//   },
//   update: function () {
//     this.isReady(),
//       (this.pages = []),
//       (this.documentHeight = this.px2mm($("#form-cv").height())),
//       (this.documentContentHeight =
//         this.documentHeight -
//         this.printOptions.margins.top -
//         this.printOptions.margins.bottom),
//       (this.totalPages = Math.ceil(
//         this.documentContentHeight / this.pageContentHeight
//       ));
//     for (var t = 1; t < this.totalPages; t++) {
//       var i;
//       (i =
//         1 == t
//           ? this.pageContentHeight + this.printOptions.margins.top
//           : this.pages[this.pages.length - 1] + this.pageContentHeight),
//         this.pages.push(i);
//     }
//     return this;
//   },
//   render: function () {
//     if (!this.isReady()) return this;
//     for (
//       this.update(), $("#form-cv .page_end").remove(), i = 0;
//       i < this.pages.length;
//       i++
//     ) {
//       var t = this.pages[i],
//       n = i + 2,
//       e = $("#page_end")
//       .clone()
//       .attr("id", "")
//       .css("top", t + "mm");

//       console.log($("#form-cv .page_end"));
//       e
//         .find(".paging-arrow")
//         .text("Trang " + n)
//         .attr("title", "Báº¯t Ä‘áº§u trang sá»‘ " + n)
//         .hover(
//           function () {
//             $(this).parent().css("width", "100%");
//           },
//           function () {
//             $(this).parent().css("width", "1px");
//           }
//         ),
//         e.appendTo($("#form-cv")).show();
//     }
//     return this;
//   },
// };

$("#btn-save-cv").on("click", function () {
  $(window).scrollTop(0);
  $(window).scrollLeft(0);

  var phone = $("#cv-profile-phone").text();
  var email = $("#cv-profile-email").text();
  var address = $("#cv-profile-address").text();
  var fname = $("#cv-profile-fullname").text();
  if (phone == "" || email == "" || fname == "" || address == "") {
    if (fname == "") {
      document.getElementById("cv-profile-fullname").style.outline =
        "1px dashed red";
    }
    if (phone == "") {
      document.getElementById("cv-profile-phone").style.outline =
        "1px dashed red";
    }
    if (email == "") {
      document.getElementById("cv-profile-email").style.outline =
        "1px dashed red";
    }
    if (address == "") {
      document.getElementById("cv-profile-address").style.outline =
        "1px dashed red";
    }
    var msg =
      '<div class="v-modal" style="z-index: 2009;"></div><div tabindex="-1" class="el-message-box__wrapper" style="z-index: 2010;">';
    msg +=
      '<div class="el-message-box"><div class="el-message-box__header"><div class="el-message-box__title">ThĂ´ng bĂ¡o</div></div><div class="el-message-box__content"><div class="el-message-box__status el-icon-warning"></div><div class="el-message-box__message" style="margin-left: 50px;">';
    var text_mis = "";
    if ("" == fname) {
      text_mis += "Há» tĂªn,";
    }
    if ("" == email) {
      text_mis += "Email,";
    }
    if ("" == phone) {
      text_mis += "Sá»‘ Ä‘iá»‡n thoáº¡i,";
    }
    if ("" == address) {
      text_mis += "Äá»‹a chá»‰,";
    }
    text_mis = text_mis.substring(0, text_mis.length - 1);
    msg +=
      'Báº¡n chÆ°a Ä‘iá»n Ä‘áº§y Ä‘á»§ cĂ¡c trÆ°á»ng: <span style="color:red">' +
      text_mis +
      "</span></div></div>";
    msg += '<div class="el-message-box__btns">';
    msg +=
      '<button type="button" onclick="hide()" class="el-button el-button--default"><span>Há»§y bá»</span></button>';
    $("body").append(msg);
    return false;
  }

  if (!/^[0-9]+$/.test(phone)) {
    var msg =
      '<div class="v-modal" style="z-index: 2009;"></div><div tabindex="-1" class="el-message-box__wrapper" style="z-index: 2010;">';
    msg +=
      '<div class="el-message-box"><div class="el-message-box__header"><div class="el-message-box__title">ThĂ´ng bĂ¡o</div></div><div class="el-message-box__content"><div class="el-message-box__status el-icon-warning"></div><div class="el-message-box__message" style="margin-left: 50px;">';
    msg += "Sá»‘ Ä‘iá»‡n thoáº¡i khĂ´ng há»£p lá»‡</div></div>";
    msg += '<div class="el-message-box__btns">';
    msg +=
      '<button type="button" onclick="hide()" class="el-button el-button--default"><span>Há»§y bá»</span></button>';
    $("body").append(msg);
    return false;
  }

  if (!/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test(email)) {
    var msg =
      '<div class="v-modal" style="z-index: 2009;"></div><div tabindex="-1" class="el-message-box__wrapper" style="z-index: 2010;">';
    msg +=
      '<div class="el-message-box"><div class="el-message-box__header"><div class="el-message-box__title">ThĂ´ng bĂ¡o</div></div><div class="el-message-box__content"><div class="el-message-box__status el-icon-warning"></div><div class="el-message-box__message" style="margin-left: 50px;">';
    msg += "Email khĂ´ng há»£p lá»‡</div></div>";
    msg += '<div class="el-message-box__btns">';
    msg +=
      '<button type="button" onclick="hide()" class="el-button el-button--default"><span>Há»§y bá»</span></button>';
    $("body").append(msg);
    return false;
  }
  if (phone.length < 10) {
    var msg =
      '<div class="v-modal" style="z-index: 2009;"></div><div tabindex="-1" class="el-message-box__wrapper" style="z-index: 2010;">';
    msg +=
      '<div class="el-message-box"><div class="el-message-box__header"><div class="el-message-box__title">ThĂ´ng bĂ¡o</div></div><div class="el-message-box__content"><div class="el-message-box__status el-icon-warning"></div><div class="el-message-box__message" style="margin-left: 50px;">';
    msg += "Sá»‘ Ä‘iá»‡n thoáº¡i tá»‘i thiá»ƒu 10 kĂ½ tá»±</div></div>";
    msg += '<div class="el-message-box__btns">';
    msg +=
      '<button type="button" onclick="hide()" class="el-button el-button--default"><span>Há»§y bá»</span></button>';
    $("body").append(msg);
    return false;
  }

  $("#cvo-toolbar").removeClass("fx");
  $("body").append(
    '<div class="bg-spinner"><div class="spinner"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div></div>'
  );
  $.exportData();

  var ckcook = $("#ckcook").val();
  if (ckcook == 1) {
    var x = $("#cv-profile-phone").text();
    var y = $("#cv-profile-email").text();
    $("#cv-profile-phone").text("Xem á»Ÿ trĂªn");
    $("#cv-profile-email").text("Xem á»Ÿ trĂªn");
  }

  // html2canvas($("#form-cv"), {
  //   onrendered: function (canvas) {
  //     var img_val = canvas.toDataURL("image/png", 1.0);
  //     var cvid = $("#cvid").val();
  //     var uid = $("#uid_cv").val();

  //     if (ckcook == 1) {
  //       $("#cv-profile-phone").text(x);
  //       $("#cv-profile-email").text(y);
  //     }

  //     if (is_busy == true) {
  //       return false;
  //     }

  //     $.ajax({
  //       cache: false,
  //       type: "POST",
  //       url: "save.php",
  //       async: false,
  //       data: { img_val: img_val, uid: uid, cvid: cvid },
  //       beforeSend: function (response) {
  //         $(".bg-spinner").remove();
  //         $("body").append(
  //           '<div class="bg-spinner"><div class="spinner"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div></div>'
  //         );
  //       },
  //       success: function (html) {
  //         if (ckcook == 1) {
  //           var img_val2 = canvas.toDataURL("image/png", 1.0);
  //           if (html > 0) {
  //             $.ajax({
  //               cache: false,
  //               type: "POST",
  //               url: "save_img_dk.php",
  //               async: false,
  //               data: { img_val: img_val2, uid: html, cvid: cvid },
  //               success: function (html) {},
  //             });
  //           }
  //           window.location.href =
  //             "https://timviec365.vn/xac-thuc-tai-khoan-ung-vien.html";
  //         } else {
  //           window.location.href =
  //             "https://timviec365.vn/cv365/download-cvpdf/cv.php?cvid=" +
  //             cvid +
  //             "&uid=" +
  //             uid;
  //           var msg =
  //             '<div class="v-modal" style="z-index: 2009;"></div><div tabindex="-1" class="el-message-box__wrapper" style="z-index: 2010;">';
  //           msg +=
  //             '<div class="el-message-box"><div class="el-message-box__header"><div class="el-message-box__title">ThĂ´ng bĂ¡o</div></div><div class="el-message-box__content"><div class="el-message-box__status el-icon-warning"></div><div class="el-message-box__message" style="margin-left: 50px;">';
  //           msg +=
  //             "CV cá»§a báº¡n sáº½ Ä‘Æ°á»£c lÆ°u sau 5s - Báº¡n cháº¯c cháº¯n CV nĂ y Ä‘Ă£ Ä‘Æ°á»£c hoĂ n thĂ nh?</div></div>";
  //           msg += '<div class="el-message-box__btns">';
  //           msg +=
  //             '<button type="button" onclick="update_cv(' +
  //             uid +
  //             ')" class="el-button el-button--default el-button--primary "><span>Äá»“ng Ă½</span></button></div></div></div>';
  //           $("body").append(msg);
  //         }
  //         $(".bg-spinner").remove();
  //         is_busy = false;
  //       },
  //     });
  //   },
  // });
});
