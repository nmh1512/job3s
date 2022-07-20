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

    <script>
      window.Promise ||
        document.write(
          '<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.min.js"><\/script>'
        );
      window.Promise ||
        document.write(
          '<script src="https://cdn.jsdelivr.net/npm/eligrey-classlist-js-polyfill@1.2.20171210/classList.min.js"><\/script>'
        );
      window.Promise ||
        document.write(
          '<script src="https://cdn.jsdelivr.net/npm/findindex_polyfill_mdn"><\/script>'
        );
    </script>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script>
      // Replace Math.random() with a pseudo-random number generator to get reproducible results in e2e tests
      // Based on https://gist.github.com/blixt/f17b47c62508be59987b
      var _seed = 42;
      Math.random = function () {
        _seed = (_seed * 16807) % 2147483647;
        return (_seed - 1) / 2147483646;
      };
    </script>
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
                <a href="thong-ke-tuyen-dung" class="font_w700 nav_active">Thống kê</a>
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
          <div class="thong_ke_container">
            <div class="thong_ke_filter d_flex">
              <div>
                <select name="" id="" class="thong_ke_filter_select"></select>
              </div>
              <div>
                <select name="" id="" class="thong_ke_filter_select"></select>
              </div>
              <button class="btn_chung bg_s_green cursor_p">Thống kê</button>
            </div>
            <div class="thongso_thongke">
              <h3 class="main_color">Thông số tổng quan</h3>
              <div class="thongso_container d_flex">
                <div
                  class="box_shadow_after_login d_flex box_thongso space_b align_c"
                >
                  <div class="thongso_text">
                    <span class="font_w700 font_s30">100</span>
                    <h4 class="font_w500">Tổng số lượt xem</h4>
                  </div>
                  <div
                    class="thongso_img btn_rounded d_flex align_c flex_center"
                  >
                    <img src="../images/eye_blue.svg" alt="" />
                  </div>
                </div>
                <div
                  class="box_shadow_after_login d_flex box_thongso space_b align_c"
                >
                  <div class="thongso_text">
                    <span class="font_w700 font_s30">100</span>
                    <h4 class="font_w500">Tổng số lượt xem</h4>
                  </div>
                  <div
                    class="thongso_img btn_rounded d_flex align_c flex_center"
                  >
                    <img src="../images/checked_thin.svg" alt="" />
                  </div>
                </div>
                <div
                  class="box_shadow_after_login d_flex box_thongso space_b align_c"
                >
                  <div class="thongso_text">
                    <span class="font_w700 font_s30">100</span>
                    <h4 class="font_w500">Tổng số lượt xem</h4>
                  </div>
                  <div
                    class="thongso_img btn_rounded d_flex align_c flex_center"
                  >
                    <img src="../images/bag_orange.svg" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <div class="thongso_thongke">
              <h3 class="main_color">Biểu đồ chi tiết</h3>
              <div id="chart_thongke"></div>
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
      $(".thong_ke_filter_select").select2();

      var arrDay = [];
      for (let i = 8; i >= 0 ; i--) {
        var d = new Date();
        d.setDate(d.getDate() - i);
        const yyyy = d.getFullYear();
        let mm = `0${d.getMonth() + 1}`.slice(-2); // Months start at 0!
        let dd =  `0${d.getDate()}`.slice(-2);
        var x = dd + "/" + mm + "/" + yyyy;

        arrDay.push(x)
      }
      
      var options = {
        series: [
          {
            name: "Số lượt xem",
            data: [200, 515, 200, 100, 161, 518, 653, 260, 566],
          },
          {
            name: "Số lượt ứng tuyển",
            data: [276, 845, 101, 598, 827, 105, 191, 114, 924],
          },
        ],
        chart: {
          id: "mychart",
          type: "bar",
          height: 350,
          toolbar: {
            show: false,
          },
          width: 1171
        },
        plotOptions: {
          bar: {
            horizontal: false,
            borderRadius: 0,
            columnWidth: "50%",
          },
          zoom: {
            enabled: true,
          },
        },
        colors: ["#007580", "#009638"],
        stroke: {
          show: true,
          width: 2,
          colors: ["transparent"],
        },
        xaxis: {
          type: "day",
          categories: arrDay,
        },
        yaxis: {},
        fill: {
          opacity: 1,
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return val;
            },
          },
        },
      };

      var chart = new ApexCharts(
        document.querySelector("#chart_thongke"),
        options
      );
      chart.render();
    </script>
  </body>
</html>
