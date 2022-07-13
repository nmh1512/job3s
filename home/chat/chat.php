<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="../../css/style.css" />
  <link rel="stylesheet" href="../../css/style_h.css" />
  <link rel="stylesheet" href="../../css/fancybox.css" type="text/css" media="screen" />
  <script src="../../js/jquery-3.4.1.min.js"></script>

  <script type="text/javascript" src="../../js/fancybox.umd.js"></script>
</head>

<body>
  <?
  include "../../includes/before_header.php"
  ?>
  <div class="chat_container container_about d_flex height_full_chat">
    <div class="list_chat">
      <div class="p_16_24">
        <div class="position_r">
          <input type="text" class="border_r100_dc w_100 font_s16" placeholder="Tìm kiếm nhanh" />
        </div>
      </div>
      <div class="list_person_chat">
        <div class="empty_chat h_100 d_flex align_c flex_center display_none">
          <p>Bạn chưa có cuộc trò truyện nào!</p>
        </div>
        <div>
          <div class="list_person_chat_box">
            <? for ($i = 0; $i < 300; $i++) { ?>
              <div class="list_person_chat_box_item d_flex align_c cursor_p position_r">
                <!-- <span class="check_delete display_none">
                            <input class="wh_15px mr_8" type="checkbox">
                        </span> -->
                <label class="container_checkbox position_a check_delete display_none">
                  <input type="checkbox" />
                  <span class="checkmark wh_15px middle_check"></span>
                </label>
                <span class="num_chat btn_rounded wh_18px position_a back_red d_flex align_c flex_center font_s14 font_w500 cl_white">2</span>
                <div class="d_flex w_100 position_r box_text">
                  <div class="position_r wh_50px">
                    <img class="btn_rounded w_100" src="../../images/doggo.jpg" alt="" />
                    <div class="btn_rounded wh_12px position_a bg_green br_0"></div>
                  </div>
                  <div class="pd_l_10">
                    <h4 class="mb_8">Trần Công Chiến</h4>
                    <p class="ellipsis font_s15">
                      Xin
                      chào000000000000000000chào000000000000000000chào000000000000000000chào000000000000000000chào000000000000000000!
                    </p>
                  </div>
                </div>
              </div>
            <? } ?>
            <!-- <div
                class="list_person_chat_box_item d_flex align_c cursor_p position_r"
              >
                <span class="check_delete display_none">
                            <input class="wh_15px mr_8" type="checkbox">
                        </span>
                <label
                  class="container_checkbox position_a check_delete display_none"
                >
                  <input type="checkbox" />
                  <span class="checkmark wh_15px middle_check"></span>
                </label>
                <span
                  class="num_chat btn_rounded wh_18px position_a back_red d_flex align_c flex_center font_s14 font_w500 cl_white"
                  >2</span
                >
                <div class="d_flex w_100 position_r box_text">
                  <div class="position_r wh_50px">
                    <img
                      class="btn_rounded w_100"
                      src="../../images/doggo.jpg"
                      alt=""
                    />
                    <div
                      class="btn_rounded wh_12px position_a bg_73 br_0"
                    ></div>
                  </div>
                  <div class="pd_l_10">
                    <h4 class="mb_8">Trần Công Chiến</h4>
                    <p class="ellipsis font_s15">
                      Xin
                      chào000000000000000000chào000000000000000000chào000000000000000000chào000000000000000000chào000000000000000000!
                    </p>
                  </div>
                </div>
              </div> -->
            <!-- <div
                class="list_person_chat_box_item d_flex align_c cursor_p position_r"
              >
                <label
                  class="container_checkbox position_a check_delete display_none"
                >
                  <input type="checkbox" />
                  <span class="checkmark wh_15px middle_check"></span>
                </label>
                <span
                  class="num_chat btn_rounded wh_18px position_a back_red d_flex align_c flex_center font_s14 font_w500 cl_white"
                  >2</span
                >
                <div class="d_flex w_100 position_r box_text">
                  <div class="position_r wh_50px">
                    <img
                      class="btn_rounded w_100"
                      src="../../images/doggo.jpg"
                      alt=""
                    />
                    <div
                      class="btn_rounded wh_12px position_a bg_green br_0"
                    ></div>
                  </div>
                  <div class="pd_l_10">
                    <h4 class="mb_8">Trần Công Chiến</h4>
                    <p class="ellipsis font_s15">
                      Xin
                      chào000000000000000000chào000000000000000000chào000000000000000000chào000000000000000000chào000000000000000000!
                    </p>
                  </div>
                </div>
              </div> -->
          </div>
          <div class="h_50px delete_chat_box d_flex space_b">
            <div class="btnXoa btn_group_delete">
              <button onclick="deleteChat(this)" class="d_flex align_c flex_center font_s14 font_w500 cursor_p">
                <img class="mr_6" src="../../images/delete_black.svg" alt="" />Xóa cuộc trò truyện
              </button>
            </div>

            <div class="btnCheckXoa d_flex flex_right display_none btn_group_delete w_100">
              <button onclick="deleteChat(this)" id="btnXoa" class="d_flex align_c flex_center font_s14 font_w500 cursor_p w195 back_red cl_white display_none">
                Xóa
              </button>
              <button onclick="deleteChat(this)" class="d_flex align_c flex_center font_s14 font_w500 cursor_p w195">
                Hủy
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="box_chat text_c">
      <div class="bg_f5 d_flex align_c flex_center height_full_chat">
        <div>
          <img src="../../images/chat_img.png" alt="" />
          <div class="mt_20 border_r12 box_center">
            Nay đã có thể nhắn tin trực tiếp giữa
            <span class="main_color font_w500">Nhà tuyển dụng</span> và
            <span class="main_color font_w500">Ứng viên</span> ngay trên
            <span class="main_color font_w500">Job3s</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="popupContainer popup_chung popup display_none">
    <div id="popupXacNhan" class="display_none popupItem animation_zoom_in">
      <div class="popup_bg dong_popup"></div>
      <div class="popup_content position_a">
        <div class="popup_header position_r">
          <h2 class="font_s20 border_0">Xác nhận</h2>
          <img src="../images/x.svg" alt="" class="position_a dong_popup cursor_p" />
        </div>
        <div class="popup_body">
          <p>
            Bạn có chắc chắn muốn chặn người dùng này không?
          </p>
          <div class="popup_btn">
            <button class="btn_popup_huy dong_popup">Hủy</button>
            <button class="btn_popup_xacnhan">Đồng ý</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="../../js/js_h.js"></script>

