<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="../../../css/style.css" />
  <link rel="stylesheet" href="../../../css/select2.min.css" />
  <link rel="stylesheet" href="../../../css/style_t.css" />
  <link rel="stylesheet" href="../../../css/style_h.css" />
  <script src="../../../js/jquery-3.4.1.min.js"></script>
  <script src="../../../js/jquery.validate.min.js"></script>

</head>

<body>
  <?
  include "../../../includes/after_header.php";
  include "../../../includes/slider_bar.php"; ?>
  <div class="main_container pd_24">
    <div class="box_shadow border_c4 pd_24 d_flex uv_account_top">
      <div class="border_r16 position_r wh_120px avt_uv">
        <img src="../../../images/doggo.jpg" alt="" class="border_r16 wh_120px border_dc" />
        <div hidden class="position_a align_c flex_center update_avt font_w500 cl_white font_s15 cursor_p"><img src="../../../images/cam.png" alt="">Cập nhật</div>
      </div>
      <div class="ml_16">
        <h2 class="font_w500 orange border_0">Nguyễn Đình Mạnh</h2>
        <p class="gray_c4 pd_tb8">Chưa cập nhật</p>
        <p class="gray_c4">Chưa cập nhật</p>
        <div id="btnContainer" class="mt_24 d_flex flex_w">
          <button class="btn_main_color d_flex align_c flex_center plr_24">
            <img class="mr_7" src="../../../images/download_icon.svg" alt="" />Tải xuống CV
          </button>
          <button data-id="popupShare" class="ml_16 btn_bg_white d_flex align_c flex_center plr_24 show_popup_share" onclick="viewAndClosePopupUpdate('.popupContainer','#popupShare','.dong_popup', '','',)">
            <img class="mr_7" src="../../../images/share.svg" alt="" /> Chia
            sẻ hồ sơ
          </button>
          <button class="ml_16 btn_bg_white d_flex align_c flex_center plr_24">
            <img class="mr_7" src="../../../images/change.svg" alt="" /> Chỉnh
            sửa
          </button>
          <button data-id="popupRefresh" class="ml_16 btn_r100 border_or orange d_flex align_c flex_center plr_24" onclick="viewAndClosePopupUpdate('.popupContainer','#popupRefresh','.dong_popup', '','',true,true,2000)">
            <img class="mr_7" src="../../../images/refresh_o.svg" alt="" />
            Làm mới hồ sơ
          </button>
        </div>
      </div>
    </div>
    <div class="box_shadow pd_24 bg_wblue mt_24">
      <h4 class="main_color font_w500 mb_8">
        Thống kê số lượt xem từ Nhà tuyển dụng
      </h4>
      <p class="green font_s14">Phần này chỉ hiển thị với riêng bạn</p>
      <div class="d_flex mt_16 thongke_uv">
        <div class="box_8px box_thongke_uv">
          <div class="progressbar position_r mb_8">
            <div class="progress"></div>
          </div>
          <p class="font_s14 gray">Tỉ lệ hoàn thiện hồ sơ</p>
        </div>
        <div class="box_8px box_thongke_uv">
          <h2 class="main_color border_0 font_s32">0</h2>
          <p class="font_s14 gray">Lượt xem trong tuần</p>
        </div>
        <div class="box_8px box_thongke_uv">
          <h2 class="main_color border_0 font_s32">0</h2>
          <p class="font_s14 gray">Lượt xem tháng</p>
        </div>
        <div class="box_8px box_thongke_uv">
          <h2 class="main_color border_0 font_s32">0</h2>
          <p class="font_s14 gray">Lượt xem trong năm</p>
        </div>
      </div>
    </div>
    <div class="box_shadow pd_24 mt_24 info_ungvien_item position_r" data-form="thong_tin_co_ban">
      <div class="load_data position_a align_c flex_center">
        <div class="loadingio-spinner-ellipsis-hwg8bfn38dq">
          <div class="loadingio-spinner-ellipsis-g5flt5ae9q8">
            <div class="ldio-0q6g6j8frqsd">
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>

        </div>
      </div>
      <div class="d_flex space_b">
        <h1 class="main_color font_s20 font_w500">Thông tin cơ bản</h1>
        <div class="d_flex align_c flex_center font_s18 main_color font_w500 cursor_p btn_sua" onclick="getForm(this)">
          <img class="mr_7" src="../../../images/change.svg" alt="" /> Cập
          nhật
        </div>
      </div>
      <div id="thong_tin_co_ban" class="mt_24 info_ungvien">

      </div>

    </div>
    <div class="box_shadow pd_24 mt_24 d_flex space_b align_c info_ungvien_item position_r btn_sua" data-form="so_thich">
      <div class="load_data position_a align_c flex_center">
        <div class="loadingio-spinner-ellipsis-hwg8bfn38dq">
          <div class="loadingio-spinner-ellipsis-g5flt5ae9q8">
            <div class="ldio-0q6g6j8frqsd">
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>

        </div>
      </div>
      <div class="w_100">
        <div class="d_flex align_c mb_8 space_b">
          <h2 class="main_color font_s20 font_w500">Sở thích</h2>
          <div class="d_flex align_c flex_center font_s18 main_color font_w500 cursor_p btn_sua" onclick="getForm(this)">
            <img class="mr_7" src="../../../images/change.svg" alt="" /> Cập
            nhật
          </div>
        </div>
        <!-- <div>
          <p class="font_s14 line_h20">
            Bạn có thể thêm thông tin cá nhân để chúng tôi hoàn thành hồ sơ
            của bạn
          </p>
          <button class="btn_bg_white mt_24">Cập nhật</button>
        </div> -->
        <div class="mt_24" id="so_thich">

        </div>
      </div>
      <!-- <img src="../../../images/favorite.png" alt="" /> -->
    </div>
    <div data-form="muc_tieu" class="box_shadow pd_24 mt_24 d_flex space_b align_c info_ungvien_item position_r">
      <div class="load_data position_a align_c flex_center">
        <div class="loadingio-spinner-ellipsis-hwg8bfn38dq">
          <div class="loadingio-spinner-ellipsis-g5flt5ae9q8">
            <div class="ldio-0q6g6j8frqsd">
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>

        </div>
      </div>
      <div class="w_100">
        <div class="d_flex align_c mb_8 space_b">
          <h2 class="main_color font_s20 font_w500">Mục tiêu</h2>
          <div class="d_flex align_c flex_center font_s18 main_color font_w500 cursor_p btn_sua" onclick="getForm(this)">
            <img class="mr_7" src="../../../images/change.svg" alt="" /> Cập
            nhật
          </div>
        </div>
        <!-- <div>
          <p class="font_s14 line_h20">
            Bạn có thể thêm thông tin cá nhân để chúng tôi hoàn thành hồ sơ
            của bạn
          </p>
          <button class="btn_bg_white mt_24">Cập nhật</button>
        </div> -->
        <div class="mt_24" id="muc_tieu">
        </div>
      </div>
      <!-- <img src="../../../images/targetgoal.png" alt="" /> -->
    </div>
    <div data-form="hoc_van" class="box_shadow pd_24 mt_24 d_flex space_b align_c info_ungvien_item position_r">
      <div class="load_data position_a align_c flex_center">
        <div class="loadingio-spinner-ellipsis-hwg8bfn38dq">
          <div class="loadingio-spinner-ellipsis-g5flt5ae9q8">
            <div class="ldio-0q6g6j8frqsd">
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>

        </div>
      </div>
      <div class="w_100">
        <h2 class="main_color font_s20 font_w500 mb_8">Học vấn</h2>

        <!-- <div>
          <p class="font_s14 line_h20">
            Bạn có thể thêm thông tin cá nhân để chúng tôi hoàn thành hồ sơ
            của bạn
          </p>
          <button class="btn_bg_white mt_24">Cập nhật</button>
        </div> -->
        <div id="hoc_van" class="mt_24">

        </div>

      </div>

      <!-- <img src="../../../images/education.png" alt="" /> -->
    </div>
    <div data-form="chung_chi" class="box_shadow pd_24 mt_24 d_flex space_b align_c info_ungvien_item position_r">
      <div class="load_data position_a align_c flex_center">
        <div class="loadingio-spinner-ellipsis-hwg8bfn38dq">
          <div class="loadingio-spinner-ellipsis-g5flt5ae9q8">
            <div class="ldio-0q6g6j8frqsd">
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>

        </div>
      </div>
      <div class="w_100">
        <h2 class="main_color font_s20 font_w500 mb_8">Chứng chỉ</h2>
        <!-- <div>
          <p class="font_s14 line_h20">
            Bạn có thể thêm thông tin cá nhân để chúng tôi hoàn thành hồ sơ
            của bạn
          </p>
          <button class="btn_bg_white mt_24">Cập nhật</button>
        </div> -->
        <div id="chung_chi" class="mt_24">

        </div>
      </div>

      <!-- <img src="../../../images/certificate.png" alt="" /> -->
    </div>
    <div data-form="kinh_nghiem" class="box_shadow pd_24 mt_24 d_flex space_b align_c info_ungvien_item position_r">
      <div class="load_data position_a align_c flex_center">
        <div class="loadingio-spinner-ellipsis-hwg8bfn38dq">
          <div class="loadingio-spinner-ellipsis-g5flt5ae9q8">
            <div class="ldio-0q6g6j8frqsd">
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>

        </div>
      </div>
      <div class="w_100">
        <h2 class="main_color font_s20 font_w500 mb_8">Kinh nghiệm</h2>
        <!-- <div>
          <p class="font_s14 line_h20">
            Bạn có thể thêm thông tin cá nhân để chúng tôi hoàn thành hồ sơ
            của bạn
          </p>
          <button class="btn_bg_white mt_24">Cập nhật</button>
        </div> -->
        <div id="kinh_nghiem" class="mt_24">

        </div>
      </div>

      <!-- <img src="../../../images/exp.png" alt="" /> -->
    </div>
    <div data-form="ky_nang" class="box_shadow pd_24 mt_24 d_flex space_b align_c info_ungvien_item position_r">
      <div class="load_data position_a align_c flex_center">
        <div class="loadingio-spinner-ellipsis-hwg8bfn38dq">
          <div class="loadingio-spinner-ellipsis-g5flt5ae9q8">
            <div class="ldio-0q6g6j8frqsd">
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>

        </div>
      </div>
      <div class="w_100">
        <h2 class="main_color font_s20 font_w500 mb_8">Kỹ năng</h2>
        <!-- <div>
          <p class="font_s14 line_h20">
            Bạn có thể thêm thông tin cá nhân để chúng tôi hoàn thành hồ sơ
            của bạn
          </p>
          <button class="btn_bg_white mt_24">Cập nhật</button>
        </div> -->
        <div id="ky_nang" class="mt_24">


        </div>
      </div>

      <!-- <img src="../../../images/skills.png" alt="" /> -->
    </div>
    <div data-form="ngon_ngu" class="box_shadow pd_24 mt_24 d_flex space_b align_c info_ungvien_item position_r">
      <div class="load_data position_a align_c flex_center">
        <div class="loadingio-spinner-ellipsis-hwg8bfn38dq">
          <div class="loadingio-spinner-ellipsis-g5flt5ae9q8">
            <div class="ldio-0q6g6j8frqsd">
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>

        </div>
      </div>
      <div class="w_100">
        <h2 class="main_color font_s20 font_w500 mb_8">Ngôn ngữ</h2>
        <!-- <div>
          <p class="font_s14 line_h20">
            Bạn có thể thêm thông tin cá nhân để chúng tôi hoàn thành hồ sơ
            của bạn
          </p>
          <button class="btn_bg_white mt_24">Cập nhật</button>
        </div> -->
        <div id="ngon_ngu" class="mt_24">


        </div>
      </div>

      <!-- <img src="../../../images/language.png" alt="" /> -->
    </div>
    <div data-form="giai_thuong" class="box_shadow pd_24 mt_24 d_flex space_b align_c info_ungvien_item position_r">
      <div class="load_data position_a align_c flex_center">
        <div class="loadingio-spinner-ellipsis-hwg8bfn38dq">
          <div class="loadingio-spinner-ellipsis-g5flt5ae9q8">
            <div class="ldio-0q6g6j8frqsd">
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>

        </div>
      </div>
      <div class="w_100">
        <h2 class="main_color font_s20 font_w500 mb_8">Giải thưởng</h2>
        <!-- <div>
          <p class="font_s14 line_h20">
            Bạn có thể thêm thông tin cá nhân để chúng tôi hoàn thành hồ sơ
            của bạn
          </p>
          <button class="btn_bg_white mt_24">Cập nhật</button>
        </div> -->
        <div id="giai_thuong" class="mt_24">


        </div>

      </div>

      <!-- <img src="../../../images/cup.png" alt="" /> -->
    </div>

    <div data-form="du_an" class="box_shadow pd_24 mt_24 d_flex space_b align_c info_ungvien_item position_r">
      <div class="load_data position_a align_c flex_center">
        <div class="loadingio-spinner-ellipsis-hwg8bfn38dq">
          <div class="loadingio-spinner-ellipsis-g5flt5ae9q8">
            <div class="ldio-0q6g6j8frqsd">
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>

        </div>
      </div>
      <div class="w_100">
        <h2 class="main_color font_s20 font_w500 mb_8">Dự án</h2>
        <!-- <div>
          <p class="font_s14 line_h20">
            Bạn có thể thêm thông tin cá nhân để chúng tôi hoàn thành hồ sơ
            của bạn
          </p>
          <button class="btn_bg_white mt_24">Cập nhật</button>
        </div> -->
        <div id="du_an" class="mt_24">


        </div>
      </div>

      <!-- <img src="../../../images/project.png" alt="" /> -->
    </div>
    <div data-form="hoat_dong" class="box_shadow pd_24 mt_24 d_flex space_b align_c info_ungvien_item position_r">
      <div class="load_data position_a align_c flex_center">
        <div class="loadingio-spinner-ellipsis-hwg8bfn38dq">
          <div class="loadingio-spinner-ellipsis-g5flt5ae9q8">
            <div class="ldio-0q6g6j8frqsd">
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>

        </div>
      </div>
      <div class="w_100">
        <h2 class="main_color font_s20 font_w500 mb_8">
          Hoạt động xã hội và tình nguyện
        </h2>
        <!-- <div>
          <p class="font_s14 line_h20">
            Bạn có thể thêm thông tin cá nhân để chúng tôi hoàn thành hồ sơ
            của bạn
          </p>
          <button class="btn_bg_white mt_24">Cập nhật</button>
        </div> -->
        <div id="hoat_dong" class="mt_24">


        </div>
      </div>

      <!-- <img src="../../../images/activity.png" alt="" /> -->
    </div>
  </div>

  <div class="popupContainer popup_chung popup hidden">
    <div id="popupShare" class="animation_zoom_in popupInput popupItem hidden">
      <div class="popup_header_white position_r">
        <h2 class="font_s20 text_c">Chia sẻ hồ sơ</h2>
        <img src="../../../images/close_gray.png" alt="" class="position_a dong_popup cursor_p t_24" />
      </div>
      <div class="popup_body border_0">
        <div class="popup_big_img mb_24">
          <div class="position_r">
            <img src="../../../images/share_profile.png" alt="" class="position_r" />
          </div>
        </div>
        <div class="mb_24 popup_link">
          <div class="d_flex">
            <div class="h_42px text_link ellipsis">
              aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
            </div>
            <button class="ml_16 border_0 wh_42px d_flex align_c flex_center cursor_p copyeid" onclick="Copyied(this, '.text_link')">
              <img src="../../../images/link.svg" alt="" />
            </button>
          </div>
        </div>
        <div class="d_flex align_c flex_center">
          <img src="../../../images/fb_circle.svg" alt="" />
          <img class="ml_16" src="../../../images/twt_circle.svg" alt="" />
          <img class="ml_16" src="../../../images/linkedin.svg" alt="" />
          <img class="ml_16" src="../../../images/zalo.svg" alt="" />
        </div>
      </div>
    </div>

    <div id="popupXacNhanHuy" class="popupItem animation_zoom_in hidden">
      <div class="popup_bg dong_popup"></div>
      <div class="popup_content position_a">
        <div class="popup_header position_r">
          <h2 class="font_s20 border_0">Xác nhận</h2>
          <img src="../images/x.svg" alt="" class="position_a dong_popup cursor_p" />
        </div>
        <div class="popup_body">
          <p>
            Bạn có đồng ý hủy cập nhật thông tin
            <span class="font_w500">Học vấn</span>, mọi dữ liệu vừa nhập sẽ
            không được lưu lại ?
          </p>
          <div class="popup_btn">
            <button class="btn_popup_huy dong_popup">Hủy</button>
            <button class="btn_popup_xacnhan">Đồng ý</button>
          </div>
        </div>
      </div>
    </div>
    <div id="popupRefresh" class="popupItem hidden">
      <div class="main_popup bg_white popup_500 br_20 animation_zoom_in">
        <div class="conatent_popup pd_t32_lrb24">
          <div class="d_flex center_center flex_column">
            <div class="wh_42">
              <img src="../../../images/check_big.svg" alt="" class="img_full" />
            </div>
            <h3 class="font_s20 line_h23 font_w700 main_color mt_16 mb_8">
              Làm mới hồ sơ thành công
            </h3>
            <p class="font_s16 line_h19 font_w400 cl_55">
              Hồ sơ của bạn đã được cập nhật trên trang ứng viên!
            </p>
            <div class="form_submit d_flex center_center mt_16">
              <a href="" class="btn flex_im text_c center_center btn_r5 font_s16 line_h19 font_w700 bg_td bg_s_green">Đóng</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<div class="popup popupXacNhan hidden">
  <div class="main_popup bg_white popup_500 br_20 animation_zoom_in hidden">
    <div class="header_popup position_r btn_primary d_flex center_center pd_19_18 hd_popup">
      <h3 class="font_s20 line_h23 cl_white font_w700">Xác nhận</h3>
      <div class="close_popup">
        <img src="../../images/close_white.png" alt="">
      </div>
    </div>
    <div class="conatent_popup">
      <form onsubmit="return false" action="" method="POST">
        <p class="font_s16 line_h19 font_w400 cl_a4 pd_48_24 txt_center">Bạn có đồng ý hủy cập nhật thông tin <span class="font_w500 info_type"></span>, mọi dữ liệu vừa nhập sẽ không được lưu lại ?</p>
        <div class="form_submit d_flex center_center pd_24 pd_t0">
          <button class="cancel font_s16 line_h19 font_w700 btn h_42 flex_im m_w140 center_center cl_primary bg_w bg_td bd_td br_12">Hủy</button>
          <button class="btn h_42 m_w140 br_12 font_s16 line_h19 font_w700 bg_td cl_white btn_primary ml_68 btn_xacnhan">Đồng ý</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="../../../js/select2.min.js"></script>
