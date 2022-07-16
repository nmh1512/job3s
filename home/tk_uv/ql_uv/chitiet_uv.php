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
          <button data-id="popupShare" class="ml_16 btn_bg_white d_flex align_c flex_center plr_24">
            <img class="mr_7" src="../../../images/share.svg" alt="" /> Chia
            sẻ hồ sơ
          </button>
          <button class="ml_16 btn_bg_white d_flex align_c flex_center plr_24">
            <img class="mr_7" src="../../../images/change.svg" alt="" /> Chỉnh
            sửa
          </button>
          <button data-id="popupRefresh" class="ml_16 btn_r100 border_or orange d_flex align_c flex_center plr_24">
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
    <div class="box_shadow pd_24 mt_24">
      <div class="d_flex space_b">
        <h1 class="main_color font_s20 font_w500">Thông tin cơ bản</h1>
        <div class="d_flex align_c flex_center font_s18 main_color font_w500 cursor_p">
          <img class="mr_7" src="../../../images/change.svg" alt="" /> Cập
          nhật
        </div>
      </div>
      <div class="mt_24 info_ungvien">
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
      <!-- <div class="mt_24 info_ungvien">
        <form action="">
          <div class="d_flex">
            <div class="div_input mt-0">
              <label for="" class="font_w500">Họ và tên<span class="color_red">*</span></label>
              <div class="input_container">
                <input type="text" placeholder="Nhập họ tên" />
              </div>
            </div>
            <div class="div_input mt-0">
              <label for="" class="font_w500">Giới tính<span class="color_red">*</span></label>
              <div class="input_container">
                <select class="select_form" name="" data-placeholder="Chọn giới tính">
                  <option value=""></option>
                </select>
              </div>
            </div>
          </div>
          <div class="d_flex">
            <div class="div_input">
              <label for="" class="font_w500">Ngày sinh</label>
              <div class="input_container">
                <input type="date" />
              </div>
            </div>
            <div class="div_input">
              <label for="" class="font_w500">Tình trạng hôn nhân</label>
              <div class="input_container">
                <select class="select_form" name="" data-placeholder="Chọn tình trạng hôn nhân">
                  <option value=""></option>
                </select>
              </div>
            </div>
          </div>

          <div class="d_flex flex_column mt_16">
            <label for="" class="font_w500">Địa chỉ<span class="color_red">*</span></label>

            <div class="d_flex">
              <div class="div_input mt-0">
                <div class="input_container">
                  <select class="address select_form" name="" data-placeholder="Chọn tỉnh/thành phố">
                    <option value=""></option>
                  </select>
                </div>
              </div>
              <div class="div_input mt_8">
                <select class="address select_form" name="" data-placeholder="Chọn tỉnh/thành phố">
                  <option value=""></option>
                </select>
              </div>
            </div>
            <div class="w_100 mt_16">
              <textarea name="" id="" cols="30" rows="3" placeholder="Địa chỉ chi tiết"></textarea>
            </div>
          </div>
          <div class="d_flex">
            <div class="div_input">
              <label for="" class="font_w500">Số điện thoại<span class="color_red">*</span></label>
              <div class="input_container">
                <input type="text" placeholder="Nhập số điện thoại" />
              </div>
            </div>
            <div class="div_input">
              <label for="" class="font_w500">Email<span class="color_red">*</span></label>
              <div class="input_container">
                <input type="text" placeholder="Nhập email công ty" />
              </div>
            </div>
          </div>
          <div class="d_flex">
            <div class="div_input">
              <label for="" class="font_w500">Vị trí công việc<span class="color_red">*</span></label>
              <div class="input_container">
                <select class="select_form" name="" data-placeholder="Chọn vị trí công việc">
                  <option value=""></option>
                </select>
              </div>
            </div>
            <div class="div_input">
              <label for="" class="font_w500">Kinh nghiệm làm việc<span class="color_red">*</span></label>
              <div class="input_container">
                <select class="select_form" name="" data-placeholder="Chọn kinh nghiệm làm việc">
                  <option value=""></option>
                </select>
              </div>
            </div>
          </div>
          <div class="mt_16">
            <label for="" class="font_w500">Giới thiệu bản thân</label>
            <textarea class="mt_8" name="" id="" cols="30" rows="5" placeholder="Thêm giới thiệu bản thân để nhà tuyển dụng có thể hiểu hơn về bạn"></textarea>
          </div>
          <div class="form_btns">
            <button type="button" class="btn_huy" onclick="showPopup('#popupXacNhanHuy')">
              Hủy
            </button>
            <button type="submit" class="btn_xacnhan">Cập nhật</button>
          </div>
        </form>
      </div> -->
    </div>
    <div class="box_shadow pd_24 mt_24 d_flex space_b align_c info_ungvien_item">
      <div class="w_100">
        <div class="d_flex align_c mb_8 space_b">
          <h2 class="main_color font_s20 font_w500">Sở thích</h2>
          <!-- <div class="d_flex align_c flex_center font_s18 main_color font_w500 cursor_p">
            <img class="mr_7" src="../../../images/change.svg" alt="" /> Cập
            nhật
          </div> -->
        </div>
        <div>
          <p class="font_s14 line_h20">
            Bạn có thể thêm thông tin cá nhân để chúng tôi hoàn thành hồ sơ
            của bạn
          </p>
          <button class="btn_bg_white mt_24">Cập nhật</button>
        </div>
        <!-- <div class="mt_24">
          <ul>
              <li>Xem phim</li>
              <li>Nghe nhạc</li>
              <li>Du lịch</li>
            </ul>
          <form action="">
            <div>
              <label for="" class="font_w500">Sở thích<span class="color_red">*</span></label>
              <textarea class="mt_8" name="" id="" cols="30" rows="5" placeholder="Sở thích của bạn là?"></textarea>
            </div>
            <div class="form_btns">
              <button type="button" class="btn_huy" onclick="showPopup('#popupXacNhanHuy')">
                Hủy
              </button>
              <button type="submit" class="btn_xacnhan">Cập nhật</button>
            </div>
          </form>
        </div> -->
      </div>
      <img src="../../../images/favorite.png" alt="" />
    </div>
    <div class="box_shadow pd_24 mt_24 d_flex space_b align_c info_ungvien_item">
      <div class="w_100">
        <div class="d_flex align_c mb_8 space_b">
          <h2 class="main_color font_s20 font_w500">Mục tiêu</h2>
          <!-- <div class="d_flex align_c flex_center font_s18 main_color font_w500 cursor_p">
            <img class="mr_7" src="../../../images/change.svg" alt="" /> Cập
            nhật
          </div> -->
        </div>
        <div>
          <p class="font_s14 line_h20">
            Bạn có thể thêm thông tin cá nhân để chúng tôi hoàn thành hồ sơ
            của bạn
          </p>
          <button class="btn_bg_white mt_24">Cập nhật</button>
        </div>
        <!-- <div class="mt_24">
          Mục tiêu của em là bla bla bla......

          <form action="">
            <div>
              <label for="" class="font_w500">Mục tiêu<span class="color_red">*</span></label>
              <textarea class="mt_8" name="" id="" cols="30" rows="5" placeholder="Mục tiêu của bạn là gì?"></textarea>
            </div>
            <div class="form_btns">
              <button type="button" class="btn_huy" onclick="showPopup('#popupXacNhanHuy')">
                Hủy
              </button>
              <button type="submit" class="btn_xacnhan">Cập nhật</button>
            </div>
          </form>
        </div> -->
      </div>
      <img src="../../../images/targetgoal.png" alt="" />
    </div>
    <div class="box_shadow pd_24 mt_24 d_flex space_b align_c info_ungvien_item">
      <div class="w_100">
        <h2 class="main_color font_s20 font_w500 mb_8">Học vấn</h2>
        <div>
          <p class="font_s14 line_h20">
            Bạn có thể thêm thông tin cá nhân để chúng tôi hoàn thành hồ sơ
            của bạn
          </p>
          <button class="btn_bg_white mt_24">Cập nhật</button>
        </div>
        <!-- <div class="mb_24 info_ungvien_item_box">
            <div class="position_r">
              <h4 class="font_w500 mb_8 main_color">Đại học Hoa Sen</h4>
              <p class="mb_8">Công nghệ thông tin</p>
              <p class="mb_8">2017 - hiện nay</p>
              <p class="min_h60">Mô tả quá trình học tập: abcxyz</p>
              <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p">
                  <img class="mr_7" src="../../../images/change.svg" alt="" />
                  Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                  <img
                    class="mr_7"
                    src="../../../images/delete_red.svg"
                    alt=""
                  />
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
                <div class="d_flex mlr_8 main_color font_w500 cursor_p">
                  <img class="mr_7" src="../../../images/change.svg" alt="" />
                  Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                  <img
                    class="mr_7"
                    src="../../../images/delete_red.svg"
                    alt=""
                  />
                  Xóa
                </div>
              </div>
            </div>
            
          </div>
          <button class="d_flex align_c flex_center btn_bg_white">
            <img class="mr_7" src="../../../images/plus_green.svg" alt="" />
            Thêm học vấn
          </button>
        <div class="mt_24">
          <form action="" class="form_uv">
            <div class="d_flex">
              <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Trường học<span class="color_red">*</span></label>
                <div class="input_container">
                  <input type="text" placeholder="Nhập trường học" />
                </div>
              </div>
            </div>
            <div class="d_flex mt_16">
              <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Chuyên ngành<span class="color_red">*</span></label>
                <div class="input_container">
                  <input type="text" placeholder="Nhập chuyên ngành" />
                </div>
              </div>
            </div>
            <div class="mt_16">
              <div>
                <label for="" class="font_w500">Thời gian<span class="color_red">*</span></label>
                <div class="d_flex mt_8">
                  <label class="container_checkbox">
                    <input type="checkbox" />
                    <span class="checkmark"></span>
                  </label>
                  <p>Tôi đang học ở đây</p>
                </div>
              </div>
              <div class="mt_16 select_time d_flex space_b">
                <div>
                  <label for="" class="font_w500">Bắt đầu</label>
                  <div class="input_container d_flex">
                    <div class="mr_24 w_50pt">
                      <select class="select_form mr_24" name="" data-placeholder="Chọn tháng">
                        <option value=""></option>
                      </select>
                    </div>
                    <div class="w_50pt">
                      <select class="select_form" name="" data-placeholder="Chọn năm">
                        <option value=""></option>
                      </select>
                    </div>
                  </div>
                </div>
                <div>
                  <label for="" class="font_w500">Kết thúc</label>
                  <div class="input_container d_flex">
                    <div class="mr_24 w_50pt">
                      <select class="select_form mr_24" name="" data-placeholder="Chọn tháng">
                        <option value=""></option>
                      </select>
                    </div>
                    <div class="w_50pt">
                      <select class="select_form" name="" data-placeholder="Chọn năm">
                        <option value=""></option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="mt_16">
              <label for="" class="font_w500">Mô tả</label>
              <textarea class="mt_8" name="" id="" cols="30" rows="5" placeholder="Thêm mô tả"></textarea>
            </div>
            <div class="form_btns">
              <button type="button" class="btn_huy" onclick="showPopup('#popupXacNhanHuy')">
                Hủy
              </button>
              <button type="submit" class="btn_xacnhan">Cập nhật</button>
            </div>
          </form>
        </div> -->
      </div>

      <img src="../../../images/education.png" alt="" />
    </div>
    <div class="box_shadow pd_24 mt_24 d_flex space_b align_c info_ungvien_item">
      <div class="w_100">
        <h2 class="main_color font_s20 font_w500 mb_8">Chứng chỉ</h2>
        <div>
          <p class="font_s14 line_h20">
            Bạn có thể thêm thông tin cá nhân để chúng tôi hoàn thành hồ sơ
            của bạn
          </p>
          <button class="btn_bg_white mt_24">Cập nhật</button>
        </div>
        <!-- <div class="info_ungvien_item_box mb_24">
            <div class="position_r">
              <h4 class="font_w500 mb_8 main_color">
                Test of English for International Communication( TOEIC)
              </h4>
              <p class="mb_8">2021- 2023</p>
              <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p">
                  <img class="mr_7" src="../../../images/change.svg" alt="" />
                  Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                  <img
                    class="mr_7"
                    src="../../../images/delete_red.svg"
                    alt=""
                  />
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
                  <img
                    class="mr_7"
                    src="../../../images/delete_red.svg"
                    alt=""
                  />
                  Xóa
                </div>
              </div>
            </div>
          </div>
          <button class="d_flex align_c flex_center btn_bg_white">
            <img class="mr_7" src="../../../images/plus_green.svg" alt="" />
            Thêm chứng chỉ
          </button> -->
        <!-- <div class="mt_24">
          <form action="" class="form_uv">
            <div class="d_flex">
              <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Tên chứng chỉ<span class="color_red">*</span></label>
                <div class="input_container">
                  <input type="text" placeholder="Nhập tên chứng chỉ" />
                </div>
              </div>
            </div>
            <div class="d_flex mt_16">
              <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Tổ chức</label>
                <div class="input_container">
                  <input type="text" placeholder="Tổ chức" />
                </div>
              </div>
            </div>
            <div class="mt_16">
              <div>
                <label for="" class="font_w500">Thời gian<span class="color_red">*</span></label>
                <div class="d_flex mt_8">
                  <label class="container_checkbox">
                    <input type="checkbox" />
                    <span class="checkmark"></span>
                  </label>
                  <p>Chứng chỉ không có ngày hết hạn</p>
                </div>
              </div>
              <div class="mt_16 select_time d_flex space_b">
                <div>
                  <label for="" class="font_w500">Thời gian xác thực</label>
                  <div class="input_container d_flex">
                    <div class="mr_24 w_50pt">
                      <select class="select_form mr_24" name="" data-placeholder="Chọn tháng">
                        <option value=""></option>
                      </select>
                    </div>
                    <div class="w_50pt">
                      <select class="select_form" name="" data-placeholder="Chọn năm">
                        <option value=""></option>
                      </select>
                    </div>
                  </div>
                </div>
                <div>
                  <label for="" class="font_w500">Thời gian hết hạn</label>
                  <div class="input_container d_flex">
                    <div class="mr_24 w_50pt">
                      <select class="select_form mr_24" name="" data-placeholder="Chọn tháng">
                        <option value=""></option>
                      </select>
                    </div>
                    <div class="w_50pt">
                      <select class="select_form" name="" data-placeholder="Chọn năm">
                        <option value=""></option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="form_btns">
              <button type="button" class="btn_huy" onclick="showPopup('#popupXacNhanHuy')">
                Hủy
              </button>
              <button type="submit" class="btn_xacnhan">Cập nhật</button>
            </div>
          </form>
        </div> -->
      </div>

      <img src="../../../images/certificate.png" alt="" />
    </div>
    <div class="box_shadow pd_24 mt_24 d_flex space_b align_c info_ungvien_item">
      <div class="w_100">
        <h2 class="main_color font_s20 font_w500 mb_8">Kinh nghiệm</h2>
        <div>
          <p class="font_s14 line_h20">
            Bạn có thể thêm thông tin cá nhân để chúng tôi hoàn thành hồ sơ
            của bạn
          </p>
          <button class="btn_bg_white mt_24">Cập nhật</button>
        </div>
        <!-- <div class="info_ungvien_item_box mb_24">
            <div class="position_r">
              <h4 class="font_w500 mb_8 main_color">Plus Studio</h4>
              <p class="mb_8">Công nghệ thông tin</p>
              <p class="mb_8">2017 - hiện nay</p>
              <p class="min_h60">Mô tả quá trình học tập: abcxyz</p>
              <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p">
                  <img class="mr_7" src="../../../images/change.svg" alt="" />
                  Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                  <img
                    class="mr_7"
                    src="../../../images/delete_red.svg"
                    alt=""
                  />
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
                <div class="d_flex mlr_8 main_color font_w500 cursor_p">
                  <img class="mr_7" src="../../../images/change.svg" alt="" />
                  Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                  <img
                    class="mr_7"
                    src="../../../images/delete_red.svg"
                    alt=""
                  />
                  Xóa
                </div>
              </div>
            </div>
          </div>
          <button class="d_flex align_c flex_center btn_bg_white">
            <img class="mr_7" src="../../../images/plus_green.svg" alt="" />
            Thêm kinh nghiệm
          </button> -->
        <!-- <div class="mt_24">
          <form action="" class="form_uv">
            <div class="d_flex">
              <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Công ty<span class="color_red">*</span></label>
                <div class="input_container">
                  <input type="text" placeholder="Nhập tên công ty" />
                </div>
              </div>
            </div>
            <div class="d_flex mt_16">
              <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Chức vụ<span class="color_red">*</span></label>
                <div class="input_container">
                  <input type="text" placeholder="Nhập chức vụ" />
                </div>
              </div>
            </div>
            <div class="mt_16">
              <div>
                <label for="" class="font_w500">Thời gian<span class="color_red">*</span></label>
                <div class="d_flex mt_8">
                  <label class="container_checkbox">
                    <input type="checkbox" />
                    <span class="checkmark"></span>
                  </label>
                  <p>Tôi đang làm việc ở đây</p>
                </div>
              </div>
              <div class="mt_16 select_time d_flex space_b">
                <div>
                  <label for="" class="font_w500">Bắt đầu</label>
                  <div class="input_container d_flex">
                    <div class="mr_24 w_50pt">
                      <select class="select_form mr_24" name="" data-placeholder="Chọn tháng">
                        <option value=""></option>
                      </select>
                    </div>
                    <div class="w_50pt">
                      <select class="select_form" name="" data-placeholder="Chọn năm">
                        <option value=""></option>
                      </select>
                    </div>
                  </div>
                </div>
                <div>
                  <label for="" class="font_w500">Kết thúc</label>
                  <div class="input_container d_flex">
                    <div class="mr_24 w_50pt">
                      <select class="select_form mr_24" name="" data-placeholder="Chọn tháng">
                        <option value=""></option>
                      </select>
                    </div>
                    <div class="w_50pt">
                      <select class="select_form" name="" data-placeholder="Chọn năm">
                        <option value=""></option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="mt_16">
              <label for="" class="font_w500">Mô tả</label>
              <textarea class="mt_8" name="" id="" cols="30" rows="5" placeholder="Thêm mô tả"></textarea>
            </div>
            <div class="form_btns">
              <button type="button" class="btn_huy" onclick="showPopup('#popupXacNhanHuy')">
                Hủy
              </button>
              <button type="submit" class="btn_xacnhan">Cập nhật</button>
            </div>
          </form>
        </div> -->
      </div>

      <img src="../../../images/exp.png" alt="" />
    </div>
    <div class="box_shadow pd_24 mt_24 d_flex space_b align_c info_ungvien_item">
      <div class="w_100">
        <h2 class="main_color font_s20 font_w500 mb_8">Kỹ năng</h2>
        <div>
          <p class="font_s14 line_h20">
            Bạn có thể thêm thông tin cá nhân để chúng tôi hoàn thành hồ sơ
            của bạn
          </p>
          <button class="btn_bg_white mt_24">Cập nhật</button>
        </div>
        <!-- <div class="info_ungvien_item_box mb_24">
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
                <div class="d_flex mlr_8 main_color font_w500 cursor_p">
                  <img class="mr_7" src="../../../images/change.svg" alt="" />
                  Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                  <img
                    class="mr_7"
                    src="../../../images/delete_red.svg"
                    alt=""
                  />
                  Xóa
                </div>
              </div>
            </div>
          </div>
          <button class="d_flex align_c flex_center btn_bg_white">
            <img class="mr_7" src="../../../images/plus_green.svg" alt="" />
            Thêm kỹ năng
          </button> -->
        <!-- <div class="mt_24">
          <form action="">
            <div class="d_flex">
              <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Tên kỹ năng<span class="color_red">*</span></label>
                <div class="input_container">
                  <input type="text" placeholder="Nhập kỹ năng" />
                </div>
              </div>
            </div>
            <div class="d_flex mt_16">
              <div class="div_input mt-0 w_100">
                <label for="" class="font_w500">Đánh giá</label>
                <div class="d_flex mt_8">
                  <img class="mr_8" src="../../../images/star.svg" alt="" />
                  <img class="mr_8" src="../../../images/star.svg" alt="" />
                  <img class="mr_8" src="../../../images/star.svg" alt="" />
                  <img class="mr_8" src="../../../images/star.svg" alt="" />
                  <img src="../../../images/star_gray.svg" alt="" />
                </div>
              </div>
            </div>
            <div class="mt_16">
              <label for="" class="font_w500">Mô tả chi tiết</label>
              <textarea class="mt_8" name="" id="" cols="30" rows="5" placeholder="Mô tả chi tiết kỹ năng"></textarea>
            </div>
            <div class="form_btns">
              <button type="button" class="btn_huy" onclick="showPopup('#popupXacNhanHuy')">
                Hủy
              </button>
              <button type="submit" class="btn_xacnhan">Cập nhật</button>
            </div>
          </form>
        </div> -->
      </div>

      <img src="../../../images/skills.png" alt="" />
    </div>
    <div class="box_shadow pd_24 mt_24 d_flex space_b align_c info_ungvien_item">
      <div class="w_100">
        <h2 class="main_color font_s20 font_w500 mb_8">Ngôn ngữ</h2>
        <div>
          <p class="font_s14 line_h20">
            Bạn có thể thêm thông tin cá nhân để chúng tôi hoàn thành hồ sơ
            của bạn
          </p>
          <button class="btn_bg_white mt_24">Cập nhật</button>
        </div>
        <!-- <div class="mb_24 info_ungvien_item_box">
            <div class="position_r">
              <h4 class="font_w500 mb_8 main_color">Tiếng Anh</h4>
              <p class="mb_8">Cơ bản</p>
              <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p">
                  <img class="mr_7" src="../../../images/change.svg" alt="" />
                  Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                  <img
                    class="mr_7"
                    src="../../../images/delete_red.svg"
                    alt=""
                  />
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
                <div class="d_flex mlr_8 main_color font_w500 cursor_p">
                  <img class="mr_7" src="../../../images/change.svg" alt="" />
                  Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                  <img
                    class="mr_7"
                    src="../../../images/delete_red.svg"
                    alt=""
                  />
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
                <div class="d_flex mlr_8 main_color font_w500 cursor_p">
                  <img class="mr_7" src="../../../images/change.svg" alt="" />
                  Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                  <img
                    class="mr_7"
                    src="../../../images/delete_red.svg"
                    alt=""
                  />
                  Xóa
                </div>
              </div>
            </div>
          </div>
          <button class="d_flex align_c flex_center btn_bg_white">
            <img class="mr_7" src="../../../images/plus_green.svg" alt="" />
            Thêm ngôn ngữ
          </button> -->
        <!-- <div class="mt_24">
          <form action="">
            <div class="d_flex">
              <div class="div_input mt-0">
                <label for="" class="font_w500">Ngôn ngữ<span class="color_red">*</span></label>
                <div class="input_container">
                  <select class="select_form" name="" data-placeholder="Chọn ngôn ngữ">
                    <option value=""></option>
                  </select>
                </div>
              </div>
              <div class="div_input mt-0">
                <label for="" class="font_w500">Mức độ thành thạo<span class="color_red">*</span></label>
                <div class="input_container">
                  <select class="select_form" name="" data-placeholder="Chọn mức độ">
                    <option value=""></option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form_btns">
              <button type="button" class="btn_huy" onclick="showPopup('#popupXacNhanHuy')">
                Hủy
              </button>
              <button type="submit" class="btn_xacnhan">Cập nhật</button>
            </div>
          </form>
        </div> -->
      </div>

      <img src="../../../images/language.png" alt="" />
    </div>
    <div class="box_shadow pd_24 mt_24 d_flex space_b align_c info_ungvien_item">
      <div class="w_100">
        <h2 class="main_color font_s20 font_w500 mb_8">Giải thưởng</h2>
        <div>
          <p class="font_s14 line_h20">
            Bạn có thể thêm thông tin cá nhân để chúng tôi hoàn thành hồ sơ
            của bạn
          </p>
          <button class="btn_bg_white mt_24">Cập nhật</button>
        </div>
        <!-- <div class="info_ungvien_item_box mb_24">
            <div class="position_r">
              <h4 class="font_w500 mb_8 main_color">
                Cuộc thi “THE ARTIST AVATAR CHALLENGE”
              </h4>
              <p class="mb_8">Trung tâm nghệ thuật quốc gia</p>
              <p class="mb_8">03/2021</p>
              <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p">
                  <img class="mr_7" src="../../../images/change.svg" alt="" />
                  Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                  <img
                    class="mr_7"
                    src="../../../images/delete_red.svg"
                    alt=""
                  />
                  Xóa
                </div>
              </div>
            </div>
          </div>
          <button class="d_flex align_c flex_center btn_bg_white">
            <img class="mr_7" src="../../../images/plus_green.svg" alt="" />
            Thêm giải thưởng
          </button> -->
        <!-- <div class="mt_24">
          <form action="" class="form_uv">
            <div class="d_flex">
              <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Tên giải thưởng<span class="color_red">*</span></label>
                <div class="input_container">
                  <input type="text" placeholder="Nhập tên giải thưởng" />
                </div>
              </div>
            </div>
            <div class="d_flex mt_16">
              <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Tổ chức</label>
                <div class="input_container">
                  <input type="text" placeholder="Tổ chức" />
                </div>
              </div>
            </div>
            <div class="mt_16">
              <div class="mt_16 select_time d_flex space_b">
                <div>
                  <label for="" class="font_w500">Thời gian nhận</label>
                  <div class="input_container d_flex">
                    <div class="mr_24 w_50pt">
                      <select class="select_form mr_24" name="" data-placeholder="Chọn tháng">
                        <option value=""></option>
                      </select>
                    </div>
                    <div class="w_50pt">
                      <select class="select_form" name="" data-placeholder="Chọn năm">
                        <option value=""></option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="form_btns">
              <button type="button" class="btn_huy" onclick="showPopup('#popupXacNhanHuy')">
                Hủy
              </button>
              <button type="submit" class="btn_xacnhan">Cập nhật</button>
            </div>
          </form>
        </div> -->
      </div>

      <img src="../../../images/cup.png" alt="" />
    </div>

    <div class="box_shadow pd_24 mt_24 d_flex space_b align_c info_ungvien_item">
      <div class="w_100">
        <h2 class="main_color font_s20 font_w500 mb_8">Dự án</h2>
        <div>
          <p class="font_s14 line_h20">
            Bạn có thể thêm thông tin cá nhân để chúng tôi hoàn thành hồ sơ
            của bạn
          </p>
          <button class="btn_bg_white mt_24">Cập nhật</button>
        </div>
        <!-- <div class="mb_24 info_ungvien_item_box">
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
              <div class="d_flex mlr_8 main_color font_w500">
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
        <button class="d_flex align_c flex_center btn_bg_white">
          <img class="mr_7" src="../../../images/plus_green.svg" alt="" />
          Thêm dự án
        </button> -->
        <!-- <div class="mt_24">
          <form action="" class="form_uv">
            <div class="d_flex">
              <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Tên dự án<span class="color_red">*</span></label>
                <div class="input_container">
                  <input type="text" placeholder="Nhập tên dự án" />
                </div>
              </div>
            </div>
            <div class="d_flex mt_16">
              <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Khách hàng<span class="color_red">*</span></label>
                <div class="input_container">
                  <input type="text" placeholder="Nhập tên khách hàng" />
                </div>
              </div>
            </div>
            <div class="d_flex mt_16">
              <div class="div_input mt-0 w_100">
                <label for="" class="font_w500 mr_0">Số thành viên<span class="color_red">*</span></label>
                <div class="input_container">
                  <input type="text" placeholder="Số thành viên tham gia dự án" />
                </div>
              </div>
            </div>
            <div class="d_flex mt_16">
              <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Vị trí<span class="color_red">*</span></label>
                <div class="input_container">
                  <input type="text" placeholder="Vị trí của bạn trong dự án" />
                </div>
              </div>
            </div>
            <div class="d_flex mt_16">
              <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Nhiệm vụ<span class="color_red">*</span></label>
                <div class="input_container">
                  <input type="text" placeholder="Nhiệm vụ của bạn trong dự án" />
                </div>
              </div>
            </div>
            <div class="d_flex mt_16">
              <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Công nghệ sử dụng</label>
                <div class="input_container">
                  <input type="text" placeholder="Công nghệ sử dụng trong dự án" />
                </div>
              </div>
            </div>
            <div class="mt_16">
              <div>
                <label for="" class="font_w500">Thời gian<span class="color_red">*</span></label>
                <div class="d_flex mt_8">
                  <label class="container_checkbox">
                    <input type="checkbox" />
                    <span class="checkmark"></span>
                  </label>
                  <p>Tôi đang làm việc ở đây</p>
                </div>
              </div>
              <div class="mt_16 select_time d_flex space_b">
                <div>
                  <label for="" class="font_w500">Bắt đầu</label>
                  <div class="input_container d_flex">
                    <div class="mr_24 w_50pt">
                      <select class="select_form mr_24" name="" data-placeholder="Chọn tháng">
                        <option value=""></option>
                      </select>
                    </div>
                    <div class="w_50pt">
                      <select class="select_form" name="" data-placeholder="Chọn năm">
                        <option value=""></option>
                      </select>
                    </div>
                  </div>
                </div>
                <div>
                  <label for="" class="font_w500">Kết thúc</label>
                  <div class="input_container d_flex">
                    <div class="mr_24 w_50pt">
                      <select class="select_form mr_24" name="" data-placeholder="Chọn tháng">
                        <option value=""></option>
                      </select>
                    </div>
                    <div class="w_50pt">
                      <select class="select_form" name="" data-placeholder="Chọn năm">
                        <option value=""></option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="mt_16">
              <label for="" class="font_w500">Mô tả</label>
              <textarea class="mt_8" name="" id="" cols="30" rows="5" placeholder="Thêm mô tả chi tiết dự án"></textarea>
            </div>
            <div class="form_btns">
              <button type="button" class="btn_huy" onclick="showPopup('#popupXacNhanHuy')">
                Hủy
              </button>
              <button type="submit" class="btn_xacnhan">Cập nhật</button>
            </div>
          </form>
        </div> -->
      </div>

      <img src="../../../images/project.png" alt="" />
    </div>
    <div class="box_shadow pd_24 mt_24 d_flex space_b align_c info_ungvien_item">
      <div class="w_100">
        <h2 class="main_color font_s20 font_w500 mb_8">
          Hoạt động xã hội và tình nguyện
        </h2>
        <div>
          <p class="font_s14 line_h20">
            Bạn có thể thêm thông tin cá nhân để chúng tôi hoàn thành hồ sơ
            của bạn
          </p>
          <button class="btn_bg_white mt_24">Cập nhật</button>
        </div>
        <!-- <div class="mb_24 info_ungvien_item_box">
          <div class="position_r">
            <h4 class="font_w500 mb_8 main_color">Đại học Hoa Sen</h4>
            <p class="mb_8">Công nghệ thông tin</p>
            <p class="mb_8">2017 - hiện nay</p>
            <p class="min_h60">Mô tả quá trình học tập: abcxyz</p>
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
        <div class="mb_24 info_ungvien_item_box">
          <div class="position_r">
            <h4 class="font_w500 mb_8 main_color">Đại học Hoa Sen</h4>
            <p class="mb_8">Công nghệ thông tin</p>
            <p class="mb_8">2017 - hiện nay</p>
            <p class="min_h60">Mô tả quá trình học tập: abcxyz</p>
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
        <button class="d_flex align_c flex_center btn_bg_white">
          <img class="mr_7" src="../../../images/plus_green.svg" alt="" />
          Thêm học vấn
        </button> -->
        <!-- <div class="mt_24">
          <form action="" class="form_uv">
            <div class="d_flex">
              <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Tên tổ chức<span class="color_red">*</span></label>
                <div class="input_container">
                  <input type="text" placeholder="VD: CLB Tình Nguyện Hà Nội" />
                </div>
              </div>
            </div>
            <div class="d_flex mt_16">
              <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Vị trí tham gia<span class="color_red">*</span></label>
                <div class="input_container">
                  <input type="text" placeholder="VD: Thành viên" />
                </div>
              </div>
            </div>

            <div class="mt_16">
              <div>
                <label for="" class="font_w500">Thời gian<span class="color_red">*</span></label>
                <div class="d_flex mt_8">
                  <label class="container_checkbox">
                    <input type="checkbox" />
                    <span class="checkmark"></span>
                  </label>
                  <p>Tôi vẫn đang hoạt động trong tổ chức này</p>
                </div>
              </div>
              <div class="mt_16 select_time d_flex space_b">
                <div>
                  <label for="" class="font_w500">Bắt đầu</label>
                  <div class="input_container d_flex">
                    <div class="mr_24 w_50pt">
                      <select class="select_form mr_24" name="" data-placeholder="Chọn tháng">
                        <option value=""></option>
                      </select>
                    </div>
                    <div class="w_50pt">
                      <select class="select_form" name="" data-placeholder="Chọn năm">
                        <option value=""></option>
                      </select>
                    </div>
                  </div>
                </div>
                <div>
                  <label for="" class="font_w500">Kết thúc</label>
                  <div class="input_container d_flex">
                    <div class="mr_24 w_50pt">
                      <select class="select_form mr_24" name="" data-placeholder="Chọn tháng">
                        <option value=""></option>
                      </select>
                    </div>
                    <div class="w_50pt">
                      <select class="select_form" name="" data-placeholder="Chọn năm">
                        <option value=""></option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="mt_16">
              <label for="" class="font_w500">Mô tả</label>
              <textarea class="mt_8" name="" id="" cols="30" rows="5" placeholder="Mô tả chi tiết về quá trình tham gia hoạt động xã hội của bạn"></textarea>
            </div>
            <div class="form_btns">
              <button type="button" class="btn_huy" onclick="showPopup('#popupXacNhanHuy')">
                Hủy
              </button>
              <button type="submit" class="btn_xacnhan">Cập nhật</button>
            </div>
          </form>
        </div> -->
      </div>

      <img src="../../../images/activity.png" alt="" />
    </div>
  </div>

  <!-- <div class="popupContainer popup_chung popup display_none">
    <div id="popupShare" class="animation_zoom_in display_none popupInput popupItem">
      <div class="popup_header_white position_r">
        <h2 class="font_s20 text_c">Chia sẻ hồ sơ</h2>
        <img src="../../../images/x_black.svg" alt="" class="position_a dong_popup cursor_p" />
      </div>
      <div class="popup_body border_0">
        <div class="popup_big_img mb_24">
          <div class="position_r">
            <img src="../../../images/share_profile.svg" alt="" class="position_r" />
          </div>
        </div>
        <div class="mb_24 popup_link">
          <div class="d_flex">
            <div class="h_42px text_link ellipsis">
              aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
            </div>
            <button class="ml_16 border_0 wh_42px d_flex align_c flex_center cursor_p">
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

    <div id="popupXacNhanHuy" class="display_none popupItem animation_zoom_in">
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
    <div id="popupRefresh" class="display_none popupItem">
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
  </div> -->
