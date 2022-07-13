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

<body> <?
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
              <a href="cv-ung-tuyen" class="font_w700">CV ứng tuyển</a>
            </li>
            <li>
              <a href="cv-ho-tro" class="font_w700 nav_active">CV được hỗ trợ</a>
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
                        <a href="" class="popup_choose_top d_flex align_c">
                          <img src="../images/up_cv.svg" alt="" />
                          <p>Cập nhật trạng thái CV</p>
                        </a>
                        <a class="d_flex align_c">
                          <img src="../images/edit.svg" alt="" />
                          <p>Ghi chú</p>
                        </a>
                        <a class="popup_choose_bot d_flex align_c">
                          <img src="../images/download_icon_green.svg" alt="" />
                          <p>Tải CV</p>
                        </a>
                        <a class="popup_choose_bot d_flex align_c">
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
                        <a href="" class="popup_choose_top d_flex align_c">
                          <img src="../images/up_cv.svg" alt="" />
                          <p>Cập nhật trạng thái CV</p>
                        </a>
                        <a class="d_flex align_c">
                          <img src="../images/edit.svg" alt="" />
                          <p>Ghi chú</p>
                        </a>
                        <a class="popup_choose_bot d_flex align_c">
                          <img src="../images/download_icon_green.svg" alt="" />
                          <p>Tải CV</p>
                        </a>
                        <a class="popup_choose_bot d_flex align_c">
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
                        <a href="" class="popup_choose_top d_flex align_c">
                          <img src="../images/up_cv.svg" alt="" />
                          <p>Cập nhật trạng thái CV</p>
                        </a>
                        <a class="d_flex align_c">
                          <img src="../images/edit.svg" alt="" />
                          <p>Ghi chú</p>
                        </a>
                        <a class="popup_choose_bot d_flex align_c">
                          <img src="../images/download_icon_green.svg" alt="" />
                          <p>Tải CV</p>
                        </a>
                        <a class="popup_choose_bot d_flex align_c">
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
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/select2.min.js"></script>
  <script type="text/javascript" src="../js/slick.min.js"></script>
  <script src="../js/js_h.js"></script>
  <script>
    $("._filter").select2();
  </script>
</body>

</html>