<script src="../../../js/circle-progress.min.js"></script>

<script src="../../../js/js_main.js"></script>
<script>
  $(document).ready(function() {
    new CircleProgress('.progress', {
      max: 100,
      value: 50,
      clockwise: false,
      textFormat: 'percent',
    });



  })

  function showPopup(ele, text) {
    var type = $(ele).data('type');
    var parent = $(ele).parents('.info_ungvien_item')
    var text = parent.data('form');
    $('.info_type').text(type);
    let {
      infor_menu,
      clearAmintions
    } = viewAndClosePopupUpdate('.popupXacNhan', '.main_popup', '.close_popup', '.cancel', '', )
    $(infor_menu).find('.btn_xacnhan').click(function() {
      clearAmintions()
      getTT(text)
      parent.find('.btn_sua').removeClass('display_none')
    })


  }
  $('.avt_uv').hover(function() {
    $('.update_avt').addClass('d_flex')
    $('.update_avt').show()
  }, function() {
    $('.update_avt').removeClass('d_flex')
    $('.update_avt').hide()

  })

  function getForm(ele) {
    var parent = $(ele).parents('.info_ungvien_item');
    parent.find('.load_data').css('display', 'flex');
    var text = $(ele).parents('.info_ungvien_item').data('form');
    $.ajax({
      type: 'GET',
      url: '../../../render/form_uv.php',
      data: {
        text: text
      },
      success: function(data) {
        $('#' + text).html(data);
        if ($(ele).hasClass('btn_sua')) {
          $(ele).addClass('display_none')
        }
        parent.find('.load_data').css('display', 'none');

      }
    })
  }

  function getTT(type) {
    var find = $('#' + type).parents('.info_ungvien_item').find('.load_data');
    find.css('display', 'flex');
    $.ajax({
      type: 'GET',
      url: '../../../render/render_info_uv.php',
      data: {
        type: type,
      },
      success: function(data) {
        $('#' + type).html(data);
        find.css('display', 'none');

      }

    })
  }
  $('.info_ungvien_item').each(function() {
    var type = $(this).data('form');
    getTT(type);
  })
</script>

</html>