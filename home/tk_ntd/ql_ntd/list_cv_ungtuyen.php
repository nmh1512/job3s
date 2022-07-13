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
    <link rel="stylesheet" href="../css/style_t.css" />
  <link rel="stylesheet" href="../css/slick-theme.css" />
  <link rel="stylesheet" href="../css/style_h.css" />
</head>

<body>
<?
    include "../../../includes/after_header.php";
    include "../../../includes/slider_bar.php"; ?>
  <section>
    <div class="tuyendung_container main_container">
      <div class="d_flex align_c space_b btn_header_container">
        <div>
          <button class="btn_chung bg_white_border_green cursor_p">
            <img src="../images/left_arrow.svg" alt="" />Quay lại
          </button>
        </div>
      </div>
      <div class="tuyendung_content">
        <div class="tuyendung_content_navbar">
          <ul>
            <li>
              <a href="tin-tuyen-dung" class="font_w700">Tin tuyển dụng</a>
            </li>
            <li>
              <a href="thong-ke-tuyen-dung" class="font_w700">Thống kê</a>
            </li>
            <li>
              <a href="cv-ung-tuyen" class="font_w700 nav_active">CV ứng tuyển</a>
            </li>
            <li>
              <a href="cv-ho-tro" class="font_w700">CV được hỗ trợ</a>
            </li>
            <li>
              <a href="dich-vu-tuyen-dung" class="font_w700">Dịch vụ</a>
            </li>
          </ul>
        </div>
        <div class="thong_ke_table_container">
        <div class="tuyen_dung_filter d_flex align_c flex_w">
            <div class="position_r">
              <input type="text" class="filter_box" placeholder="Tìm ứng viên" />
              <img src="../images/seach_green.svg" alt="" class="position_a img_search" />
            </div>
            <div class="select_filter_box_1">
              <select name="" id="" class="_filter filter_box">
                <option value="1" selected>Chỉ hiển thị tất cả CV</option>
                <option value="2">Chỉ hiển thị CV chưa xem</option>
              </select>
            </div>
            <div class="select_filter_box_2">

              <select name="" id="" class="_filter filter_box">
                <option value="1">Tất cả trạng thái hồ sơ</option>
                <option value="2">CV tiếp nhận</option>
                <option value="3">Phù hợp</option>
                <option value="4">Hẹn phỏng vấn</option>
                <option value="5">Gửi đề nghị</option>
                <option value="6">Nhận việc</option>
                <option value="7">Từ chối</option>
              </select>
            </div>

            <button class="btn_chung bg_green">Xuất excel</button>
          </div>
          <div class="tuyen_dung_table">
            <table class="table_list_cv table_collapse">
              <thead class="bg_s_green h_50px">
                <th style="width: 70px">STT</th>
                <th class="text_l">Ứng viên</th>
                <th class="text_l">Thông tin liên hệ</th>
                <th class="text_l">Thông tin chi tiết</th>
                <th class="text_l">Trạng thái</th>
                <th>Chức năng</th>
              </thead>
              <tbody>
                <tr>
                  <td class="txt_center">1</td>
                  <td>
                    <div class="d_flex">
                      <img class="img_table mr_8" src="../images/doggo.jpg" alt="" />
                      <div class="info_uv">
                        <h4 class="main_color font_w500 mb_8">
                          Trần Danh Tân
                        </h4>
                        <span class="see_box bg_orange">Chưa xem</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d_flex align_c mb_8">
                      <img src="../images/main_green.svg" class="mr_8" alt="" />
                      nguyenthilan@gmail.com
                    </div>
                    <div class="d_flex align_c">
                      <img src="../images/call_green.svg" class="mr_8" alt="" />
                      0987654341
                    </div>
                  </td>
                  <td>
                    <div class="d_flex align_c mb_8">
                      <img src="../images/calendar.svg" class="mr_8" alt="" />
                      nguyenthilan@gmail.com
                    </div>
                    <div class="d_flex align_c">
                      <img src="../images/bag.svg" class="mr_8" alt="" />
                      0987654341
                    </div>
                  </td>
                  <td><span class="see_box bg_gray">CV tiếp nhận</span></td>
                  <td>
                    <div class="see_box bg_gray text_c cursor_p position_r show_popup_choose" onclick="show_popup_choose(this)">
                      <img class="show_popup_choose" src="../images/setting_green.svg" alt="" />
                      <div class="popup_choose position_a">
                        <a data-id="popupDanhGia" class="popup_choose_top d_flex align_c">
                          <img src="../images/up_cv.svg" alt="" />
                          <p>Cập nhật trạng thái CV</p>
                        </a>
                        <a data-id="popupGhiChu" class="d_flex align_c">
                          <img src="../images/edit.svg" alt="" />
                          <p>Ghi chú</p>
                        </a>
                        <a class="d_flex align_c">
                          <img src="../images/download_icon_green.svg" alt="" />
                          <p>Tải CV</p>
                        </a>
                        <a data-id="popupXacNhanHuy" class="popup_choose_bot d_flex align_c">
                          <img src="../images/delete.svg" alt="" />
                          <p>Xóa ứng viên</p>
                        </a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="txt_center">2</td>
                  <td>
                    <div class="d_flex">
                      <img class="img_table mr_8" src="../images/doggo.jpg" alt="" />
                      <div class="info_uv">
                        <h4 class="main_color font_w500 mb_8">
                          Trần Công Chiến
                        </h4>
                        <span class="see_box bg_orange">Chưa xem</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d_flex align_c mb_8">
                      <img src="../images/main_green.svg" class="mr_8" alt="" />
                      nguyenthilan@gmail.com
                    </div>
                    <div class="d_flex align_c">
                      <img src="../images/call_green.svg" class="mr_8" alt="" />
                      0987654341
                    </div>
                  </td>
                  <td>
                    <div class="d_flex align_c mb_8">
                      <img src="../images/calendar.svg" class="mr_8" alt="" />
                      nguyenthilan@gmail.com
                    </div>
                    <div class="d_flex align_c">
                      <img src="../images/bag.svg" class="mr_8" alt="" />
                      0987654341
                    </div>
                  </td>
                  <td><span class="see_box bg_gray">CV tiếp nhận</span></td>
                  <td>
                    <div class="see_box bg_gray text_c cursor_p position_r show_popup_choose" onclick="show_popup_choose(this)">
                      <img class="show_popup_choose" src="../images/setting_green.svg" alt="" />
                      <div class="popup_choose position_a">
                        <a data-id="popupDanhGia" class="popup_choose_top d_flex align_c">
                          <img src="../images/up_cv.svg" alt="" />
                          <p>Cập nhật trạng thái CV</p>
                        </a>
                        <a data-id="popupGhiChu" class="d_flex align_c">
                          <img src="../images/edit.svg" alt="" />
                          <p>Ghi chú</p>
                        </a>
                        <a class="d_flex align_c">
                          <img src="../images/download_icon_green.svg" alt="" />
                          <p>Tải CV</p>
                        </a>
                        <a data-id="popupXacNhanHuy" class="popup_choose_bot d_flex align_c">
                          <img src="../images/delete.svg" alt="" />
                          <p>Xóa ứng viên</p>
                        </a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="txt_center">3</td>
                  <td>
                    <div class="d_flex">
                      <img class="img_table mr_8" src="../images/doggo.jpg" alt="" />
                      <div class="info_uv">
                        <h4 class="main_color font_w500 mb_8">
                          Nguyễn Bá Công
                        </h4>
                        <span class="see_box bg_green">Đã xem</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d_flex align_c mb_8">
                      <img src="../images/main_green.svg" class="mr_8" alt="" />
                      nguyenthilan@gmail.com
                    </div>
                    <div class="d_flex align_c">
                      <img src="../images/call_green.svg" class="mr_8" alt="" />
                      0987654341
                    </div>
                  </td>
                  <td>
                    <div class="d_flex align_c mb_8">
                      <img src="../images/calendar.svg" class="mr_8" alt="" />
                      nguyenthilan@gmail.com
                    </div>
                    <div class="d_flex align_c">
                      <img src="../images/bag.svg" class="mr_8" alt="" />
                      0987654341
                    </div>
                  </td>
                  <td><span class="see_box bg_gray">CV tiếp nhận</span></td>
                  <td>
                    <div class="see_box bg_gray text_c cursor_p position_r show_popup_choose" onclick="show_popup_choose(this)">
                      <img class="show_popup_choose" src="../images/setting_green.svg" alt="" />
                      <div class="popup_choose position_a">
                        <a data-id="popupDanhGia" class="popup_choose_top d_flex align_c">
                          <img src="../images/up_cv.svg" alt="" />
                          <p>Cập nhật trạng thái CV</p>
                        </a>
                        <a data-id="popupGhiChu" class="d_flex align_c">
                          <img src="../images/edit.svg" alt="" />
                          <p>Ghi chú</p>
                        </a>
                        <a class="d_flex align_c">
                          <img src="../images/download_icon_green.svg" alt="" />
                          <p>Tải CV</p>
                        </a>
                        <a data-id="popupXacNhanHuy" class="popup_choose_bot d_flex align_c">
                          <img src="../images/delete.svg" alt="" />
                          <p>Xóa ứng viên</p>
                        </a>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="popupContainer popup_chung popup display_none">
    <div id="popupDanhGia" class="animation_zoom_in popupInput display_none popupItem">
      <div class="popup_header position_r">
        <h2 class="font_s20">Đánh giá ứng viên</h2>
        <img src="../images/x.svg" alt="" class="position_a dong_popup cursor_p" />
      </div>
      <div class="popup_body">
        <div class="w_100 text_l div_input m-0">
          <label for="" class="font_w500">Trạng thái</label>
          <div class="input_container">
            <select name="" id="" class="select_popup">
              <option value="1" selected>CV tiếp nhận</option>
              <option value="2">Phù hợp</option>
              <option value="3">Hẹn phỏng vấn</option>
              <option value="4">Gửi đề nghị</option>
              <option value="5">Nhận việc</option>
              <option value="6">Từ chối</option>
            </select>
          </div>
        </div>
        <div class="w_100 text_l mt_20">
          <label for="" class="font_w500">Ghi chú</label>
          <div class="input_container">
            <textarea name="" id="" cols="30" rows="10" placeholder="Bạn có muốn ghi chú cho sự thay đổi trạng thái này không?"></textarea>
          </div>
        </div>

        <div class="mt_24 d_flex align_c flex_center">
          <button class="btn_bg_white btn_r5 main_color dong_popup">Hủy</button>
          <button class="bg_s_green btn_r5">Cập nhật</button>
        </div>
      </div>

    </div>
    <div id="popupGhiChu" class="popupInput display_none popupItem animation_zoom_in">
      <div class="popup_header position_r">
        <h2 class="font_s20">Ghi chú</h2>
        <img src="../images/x.svg" alt="" class="position_a dong_popup cursor_p" />
      </div>
      <div class="popup_body">

        <div class="w_100 text_l">
          <label for="" class="font_w500">Ghi chú</label>
          <div class="input_container">
            <textarea name="" id="" cols="30" rows="10" placeholder="Nhập nội dung ghi chú"></textarea>
          </div>
        </div>

        <div class="mt_24 d_flex align_c flex_center">
          <button class="btn_bg_white btn_r5 main_color dong_popup">Hủy</button>
          <button class="bg_s_green btn_r5">Cập nhật</button>
        </div>
      </div>

    </div>
    <div id="popupXacNhanHuy" class="display_none popupItem animation_zoom_in">
      <div class="popup_bg dong_popup"></div>
      <div class="popup_content position_a">
        <div class="popup_header position_r">
          <h2 class="font_s20">Xác nhận</h2>
          <img src="../images/x.svg" alt="" class="position_a dong_popup cursor_p" />
        </div>
        <div class="popup_body">
          <p>
            Bạn có đồng xóa hồ sơ ứng tuyển của <span class="font_w500">Nguyễn Thị Hoa</span> không?
          </p>
          <div class="popup_btn">
            <button class="btn_popup_huy dong_popup">Hủy</button>
            <button class="btn_popup_xacnhan">Đồng ý</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/select2.min.js"></script>
  <script type="text/javascript" src="../js/slick.min.js"></script>
  <script src="../js/js_h.js"></script>
  <script>
    $("._filter").select2();
    $('.select_popup').select2();

    $('.popup_choose a').each(function() {
      $(this).click(function() {
        var id = $(this).data('id');
        if (id != undefined) {
          $('#' + id).removeClass('display_none')
          $('.popupContainer').removeClass('display_none')
        }
      })
    })
  </script>
</body>

</html>