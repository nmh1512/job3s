<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Trang chủ</title>
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/select2.min.css" />
  <link rel="stylesheet" href="../css/slick.css" />
  <link rel="stylesheet" href="../css/slick-theme.css" />
  <link rel="stylesheet" href="../css/style_h.css" />
  <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>

<body>
  <header id="header">
    <div class="nav_header d_flex align_c space_b">
      <div class="logo">
        <a href=""><img src="../images/logo.svg" alt="" /></a>
      </div>
      <nav class="d_flex align_c">
        <ul class="nav_header_items">
          <li>
            <a href="">Hồ sơ & CV</a>
          </li>
          <li>
            <a href="">Tìm ứng viên</a>
          </li>
          <li><a href="">Tin tức</a></li>
          <li>
            <a href="">Liên hệ</a>
          </li>
        </ul>
        <div class="account">
          <ul>
            <li class="login">
              <a href="">Đăng nhập</a>
            </li>
            <li class="sign_in">
              Đăng ký
              <div class="signin_choose">
                <a href="" class="candicate_signin d_flex align_c">
                  <img src="../images/avartar_green.png" alt="" />
                  <p>Ứng viên</p>
                </a>
                <a href="" class="employer_signin d_flex align_c">
                  <img src="../images/bag_green.png" alt="" />
                  <p>Nhà tuyển dụng</p>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="banner_header d_flex flex_center position_r">
      <div class="banner_header_left w_50pt">
        <h1>Tìm <span>việc làm</span> phù hợp với bạn</h1>
        <div class="banner_header_search">
          <div class="search_container br_10 d_flex">
            <div class="search_job_name search_item position_r bg_white">
              <input type="text" placeholder="Nhập tên công việc" class="font_s16 w_100" />
              <img src="../images/search.png" alt="" class="position_a img_search_item" />
            </div>
            <div class="search_item position_r bg_white">
              <select class="select_location" name="" id="">
                <option value="" selected></option>
                <option value="1">
                  aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                </option>
              </select>
              <img src="../images/location.png" alt="" class="position_a img_search_item" />
            </div>
            <div>
              <button class="btn_search_job font_s16">Tìm việc làm</button>
            </div>
          </div>
        </div>
      </div>
      <div class="banner_header_right w_50pt position_r">
        <img src="../images/girl.svg" alt="" class="position_a img_girl" />
        <img src="../images/shield_confirm.svg" alt="" class="img_confirm position_a" />
        <img src="../images/shield_like.svg" alt="" class="img_like position_a" />
        <div class="members position_a">
          <h4>100K+ Việc làm</h4>
          <div class="position_r">
            <img src="../images/person1.svg" alt="" class="position_a members_z_index1" />
            <img src="../images/person2.svg" alt="" class="position_a members_z_index2" />
            <img src="../images/person3.svg" alt="" class="position_a members_z_index3" />
            <img src="../images/person4.svg" alt="" class="position_a members_z_index4" />
            <img src="../images/add_person.svg" alt="" class="position_a members_z_index5" />
          </div>
        </div>
      </div>

      <div class="key_trend d_flex position_a align_c">
        <h4>Từ khóa phổ biến:</h4>
        <ul class="list_key">
          <li>Nhân viên kinh doanh</li>
          <li>Telesale</li>
          <li>Chăm sóc khách hàng</li>
          <li>Bán hàng</li>
        </ul>
      </div>
    </div>
  </header>
  <section>
    <div class="download_container d_flex align_c space_b">
      <div>
        <img src="../images/two_mobiles.svg" alt="" />
      </div>
      <div class="download_container_content">
        <h1 class="main_color font_s28">Ứng dụng di động Job3s miễn phí</h1>
        <ul>
          <li>CV đa dạng mẫu mã theo ngành nghề.</li>
          <li>Việc làm chất, ứng tuyển bất cứ nơi đâu.</li>
          <li>Nhắn tin ngay trên ứng dụng qua tính năng chat.</li>
        </ul>
        <div class="d_flex space_b mt_14">
          <div class="text_c">
            <img src="../images/app_qr.svg" alt="" />
            <div class="url_download">
              <a class="d_flex align_c flex_center" href="">Tải App tìm việc Job3s</a>
            </div>
          </div>
          <div class="text_c">
            <img src="../images/app_qr.svg" alt="" />
            <div class="url_download">
              <a class="d_flex align_c flex_center" href="">Tải App CV365</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="new_works">
      <div class="new_works_header">
        <h1 class="main_color">Việc làm mới nhất</h1>
        <p><span>8</span> việc làm mới được đăng ngày hôm nay!</p>
        <div class="list_works d_flex">
          <a class="active_work" href="">Tất cả</a>
          <a href="">Bất động sản</a>
          <a href="">Kinh doanh</a>
          <a href="">Bảo hiểm</a>
          <a href="">IT</a>
          <a href="">Nhân sự</a>
        </div>
      </div>
      <div class="new_works_content_container">
        <div class="new_works_content d_flex">
          <?
          for ($i = 0; $i < 40; $i++) {
          ?>

            <div class="new_works_content_item">
              <div>
                <div class="new_works_content_item_top d_flex">
                  <img src="../images/img_logo.svg" alt="">
                  <div class="content_job">
                    <h4 class="main_color pb_5px">Nhân viên kinh doanh bất động sản</h4>
                    <p class="pb_5px">Công ty Cổ phần Thanh toán Hưng hà</p>
                    <div class="d_flex space_b">
                      <span>Hạn nộp: 30/04/2022</span>
                      <a href="">Chat</a>
                    </div>
                  </div>
                </div>
                <div class="info_job d_flex mt_15">
                  <div class="info_job_location">Hà Nội</div>
                  <div class="info_job_offer">10 -16 triệu</div>
                </div>
                <img class="img_flag" src="../images/flag.svg" alt="">
              </div>

            </div>
          <?
          }
          ?>
        </div>
        <div class="see_all_container">
          <a class="see_all d_flex align_c flex_center main_color" href="">Xem tất cả</a>
        </div>
      </div>

    </div>

  </section>
  <section>
    <div class="banner_middle_1 d_flex">
      <div class="banner_middle_1_cv ">
        <div class="banner_create_cv banner_cv d_flex box_shadow">
          <div class="banner_create_cv_text">
            <h2 class="main_color">Tạo CV online ấn tượng</h2>
            <p>Job3s hiện có 1000+ mẫu CV chuyên nghiệp, độc đáo phù hợp với mọi ngành nghề.</p>
            <a href="">Tạo CV ngay</a>
          </div>
          <div class="banner_create_cv_img">
            <img src="../images/cv.svg" alt="">
          </div>
        </div>
        <div class="banner_upload_cv banner_cv d_flex box_shadow">
          <div class="banner_upload_cv_text">
            <h2 class="main_color">Sử dụng CV sẵn có để tìm việc</h2>
            <p>Cách đơn giản để bắt đầu tìm việc làm tại Job3s, Nhà tuyển dụng sẽ nhìn thấy CV bạn đã tải lên.</p>
            <a href="">Tải lên CV của bạn</a>
          </div>
          <div class="banner_upload_cv_img">
            <img src="../images/upload_big.svg" alt="">
            <img src="../images/cv1.svg" alt="">
          </div>
        </div>
      </div>
      <div class="banner_middle_1_chat box_shadow">
        <div class="banner_middle_1_chat_header">
          <h2>Chat với nhà tuyển dụng</h2>
        </div>
        <div class="banner_middle_1_chat_content">
          <div class="d_flex">
            <input type="text" placeholder="Nhập tên nhà tuyển dụng">
            <div class="btn_search">
              <img src="../images/search.png" alt="">
            </div>
          </div>
          <? for ($i = 0; $i < 20; $i++) { ?>
            <div class="banner_middle_1_chat_content_text">
              <div class="banner_middle_1_chat_content_text_item d_flex">
                <div class="banner_middle_1_chat_content_text_item_img">
                  <img src="../images/logo_circle.svg" alt="">
                  <img src="../images/online_dot.svg" alt="">
                </div>
                <div>
                  <h4>Công ty Cổ phần Thanh toán Hưng Hà</h4>
                  <p>Hồ Chí Minh</p>
                </div>
              </div>
            </div>
          <? } ?>
        </div>
      </div>
    </div>
  </section>
  <a class="back_to_top"><img src="../images/back_to_top.svg" alt="" /></a>
  <div class="chat_btn d_flex align_c flex_center cursor_p">Trực tuyến</div>
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/select2.min.js"></script>
  <script type="text/javascript" src="../js/slick.min.js"></script>
  <script src="../js/js_h.js"></script>
  <script>
    $(".select_location").select2({
      placeholder: "Tất cả địa điểm",
    });
    $(".back_to_top").click(function() {
      $(window).scrollTop(0);
    });

    $(document).ready(function() {
      $(".new_works_content").slick({
        infinite: true,
        rows: 6,
        slidesPerRow: 3,
        arrows: true,
        dots: true,
        prevArrow: "<img class='a-left control-c prev slick-prev img_arrow' src='../images/prev.svg'>",
        nextArrow: "<img class='a-right control-c next slick-next img_arrow' src='../images/next.svg'>",
        responsive: [{
          breakpoint: 481,
          settings: {
            dots: false,
            arrows: false,
          },
        }, ],
      });

      // $(".registers_container_content").slick({
      //   infinite: true,
      //   rows: 4,
      //   slidesPerRow: 5,
      //   responsive: [
      //     {
      //       breakpoint: 1025,
      //       settings: {
      //         slidesPerRow: 4,
      //         arrows: true,
      //         dots: true,
      //         prevArrow:
      //           "<img class='a-left control-c prev slick-prev img_arrow' src='../images/newImages/arrow-left.png'>",
      //         nextArrow:
      //           "<img class='a-right control-c next slick-next img_arrow' src='../images/newImages/arrow-right.png'>",
      //       },
      //     },
      //     {
      //       breakpoint: 769,
      //       settings: {
      //         slidesPerRow: 3,
      //         arrows: true,
      //         dots: true,
      //         prevArrow:
      //           "<img class='a-left control-c prev slick-prev img_arrow' src='../images/newImages/arrow-left.png'>",
      //         nextArrow:
      //           "<img class='a-right control-c next slick-next img_arrow' src='../images/newImages/arrow-right.png'>",
      //       },
      //     },
      //     {
      //       breakpoint: 481,
      //       settings: {
      //         slidesPerRow: 2,
      //         arrows: false,

      //         dots: true,
      //       },
      //     },
      //   ],
      // });
    });
  </script>
</body>

</html>