<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/select2.min.css" />
  <link rel="stylesheet" href="../css/slick.css" />
  <link rel="stylesheet" href="../css/slick-theme.css" />
  <link rel="stylesheet" href="../css/style_t.css" />
  <link rel="stylesheet" href="../css/style_h.css" />
</head>

<body>
  <?
  include "../../../includes/after_header.php";
  include "../../../includes/slider_bar.php"; ?>
  <section>
    <div class="main_container">
      <div class="btn_header_container">
        <h1 class="main_color">Chuyên viên CSKH</h1>
      </div>
      <div class="tuyendung_content">
        <div class="tuyendung_content_header">
          <h3 class="font_s18">Chuyên viên chăm sóc tài khoản</h3>
        </div>
        <div class="content_container">
          <div class="content_item d_flex space_b">
            <div class="w_45pt">
              <h4 class="mb_8">Liên hệ trực tuyến</h4>
              <p class="txt_justify">
                Trong trường hợp khẩn cấp bạn có thắc mắc hoặc cần tư vấn
                những vấn đề về dịch vụ, tài khoản nhà tuyển dụng. Vui lòng
                liên hệ trực tiếp đến chuyên viên chăm sóc tài khoản nhà tuyển
                dụng.
              </p>
            </div>
            <div class="d_flex w50pt">
              <div class="member_avatar_container position_r">
                <img src="../images/doggo.jpg" alt="" class="member_avatar" />
                <div class="member_status position_a btn_main_color">
                  ONLINE
                </div>
              </div>
              <div class="info_member_cskh">
                <div class="d_flex">
                  <p>Tên NVCS:</p>
                  <span class="font_s16 font_w500">Trần Dần</span>
                </div>
                <div class="d_flex">
                  <p>Hotline:</p>
                  <span class="font_s16 font_w500">0978 888 888</span>
                </div>
                <div class="d_flex">
                  <p>Email liên hệ:</p>
                  <span class="font_s16 font_w500">job3s.nguyenthilananh@gmail.com</span>
                </div>
              </div>
            </div>
          </div>
          <div class="content_item">
            <div>
              <h4 class="mb_8">Gửi yêu cầu tư vấn</h4>
              <p class="w_50pt">
                Trong trường hợp bạn muốn được nhận tư vấn, giải đáp thông tin
                qua địa chỉ email.<br />
                Vui lòng nhập thông tin cần tư vấn.
              </p>
            </div>
            <form action="" class="mt_24" style="width: 47%">
              <div class="div_input w_100">
                <label for="" class="font_w500">Tiêu đề<span class="color_red">*</span></label>
                <div class="input_container">
                  <input type="text" placeholder="Bạn đang thắc mắc?" />
                </div>
              </div>
              <div class="div_input w_100">
                <label for="" class="font_w500">Nội dung<span class="color_red">*</span></label>
                <div class="input_container">
                  <textarea name="" id="" cols="30" rows="5" placeholder="Nội dung bạn muốn góp ý hoặc yêu cầu"></textarea>
                </div>
              </div>
              <div class="div_input w_100">
                <label for="" class="font_w500">Họ và tên<span class="color_red">*</span></label>
                <div class="input_container file_container text_c">
                  <div class="choose_file">
                    <p class="gray font_w500">Kéo hoặc thả tệp vào đây</p>
                    <div class="upload_file_container d_flex align_c flex_center">
                      <label class="upload_file bg_orange br_5" for="upload_file"><span>Chọn tệp</span></label>
                      <input type="file" id="upload_file" />
                    </div>
                    <p class="gray">Dung lượng file không vượt quá 5MB!</p>
                  </div>
                  <div class="file_name_container position_r display_none">
                    <p class="text_l" id="file_name"></p>
                    <img src="../images/x_red.svg" alt="" class="position_a remove_file cursor_p" />
                  </div>
                </div>
                <p>
                  ( Hỗ trợ tải lên file: GIF, JPEG, JPG, PNG, BMP, DOC, PDF )
                </p>
              </div>
              <button type="submit" class="mt_24 see_all btn_xacnhan">
                Gửi yêu cầu
              </button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- poup xác nhận -->
  <div class="popup display_none" id="danh_gia_ss">
    <div class="main_popup bg_white popup_500 br_20 animation_zoom_in">
      <div class="conatent_popup pd_t32_lrb24">
        <div class="d_flex center_center flex_column">
          <div class="wh_42">
            <img src="../images/check_big.svg" alt="" class="img_full" />
          </div>
          <h3 class="font_s20 line_h23 font_w700 main_color mt_16 mb_8">
            Gửi yêu cầu thành công
          </h3>
          <p class="font_s16 line_h19 font_w400 cl_55">
            Cảm ơn bạn đã tin tưởng và sử dụng dịch vụ của chúng tôi!
          </p>
          <div class="form_submit d_flex center_center mt_16">
            <a href="" class="btn flex_im text_c center_center btn_r5 font_s16 line_h19 font_w700 bg_td bg_s_green">Đóng</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end poup xác nhận -->
  <div class="popup_account box_shadow_after_login">
    <div class="popup_account_top pd_24 d_flex">
      <img src="../images/doggo.jpg" alt="" class="bd_cicre" />
      <div class="w_80pt">
        <h4 class="main_color font_w500 mb_8">Trần Dần</h4>
        <span class="gray">Công ty Cổ phần Thanh toán Hưng Hà</span>
      </div>
    </div>
    <div class="popup_account_bot pd_24">
      <a href="" class="d_flex popup_account_bot_item cursor_p mb_8">
        <img src="../images/avartar_green.png" alt="">
        <h4>Quản lý tài khoản</h4>
      </a>
      <a href="" class="d_flex popup_account_bot_item cursor_p mb_8">
        <img src="../images/seach_green.svg" alt="">
        <h4>Tìm ứng viên</h4>
      </a>
      <a href="" class="d_flex popup_account_bot_item cursor_p mb_8">
        <img src="../images/docx.svg" alt="">
        <h4>Đăng tin tuyển dụng</h4>
      </a>
      <a href="" class="d_flex popup_account_bot_item cursor_p">
        <img src="../images/logout.svg" alt="">
        <h4>Đăng xuất</h4>
      </a>

    </div>
  </div>
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/select2.min.js"></script>
  <script type="text/javascript" src="../js/slick.min.js"></script>
  <script src="../js/js_h.js"></script>
  <script src="../js/js_t.js"></script>
  <script>
    $("._filter").select2();
    $(".select_popup").select2();

    $(".popup_choose a").click(function() {
      var id = $(this).data("id");
      if (id != undefined) {
        $("#" + id).removeClass("display_none");
        $(".popupContainer").removeClass("display_none");
      }
    });
    $("#upload_file").change(function() {
      var filename = $(this)
        .val()
        .replace(/C:\\fakepath\\/i, "");
      getFileName(filename);
      
    });

    $(".remove_file").click(function() {
      $("#file_name").html("");
      $(".file_name_container").addClass("display_none");
      $(".choose_file").removeClass("display_none");
    });

    function getFileName (filename) {
      $("#file_name").html(filename);
      $(".choose_file").addClass("display_none");
      $(".file_name_container").removeClass("display_none");
    }
    let fileContainer = document.querySelector('.file_container');
    DropFiles(fileContainer, (f) => getFileName(f.name));  
  </script>
</body>

</html>