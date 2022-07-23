<?
include "config_home.php";

?>

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
  <link rel="stylesheet" href="../css/style_t.css" />
  <link rel="stylesheet" href="../css/style_h.css" />
  <script src="../js/scrollreveal.min.js"></script>
</head>

<body>
  <header id="header">
    <div class="nav_header d_flex align_c space_b">
      <?
      if (isset($_COOKIE['id_com'])) {
      ?>
        <div class="nav_menu_btn position_a">
          <button class="d_flex align_c flex_center bd_cicre wh_42px border_0 bg_wblue"><img src="../images/nav_menu.png" alt=""></button>
        </div>
        <div hidden class="nav_resp position_a w_100">
          <div class="bg_fa nav_after nav_resp">
            <div class="br_5 bg_white nav_after_item mb_10 pb_7">
              <div class="d_flex align_c space_b cl_poup_if position_r cursor_p ">
                <div class="avt_header ">
                  <img src="../images/av_t.png" alt="">
                </div>
                <span class="font_s16 line_h19 font_w500 cl_a4 name_peole flex_1">Nguyễn Đình Trang</span>
                <div class="drop_down d_flex align_c ">
                  <img src="../images/drop_pri.png" alt="">
                </div>
              </div>
              <div hidden class="mt_16">
                <a href="" class="d_flex bg_fa br_5 p_16 mb_16 font_w500"><img src="../images/avartar_green.png" alt="">Cài đặt tài khoản</a>
                <a href="" class="d_flex bg_fa br_5 p_16 mb_16 font_w500"><img src="../images/add_files_green.png" alt="">Quản lý CV</a>
                <a href="tim-ung-vien" class="d_flex bg_fa br_5 p_16 mb_16 font_w500"><img src="../images/vid_icon.png" alt="">Video giới thiệu bản thân</a>
                <a href="tin-tuc" class="d_flex bg_fa br_5 p_16 mb_16 font_w500"><img src="../images/add_files_green.png" alt="">Đơn xin việc</a>
                <a href="lien-he" class="d_flex bg_fa br_5 p_16 mb_16 font_w500"><img src="../images/change_large.svg" alt="">Thư xin việc</a>
                <a href="" class="d_flex bg_fa br_5 p_16 mb_16 font_w500"><img src="../images/hoso.svg" alt="">Sơ yếu lý lịch</a>
                <a href="" class="d_flex bg_fa br_5 p_16 mb_16 font_w500"><img src="../images/check_icon.png" alt="">Việc làm đã ứng tuyển</a>
                <a href="" class="d_flex bg_fa br_5 p_16 mb_16 font_w500"><img src="../images/heart_icon.png" alt="">Việc làm đã lưu</a>
                <a href="" class="d_flex bg_fa br_5 p_16 mb_16 font_w500"><img src="../images/setting_list.png" alt="">Gợi ý việc làm</a>
                <a href="tim-ung-vien" class="d_flex bg_fa br_5 p_16 mb_16 font_w500"><img src="../images/khoa_icon.png" alt="">Đổi mật khẩu</a>
                <a href="tin-tuc" class="d_flex bg_fa br_5 p_16 font_w500"><img src="../images/edit_pen_green.png" alt="">Đánh giá</a>
              </div>
            </div>
            <div class="br_5 bg_white nav_after_item mb_10">
              <div class="d_flex align_c space_b cl_poup_if position_r cursor_p mt_10">
                <div class="mr_12">
                  <img src="../images/hoso.svg" alt="">
                </div>
                <span class="font_s16 line_h19 font_w500 cl_a4 name_peole flex_1">Hồ sơ & CV</span>
                <div class="drop_down d_flex align_c ">
                  <img src="../images/drop_pri.png" alt="">
                </div>
              </div>
              <div hidden class="mt_16">
                <a href="" class="d_flex bg_fa br_5 p_16 mb_16 font_w500"><img src="../images/add_files_green.png" alt="">CV</a>
                <a href="" class="d_flex bg_fa br_5 p_16 mb_16 font_w500"><img src="../images/add_files_green.png" alt="">Đơn xin việc</a>
                <a href="tim-ung-vien" class="d_flex bg_fa br_5 p_16 mb_16 font_w500"><img src="../images/change_large.svg" alt="">Thư xin việc</a>
                <a href="tin-tuc" class="d_flex bg_fa br_5 p_16 mb_16 font_w500"><img src="../images/hoso.svg" alt="">Sơ yếu lý lịch</a>
              </div>
            </div>
            <a href="" class="d_flex bg_white br_5 p_16 mb_10 font_w500"><img src="../images/bag_green.png" alt="">Tìm việc làm</a>
            <a href="" class="d_flex bg_white br_5 p_16 mb_10 font_w500"><img src="../images/news.svg" alt="">Tin tức</a>
            <a href="tim-ung-vien" class="d_flex bg_white br_5 p_16 mb_10 font_w500"><img src="../images/phone_green.svg" alt="">Liên hệ</a>
            <a href="tin-tuc" class="d_flex bg_white br_5 p_16 font_w500"><img src="../images/log_out_red.png" alt="">Đăng xuất</a>

          </div>

        </div>
        <div class="header_after_left">
          <a href="" class="d_flex center_center">
            <svg width="116" height="42" viewBox="0 0 116 42" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M67.288 25.7525C67.3064 27.5082 66.9905 29.2514 66.3572 30.889C65.7844 32.384 64.9286 33.7543 63.8365 34.9249C62.7721 36.0718 61.4903 36.9956 60.0656 37.6426C58.6475 38.2674 57.1103 38.5758 55.561 38.5463C54.037 38.5663 52.5333 38.1968 51.1922 37.4727C50.0735 36.862 49.136 35.9667 48.4745 34.8773H48.0804V36.7458C48.0804 37.016 47.973 37.2753 47.7819 37.4664C47.5908 37.6575 47.3315 37.7649 47.0612 37.7649H43.2632C44.1661 37.2205 45.0008 36.5704 45.7499 35.8285C47.0027 34.5654 47.9852 33.0605 48.6375 31.4054C48.8565 30.8652 49.0403 30.3115 49.1879 29.7476C49.4288 30.1368 49.7138 30.497 50.0372 30.8211C50.6189 31.4057 51.312 31.8678 52.0755 32.18C52.8439 32.4901 53.6656 32.647 54.4942 32.642C55.3277 32.6459 56.1531 32.4794 56.9198 32.1528C57.6799 31.8344 58.3719 31.3731 58.9581 30.7939C59.5648 30.1747 60.0448 29.4431 60.3714 28.6401C61.0964 26.8185 61.0964 24.7884 60.3714 22.9668C60.0465 22.1629 59.5663 21.431 58.9581 20.813C58.3733 20.2321 57.681 19.7706 56.9198 19.4542C56.1531 19.1275 55.3277 18.961 54.4942 18.965C53.6651 18.9621 52.8435 19.1213 52.0755 19.4338C51.3092 19.7407 50.6151 20.2034 50.0372 20.7926C49.7159 21.1161 49.4311 21.4738 49.1879 21.8594C48.9095 22.3037 48.6816 22.7777 48.5084 23.2726V25.8272C48.5081 26.5089 48.4627 27.1899 48.3725 27.8655C48.2281 28.924 47.952 29.9603 47.5504 30.9502C46.9549 32.4606 46.058 33.8338 44.9142 34.986C44.0858 35.8139 43.1376 36.5125 42.1014 37.0583C41.7119 37.2716 41.3103 37.4622 40.8988 37.629C37.6083 38.8975 33.9638 38.8975 30.6733 37.629C29.1742 37.0241 27.8112 36.1255 26.6646 34.986C25.5187 33.8341 24.6195 32.461 24.0216 30.9502C22.7532 27.6433 22.7532 23.984 24.0216 20.6771C24.6228 19.1681 25.5217 17.7955 26.6646 16.6413C27.8131 15.5041 29.1755 14.6058 30.6733 13.9983C33.9538 12.7392 37.5843 12.7392 40.8648 13.9983V21.6148C40.667 21.3183 40.4393 21.0428 40.1854 20.7926C39.6074 20.2034 38.9133 19.7407 38.1471 19.4338C37.3949 19.124 36.5893 18.9648 35.7758 18.965C34.9531 18.9596 34.1376 19.119 33.3774 19.4338C32.6237 19.7454 31.9417 20.2079 31.3731 20.7926C30.7663 21.4051 30.2922 22.1359 29.9803 22.9397C29.2916 24.8031 29.2916 26.8514 29.9803 28.7148C30.2921 29.5206 30.7662 30.2537 31.3731 30.8686C32.5459 32.037 34.134 32.693 35.7894 32.693C37.4449 32.693 39.0329 32.037 40.2057 30.8686C40.8105 30.2519 41.2842 29.5193 41.5986 28.7148C41.8824 27.994 42.0498 27.2326 42.0946 26.4591V5.91303C42.0946 5.0643 42.4317 4.25033 43.0319 3.65019C43.632 3.05005 44.446 2.71289 45.2947 2.71289C46.1434 2.71289 46.9574 3.05005 47.5575 3.65019C48.1577 4.25033 48.4948 5.0643 48.4948 5.91303V16.6549C49.1581 15.5669 50.0952 14.672 51.2126 14.0595C52.6245 13.3026 54.2113 12.9322 55.8124 12.9859C57.3225 12.9827 58.8154 13.3072 60.1879 13.9371C61.5695 14.5739 62.8153 15.4713 63.8569 16.5801C64.9461 17.7529 65.8016 19.1226 66.3775 20.616C67.0026 22.2553 67.3115 23.9982 67.288 25.7525Z" fill="#007580" />
              <path d="M10.4705 38.5189C7.86846 38.5701 5.31918 37.7815 3.20056 36.27C2.16507 35.5217 1.26444 34.6026 0.537176 33.5523C0.271787 33.1513 0.0991494 32.6961 0.0318402 32.22C-0.035469 31.7439 0.00424419 31.2588 0.148079 30.7999C0.291913 30.3411 0.536251 29.9201 0.863311 29.5676C1.19037 29.2151 1.59192 28.94 2.03872 28.7622C2.74749 28.4825 3.53097 28.4555 4.25734 28.6857C4.98371 28.9158 5.60865 29.3891 6.02701 30.026C6.29784 30.4224 6.62256 30.7791 6.9918 31.0859C7.97247 31.883 9.20737 32.3002 10.4705 32.2613C11.1369 32.2985 11.8032 32.186 12.4204 31.932C13.0377 31.6781 13.5902 31.2891 14.0375 30.7937C14.9495 29.625 15.4015 28.1626 15.3081 26.6832V5.9876C15.3099 5.11239 15.6583 4.27354 16.2772 3.65468C16.8961 3.03581 17.7349 2.68734 18.6101 2.68555C19.4859 2.68555 20.3258 3.03344 20.945 3.6527C21.5643 4.27195 21.9122 5.11184 21.9122 5.9876V26.6084C21.9478 28.3719 21.6409 30.1255 21.0085 31.7721C20.4617 33.1682 19.6285 34.4342 18.5626 35.4886C17.5307 36.4893 16.2956 37.2563 14.9412 37.7376C13.5091 38.2612 11.9953 38.5258 10.4705 38.5189Z" fill="#007580" />
              <path d="M110.548 34.2246C110.369 35.2479 109.943 36.2122 109.308 37.0346C108.634 37.9048 107.788 38.627 106.823 39.156C105.742 39.7449 104.563 40.1331 103.343 40.3018C101.937 40.5024 100.507 40.4693 99.1108 40.204C97.7113 39.9789 96.3554 39.5373 95.0917 38.8951C94.0366 38.3579 93.0704 37.6616 92.2269 36.8307C91.9074 36.4957 91.6181 36.133 91.3625 35.7469L91.1168 35.3793C90.6709 34.7044 90.5107 33.8803 90.6712 33.0875C90.8317 32.2947 91.2998 31.5978 91.973 31.1494C92.2231 30.9861 92.4941 30.8575 92.7787 30.7671L93.0597 30.6993C93.6552 30.5815 94.2722 30.6429 94.8329 30.8756C95.3935 31.1083 95.8727 31.5019 96.2097 32.0068L96.3739 32.2496C96.3776 32.2709 96.3889 32.29 96.4058 32.3035L96.581 32.5621C96.7642 32.8066 96.9688 33.0343 97.1923 33.2425C97.9986 33.9925 99.0072 34.4894 100.093 34.6716C101.04 34.8905 102.028 34.8402 102.947 34.5264C103.259 34.4416 103.541 34.2752 103.766 34.0444C103.991 33.8136 104.151 33.5267 104.228 33.2136C104.285 32.9032 104.263 32.5833 104.164 32.2837C104.065 31.984 103.892 31.7142 103.661 31.4992C102.855 30.8081 101.931 30.2667 100.934 29.9008L97.7163 28.5883C96.9601 28.2728 96.2387 27.8797 95.5636 27.4153C94.851 26.9359 94.2096 26.3583 93.6584 25.6995C93.1073 25.0317 92.6853 24.2671 92.414 23.4449C92.133 22.5431 92.0813 21.5855 92.2636 20.6587C92.4327 19.5803 92.8758 18.5633 93.5502 17.705C94.217 16.8916 95.0535 16.2338 96.0012 15.7777C97.044 15.2844 98.1652 14.9778 99.3139 14.8716C100.607 14.7444 101.912 14.798 103.191 15.0309C105.281 15.3657 107.263 16.1879 108.977 17.4309C109.355 17.7147 109.684 18.0594 109.949 18.451L110.076 18.632C110.507 19.2286 110.696 19.9665 110.604 20.6968C110.512 21.4271 110.147 22.0955 109.582 22.5671C109.279 22.81 108.93 22.9879 108.555 23.0901C108.181 23.1922 107.789 23.2163 107.405 23.1608C107.021 23.1054 106.652 22.9716 106.322 22.7677C105.991 22.5639 105.707 22.2943 105.485 21.9758C105.256 21.6956 104.992 21.4471 104.697 21.2367C103.959 20.6922 103.107 20.3225 102.204 20.1555C101.389 19.991 100.545 20.0369 99.7523 20.2889C99.4448 20.3554 99.1624 20.5078 98.9379 20.7283C98.7134 20.9488 98.556 21.2284 98.484 21.5347C98.4403 21.8092 98.4747 22.0904 98.5834 22.3463C98.692 22.6021 98.8704 22.8222 99.0982 22.9815C99.7548 23.4921 100.472 23.9197 101.233 24.2548L104.694 25.7551C107 26.7642 108.621 28.0022 109.559 29.4691C110.488 30.868 110.842 32.5711 110.548 34.2246Z" fill="#007580" />
              <path d="M90.8759 28.4854C90.6595 29.8357 90.1525 31.123 89.3901 32.2583C88.6277 33.3936 87.628 34.35 86.46 35.0613C85.2313 35.8026 83.8692 36.2961 82.4508 36.5138C80.8528 36.7622 79.2241 36.7363 77.6348 36.4373C76.3225 36.2091 75.048 35.8009 73.8472 35.2244C72.6939 34.6659 71.6434 33.9162 70.7403 33.007C70.0035 32.2682 69.3733 31.4303 68.8681 30.5174C68.7384 30.2876 68.6144 30.0518 68.496 29.8102C68.3784 29.5682 68.2748 29.3195 68.1858 29.0656C67.9873 28.299 68.0702 27.4867 68.4196 26.7761C68.7689 26.0655 69.3615 25.5037 70.0898 25.1928L70.3858 25.0794L71.0226 24.9502C71.6134 24.8862 72.2106 24.9829 72.7511 25.23C73.2916 25.4771 73.7554 25.8654 74.0935 26.3541C74.2221 26.5398 74.3328 26.7372 74.4242 26.9437L74.8581 27.9654C74.9575 28.1074 75.0648 28.2437 75.1793 28.3739C75.881 29.1108 76.7489 29.6689 77.7104 30.0017C78.672 30.3345 79.6993 30.4322 80.7063 30.2867C81.3215 30.1991 81.9136 29.9917 82.449 29.6764C82.9636 29.373 83.414 28.972 83.7748 28.4959C84.1542 27.9852 84.4037 27.3898 84.5016 26.7612C84.6448 26.1237 84.6308 25.4609 84.4608 24.8299C84.2908 24.199 83.9699 23.6189 83.5258 23.1396C82.6148 22.2152 81.4469 21.5861 80.1737 21.3343L79.4243 21.2021C78.7183 21.0268 78.0965 20.6087 77.6678 20.021C77.2391 19.4333 77.0309 18.7135 77.0797 17.9877L77.1316 17.6932C77.3407 16.9792 77.7982 16.3635 78.4214 15.9572C79.0447 15.551 79.7926 15.3809 80.5303 15.4777L80.6976 15.5072C81.1754 15.5587 81.6571 15.5651 82.1361 15.5263C82.7404 15.4812 83.3313 15.3259 83.8796 15.0679C84.4145 14.8019 84.8767 14.4099 85.2263 13.9255C85.6102 13.3989 85.8622 12.7881 85.9613 12.144C86.0665 11.643 86.0595 11.125 85.941 10.627C85.8224 10.129 85.5952 9.66338 85.2757 9.26348C84.5301 8.37877 83.476 7.81062 82.3271 7.6742C81.7439 7.53049 81.1377 7.50579 80.5447 7.60156C79.9517 7.69733 79.3841 7.91161 78.8758 8.2316C78.7656 8.30876 78.6554 8.38591 78.5507 8.47094L78.049 8.85162C77.3961 9.34764 76.573 9.564 75.7606 9.4531C74.9482 9.3422 74.2131 8.91313 73.7171 8.26026C73.2211 7.6074 73.0047 6.78423 73.1156 5.97185C73.2265 5.15946 73.6556 4.4244 74.3084 3.92837L74.8968 3.48709C74.9883 3.42186 75.084 3.36268 75.1833 3.30993C75.3935 3.17451 75.6158 3.04814 75.837 2.92846C76.9048 2.37401 78.0526 1.9898 79.239 1.78973C80.6356 1.56045 82.0616 1.57837 83.4519 1.84267C84.921 2.08263 86.3397 2.56597 87.6497 3.27277C88.7979 3.89659 89.821 4.72721 90.6673 5.72281C91.4476 6.64746 92.0193 7.72956 92.3432 8.89527C92.668 10.0776 92.7205 11.3182 92.4968 12.5237C92.3536 13.4068 92.077 14.2629 91.6766 15.0629C91.3298 15.7547 90.8917 16.3968 90.3741 16.9719C89.9037 17.4916 89.3599 17.9396 88.7598 18.3017C88.2275 18.6269 87.6561 18.8831 87.0592 19.0643L86.979 19.5193C88.4033 20.3866 89.5529 21.6394 90.295 23.1327C91.0694 24.8053 91.2735 26.6857 90.8759 28.4854Z" fill="#FF9900" />
              <path d="M76.7099 38.2207V38.5205C76.7009 38.4208 76.7009 38.3204 76.7099 38.2207Z" fill="#007580" />
            </svg>
          </a>
        </div>
        <div class="header_after_right">
          <nav class="nav_header_after">
            <a href="/" class="font_s16 line_h19 font_w500 cl_a4">Trang chủ</a>
            <a href="/tim-ung-vien" class="font_s16 line_h19 font_w500 cl_a4">Tìm ứng viên</a>
            <a href="/tin-tuc" class="font_s16 line_h19 font_w500 cl_a4">Tin tức</a>
            <a href="/lien-he" class="font_s16 line_h19 font_w500 cl_a4">Liên hệ</a>
            <a href="" class="font_s16 line_h19 font_w500 cl_a4">Báo giá dịch vụ</a>
          </nav>
          <div class="infor_people">
            <div class="notification view_num" data-infor="0">
              <img src="../images/notifi_pri.png" alt="">
            </div>

            <div class="inbox_ms view_num" data-infor="99">
              <a href="/chat" class="d_flex align_c">
                <img src="../images/inbox_pri.png" alt="">
              </a>
            </div>

            <div class="d_flex align_c inf space_b cl_poup_if position_r showPopup cursor_p">
              <div class="avt_header show_popup_choose">
                <img src="../images/av_t.png" alt="">
              </div>
              <span class="font_s16 line_h19 font_w500 cl_a4 name_peole flex_1">Nguyễn Đình Trang</span>
              <div class="drop_down d_flex align_c ">
                <img src="../images/drop_pri.png" alt="">
              </div>
              <div class="popup_account_ box_shadow_after_login position_a" hidden>
                <div class="popup_account_top pd_24 d_flex">
                  <img src="../../../images/doggo.jpg" alt="" class="bd_cicre" />
                  <div class="w_80pt">
                    <h4 class="main_color font_w500 mb_18">Cậu Vàng</h4>
                    <div class="d_flex align_c mb_10">
                      <label class="toggle_checkbox">
                        <input class="slider_check" type="checkbox" id="trangthai_timviec" />
                        <div class="slider round"></div>
                      </label>
                      <div class="d_flex align_c">
                        <p class="text_job mr_8">Trạng thái tìm việc đang tắt</p>
                        <img class="img_edit_job" src="../images/edit_job.png" alt="">
                      </div>
                    </div>
                    <div class="d_flex align_c">
                      <label class="toggle_checkbox">
                        <input class="slider_check" type="checkbox" id="toggle_contact" />
                        <div class="slider round"></div>
                      </label>

                      <p class="text_contact">Cho phép NTD liên hệ bạn qua</p>
                    </div>
                    <div class="d_flex align_c mt_16 choose_contact">
                      <label class="container_radio">
                        <input type="radio" name="radio" id="1" checked />
                        <span class="checkmark"></span>
                        CV online
                      </label>
                      <label class="container_radio ml_16">
                        <input type="radio" name="radio" id="2" />
                        <span class="checkmark"></span>
                        Job3S profile
                      </label>
                    </div>
                  </div>
                </div>
                <div class="popup_account_bot pd_24">
                  <a href="" class="d_flex popup_account_bot_item cursor_p mb_8">
                    <img src="../../../images/avartar_green.png" alt="" />
                    <h4>Quản lý tài khoản</h4>
                  </a>
                  <a href="" class="d_flex popup_account_bot_item cursor_p mb_8">
                    <img src="../../../images/setting_list.png" alt="" />
                    <h4>Gợi ý tìm việc làm</h4>
                  </a>
                  <a href="dang-xuat" class="d_flex popup_account_bot_item cursor_p">
                    <img src="../../../images/logout.svg" alt="" />
                    <h4>Đăng xuất</h4>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

      <?
      } else {
      ?>

        <div class="nav_menu_btn position_a">
          <button class="d_flex align_c flex_center bd_cicre wh_42px border_0 bg_white"><img src="../images/nav_menu.png" alt=""></button>
        </div>
        <div hidden class="nav_resp position_a w_100">
          <div class="bg_fa pd_20">
            <a href="" class="d_flex bg_white border_r16 p_16 mb_10 font_w500"><img src="../images/change_large.svg" alt="">Đăng ký</a>
            <a href="" class="d_flex bg_white border_r16 p_16 mb_10 font_w500"><img src="../images/logout.svg" alt="">Đăng nhập</a>
            <a href="" class="d_flex bg_white border_r16 p_16 mb_10 font_w500"><img src="../images/hoso.svg" alt="">Hồ sơ & CV</a>
            <a href="tim-ung-vien" class="d_flex bg_white border_r16 p_16 mb_10 font_w500"><img src="../images/seach_green.svg" alt="">Tìm ứng viên</a>
            <a href="tin-tuc" class="d_flex bg_white border_r16 p_16 mb_10 font_w500"><img src="../images/news.svg" alt="">Tin tức</a>
            <a href="lien-he" class="d_flex bg_white border_r16 p_16 font_w500"><img src="../images/phone_green.svg" alt="">Liên hệ</a>
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
              <a href="tim-ung-vien">Tìm ứng viên</a>
            </li>
            <li><a href="tin-tuc">Tin tức</a></li>
            <li>
              <a href="lien-he">Liên hệ</a>
            </li>
          </ul>
          <div class="account">
            <ul>
              <li class="login show_popup_choose cursor_p" onclick="show_popup_choose(this)">
                Đăng nhập
                <div class="popup_choose">
                  <a href="authen/dang-nhap-ung-vien" class="popup_choose_top d_flex align_c">
                    <img src="../images/avartar_green.png" alt="" />
                    <p>Ứng viên</p>
                  </a>
                  <a href="authen/dang-nhap-nha-tuyen-dung" class="popup_choose_bot d_flex align_c">
                    <img src="../images/bag_green.png" alt="" />
                    <p>Nhà tuyển dụng</p>
                  </a>
                </div>
              </li>
              <li class="sign_in show_popup_choose" onclick="show_popup_choose(this)">
                Đăng ký
                <div class="popup_choose">
                  <a href="authen/dang-ky-ung-vien" class="popup_choose_top d_flex align_c">
                    <img src="../images/avartar_green.png" alt="" />
                    <p>Ứng viên</p>
                  </a>
                  <a href="authen/dang-ky-nha-tuyen-dung" class="popup_choose_bot d_flex align_c">
                    <img src="../images/bag_green.png" alt="" />
                    <p>Nhà tuyển dụng</p>
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      <? } ?>
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
              <a class="btn_main_color d_flex align_c flex_center shadow_15" href="">Tải App tìm việc Job3s</a>
            </div>
          </div>
          <div class="text_c">
            <img src="../images/app_qr.svg" alt="" />
            <div class="url_download">
              <a class="btn_main_color d_flex align_c flex_center shadow_15" href="">Tải App CV Job3s</a>
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
                    <a href="">
                      <h4 class="main_color pb_5px ellipsis">Nhân viên kinh doanh bất động sảnnnnnnn</h4>
                    </a>
                    <a href="">
                      <p class="pb_5px ellipsis">Công ty Cổ phần Thanh toán Hưng hàaaaa </p>
                    </a>
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
            <div class="d_flex">

              <a href="" class="btn_main_color shadow_15">Tạo CV ngay</a>
            </div>
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
            <div class="d_flex">

              <a href="" class="btn_main_color btn_up_cv shadow_15">Tải lên CV của bạn</a>
            </div>
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
                    <a href="">
                      <h4 class="main_color pb_5px ellipsis">Nhân viên kinh doanh bất động sản</h4>
                    </a>
                    <a href="">
                      <p class="pb_5px ellipsis">Công ty Cổ phần Thanh toán Hưng hà</p>
                    </a>
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
                    <a href="">
                      <h4 class="main_color pb_5px ellipsis">Nhân viên kinh doanh bất động sản</h4>
                    </a>
                    <a href="">
                      <p class="pb_5px ellipsis">Công ty Cổ phần Thanh toán Hưng hà</p>
                    </a>
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
                <a href="chi-tiet-tin-tuc">
                  <h4 class="mt_16 main_color">Hướng Dẫn Viết Mẫu Đơn Xin Nghỉ Việc Của Giáo Viên Chuẩn Nhất.
                  </h4>
                </a>
                <p class="mt_12 txt_justify">Mẫu đơn xin nghỉ việc của giáo viên là mẫu đơn dành cho giáo
                  viên có ý định nghỉ việc. Dù nghề giáo viên giáo viên có ý định nghỉ việc dù nghề ...
                </p>
                <a href="chi-tiet-tin-tuc" class="read_more_news d_flex align_c flex_center main_color see_all m-0">Đọc
                  thêm</a>
              </div>
            </div>

          <?
          }
          ?>
        </div>
        <div class="see_all_container ">
          <a class="see_all d_flex align_c flex_center main_color" href="tin-tuc">Xem tất cả</a>
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
        <div class="customer_content   d_flex">
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

  <a class="back_to_top"><img class="m-0" src="../images/back_to_top.svg" alt="" /></a>
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/select2.min.js"></script>
  <script type="text/javascript" src="../js/slick.min.js"></script>
  <script src="../js/js_h.js"></script>
  <script src="../js/js_main.js"></script>
  <script>
    $(".select_location").select2({
      placeholder: "Tất cả địa điểm",
    });
    $(".back_to_top").click(function() {
      $('html,body').animate({
        scrollTop: 0
      }, 300)

    });

    function slickSlider(data, padding, data2, padding1) {

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
        centerMode: true,
        centerPadding: padding,
        prevArrow: "<img class='a-left control-c prev slick-prev img_arrow' src='../images/prev.svg'>",
        nextArrow: "<img class='a-right control-c next slick-next img_arrow' src='../images/next.svg'>",
      });
      $(".customer_content").slick({
        infinite: true,
        slidesToShow: data2,
        slidesToScroll: data2,
        arrows: true,
        dots: true,
        centerMode: true,
        centerPadding: padding1,
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
        // flag = true
        padding = '420px'
        padding1 = '420px'
        slide2 = 1
      } else if (ww > 768 && ww <= 1024) {
        slide = 2
        padding = '300px'
        padding1 = '300px'

        slide2 = 1

      } else if (ww > 480 && ww <= 768) {
        slide = 2
        padding = '163px'
        padding1 = '110px'
        slide2 = 1

      } else {
        slide = 1
        padding = '5px'
        padding1 = '5px'
        slide2 = 1
      }
      slickSlider(slide, padding, slide2, padding1)




    });
    ScrollReveal().reveal('.tile', {
      interval: 16,
      reset: true
    });


    var wi = $(window).innerWidth();
    if (wi <= 480) {
      $('.btn_up_cv').text('Tải lên CV ngay')
    }
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
  </script>
</body>

</html>