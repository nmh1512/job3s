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
    <div class="tuyendung_container main_container">
      <div class="d_flex align_c space_b btn_header_container">
        <h1 class="main_color m-0">Dịch vụ của tôi</h1>
        <a class="btn_chung bg_s_green" href=""><img src="../images/plus.svg" alt="" />Thêm dịch vụ</a>
      </div>
      <div class="tuyendung_content">
        <div class="tuyendung_content_navbar">
          <ul>
            <li>
              <a href="dich-vu-dang-chay" class="font_w700 nav_active">Đang chạy</a>
            </li>
            <li>
              <a href="dich-vu-het-han" class="font_w700">Đã hết hạn</a>
            </li>
          </ul>
        </div>
        <div class="thong_ke_table_container">
        <div class="tuyen_dung_filter d_flex align_c space_b flex_w">
            <div class="d_flex align_c search_box_service">
              <div class="position_r mr_24">
                <input type="text" class="filter_box" placeholder="Tìm ứng viên" />
                <img src="../images/seach_green.svg" alt="" class="position_a img_search" />
              </div>
              <div class="d_flex align_c space_b select_filter_box filter_my_service">
                <div class="d_flex align_c">
                  <p class="font_w500 mr_8">Từ ngày:</p>
                  <input type="date" class="choose_date">
                </div>
                <div class="d_flex align_c">
                  <p class="font_w500 mr_8">Đến ngày:</p>
                  <input type="date" class="choose_date">
                </div>
              </div>
            </div>


            <button class="btn_chung bg_green">Xuất excel</button>
          </div>
          <div class="tuyen_dung_table">
            <table class="table_list_cv table_collapse table_ungvien">
              <thead class="bg_s_green h_50px">
                <th>STT</th>
                <th class="text_l" style="width: 180px">Tên dịch vụ</th>
                <th class="text_l">Số lượng</th>
                <th class="text_l">Ngày mua</th>
                <th class="text_l">Ngày hết hạn</th>
                <th class="text_l">Đơn giá (VNĐ)</th>
                <th class="text_l">VAT</th>
                <th class="text_l">Thành tiền(VNĐ)</th>
              </thead>
              <tbody>
                <tr>
                  <td class="txt_center">1</td>
                  <td class="main_color font_w500">Nạp Credit mở hồ sơ ứng viên (1000C)</td>
                  <td class="text_c">1</td>
                  <td class="green">29/12/2020 10:10</td>
                  <td class="color_red">29/12/2020 10:10</td>
                  <td>140.400.000</td>
                  <td>10%</td>
                  <td class="font_w500">140.400.000</td>
                </tr>
                <tr>
                  <td colspan="8">
                    <div class="empty_data text_c">
                      <img src="../images/empty_data.svg" alt="" />
                      <p class="orange mt_16">
                        Bạn chưa có ứng viên nào trong danh sách!
                      </p>
                      <a class="btn_main_color d_flex align_c flex_center" href=""><img src="../images/plus.svg" alt="" />Tìm ứng viên
                        ngay</a>
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
  <div class="popupContainer popup_chung display_none">
    <div class="popup_bg dong_popup"></div>
    <div id="popupDanhGia" class="popupInput display_none popupItem">
      <div class="popup_header position_r">
        <h2 class="font_s20 border_0">Đánh giá ứng viên</h2>
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
          <button class="btn_bg_white btn_r5 main_color dong_popup">
            Hủy
          </button>
          <button class="bg_s_green btn_r5">Cập nhật</button>
        </div>
      </div>
    </div>
    <div id="popupGhiChu" class="popupInput display_none popupItem">
      <div class="popup_header position_r">
        <h2 class="font_s20 border_0">Ghi chú</h2>
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
          <button class="btn_bg_white btn_r5 main_color dong_popup">
            Hủy
          </button>
          <button class="bg_s_green btn_r5">Cập nhật</button>
        </div>
      </div>
    </div>
    <div id="popupXacNhanHuy" class="display_none popupItem">
      <div class="popup_bg dong_popup"></div>
      <div class="popup_content position_a">
        <div class="popup_header position_r">
          <h2 class="font_s20 border_0">Xác nhận</h2>
          <img src="../images/x.svg" alt="" class="position_a dong_popup cursor_p" />
        </div>
        <div class="popup_body">
          <p>
            Bạn có đồng xóa hồ sơ ứng tuyển của
            <span class="font_w500">Nguyễn Thị Hoa</span> không?
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
    $(".select_popup").select2();

    $(".popup_choose a").click(function() {
      var id = $(this).data("id");
      if (id != undefined) {
        $("#" + id).removeClass("display_none");
        $(".popupContainer").removeClass("display_none");
      }
    });
  </script>
</body>

</html>