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
    <div class="box_shadow pd_24 mt_24 info_ungvien_item" data-form="thong_tin_co_ban">
      <div class="d_flex space_b">
        <h1 class="main_color font_s20 font_w500">Thông tin cơ bản</h1>
        <div class="d_flex align_c flex_center font_s18 main_color font_w500 cursor_p" onclick="getForm(this)">
          <img class="mr_7" src="../../../images/change.svg" alt="" /> Cập
          nhật
        </div>
      </div>
      <div id="thong_tin_co_ban" class="mt_24 info_ungvien">
        <div class="d_flex">
          <h4 class="font_w500">Họ và tên:</h4>
          <p>Nguyễn Đình Mạnh</p>
        </div>
        <div class="d_flex mt_16">
          <h4 class="font_w500">Giới tính:</h4>
          <p class="gray_c4">Nhập giới tính</p>
        </div>
        <div class="d_flex mt_16">
          <h4 class="font_w500">Ngày sinh:</h4>
          <p class="gray_c4">Nhập ngày sinh</p>
        </div>
        <div class="d_flex mt_16">
          <h4 class="font_w500">Tình trạng hôn nhân:</h4>
          <p class="gray_c4">Nhập tình trạng</p>
        </div>
        <div class="d_flex mt_16">
          <h4 class="font_w500">Số điện thoại:</h4>
          <p class="gray_c4">Nhập số điện thoại</p>
        </div>
        <div class="d_flex mt_16">
          <h4 class="font_w500">Email:</h4>
          <p class="gray_c4">Nhập email</p>
        </div>
        <div class="d_flex mt_16">
          <h4 class="font_w500">Địa chỉ:</h4>
          <p class="gray_c4">Nhập địa chỉ</p>
        </div>
        <div class="d_flex mt_16">
          <h4 class="font_w500">Vị trí công việc:</h4>
          <p class="gray_c4">Nhập vị trí công việc</p>
        </div>
        <div class="d_flex mt_16">
          <h4 class="font_w500">Kinh nghiệm làm việc:</h4>
          <p class="gray_c4">Nhập kinh nghiệm</p>
        </div>
        <div class="d_flex mt_16">
          <h4 class="font_w500">Giới thiệu bản thân:</h4>
          <p class="gray_c4">Giới thiệu bản thân</p>
        </div>
      </div>

    </div>
    <div class="box_shadow pd_24 mt_24 d_flex space_b align_c info_ungvien_item" data-form="so_thich">
      <div class="w_100">
        <div class="d_flex align_c mb_8 space_b">
          <h2 class="main_color font_s20 font_w500">Sở thích</h2>
          <div class="d_flex align_c flex_center font_s18 main_color font_w500 cursor_p" onclick="getForm(this)">
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
          <ul>
            <li>Xem phim</li>
            <li>Nghe nhạc</li>
            <li>Du lịch</li>
          </ul>
        </div>
      </div>
      <!-- <img src="../../../images/favorite.png" alt="" /> -->
    </div>
    <div data-form="muc_tieu" class="box_shadow pd_24 mt_24 d_flex space_b align_c info_ungvien_item">
      <div class="w_100">
        <div class="d_flex align_c mb_8 space_b">
          <h2 class="main_color font_s20 font_w500">Mục tiêu</h2>
          <div class="d_flex align_c flex_center font_s18 main_color font_w500 cursor_p" onclick="getForm(this)">
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
          Mục tiêu của em là bla bla bla......
        </div>
      </div>
      <!-- <img src="../../../images/targetgoal.png" alt="" /> -->
    </div>
    <div data-form="hoc_van" class="box_shadow pd_24 mt_24 d_flex space_b align_c info_ungvien_item">
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
          <div class="mb_24 info_ungvien_item_box">
            <div class="position_r">
              <h4 class="font_w500 mb_8 main_color">Đại học Hoa Sen</h4>
              <p class="mb_8">Công nghệ thông tin</p>
              <p class="mb_8">2017 - hiện nay</p>
              <p class="min_h60">Mô tả quá trình học tập: abcxyz</p>
              <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p" onclick="getForm(this)">
                  <img class="mr_7" src="../../../images/change.svg" alt="" />
                  Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                  <img class="mr_7" src="../../../images/delete_red.svg" alt="" />
                  Xóa
                </div>
              </div>
            </div>
          </div>
          <div class="mb_24 info_ungvien_item_box">
            <div class="position_r">
              <h4 class="font_w500 mb_8 main_color">Đại học Hoa Sen</h4>
              <p class="mb_8">Công nghệ thông tin</p>
              <p class="mb_8">2017 - hiện nay</p>
              <p class="min_h60">Mô tả quá trình học tập: abcxyz</p>
              <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p" onclick="getForm(this)">
                  <img class="mr_7" src="../../../images/change.svg" alt="" />
                  Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                  <img class="mr_7" src="../../../images/delete_red.svg" alt="" />
                  Xóa
                </div>
              </div>
            </div>

          </div>
          <button class="d_flex align_c flex_center btn_bg_white" onclick="getForm(this)">
            <img class="mr_7" src="../../../images/plus_green.svg" alt="" />
            Thêm học vấn
          </button>
        </div>

      </div>

      <!-- <img src="../../../images/education.png" alt="" /> -->
    </div>
    <div data-form="chung_chi" class="box_shadow pd_24 mt_24 d_flex space_b align_c info_ungvien_item">
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
          <div class="info_ungvien_item_box mb_24">
            <div class="position_r">
              <h4 class="font_w500 mb_8 main_color">
                Test of English for International Communication( TOEIC)
              </h4>
              <p class="mb_8">2021- 2023</p>
              <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p" onclick="getForm(this)">
                  <img class="mr_7" src="../../../images/change.svg" alt="" />
                  Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                  <img class="mr_7" src="../../../images/delete_red.svg" alt="" />
                  Xóa
                </div>
              </div>
            </div>
          </div>
          <div class="info_ungvien_item_box mb_24">
            <div class="position_r">
              <h4 class="font_w500 mb_8 main_color">
                Test of English for International Communication( TOEIC)
              </h4>
              <p class="mb_8">Không có thời hạn</p>
              <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p">
                  <img class="mr_7" src="../../../images/change.svg" alt="" />
                  Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                  <img class="mr_7" src="../../../images/delete_red.svg" alt="" />
                  Xóa
                </div>
              </div>
            </div>
          </div>
          <button data-form="chung_chi" class="d_flex align_c flex_center btn_bg_white" onclick="getForm(this)">
            <img class="mr_7" src="../../../images/plus_green.svg" alt="" />
            Thêm chứng chỉ
          </button>
        </div>
      </div>

      <!-- <img src="../../../images/certificate.png" alt="" /> -->
    </div>
    <div data-form="kinh_nghiem" class="box_shadow pd_24 mt_24 d_flex space_b align_c info_ungvien_item">
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
          <div class="info_ungvien_item_box mb_24">
            <div class="position_r">
              <h4 class="font_w500 mb_8 main_color">Plus Studio</h4>
              <p class="mb_8">Công nghệ thông tin</p>
              <p class="mb_8">2017 - hiện nay</p>
              <p class="min_h60">Mô tả quá trình học tập: abcxyz</p>
              <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p" onclick="getForm(this)">
                  <img class="mr_7" src="../../../images/change.svg" alt="" />
                  Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                  <img class="mr_7" src="../../../images/delete_red.svg" alt="" />
                  Xóa
                </div>
              </div>
            </div>
          </div>
          <div class="info_ungvien_item_box mb_24">
            <div class="position_r">
              <h4 class="font_w500 mb_8 main_color">Đại học Hoa Sen</h4>
              <p class="mb_8">Công nghệ thông tin</p>
              <p class="mb_8">2017 - hiện nay</p>
              <p class="min_h60">Mô tả quá trình học tập: abcxyz</p>
              <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p" onclick="getForm(this)">
                  <img class="mr_7" src="../../../images/change.svg" alt="" />
                  Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                  <img class="mr_7" src="../../../images/delete_red.svg" alt="" />
                  Xóa
                </div>
              </div>
            </div>
          </div>
          <button class="d_flex align_c flex_center btn_bg_white" onclick="getForm(this)">
            <img class="mr_7" src="../../../images/plus_green.svg" alt="" />
            Thêm kinh nghiệm
          </button>
        </div>
      </div>

      <!-- <img src="../../../images/exp.png" alt="" /> -->
    </div>
    <div data-form="ky_nang" class="box_shadow pd_24 mt_24 d_flex space_b align_c info_ungvien_item">
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

          <div class="info_ungvien_item_box mb_24">
            <div class="position_r">
              <h4 class="font_w500 mb_8 main_color">After Effect</h4>
              <div class="d_flex">
                <img class="mr_8" src="../../../images/star.svg" alt="" />
                <img class="mr_8" src="../../../images/star.svg" alt="" />
                <img class="mr_8" src="../../../images/star.svg" alt="" />
                <img class="mr_8" src="../../../images/star.svg" alt="" />
                <img src="../../../images/star_gray.svg" alt="" />
              </div>
              <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p" onclick="getForm(this)">
                  <img class="mr_7" src="../../../images/change.svg" alt="" />
                  Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                  <img class="mr_7" src="../../../images/delete_red.svg" alt="" />
                  Xóa
                </div>
              </div>
            </div>
          </div>
          <button class="d_flex align_c flex_center btn_bg_white" onclick="getForm(this)">
            <img class="mr_7" src="../../../images/plus_green.svg" alt="" />
            Thêm kỹ năng
          </button>
        </div>
      </div>

      <!-- <img src="../../../images/skills.png" alt="" /> -->
    </div>
    <div data-form="ngon_ngu" class="box_shadow pd_24 mt_24 d_flex space_b align_c info_ungvien_item">
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

          <div class="mb_24 info_ungvien_item_box">
            <div class="position_r">
              <h4 class="font_w500 mb_8 main_color">Tiếng Anh</h4>
              <p class="mb_8">Cơ bản</p>
              <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p" onclick="getForm(this)">
                  <img class="mr_7" src="../../../images/change.svg" alt="" />
                  Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                  <img class="mr_7" src="../../../images/delete_red.svg" alt="" />
                  Xóa
                </div>
              </div>
            </div>
          </div>
          <div class="info_ungvien_item_box mb_24">
            <div class="position_r">
              <h4 class="font_w500 mb_8 main_color">Tiếng Đức</h4>
              <p class="mb_8">Thành thạo</p>
              <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p" onclick="getForm(this)">
                  <img class="mr_7" src="../../../images/change.svg" alt="" />
                  Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                  <img class="mr_7" src="../../../images/delete_red.svg" alt="" />
                  Xóa
                </div>
              </div>
            </div>
          </div>
          <div class="info_ungvien_item_box mb_24">
            <div class="position_r">
              <h4 class="font_w500 mb_8 main_color">Tiếng Đức</h4>
              <p class="mb_8">Thành thạo</p>
              <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p" onclick="getForm(this)">
                  <img class="mr_7" src="../../../images/change.svg" alt="" />
                  Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                  <img class="mr_7" src="../../../images/delete_red.svg" alt="" />
                  Xóa
                </div>
              </div>
            </div>
          </div>
          <button class="d_flex align_c flex_center btn_bg_white" onclick="getForm(this)">
            <img class="mr_7" src="../../../images/plus_green.svg" alt="" />
            Thêm ngôn ngữ
          </button>
        </div>
      </div>

      <!-- <img src="../../../images/language.png" alt="" /> -->
    </div>
    <div data-form="giai_thuong" class="box_shadow pd_24 mt_24 d_flex space_b align_c info_ungvien_item">
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

          <div class="info_ungvien_item_box mb_24">
            <div class="position_r">
              <h4 class="font_w500 mb_8 main_color">
                Cuộc thi “THE ARTIST AVATAR CHALLENGE”
              </h4>
              <p class="mb_8">Trung tâm nghệ thuật quốc gia</p>
              <p class="mb_8">03/2021</p>
              <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p" onclick="getForm(this)">
                  <img class="mr_7" src="../../../images/change.svg" alt="" />
                  Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                  <img class="mr_7" src="../../../images/delete_red.svg" alt="" />
                  Xóa
                </div>
              </div>
            </div>
          </div>
          <button class="d_flex align_c flex_center btn_bg_white" onclick="getForm(this)">
            <img class="mr_7" src="../../../images/plus_green.svg" alt="" />
            Thêm giải thưởng
          </button>
        </div>

      </div>

      <!-- <img src="../../../images/cup.png" alt="" /> -->
    </div>

    <div data-form="du_an" class="box_shadow pd_24 mt_24 d_flex space_b align_c info_ungvien_item">
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

          <div class="mb_24 info_ungvien_item_box">
            <div class="position_r">
              <h4 class="font_w500 mb_8 main_color">
                Cuộc thi “THE ARTIST AVATAR CHALLENGE”
              </h4>
              <div class="d_flex mb_8">
                <span class="mr_8 font_w500">Khách hàng:</span>
                <p>VTV 6</p>
              </div>
              <div class="d_flex mb_8">
                <span class="mr_8 font_w500">Số thành viên tham gia:</span>
                <p>VTV 6</p>
              </div>
              <div class="d_flex mb_8">
                <span class="mr_8 font_w500">Vị trí:</span>
                <p>VTV 6</p>
              </div>
              <div class="d_flex mb_8">
                <span class="mr_8 font_w500">Nhiệm vụ:</span>
                <p>VTV 6</p>
              </div>
              <div class="d_flex mb_8">
                <span class="mr_8 font_w500">Công nghệ sử dụng: </span>
                <p>VTV 6</p>
              </div>
              <div class="d_flex mb_8">
                <span class="mr_8 font_w500">Thời gian:</span>
                <p>VTV 6</p>
              </div>
              <div class="d_flex mb_8">
                <span class="mr_8 font_w500">Mô tả dự án:</span>
                <p>VTV 6</p>
              </div>

              <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p" onclick="getForm(this)">
                  <img class="mr_7" src="../../../images/change.svg" alt="" />
                  Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                  <img class="mr_7" src="../../../images/delete_red.svg" alt="" />
                  Xóa
                </div>
              </div>
            </div>
          </div>
          <div class="mb_24 info_ungvien_item_box">
            <div class="position_r">
              <h4 class="font_w500 mb_8 main_color">
                Cuộc thi “THE ARTIST AVATAR CHALLENGE”
              </h4>
              <div class="d_flex mb_8">
                <span class="mr_8 font_w500">Khách hàng:</span>
                <p>VTV 6</p>
              </div>
              <div class="d_flex mb_8">
                <span class="mr_8 font_w500">Số thành viên tham gia:</span>
                <p>VTV 6</p>
              </div>
              <div class="d_flex mb_8">
                <span class="mr_8 font_w500">Vị trí:</span>
                <p>VTV 6</p>
              </div>
              <div class="d_flex mb_8">
                <span class="mr_8 font_w500">Nhiệm vụ:</span>
                <p>VTV 6</p>
              </div>
              <div class="d_flex mb_8">
                <span class="mr_8 font_w500">Công nghệ sử dụng: </span>
                <p>VTV 6</p>
              </div>
              <div class="d_flex mb_8">
                <span class="mr_8 font_w500">Thời gian:</span>
                <p>VTV 6</p>
              </div>
              <div class="d_flex mb_8">
                <span class="mr_8 font_w500">Mô tả dự án:</span>
                <p>VTV 6</p>
              </div>

              <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500" onclick="getForm(this)">
                  <img class="mr_7" src="../../../images/change.svg" alt="" />
                  Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500">
                  <img class="mr_7" src="../../../images/delete_red.svg" alt="" />
                  Xóa
                </div>
              </div>
            </div>
          </div>
          <button class="d_flex align_c flex_center btn_bg_white" onclick="getForm(this)">
            <img class="mr_7" src="../../../images/plus_green.svg" alt="" />
            Thêm dự án
          </button>
        </div>
      </div>

      <!-- <img src="../../../images/project.png" alt="" /> -->
    </div>
    <div data-form="hoat_dong" class="box_shadow pd_24 mt_24 d_flex space_b align_c info_ungvien_item">
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

          <div class="mb_24 info_ungvien_item_box">
            <div class="position_r">
              <h4 class="font_w500 mb_8 main_color">Đại học Hoa Sen</h4>
              <p class="mb_8">Công nghệ thông tin</p>
              <p class="mb_8">2017 - hiện nay</p>
              <p class="min_h60">Mô tả quá trình học tập: abcxyz</p>
              <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p" onclick="getForm(this)">
                  <img class="mr_7" src="../../../images/change.svg" alt="" />
                  Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                  <img class="mr_7" src="../../../images/delete_red.svg" alt="" />
                  Xóa
                </div>
              </div>
            </div>
          </div>
          <div class="mb_24 info_ungvien_item_box">
            <div class="position_r">
              <h4 class="font_w500 mb_8 main_color">Đại học Hoa Sen</h4>
              <p class="mb_8">Công nghệ thông tin</p>
              <p class="mb_8">2017 - hiện nay</p>
              <p class="min_h60">Mô tả quá trình học tập: abcxyz</p>
              <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p" onclick="getForm(this)">
                  <img class="mr_7" src="../../../images/change.svg" alt="" />
                  Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                  <img class="mr_7" src="../../../images/delete_red.svg" alt="" />
                  Xóa
                </div>
              </div>
            </div>
          </div>
          <button class="d_flex align_c flex_center btn_bg_white" onclick="getForm(this)">
            <img class="mr_7" src="../../../images/plus_green.svg" alt="" />
            Thêm học vấn
          </button>
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
          <button class="btn h_42 m_w140 br_12 font_s16 line_h19 font_w700 bg_td cl_white btn_primary ml_68">Đồng ý</button>
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

  function showPopup(ele) {
    var type = $(ele).data('type');
    $('.info_type').text(type);
    viewAndClosePopupUpdate('.popupXacNhan', '.main_popup', '.close_popup', '.cancel', '', )
  }
  $('.avt_uv').hover(function() {
    $('.update_avt').addClass('d_flex')
    $('.update_avt').show()
  }, function() {
    $('.update_avt').removeClass('d_flex')
    $('.update_avt').hide()

  })

  function getForm(ele) {
    var text = $(ele).parents('.info_ungvien_item').data('form');
    $(ele).addClass('display_none');
    $.ajax({
      type: 'GET',
      url: '../../../render/form_uv.php',
      data: {
        text: text
      },
      success: function(data) {
        $('#' + text).html(data);
      }
    })
  }
  
</script>

</html>