</body>
<!-- <div class="popup_account box_shadow_after_login">
  <div class="popup_account_top pd_24 d_flex">
    <img src="../../../images/doggo.jpg" alt="" class="bd_cicre" />
    <div class="w_80pt">
      <h4 class="main_color font_w500 mb_18">Cậu Vàng</h4>
      <div class="d_flex align_c">
        <label class="toggle_checkbox" for="toggle_contact">
          <input type="checkbox" id="toggle_contact" />
          <div class="slider"></div>
        </label>

        <p>Cho phép NTD liên hệ bạn qua</p>
      </div>
      <div class="d_flex align_c mt_16 choose_contact">
        <label class="container_radio">
          <input type="radio" name="radio" id="1" checked />
          <span class="checkmark"></span>
          CV online
        </label>
        <label class="container_radio ml_16">
          <input type="radio" name="radio" id="2" />
          <span class="checkmark"></span>
          Job3S profile
        </label>
      </div>
    </div>
  </div>
  <div class="popup_account_bot pd_24">
    <a href="" class="d_flex popup_account_bot_item cursor_p mb_8">
      <img src="../../../images/avartar_green.png" alt="" />
      <h4>Quản lý tài khoản</h4>
    </a>

    <a href="" class="d_flex popup_account_bot_item cursor_p">
      <img src="../../../images/logout.svg" alt="" />
      <h4>Đăng xuất</h4>
    </a>
  </div>
</div> -->
<script src="../../../js/jquery-3.4.1.min.js"></script>
<script src="../../../js/select2.min.js"></script>
<script src="../../../js/circle-progress.min.js"></script>

<script src="../../../js/js_h.js"></script>
<script>
  $(document).ready(function() {
    new CircleProgress('.progress', {
      max: 100,
      value: 50,
      clockwise: false,
      textFormat: 'percent',
    });

    $("#btnContainer button").each(function() {
      $(this).click(function() {
        var id = $(this).data("id");
        if (id != undefined) {

          $("#" + id).removeClass("display_none");
          $(".popupContainer").removeClass("display_none");
        }
      });
    });
    $(".select_form").select2();

    checkContact();

    function checkContact() {
      if ($("#toggle_contact").is(":checked")) {
        $(".choose_contact").removeClass("display_none");
      } else {
        $(".choose_contact").addClass("display_none");
      }
    }
    $("#toggle_contact").change(function() {
      checkContact();
    });
  })

  $('.avt_uv').hover(function() {
    $('.update_avt').addClass('d_flex')
    $('.update_avt').show()
  }, function() {
    $('.update_avt').removeClass('d_flex')
    $('.update_avt').hide()

  })
</script>

</html>