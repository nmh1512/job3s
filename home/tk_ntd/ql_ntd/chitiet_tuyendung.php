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
      <div class="d_flex align_c space_b btn_header_container flex_w">
        <div class="d_flex align_c w_100 flex_w">
          <button class="btn_chung bg_white_border_green cursor_p">
            <img src="../images/left_arrow.svg" alt="" />Quay lại
          </button>
          <button class="btn_chung bg_orange cursor_p">
            <img src="../images/fly.svg" alt="" />Tăng tốc tuyển dụng
          </button>
          <button class="btn_chung bg_green cursor_p">
            <img src="../images/refresh.svg" alt="" />Làm mới
          </button>
          <button class="btn_chung bg_s_green cursor_p position_r show_popup_choose" onclick="show_popup_choose(this)">
            <img class="show_popup_choose" src="../images/setting.svg" alt="" />Tùy chỉnh
            <div class="popup_choose">
              <a href="" class="popup_choose_top d_flex align_c">
                <img src="../images/edit.svg" alt="" />
                <p>Ứng viên</p>
              </a>
              <a class="d_flex align_c">
                <img src="../images/eye_green.svg" alt="" />
                <p>Ngừng hiển thị</p>
              </a>
              <a class="popup_choose_bot d_flex align_c">
                <img src="../images/delete.svg" alt="" />
                <p>Xóa</p>
              </a>
            </div>
          </button>
        </div>
      </div>
      <div class="tuyendung_content">
        <div class="tuyendung_content_navbar">
          <ul>
            <li>
              <a href="tin-tuyen-dung" class="nav_active font_w700">Tin tuyển dụng</a>
            </li>
            <li>
              <a href="thong-ke-tuyen-dung" class="font_w700">Thống kê</a>
            </li>
            <li>
              <a href="cv-ung-tuyen" class="font_w700">CV ứng tuyển</a>
            </li>
            <li>
              <a href="cv-ho-tro" class="font_w700">CV được hỗ trợ</a>
            </li>
            <li>
              <a href="dich-vu-tuyen-dung" class="font_w700">Dịch vụ</a>
            </li>
          </ul>
        </div>
        <div class="tuyendung_content_info">
          <div class="tuyendung_content_info_item">
            <h3 class="main_color font_s20">Tổng quan</h3>
            <div>
              <div class="d_flex">
                <div class="div_input">
                  <h4>Trạng thái</h4>
                  <p class="orange">Chưa hiển thị</p>
                </div>
                <div class="div_input">
                  <h4>Trạng thái duyệt tin</h4>
                  <p class="orange">Chờ duyệt</p>
                </div>
              </div>
              <div class="d_flex">
                <div class="div_input">
                  <h4>Ngày tạo</h4>
                  <p>10/10/2020</p>
                </div>
                <div class="div_input">
                  <h4>Ngày cập nhật/làm mới</h4>
                  <p>10/10/2020</p>
                </div>
              </div>
            </div>
          </div>
          <div class="tuyendung_content_info_item">
            <h3 class="main_color font_s20">Tiêu đề tin tuyển dụng</h3>
            <div class="div_input w_100">
              <h4>Tiêu đề tin tuyển dụng</h4>
              <p>
                Tuyển dụng nhân viên kinh doanh không yêu cầu kinh nghiệm tại
                Hồ Chí minh
              </p>
            </div>
          </div>
          <div class="tuyendung_content_info_item">
            <h3 class="main_color font_s20">Ngành nghề</h3>
            <div>
              <div class="d_flex">
                <div class="div_input">
                  <h4>Ngành nghề chính</h4>
                  <p>Nhân viên kinh doanh</p>
                </div>
                <div class="div_input">
                  <h4>Ngành nghề phụ</h4>
                  <p>Bất động sản, Bảo hiểm</p>
                </div>
              </div>
            </div>
          </div>
          <div class="tuyendung_content_info_item">
            <h3 class="main_color font_s20">Thông tin chung</h3>
            <div>
              <div class="d_flex">
                <div class="div_input">
                  <h4>Số lượng tuyển</h4>
                  <p>6</p>
                </div>
                <div class="div_input">
                  <h4>Hình thức làm việc</h4>
                  <p>Toàn thời gian</p>
                </div>
              </div>
              <div class="d_flex">
                <div class="div_input">
                  <h4>Giới tính</h4>
                  <p>Không yêu cầu</p>
                </div>
                <div class="div_input">
                  <h4>Cấp bậc</h4>
                  <p>Nhân viên</p>
                </div>
              </div>
              <div class="d_flex">
                <div class="div_input">
                  <h4>Kinh nghiệm</h4>
                  <p>Không yêu cầu</p>
                </div>
                <div class="div_input">
                  <h4>Bằng cấp</h4>
                  <p>Không yêu cầu</p>
                </div>
              </div>
              <div class="d_flex">
                <div class="div_input">
                  <h4>Mức lương</h4>
                  <p>Thỏa thuận</p>
                </div>
              </div>
            </div>
          </div>
          <div class="tuyendung_content_info_item">
            <h3 class="main_color font_s20">Địa điểm làm việc</h3>
            <div>
              <div class="d_flex">
                <div class="div_input">
                  <h4>Tỉnh thành</h4>
                  <p>Hà Nội</p>
                </div>
                <div class="div_input">
                  <h4>Quận huyện</h4>
                  <p>Hoàng Mai</p>
                </div>
              </div>
              <div class="d_flex">
                <div class="div_input w_100">
                  <h4>Địa chỉ chi tiết</h4>
                  <p>
                    Số 1 Trần Nguyên Đán, Phường Định Công, Hoang Mai, Hà Nội
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="tuyendung_content_info_item">
            <h3 class="main_color font_s20">Nội dung chi tiết</h3>
            <div>
              <div class="div_input w_100">
                <h4>Mô tả công việc</h4>
                <p>
                  - Liên hệ và tư vấn qua điện thoại cho khách hàng trên toàn
                  quốc theo data có sẵn về sản phẩm Babilala. Đối tượng khách
                  hàng của Babilala: Các phụ huynh có con từ 3- 8 tuổi trên
                  toàn quốc. - Giới thiệu và khơi gợi nhu cầu, diễn tả sản
                  phẩm lưu loát qua lời nói, chốt cuộc gọi bán hàng. - Báo cáo
                  cho Quản lý trực tiếp về kết quả bán hàng và phối hợp với
                  quản lý xử lý các vấn đề phát sinh trong công việc
                </p>
              </div>
              <div class="div_input w_100">
                <h4>Yêu cầu công việc</h4>
                <p>
                  - Tốt nghiệp đại học (Đồng ý sinh viên đang chờ bằng có thể
                  làm Fulltime) - Độ tuổi 1997-2000 - Có đi làm thêm nhiều
                  trong thời gian sinh viên. - Đam mê kiếm tiền, mục tiêu phát
                  triển sự nghiệp trong nghề Telesale/ Sale. - Tinh thần thái
                  độ tốt, ngoan , chăm chỉ - Thông minh nhanh nhẹn - Sẵn sàng
                  tăng ca
                </p>
              </div>
              <div class="div_input w_100">
                <h4>Quyền lợi được hưởng</h4>
                <p>
                  - Đào tạo bài bản, chuyên nghiệp bởi các chuyên gia hàng đầu
                  thị trường. - Thu nhập cạnh tranh: Lương cứng 7- 11M Hoa
                  hồng: 3%- 8%. Thu nhập hàng tháng từ 13- 30 triệu.
                </p>
              </div>
            </div>
          </div>
          <div class="tuyendung_content_info_item">
            <h3 class="main_color font_s20">Video giới thiệu việc làm</h3>
            <div class="video_container border_r16 w_100"></div>
          </div>
          <div class="tuyendung_content_info_item">
            <h3 class="main_color font_s20">Thông tin nhận CV</h3>
            <div>
              <div class="d_flex">
                <div class="div_input">
                  <h4>Hạn nộp hồ sơ</h4>
                  <p>10/10/2020</p>
                </div>
                <div class="div_input">
                  <h4>Người liên hệ</h4>
                  <p>Nguyễn Thị Hoa</p>
                </div>
              </div>
              <div class="d_flex">
                <div class="div_input">
                  <h4>Số điện thoại</h4>
                  <p>0987654144</p>
                </div>
                <div class="div_input">
                  <h4>Email</h4>
                  <p>nguyenhoa@gmail.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/select2.min.js"></script>
  <script type="text/javascript" src="../js/slick.min.js"></script>
  <script src="../js/js_h.js"></script>
</body>

</html>