<script>
  function deleteChat(ele) {
    var pr = $(ele).parents(".btn_group_delete");
    pr.toggleClass("display_none");
    $(ele)
      .parents(".delete_chat_box")
      .find(".btn_group_delete")
      .not(pr)
      .toggleClass("display_none");

    $(".delete_chat_box").toggleClass("flex_right");

    if ($(".btnCheckXoa").is(':visible')) {
      showCheckBox(1);
      $(".container_checkbox").animate({
        left: "8px"
      });
      $(".box_text").animate({
        left: "16px"
      });
    } else {
      $(".container_checkbox").animate({
        left: "-30px"
      });
      $(".box_text").animate({
        left: "0px"
      }, function() {
        showCheckBox(2);
      });
      removeBtnXoa()
    }
  }

  function showCheckBox(check) {

    $(".check_delete").each(function() {
      if (check == 1) {
        $(this).removeClass("display_none");
      } else {
        $(this).addClass("display_none");
      }
      if ($(this).hasClass("display_none")) {
        $(this).find("input").prop("checked", false);
      }
    });
  }

  $(".check_delete input").change(function() {
    var i = 0;

    $(".check_delete input").each(function() {
      if ($(this).is(":checked")) {
        i++;
      }
    });

    if (i > 0) {
      $("#btnXoa").removeClass("display_none");
      $(".btnCheckXoa").removeClass("flex_right");
      $(".btnCheckXoa").addClass("space_b");
    } else {
      removeBtnXoa()

    }
  });

  function removeBtnXoa() {
    $("#btnXoa").addClass("display_none");
    $(".btnCheckXoa").addClass("flex_right");
    $(".btnCheckXoa").removeClass("space_b");
  }




  function showPopupChat(e) {

    var stt = $(e).data("status");
    var text = '';
    if (stt == 'block') {
      text = 'Bạn có chắc chắn muốn chặn người dùng này không?'
    } else if (stt == 'delete_mess') {
      text = 'Bạn có đồng ý xóa tin nhắn này không?'
    } else if (stt == 'recover') {
      text = 'Bạn có đồng ý thu hồi tin nhắn này không?'
    } else {
      text = 'Bạn có đồng ý xóa cuộc trò chuyện này không?'
    }
    if (stt != undefined) {
      $("#popupXacNhan").removeClass("display_none");
      $('.popup_body p').text(text)
      $(".popupContainer").removeClass("display_none");
    }
  }




  Fancybox.bind('[data-fancybox="gallery"]', {
    dragToClose: false,

    Toolbar: true,
    closeButton: "top",
    Image: {
      zoom: false,
    },

    on: {
      initCarousel: (fancybox) => {
        const slide = fancybox.Carousel.slides[fancybox.Carousel.page];

        fancybox.$container.style.setProperty(
          "--bg-image",
          `url("${slide.$thumb.src}")`
        );
      },
      "Carousel.change": (fancybox, carousel, to, from) => {
        const slide = carousel.slides[to];

        fancybox.$container.style.setProperty(
          "--bg-image",
          `url("${slide.$thumb.src}")`
        );
      },
    },
  });

  $('.list_person_chat_box_item').click(function(e) {
    if ($(e.target).closest('label').length == 1 || $('.list_person_chat_box_item').find('label').is(':visible')) {
      return
    }
    $.ajax({
      type: 'GET',
      url: '../../ajax/render_box_chat.php',
      data: {},
      success: function(data) {
        $('.box_chat').html(data)
        $('.box_chat_body > div').on('loadeddata', $('.box_chat_body').scrollTop($('.box_chat_body > div').get(0).scrollHeight))
        $('html').css('overflow', 'hidden')
      }
    })

  })

  var loadFile = function(event, t) {
    var fileArray = t.files;
    var validImageTypes = ["image/gif", "image/jpeg", "image/png"];
    var i = 0;
    var check = $('.file_xemtruoc_item').length + fileArray.length
    if(check > 10 || fileArray.length > 10) {
      alert('Giới hạn là 10 tệp')
      return;
    }
    $.each(fileArray, function(i, v) {

      name = v.name.toLowerCase();
      type = v.type;
      size = v.size;
      if ($.inArray(type, validImageTypes) < 0) {
        var boxFile = '<div class="wh_86 mt_16 bg_orange_file border_r12 text_l file_xemtruoc_item p_8 mr_24 position_r"><img src="../images/docx_white.png" alt="" class="mb_6"><p class="file_name text_ellipsis word_b ellip_line2 font_w500 font_s14 cl_white">' + name + '</p><div class="wh_20px d_flex align_c flex_center back_red bd_cicre position_a remove_file cursor_p" onclick="removeFile(this)"><img src="../images/x_fat.svg" alt=""></div></div>'
        $('.files_list_container').append(boxFile);


      } else {
        var boxFile = '<div class="wh_86 mt_16 bg_black d_flex align_c flex_center border_r12 file_xemtruoc_item mr_24 plr_5 position_r"><img class="img_file w_100 m-0" src="" alt=""><div class="wh_20px d_flex align_c flex_center back_red bd_cicre position_a remove_file cursor_p" onclick="removeFile(this)"><img src="../images/x_fat.svg" alt=""></div></div>'
        $('.files_list_container').append(boxFile);

        var output = document.querySelector('.img_file');
        output.src = URL.createObjectURL(event.target.files[i]);
        output.onload = function() {
          URL.revokeObjectURL(output.src) // free memory
        }
        $('.img_file').removeClass('img_file')
      }
      i++;
    })
    $('.files_container').addClass('pd_files')
    
    if (!$('.files_container').is(':visible') && $('.file_xemtruoc_item').length > 0) {
      $('.files_container').slideToggle()
      $('.files_container').addClass('d_flex')
      $('.box_chat_footer').removeClass('bt_dc')
    }
    $('#upload_file').val('');
    
  };

  function removeFile(e) {
    $(e).parents('.file_xemtruoc_item').remove()
    if ($('.file_xemtruoc_item').length == 0) {
      $('.files_container').removeClass('d_flex')
      $('.files_container').slideToggle()
      $('.box_chat_footer').addClass('bt_dc')

    }
  }
</script>

</html>