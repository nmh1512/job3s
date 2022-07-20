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
    <div class="main_container goi_y_viec_container pd_24">
      <div class="box_shadow p_16 mb_24 d_flex align_c space_b bg_wgreen">
        <p class="green"><span class="font_w500">Hoàn thành!</span> Cập nhật thành công.</p>
        <img src="../../../images/x_black.svg" alt="">
      </div>
      <div class="box_shadow border_c4">
        <div class="pd_24 bb_dc">
          <h2 class="border_0 font_s18 font_w500 mb_16 text_center_414">
            TẠI SAO BẠN NÊN CẬP NHẬT THÔNG TIN GỢI Ý VIỆC LÀM?
          </h2>
          <p class="mb_16 text_center_414">
            Job3s là nền tảng
            <span class="font_w700">kết nối cơ hội việc làm</span> thông qua CV
            đầu tiên tại Việt Nam, nơi mà ứng viên sẽ được Nhà tuyển dụng chủ
            động săn đón.
          </p>
          <p class="mb_16">Cập nhật thông tin chi tiết ngay, nếu bạn muốn:</p>
          <ul>
            <li>Được nhà tuyển dụng chủ động săn đón.</li>
            <li>Được gợi ý các cơ hội việc làm phù hợp.</li>
          </ul>
        </div>
        <div class="pd_24 info_goiy_viec">
          <div class="info_goiy_viec_top text_c">
            <h3 class="border_0 font_s18 font_w400 mb_6">
              Bạn vui lòng hoàn thiện các thông tin dưới đây
            </h3>
            <p>(<span class="color_red">*</span>) Các thông tin bắt buộc</p>
          </div>
          <div class="info_goiy_viec_top_form mt_48">
            <form action="">
              <div class="mb_24">
                <h3 class="font_s18 font_w500 main_color">Thông tin cá nhân</h3>
                <div class="mt_24">
                  <div class="d_flex div_input_container">
                    <div class="div_input mt-0">
                      <label for="" class="font_w500"
                        >Họ và tên<span class="color_red">*</span></label
                      >
                      <div class="input_container">
                        <input type="text" placeholder="Nhập họ tên" />
                      </div>
                    </div>
                    <div class="div_input mt-0"></div>
                  </div>
                </div>
              </div>

              <div class="mb_24">
                <h3 class="font_s18 font_w500 main_color">Kinh nghiệm thực tế</h3>
                <div class="mt_8">
                  <div class="d_flex div_input_container">
                    <div class="div_input">
                      <label for="" class="font_w500"
                        >Ngành nghề <span class="color_red">*</span></label
                      >
                      <div class="input_container">
                        <select
                          class="select_form"
                          name=""
                          data-placeholder="Chọn ngành nghề"
                        >
                          <option value=""></option>
                        </select>
                      </div>
                    </div>
                    <div class="div_input">
                      <label for="" class="font_w500"
                        >Vị trí mong muốn <span class="color_red">*</span></label
                      >
                      <div class="input_container">
                        <select
                          class="select_form"
                          name=""
                          data-placeholder="Chọn vị trí "
                        >
                          <option value=""></option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="d_flex div_input_container">
                    <div class="div_input">
                      <label for="" class="font_w500"
                        >Kinh nghiệm <span class="color_red">*</span></label
                      >
                      <div class="input_container">
                        <select
                          class="select_form"
                          name=""
                          data-placeholder="Chọn kinh nghiêm"
                        >
                          <option value=""></option>
                        </select>
                      </div>
                    </div>
                    <div class="div_input">
                      <label for="" class="font_w500"
                        >Trình độ chuyên môn <span class="color_red">*</span></label
                      >
                      <div class="input_container">
                        <select
                          class="select_form"
                          name=""
                          data-placeholder="Chọn trình độ"
                        >
                          <option value=""></option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="d_flex div_input_container">
                    <div class="div_input">
                      <label for="" class="font_w500"
                        >Năm sinh</label
                      >
                      <div class="input_container">
                        <select
                          class="select_form"
                          name=""
                          data-placeholder="Chọn năm sinh"
                        >
                          <option value=""></option>
                        </select>
                      </div>
                    </div>
                    <div class="div_input">
                      <label for="" class="font_w500"
                        >Giới tính</label
                      >
                      <div class="input_container">
                        <select
                          class="select_form"
                          name=""
                          data-placeholder="Chọn giới tính"
                        >
                          <option value=""></option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="d_flex div_input_container">
                    <div class="div_input">
                      <label for="" class="font_w500"
                        >Quê quán</label
                      >
                      <div class="input_container">
                        <select
                          class="select_form"
                          name=""
                          data-placeholder="Chọn quê quán"
                        >
                          <option value=""></option>
                        </select>
                      </div>
                    </div>
                    <div class="div_input mt-0"></div>
                  </div>
                </div>
              </div>
              <div class="mb_24">
                <h3 class="font_s18 font_w500 main_color">Mong muốn của bạn</h3>
                <div class="mt_8">
                  <div class="d_flex div_input_container">
                    <div class="div_input">
                      <label for="" class="font_w500"
                        >CV của chính bạn <span class="color_red">*</span></label
                      >
                      <div class="input_container">
                        <select
                          class="select_form"
                          name=""
                          data-placeholder="Chọn CV bạn muốn dùng để ứng tuyển"
                        >
                          <option value=""></option>
                        </select>
                      </div>
                    </div>
                    <div class="div_input">
                      <label for="" class="font_w500"
                        >Công việc <span class="color_red">*</span></label
                      >
                      <div class="input_container">
                        <select
                          class="select_form"
                          name=""
                          data-placeholder="Chọn hình thức làm việc mong muốn"
                        >
                          <option value=""></option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="d_flex div_input_container">
                    <div class="div_input">
                      <label for="" class="font_w500"
                        >Mức lương <span class="color_red">*</span></label
                      >
                      <div class="input_container">
                        <select
                          class="select_form"
                          name=""
                          data-placeholder="Chọn mức lương mong muốn"
                        >
                          <option value="1">Dưới 3 triệu</option>
                          <option value="2">3 - 5 triệu</option>
                          <option value="3">5 - 7 triệu</option>
                          <option value="4">7 - 10 triệu</option>
                          <option value="5">10 - 12 triệu</option>
                          <option value="6">12 - 15 triệu</option>
                          <option value="7">15 - 20 triệu</option>
                          <option value="8">20 - 25 triệu</option>
                          <option value="9">25 - 30 triệu</option>
                          <option value="10">Trên 30 triệu</option>
                          <option value="11">Thỏa thuận</option>
                        </select>
                      </div>
                    </div>
                    <div class="div_input">
                      <label for="" class="font_w500"
                        >Địa điểm làm việc <span class="color_red">*</span></label
                      >
                      <div class="input_container">
                        <select
                          class="select_form"
                          name=""
                          data-placeholder="Chọn địa điểm làm việc"
                        >
                          <option value=""></option>
                        </select>
                      </div>
                    </div>
                  </div> 
                  <div class="d_flex div_input_container">
                    <div class="div_input">
                      <label for="" class="font_w500"
                        >Mong muốn làm việc tại nước ngoài <span class="color_red">*</span></label
                      >
                      <div class="input_container">
                        <select
                          class="select_form"
                          name=""
                          data-placeholder=""
                        >
                          <option value=""></option>
                        </select>
                      </div>
                    </div>
                    <div class="div_input">

                    </div>
                  </div>
                 
                </div>
              </div>

           
              <div class="form_btns d_flex flex_center">
                <button type="submit" class="btn_xacnhan">Cập nhật</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>

  <script src="../../../js/jquery-3.4.1.min.js"></script>
  <script src="../../../js/select2.min.js"></script>
  <script src="../../../js/circle-progress.min.js"></script>

  <script src="../../../js/js_h.js"></script>
  <script>
    $(".select_form").select2();
  </script>
</html>
