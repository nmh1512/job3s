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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <?
  include "../../../includes/after_header.php";
  include "../../../includes/slider_bar.php"; ?>
  <section>
    <div class="setting_container main_container">
      <div class="info_company box_shadow_after_login">
        <div class="info_company_header d_flex align_c space_b flex_w">
          <h1 class="main_color pb_16">Thông tin công ty</h1>
          <a id="editCom" class="main_color d_flex align_c space_b btn_bg_white pb_16"><img src="../images/change.svg" alt="" /> Chỉnh sửa</a>
        </div>
        <div class="info_company_content">
          <div class="info_company_content_header d_flex">
            <div class="img_company_logo">
              <img src="../images/doggo.jpg" alt="" />
            </div>
            <div class="info_company_content_header_text">
              <h2 class="font_s22 pd_tb5 border_0">
                Công ty TNHH sàn giao dịch bất động sản TLH
              </h2>
              <h4 class="pd_tb5 font_w500">
                Công nghệ thông tin - viễn thông
              </h4>
            </div>
          </div>

          <div class="list_info_company">
            <div class="d_flex">
              <div class="d_flex w50pt info_item">
                <p>Mã số thuế:</p>
                <span>123456789012</span>
              </div>
              <div class="d_flex w50pt info_item">
                <p>Số điện thoại:</p>
                <span>123456789012</span>
              </div>
            </div>
            <div class="d_flex">
              <div class="d_flex w50pt info_item">
                <p>Quy mô nhân sự:</p>
                <span>50-100 Nhân viên</span>
              </div>
              <div class="d_flex w50pt info_item">
                <p>Email:</p>
                <span>congtytnn1@gmail.com</span>
              </div>
            </div>
            <div class="d_flex">
              <div class="d_flex w50pt info_item">
                <p>Địa chỉ:</p>
                <span>Số 1 Trần Nguyên Đán, Định Công, Hoàng Mai, Hà Nội</span>
              </div>
              <div class="d_flex w50pt info_item">
                <p>Website:</p>
                <span>congty.vn</span>
              </div>
            </div>
            <div class="d_flex info_item">
              <p>Giới thiệu:</p>
              <span>Công ty TNHH Jera Vietnam (Jenhair Vietnam) tự hào là một
                trong những nhà cung cấp Tóc nối đầu tiên tại Việt Nam từ
                những năm 2013 nay . Qua quá trình phát triển, từ một nơi thu
                mua tóc nhỏ lẻ đến nay Jen hair đã phát triển và vươn tầm
                thành Nhà cung cấp tóc lớn nhất Việt Nam và là một nhà cung
                cấp những sản phẩm về tóc tốt nhất trên thế giới .</span>
            </div>
            <div class="d_flex">
              <div class="d_flex info_item">
                <p>Video giới thiệu công ty:</p>
                <span class="gray">Chưa cập nhật</span>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="info_account box_shadow_after_login">
        <div class="info_account_header d_flex align_c space_b flex_w">
          <h1 class="main_color pb_16">Thông tin tài khoản</h1>
          <a id="editAccount" class="main_color d_flex align_c space_b btn_bg_white pb_16"><img src="../images/change.svg" alt="" /> Chỉnh sửa</a>
        </div>
        <div class="info_account_content">

          <div class="avatar_account">
            <div class="input_container d_flex">
              <img src="../images/img_logo.svg" alt="" />
              <div class="mt_5 ml_16">
                <h2 class="font_s22 mb_10 border_0 font_w500">Trần Tiger</h2>
                <h4 class="font_w500">Trưởng phòng</h4>
              </div>
            </div>
          </div>
          <div>
            <div class="d_flex">
              <div class="div_input d_flex">
                <p>Email:</p>
                <span class="font_w500">nguyenthilan123@gmail.com</span>
              </div>
              <div class="div_input d_flex">
                <p>Số điện thoại:</p>
                <span class="font_w500">123456789012</span>
              </div>
            </div>
            <div class="d_flex">
              <div class="div_input d_flex">
                <p>Giới tính:</p>
                <span class="font_w500">Nữ</span>
              </div>
              <div class="div_input d_flex">
                <p>Skype:</p>
                <span class="font_w500">Chưa cập nhật</span>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </section>
  <div id="popupXacNhanHuy" class="popup_chung mfp-with-anim display_none">
    <div class="popup_bg dong_popup"></div>
    <div class="popup_content position_a">
      <div class="popup_header position_r">
        <h2 class="font_s20">Xác nhận</h2>
        <img src="../images/x.svg" alt="" class="position_a dong_popup cursor_p" />
      </div>
      <div class="popup_body">
        <p>
          Bạn có đồng ý hủy cập nhật thông tin <span>Công ty</span>, mọi dữ
          liệu vừa nhập sẽ không được lưu lại ?
        </p>
        <div class="popup_btn">
          <button class="btn_popup_huy dong_popup">Hủy</button>
          <button class="btn_popup_xacnhan">Đồng ý</button>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/select2.min.js"></script>
<script type="text/javascript" src="../js/slick.min.js"></script>
<script src="../js/js_h.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  $('#editAccount').click(function() {
    $(this).hide();
    $.ajax({
      type: 'GET',
      url: '../render/edit_tk_ntd.php',
      data: {},
      success: function(data) {
        $('.info_account_content').html(data);
      }
    })
  })
  $('#editCom').click(function() {
    $(this).hide();
    $.ajax({
      type: 'GET',
      url: '../render/edit_com.php',
      data: {},
      success: function(data) {
        $('.info_company_content').html(data);
      }
    })
  })
</script>

</html>