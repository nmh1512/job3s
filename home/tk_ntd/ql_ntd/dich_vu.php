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
  <link rel="stylesheet" href="../css/style_h.css" />
</head>

<body>
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
              <a href="tin-tuyen-dung.html" class="font_w700">Tin tuyển dụng</a>
            </li>
            <li>
              <a href="thong-ke-tuyen-dung.html" class="font_w700">Thống kê</a>
            </li>
            <li>
              <a href="cv-ung-tuyen.html" class="font_w700">CV ứng tuyển</a>
            </li>
            <li>
              <a href="cv-ho-tro.html" class="font_w700">CV được hỗ trợ</a>
            </li>
            <li>
              <a href="dich-vu-tuyen-dung.html" class="font_w700 nav_active">Dịch vụ</a>
            </li>
          </ul>
        </div>
        <div class="thong_ke_table_container">
          <div class="tuyen_dung_filter">
            <p>Lịch sử dụng dịch vụ tuyển dụng</p>
          </div>
          <div class="tuyen_dung_table table_dv">
            <table class="w_100 table_list_cv table_collapse">
              <thead class="bg_s_green h_50px">
                <th class="text_l">Trạng thái</th>

                <th class="text_l">Dịch vụ</th>
                <th class="text_l">Số lượng</th>
                <th class="text_l">Ngày bắt đầu</th>
                <th class="text_l">Ngày kết thúc</th>
                <th class="text_l">Thời hạn</th>
                <th>Chức năng</th>
              </thead>
              <tbody>
                <?
                $arrType = [
                  1 => ['bg_green', 'Đang sử dụng'],
                  2 => ['bg_orange', 'Tạm dừng']
                ];
                $arrHan = [
                  1 => ['box_green', 'Còn hạn'],
                  2 => ['box_red', 'Hết hạn']
                ];

                for ($i = 0; $i < 10; $i++) {
                  $random_type = array_rand($arrType);
                  $random_han = array_rand($arrType);

                ?>
                  <tr>
                    <td><span class="see_box <?= $arrType[$random_type][0] ?>"><?= $arrType[$random_type][1] ?></span></td>
                    <td>Ghim tin trang chủ</td>
                    <td>1</td>
                    <td>10/10/2020 10:10</td>
                    <td>10/10/2020 10:10</td>
                    <td><span class="see_box <?= $arrHan[$random_han][0] ?>"><?= $arrHan[$random_han][1] ?></span></td>
                    <td>
                      <div class="see_box bg_gray text_c cursor_p position_r show_popup_choose" onclick="show_popup_choose(this)">
                        <img class="show_popup_choose" src="../images/setting_green.svg" alt="" />
                        <div class="popup_choose position_a">
                          <a href="" class="popup_choose_top d_flex align_c">
                            <img src="../images/clock.svg" alt="" />
                            <p>Gia hạn</p>
                          </a>
                          <? if ($random_type == 1) { ?>
                            <a class="d_flex align_c">
                              <img src="../images/pause.svg" alt="" />
                              <p>Tạm dừng</p>
                            </a>
                          <? } else { ?>
                            <a class="d_flex align_c">
                              <img src="../images/play.svg" alt="" />
                              <p>Mở dịch vụ</p>
                            </a>
                          <? } ?>
                        </div>
                      </div>
                    </td>
                  </tr>
                <? } ?>
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