<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Trang chủ</title>
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/select2.min.css" />
  <link rel="stylesheet" href="../css/slick-theme.css" />
  <link rel="stylesheet" href="../css/slick.css" />
  <link rel="stylesheet" href="../css/style_h.css" />
  <script src="../js/scrollreveal.min.js"></script>
</head>

<body>
  <header id="header">
    <div class="nav_header d_flex align_c space_b">
      <div class="nav_menu_btn position_a">
        <button class="d_flex align_c flex_center bd_cicre wh_42px border_0 bg_white"><img src="../images/nav_menu.png" alt=""></button>
      </div>
      <div hidden class="nav_resp position_a w_100">
        <div class="bg_fa pd_20">
          <a href="" class="d_flex bg_white border_r16 p_16 mb_10 font_w500"><img src="../images/change_large.svg" alt="">Đăng ký</a>
          <a href="" class="d_flex bg_white border_r16 p_16 mb_10 font_w500"><img src="../images/logout.svg" alt="">Đăng nhập</a>
          <a href="" class="d_flex bg_white border_r16 p_16 mb_10 font_w500"><img src="../images/hoso.svg" alt="">Hồ sơ & CV</a>
          <a href="" class="d_flex bg_white border_r16 p_16 mb_10 font_w500"><img src="../images/seach_green.svg" alt="">Tìm ứng viên</a>
          <a href="" class="d_flex bg_white border_r16 p_16 mb_10 font_w500"><img src="../images/news.svg" alt="">Tin tức</a>
          <a href="" class="d_flex bg_white border_r16 p_16 font_w500"><img src="../images/phone_green.svg" alt="">Liên hệ</a>
        </div>

      </div>
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
            <li class="sign_in show_popup_choose" onclick="show_popup_choose(this)">
              Đăng ký
              <div class="popup_choose">
                <a href="" class="popup_choose_top d_flex align_c">
                  <img src="../images/avartar_green.png" alt="" />
                  <p>Ứng viên</p>
                </a>
                <a href="" class="popup_choose_bot d_flex align_c">
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
  <section class="tile">
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
              <a class="btn_main_color d_flex align_c flex_center" href="">Tải App tìm việc Job3s</a>
            </div>
          </div>
          <div class="text_c">
            <img src="../images/app_qr.svg" alt="" />
            <div class="url_download">
              <a class="btn_main_color d_flex align_c flex_center " href="">Tải App CV365</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="tile">
    <div class="new_works">
      <div class="new_works_header">
        <h1 class="main_color">Việc làm mới nhất</h1>
        <p><span>8</span> việc làm mới được đăng ngày hôm nay!</p>
        <div class="list_works d_flex">
          <a class="active_work" href="">Tất cả</a>
          <a class="" href="">Bất động sản</a>
          <a class="" href="">Kinh doanh</a>
          <a class="" href="">Bảo hiểm</a>
          <a class="" href="">IT</a>
          <a class="" href="">Nhân sự</a>
        </div>
      </div>
      <div class="new_works_content_container">
        <div class="new_works_content d_flex">
          <?
          for ($i = 0; $i < 40; $i++) {
          ?>

            <div class="new_works_content_item ">
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
        <div class="see_all_container ">
          <a class="see_all d_flex align_c flex_center main_color" href="">Xem tất cả</a>
        </div>
      </div>

    </div>

  </section>
  <section class="tile">
    <div class="banner_middle_1 d_flex">
      <div class="banner_middle_1_cv ">
        <div class="banner_create_cv banner_cv d_flex box_shadow space_b ">
          <div class="banner_cv_text">
            <h2 class="main_color mb_15 font_s22">Tạo CV online ấn tượng</h2>
            <p class="mb_30">Job3s hiện có 1000+ mẫu CV chuyên nghiệp, độc đáo phù hợp với mọi ngành nghề.
            </p>
            <a href="" class="btn_main_color">Tạo CV ngay</a>
          </div>
          <div class="banner_create_cv_img d_flex align_c">
            <img src="../images/cv.svg" alt="">
          </div>
        </div>
        <div class="banner_upload_cv banner_cv d_flex box_shadow space_b ">
          <div class="banner_cv_text">
            <h2 class="main_color mb_15 font_s22">Sử dụng CV sẵn có để tìm việc</h2>
            <p class="mb_30">Cách đơn giản để bắt đầu tìm việc làm tại Job3s, Nhà tuyển dụng sẽ nhìn thấy CV
              bạn đã tải lên.</p>
            <a href="" class="btn_main_color">Tải lên CV của bạn</a>
          </div>
          <div class="banner_upload_cv_img position_r">
            <img src="../images/upload_big.svg" alt="" class="position_a img_uploadbig">
            <img src="../images/cv1.svg" alt="" class="position_a img_cv">
          </div>
        </div>
      </div>
      <div class="banner_middle_1_chat box_shadow ">
        <div class="banner_middle_1_chat_header">
          <h2 class="font_s22 main_color">Chat với nhà tuyển dụng</h2>
        </div>
        <div class="banner_middle_1_chat_content">
          <div class="d_flex chat_search align_c flex_center">
            <input type="text" placeholder="Nhập tên nhà tuyển dụng">
            <div class="btn_search d_flex align_c flex_center cursor_p">
              <img src="../images/search_white.svg" alt="">
            </div>
          </div>
          <div class="banner_middle_1_chat_content_text_container">
            <? for ($i = 0; $i < 20; $i++) { ?>
              <div class="banner_middle_1_chat_content_text">
                <div class="banner_middle_1_chat_content_text_item d_flex">
                  <div class="banner_middle_1_chat_content_text_item_img position_r">
                    <img src="../images/logo_circle.svg" alt="">
                    <img src="../images/online_dot.svg" alt="" class="position_a img_online">
                  </div>
                  <div class="pd_l_10 chat_company_info">
                    <h4 class="pb_5px">Công ty Cổ phần Thanh toán Hưng Hà</h4>
                    <p>Hồ Chí Minh</p>
                  </div>
                </div>
              </div>
            <? } ?>
          </div>

        </div>
      </div>
    </div>
  </section>
  <section class="tile">
    <div class="new_works">
      <div class="new_works_header ">
        <h1 class="main_color">Việc làm hấp dẫn</h1>
        <p><span>8</span> việc làm mới được đăng ngày hôm nay!</p>
        <div class="list_works d_flex">
          <a class="active_work " href="">Tất cả</a>
          <a class="" href="">Bất động sản</a>
          <a class="" href="">Kinh doanh</a>
          <a class="" href="">Bảo hiểm</a>
          <a class="" href="">IT</a>
          <a class="" href="">Nhân sự</a>
        </div>
      </div>
      <div class="new_works_content_container">
        <div class="new_works_content d_flex">
          <?
          for ($i = 0; $i < 40; $i++) {
          ?>

            <div class="new_works_content_item ">
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
        <div class="see_all_container ">
          <a class="see_all d_flex align_c flex_center main_color" href="">Xem tất cả</a>
        </div>
      </div>

    </div>

  </section>
  <section class="tile">

    <div class="post_news position_r ">
      <div class="post_news_container d_flex flex_end">
        <div class="bg_dangtin d_flex flex_end">
          <div class="bg_dangtin_text">
            <h1 class="main_color">Đăng tin tuyển dụng miễn phí</h1>
            <ul>
              <div class="d_flex">
                <li>Đăng tin tuyển dụng dễ dàng, không quá 1 phút.</li>
              </div>
              <div class="d_flex">
                <li>Tiếp cận nguồn CV ứng viên khổng lồ, tìm kiếm ứng viên từ kho dữ liệu hơn 1 triệu hồ
                  sơ.</li>
              </div>
              <div class="d_flex">
                <li>Tùy chỉnh các tiêu chí tìm kiếm ứng viên tài năng theo mong muốn: ngành nghề, vị trí
                  tuyển dung, địa điểm làm việc, tính cách ứng viên.</li>
              </div>
              <div class="d_flex">
                <li>Tiết kiệm thời gian tuyển dụng nhân sự.</li>
              </div>
            </ul>
          </div>
        </div>
      </div>
      <!-- <div class="position_a img_dangtin"> -->
      <img src="../images/img_dangtin.png" alt="" class="position_a img_dangtin">
      <!-- </div> -->
      <div class="d_flex align_c flex_center btn_dangtin">
        <a href="" class="btn_main_color d_flex align_c flex_center">Bắt đầu ngay</a>
      </div>
    </div>
  </section>
  <section class="tile">
    <div class="new_works">
      <div class="new_works_header ">
        <h1 class="main_color">Việc làm lương cao</h1>
        <p><span>8</span> việc làm mới được đăng ngày hôm nay!</p>
        <div class="list_works d_flex">
          <a class="active_work " href="">Tất cả</a>
          <a class="" href="">Bất động sản</a>
          <a class="" href="">Kinh doanh</a>
          <a class="" href="">Bảo hiểm</a>
          <a class="" href="">IT</a>
          <a class="" href="">Nhân sự</a>
        </div>
      </div>
      <div class="new_works_content_container">
        <div class="new_works_content d_flex">
          <?
          for ($i = 0; $i < 40; $i++) {
          ?>

            <div class="new_works_content_item ">
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
        <div class="see_all_container  ">
          <a class="see_all d_flex align_c flex_center main_color" href="">Xem tất cả</a>
        </div>
      </div>

    </div>

  </section>

  <section class="tile">
    <div class="news">
      <div class="news_header ">
        <h1 class="main_color">Tin tức tuyển dụng</h1>
        <p>Tin tức tuyển dụng và sự kiện mới nhất!</p>

      </div>
      <div class="news_content_container">
        <div class="news_content d_flex">
          <?
          for ($i = 0; $i < 9; $i++) {
          ?>
            <div class="news_content_item ">
              <div class="news_img">
                <img src="../images/logo.svg" alt="">
              </div>
              <div class="news_content_text">
                <div class="info_news d_flex space_b">
                  <div class="writer">Nguyễn Hoàng Anh</div>
                  <div class="date">13/03/2022</div>
                </div>
                <h4 class="mt_16 main_color">Hướng Dẫn Viết Mẫu Đơn Xin Nghỉ Việc Của Giáo Viên Chuẩn Nhất.
                </h4>
                <p class="mt_12 txt_justify">Mẫu đơn xin nghỉ việc của giáo viên là mẫu đơn dành cho giáo
                  viên có ý định nghỉ việc. Dù nghề giáo viên giáo viên có ý định nghỉ việc dù nghề ...
                </p>
                <a href="" class="read_more_news d_flex align_c flex_center main_color see_all m-0">Đọc
                  thêm</a>
              </div>
            </div>

          <?
          }
          ?>
        </div>
        <div class="see_all_container ">
          <a class="see_all d_flex align_c flex_center main_color" href="">Xem tất cả</a>
        </div>
      </div>

    </div>

  </section>

  <section class="tile">
    <div class="customer">
      <div class="customer_header ">
        <h1 class="main_color">Ý kiến khách hàng</h1>
        <p>Sự hài lòng của bạn là vinh hạnh của chúng tôi!</p>

      </div>
      <div class="customer_content_container">
        <div class="customer_content news_content d_flex">
          <?
          for ($i = 0; $i < 9; $i++) {
          ?>
            <div class="customer_item">
              <div class="customer_avt d_flex align_c flex_center">
                <img src="../images/customer1.png" alt="">
              </div>
              <div class="customer_item_text txt_center">
                <p>Mẫu CV khá đẹp, mình đã tạo rất nhanh, file pdf in ra nét. CV xin việc của Job3s bát ngát
                  vậy, chẳng lo đụng hàng. Thanks các bạn!</p>
                <img src="../images/5stars.svg" alt="">
                <div class="info_customer">
                  <h4 class="main_color">Trần Văn Long</h4>
                  <p>IT phần cứng - mạng</p>
                </div>
              </div>
            </div>

          <?
          }
          ?>
        </div>

      </div>

    </div>

  </section>
  <? include "../includes/footer.php" ?>

  <a class="back_to_top"><img class="border_0" src="../images/back_to_top.svg" alt="" /></a>
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

    function slickSlider(data, flag, data2) {
      var padding = 0;
      if(flag == true) {
        padding = '300px';
      }
      $(".new_works_content").slick({
        infinite: true,
        rows: 6,
        slidesPerRow: data,
        arrows: true,
        dots: true,

        prevArrow: "<img class='a-left control-c prev slick-prev img_arrow' src='../images/prev.svg'>",
        nextArrow: "<img class='a-right control-c next slick-next img_arrow' src='../images/next.svg'>",

      });
      $(".news_content").slick({
        infinite: true,
        slidesToShow: data2,
        slidesToScroll: data2,
        arrows: true,
        dots: true,
        centerMode: flag,
        centerPadding: padding,
        prevArrow: "<img class='a-left control-c prev slick-prev img_arrow' src='../images/prev.svg'>",
        nextArrow: "<img class='a-right control-c next slick-next img_arrow' src='../images/next.svg'>",
      });
    }

    $(document).ready(function() {
      var ww = $(window).innerWidth();
      var slide = 0
      var slide2 = 0
      var flag = true;
      if (ww > 1024) {
        slide = 3
        flag = false
        slide2 = 3
      } else {
        slide = 2
        flag = true
        slide2 = 1

      }
      slickSlider(slide, flag, slide2)




    });
    // ScrollReveal().reveal('.tile', {
    //   interval: 16,
    //   reset: true
    // });

    $('.nav_menu_btn button').click(function() {
      toggleNav()
    })

    $(window).resize(function() {
      var w = $(window).innerWidth();
      var slide = 0;
      if (w > 1024) {
        $('.nav_resp').hide();
        $('.nav_menu_btn button').addClass('.bg_e5_86')
        $('.nav_menu_btn button').removeClass('bg_white')
        $('.nav_header').removeClass('bg_white')
        slide = 3
      } else {
        slide = 2
      }
      slickSlider(slide)
    })

    $('.nav_resp').click(function(e) {
      var t = $(this).children('div').offset().top
      var h = $(this).children('div').outerHeight()
      var y = e.offsetY
      if (t < y || h > y) {
        toggleNav()
      }
    })

    function toggleNav() {
      $('.nav_resp').slideToggle();
      $('.nav_menu_btn button').toggleClass('.bg_e5_86')
      $('.nav_menu_btn button').toggleClass('bg_white')
      $('.nav_header').toggleClass('bg_white')
    }
  </script>
</body>

</html>