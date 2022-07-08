<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/select2.min.css" />
    <link rel="stylesheet" href="../css/style_t.css" />
    <link rel="stylesheet" href="../css/slick.css" />
    <link rel="stylesheet" href="../css/slick-theme.css" />
    <link rel="stylesheet" href="../css/style_h.css" />
  </head>

  <body>
  <?
    include "../../../includes/after_header.php";
    include "../../../includes/slider_bar.php"; ?>
    <section>
      <div class="main_container list_ungvien_container">
        <div class="d_flex align_c space_b btn_header_container">
          <h1 class="main_color">Danh sách ứng viên</h1>
        </div>
        <div class="tuyendung_content">
          <div class="thong_ke_table_container">
            <div class="tuyen_dung_filter">
              <div class="d_flex align_c space_b">
                <div class="position_r">
                  <input
                    type="text"
                    class="filter_box"
                    placeholder="Tìm ứng viên"
                  />
                  <img
                    src="../images/seach_green.svg"
                    alt=""
                    class="position_a img_search"
                  />
                </div>
                <div class="d_flex align_c space_b select_filter_box w_50pt">
                  <select name="" id="" class="_filter filter_box">
                    <option value="1" selected>Chọn tin tuyển dụng</option>
                    <option value="2">
                      Tuyển nhân viên kinh doanh tại hà nội
                    </option>
                    <option value="2">
                      Tuyển nhân viên kinh doanh tại hà nội
                    </option>
                  </select>
                </div>

                <button class="btn_chung bg_green">Xuất excel</button>
              </div>
              <div class="mt_24 d_flex align_c uv_filter">
                <div>
                  <select name="" id="" class="_filter filter_box">
                    <option value="1" selected>Tất cả nguồn hồ sơ</option>
                    <option value="2">Ứng tuyển</option>
                    <option value="3">Job3s hỗ trợ</option>
                    <option value="4">Hồ sơ tìm kiếm</option>
                  </select>
                </div>
                <div>
                  <select name="" id="" class="_filter filter_box">
                    <option value="1" selected>Tất cả trạng thái hồ sơ</option>
                    <option value="2">CV tiếp nhận</option>
                    <option value="3">Phù hợp</option>
                    <option value="4">Hẹn phỏng vấn</option>
                    <option value="5">Gửi đề nghị</option>
                    <option value="6">Nhận việc</option>
                    <option value="7">Từ chối</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="tuyen_dung_table">
              <table class="w_100 table_list_cv table_collapse">
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
                        <img
                          class="img_table mr_8"
                          src="../images/doggo.jpg"
                          alt=""
                        />
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
                        <img
                          src="../images/main_green.svg"
                          class="mr_8"
                          alt=""
                        />
                        nguyenthilan@gmail.com
                      </div>
                      <div class="d_flex align_c">
                        <img
                          src="../images/call_green.svg"
                          class="mr_8"
                          alt=""
                        />
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
                      <div
                        class="see_box bg_gray text_c cursor_p position_r show_popup_choose"
                        onclick="show_popup_choose(this)"
                      >
                        <img
                          class="show_popup_choose"
                          src="../images/setting_green.svg"
                          alt=""
                        />
                        <div class="popup_choose position_a">
                          <a
                            data-id="popupDanhGia"
                            class="popup_choose_top d_flex align_c"
                          >
                            <img src="../images/up_cv.svg" alt="" />
                            <p>Cập nhật trạng thái CV</p>
                          </a>
                          <a data-id="popupGhiChu" class="d_flex align_c">
                            <img src="../images/edit.svg" alt="" />
                            <p>Ghi chú</p>
                          </a>
                          <a class="d_flex align_c">
                            <img
                              src="../images/download_icon_green.svg"
                              alt=""
                            />
                            <p>Tải CV</p>
                          </a>
                          <a
                            data-id="popupXacNhanHuy"
                            class="popup_choose_bot d_flex align_c"
                          >
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
                        <img
                          class="img_table mr_8"
                          src="../images/doggo.jpg"
                          alt=""
                        />
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
                        <img
                          src="../images/main_green.svg"
                          class="mr_8"
                          alt=""
                        />
                        nguyenthilan@gmail.com
                      </div>
                      <div class="d_flex align_c">
                        <img
                          src="../images/call_green.svg"
                          class="mr_8"
                          alt=""
                        />
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
                      <div
                        class="see_box bg_gray text_c cursor_p position_r show_popup_choose"
                        onclick="show_popup_choose(this)"
                      >
                        <img
                          class="show_popup_choose"
                          src="../images/setting_green.svg"
                          alt=""
                        />
                        <div class="popup_choose position_a">
                          <a
                            data-id="popupDanhGia"
                            class="popup_choose_top d_flex align_c"
                          >
                            <img src="../images/up_cv.svg" alt="" />
                            <p>Cập nhật trạng thái CV</p>
                          </a>
                          <a data-id="popupGhiChu" class="d_flex align_c">
                            <img src="../images/edit.svg" alt="" />
                            <p>Ghi chú</p>
                          </a>
                          <a class="d_flex align_c">
                            <img
                              src="../images/download_icon_green.svg"
                              alt=""
                            />
                            <p>Tải CV</p>
                          </a>
                          <a
                            data-id="popupXacNhanHuy"
                            class="popup_choose_bot d_flex align_c"
                          >
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
                        <img
                          class="img_table mr_8"
                          src="../images/doggo.jpg"
                          alt=""
                        />
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
                        <img
                          src="../images/main_green.svg"
                          class="mr_8"
                          alt=""
                        />
                        nguyenthilan@gmail.com
                      </div>
                      <div class="d_flex align_c">
                        <img
                          src="../images/call_green.svg"
                          class="mr_8"
                          alt=""
                        />
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
                      <div
                        class="see_box bg_gray text_c cursor_p position_r show_popup_choose"
                        onclick="show_popup_choose(this)"
                      >
                        <img
                          class="show_popup_choose"
                          src="../images/setting_green.svg"
                          alt=""
                        />
                        <div class="popup_choose position_a">
                          <a
                            data-id="popupDanhGia"
                            class="popup_choose_top d_flex align_c"
                          >
                            <img src="../images/up_cv.svg" alt="" />
                            <p>Cập nhật trạng thái CV</p>
                          </a>
                          <a data-id="popupGhiChu" class="d_flex align_c">
                            <img src="../images/edit.svg" alt="" />
                            <p>Ghi chú</p>
                          </a>
                          <a class="d_flex align_c">
                            <img
                              src="../images/download_icon_green.svg"
                              alt=""
                            />
                            <p>Tải CV</p>
                          </a>
                          <a
                            data-id="popupXacNhanHuy"
                            class="popup_choose_bot d_flex align_c"
                          >
                            <img src="../images/delete.svg" alt="" />
                            <p>Xóa ứng viên</p>
                          </a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="6">
                      <div class="empty_data text_c">
                        <img src="../images/empty_data.svg" alt="" />
                        <p class="orange mt_16">
                          Bạn chưa có ứng viên nào trong danh sách!
                        </p>
                        <a
                          class="btn_main_color d_flex align_c flex_center"
                          href=""
                          ><img src="../images/plus.svg" alt="" />Tìm ứng viên
                          ngay</a
                        >
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
          <img
            src="../images/x.svg"
            alt=""
            class="position_a dong_popup cursor_p"
          />
        </div>
        <div class="popup_body">
          <div class="w_100 text_l">
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
              <textarea
                name=""
                id=""
                cols="30"
                rows="10"
                placeholder="Bạn có muốn ghi chú cho sự thay đổi trạng thái này không?"
              ></textarea>
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
          <img
            src="../images/x.svg"
            alt=""
            class="position_a dong_popup cursor_p"
          />
        </div>
        <div class="popup_body">
          <div class="w_100 text_l">
            <label for="" class="font_w500">Ghi chú</label>
            <div class="input_container">
              <textarea
                name=""
                id=""
                cols="30"
                rows="10"
                placeholder="Nhập nội dung ghi chú"
              ></textarea>
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
            <img
              src="../images/x.svg"
              alt=""
              class="position_a dong_popup cursor_p"
            />
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

      $(".popup_choose a").click(function () {
        var id = $(this).data("id");
        if (id != undefined) {
          $("#" + id).removeClass("display_none");
          $(".popupContainer").removeClass("display_none");
        }
      });
    </script>
  </body>
</html>
