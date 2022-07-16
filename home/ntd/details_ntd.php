<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/slick.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/style_h.css">
    <link rel="stylesheet" href="../../css/style_t.css">
    <title>Chi tiết nhà tuyển dụng</title>
</head>

<body>
    <div class="popup hidden">
        <div class="main_popup bg_white popup_591 br_20">
            <div class="header_popup position_r btn_primary d_flex center_center pd_19_18 hd_popup">
                <h3 class="font_s20 line_h23 cl_white font_w700">Đăng nhập</h3>
                <div class="close_popup">
                    <img src="../../images/close_white.png" alt="">
                </div>
            </div>
            <div class="conatent_popup pd_48_68">
                <form onsubmit="return false" action="" method="POST">
                    <div class="form_group">
                        <span class="font_s16 line_h19 font_w500 cl_a4">Email</span>
                        <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                            <label for="email" class="d_flex align_c mr_10">
                                <img src="../../images/email_blue.png" alt="">
                            </label>
                            <input type="text" id="email" name="email" class="rs_input ip_lhd pd_tb11 flex_1" placeholder="Nhập email của bạn" />
                        </div>
                    </div>

                    <div class="form_group">
                        <span class="font_s16 line_h19 font_w500 cl_a4">Mật khẩu</span>
                        <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                            <label for="password" class="d_flex align_c mr_10">
                                <img src="../../images/pass_blue.png" alt="">
                            </label>
                            <input type="password" autocomplete="off" id="password" name="password" class="rs_input ip_lhd pd_tb11 flex_1" placeholder="Nhập email của bạn" />
                            <div class="d_flex align_c cursor_p eye_btn">
                                <img src="../../images/eve_open.png" alt="">
                                <img src="../../images/eve_close.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="form_submit mt_25">
                        <button class="btn btn_hover_primary w_100 br_100 pd_t12_b11_lr10 font_s16 line_h19 font_w700 cl_white btn_primary">Đăng nhập</button>
                    </div>

                    <div class="authen_extend mt_15 d_flex space_b">
                        <span class="font_s16 line_h19 font_w400 cl_a4">Bạn chưa có tài khoản? <a href="/authen/dang-ky-ung-vien.html" class="font_w700 cl_oran">Đăng ký ngay</a></span>

                        <a href="/authen/quen-mat-khau-ung-vien.html" class="font_s16 line_h19 font_w700 cl_primary">Quên mật khẩu?</a>
                    </div>

                    <div class="authen_other pd_b_0">
                        <span class="hc cl_73">hoặc</span>
                        <div class="list_btn">
                            <button class="btn bd_dc br_5 pd_10 btn_hv_face cl_face">
                                <div class="d_flex align_c mr_6">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.5995 11.25L15.1485 7.63047H11.7155V5.28164C11.7155 4.29141 12.1951 3.32617 13.7326 3.32617H15.2933V0.244531C15.2933 0.244531 13.877 0 12.5229 0C9.6957 0 7.84772 1.73359 7.84772 4.87187V7.63047H4.70508V11.25H7.84772V20H11.7155V11.25H14.5995Z" fill="currentColor" />
                                    </svg>
                                </div>
                                <span class="font_s16 line_h19 font_w700 currentColor">Facebook</span>
                            </button>

                            <button class="btn bd_dc br_5 pd_10 cl_gg btn_hv_gg">
                                <div class="d_flex align_c mr_6">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.6049 8.12475C19.7299 8.79419 19.798 9.49411 19.798 10.2245C19.798 15.9376 15.9743 20 10.1992 20C8.88589 20.0004 7.58535 19.742 6.37191 19.2396C5.15847 18.7372 4.05592 18.0006 3.12726 17.072C2.19859 16.1433 1.46201 15.0407 0.959608 13.8273C0.457203 12.6139 0.198819 11.3133 0.199219 10C0.198819 8.68667 0.457203 7.38613 0.959608 6.17269C1.46201 4.95926 2.19859 3.8567 3.12726 2.92804C4.05592 1.99937 5.15847 1.26279 6.37191 0.76039C7.58535 0.257984 8.88589 -0.000399962 10.1992 4.64701e-07C12.8993 4.64701e-07 15.1555 0.993499 16.8865 2.60666L14.0676 5.42564V5.41853C13.0182 4.41893 11.6864 3.90593 10.1992 3.90593C6.89975 3.90593 4.21791 6.69342 4.21791 9.99391C4.21791 13.2934 6.89975 16.087 10.1992 16.087C13.1929 16.087 15.2307 14.3753 15.6492 12.0246H10.1992V8.12475H19.606H19.6049Z" fill="currentColor" />
                                    </svg>
                                </div>
                                <span class="font_s16 line_h19 font_w700 currentColor">Google</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- poup xác nhận -->
    <div class="popup hidden" id="unfower_popup">
        <div class="main_popup bg_white popup_500 br_20 animation_zoom_in">
            <div class="header_popup position_r btn_primary d_flex center_center pd_19_18 hd_popup">
                <h3 class="font_s20 line_h23 cl_white font_w700">Xác nhận</h3>
                <div class="close_popup">
                    <img src="../../images/close_white.png" alt="">
                </div>
            </div>
            <div class="conatent_popup">
                <form onsubmit="return false" action="" method="POST">
                    <p class="font_s16 line_h19 font_w400 cl_a4 pd_48_24">Bỏ theo dõi sẽ không tiếp tục nhận được thông tin tuyển dụng từ <span class="font_w500">Công ty TNHH Draho Việt Nam.</span></p>
                    <div class="form_submit d_flex center_center bd_topdc pd_24">
                        <button class="cancel font_s16 line_h19 font_w700 btn h_42 flex_im m_w140 center_center cl_primary bg_w bg_td bd_td br_12">Đóng lại</button>
                        <button class="unfower btn h_42 m_w140 br_12 font_s16 line_h19 font_w700 bg_td cl_white btn_primary ml_68">Bỏ theo dõi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end poup xác nhận -->

    <div id="root">
        <? include("../../includes/before_header.php") ?>
        <div class="container bg_f5 pd_b48 mt_90">
            <div class="infor_controll pd_48 d_flex bg_clE5 space_b controll_ntd">
                <div class="infor_left d_flex">
                    <div class="wh_120 br_16 bd_dc mr_24 fshick position_r">
                        <span class="online is_offline"></span>
                        <img src="../../images/avatar_test.png" alt="avatar_ctytest" class="br_16 img_full">
                    </div>
                    <div class="infor_ct">
                        <h1 class="font_s28 line_h33 font_w700 cl_primary pd_b12">Công ty Cổ phần Thanh Toán Hưng Hà</h1>
                        <span class="font_s20 line_h23 font_w500 cl_55">Công nghệ thông tin - Viễn thông</span>
                        <div class="d_flex space_b flex_w mb_w">
                            <div class="mt_16 d_flex flex_w if_add">
                                <div class="d_flex">
                                    <div class="d_flex align_c wh_16 mr_8">
                                        <img src="../../images/adrress_icon.png" alt="icon_addrress" class="img_full">
                                    </div>
                                    <span class="font_s16 line_h19 font_w400 cl_55">Thanh Xuân, Hà Nội</span>
                                </div>

                                <div class="d_flex">
                                    <div class="d_flex align_c wh_16 mr_8">
                                        <img src="../../images/gg_blobe.png" alt="icon_addrress" class="img_full">
                                    </div>
                                    <span class="font_s16 line_h19 font_w400 cl_55">Timviec365.vn</span>
                                </div>
                            </div>
                            <div class="infor_follower d_flex align_e">
                                <button class="btn td_btn hover_td flex_im m_w142 center_center cl_primary bg_w bg_td bd_td br_100">
                                    <div class="mr_6 d_flex align_c">
                                        <!-- <img src="../../images/like_fill_white.png" alt=""> -->
                                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.47654 15.7499H2.30155C1.91699 15.7499 1.54818 15.5971 1.27625 15.3252C1.00433 15.0533 0.851563 14.6845 0.851562 14.2999V9.22495C0.851562 8.84039 1.00433 8.47158 1.27625 8.19965C1.54818 7.92773 1.91699 7.77496 2.30155 7.77496H4.47654M9.55151 6.32497V3.42499C9.55151 2.84814 9.32236 2.29493 8.91447 1.88704C8.50658 1.47915 7.95336 1.25 7.37652 1.25L4.47654 7.77496V15.7499H12.6545C13.0042 15.7539 13.3435 15.6313 13.61 15.4048C13.8764 15.1783 14.052 14.8632 14.1045 14.5174L15.105 7.99246C15.1365 7.78464 15.1225 7.57245 15.0639 7.37059C15.0053 7.16873 14.9035 6.98203 14.7656 6.82341C14.6276 6.6648 14.4569 6.53807 14.2651 6.452C14.0733 6.36593 13.8652 6.32259 13.655 6.32497H9.55151Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>

                                    </div>
                                    <span class="font_s16 line_h19 font_w500 currentColor">Theo dõi</span>
                                </button>

                                <button class="btn hover_chat flex_im m_w142 center_center cl_green bg_w bg_td bd_chat br_100">
                                    <div class="mr_6 d_flex align_c">
                                        <!-- <img src="../../images/ib_green.png" alt=""> -->
                                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.12122 14.6263L4.52302 13.993C4.33262 13.8722 4.09797 13.8434 3.88405 13.9147L4.12122 14.6263ZM0.75 15.75L0.0384876 15.5128C-0.0513461 15.7823 0.0187957 16.0795 0.21967 16.2803C0.420544 16.4812 0.71767 16.5513 0.987171 16.4615L0.75 15.75ZM1.87374 12.3788L2.58525 12.6159C2.65656 12.402 2.62783 12.1674 2.50703 11.977L1.87374 12.3788ZM8 16.5C12.4183 16.5 16 12.9183 16 8.5H14.5C14.5 12.0899 11.5899 15 8 15V16.5ZM3.71942 15.2595C4.95767 16.0452 6.42686 16.5 8 16.5V15C6.71976 15 5.52808 14.6306 4.52302 13.993L3.71942 15.2595ZM3.88405 13.9147L0.512829 15.0385L0.987171 16.4615L4.3584 15.3378L3.88405 13.9147ZM1.46151 15.9872L2.58525 12.6159L1.16223 12.1416L0.0384876 15.5128L1.46151 15.9872ZM0 8.5C0 10.0731 0.454829 11.5423 1.24045 12.7806L2.50703 11.977C1.86936 10.9719 1.5 9.78024 1.5 8.5H0ZM8 0.5C3.58172 0.5 0 4.08172 0 8.5H1.5C1.5 4.91015 4.41015 2 8 2V0.5ZM16 8.5C16 4.08172 12.4183 0.5 8 0.5V2C11.5899 2 14.5 4.91015 14.5 8.5H16Z" fill="currentColor" />
                                            <line x1="4.72266" y1="6.94336" x2="11.2782" y2="6.94336" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                            <line x1="4.72266" y1="10.166" x2="8.05599" y2="10.166" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        </svg>

                                    </div>
                                    <span class="font_s16 line_h19 font_w500 currentColor">Chat ngay</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- controll màn 1024 -->
                <div class="controll_node">
                    <div class="ct_phone">
                        <div class="d_flex align_c">
                            <img src="../../../images/phone_mb_green.png" alt="">
                        </div>
                        <span class="font_s14 line_h16 font_w500 cl_a4">Gọi điện</span>
                    </div>
                    <div class="ct_mess">
                        <div class="d_flex align_c">
                            <img src="../../../images/sms_green.png" alt="">
                        </div>
                        <span class="font_s14 line_h16 font_w500 cl_a4">SMS</span>
                    </div>
                    <div class="ct_chat bg096">
                        <div class="d_flex align_c">
                            <img src="../../../images/chat_icon_white.png" alt="">
                        </div>
                        <span class="font_s14 line_h16 font_w500 cl_white">Chat</span>
                    </div>
                </div>
            </div>

            <div class="details_cty mt_48 lr_68 d_flex" data-mobile="1024">
                <div class="details_cty_left" data-id="0">
                    <div class="box_cty" data-id="0" data-orderOld="0" data-new="1">
                        <div class="item_box">
                            <h3 class="font_s24 line_h28 font_w700 cl_primary bd_l4 pd_l8">Thông tin công ty</h3>
                            <div class="content_cty mt_24">
                                <p class="font_s16 line_h18 font_w400 cl_a4">Công ty TNHH Jera Vietnam (Jenhair Vietnam) tự hào là một trong những nhà cung cấp Tóc nối đầu tiên tại Việt Nam từ những năm 2013 nay . Qua quá trình phát triển, từ một nơi thu mua tóc nhỏ lẻ đến nay Jen hair đã phát triển và vươn tầm thành Nhà cung cấp tóc lớn nhất Việt Nam và là một nhà cung cấp những sản phẩm về tóc tốt nhất trên thế giới Công ty TNHH Jera Vietnam (Jenhair Vietnam) tự hào là một trong những nhà cung cấp Tóc nối đầu tiên tại Việt Nam từ những năm 2013 nay . Qua quá trình phát triển, từ một nơi thu mua tóc nhỏ lẻ đến nay Jen hair đã phát triển và vươn tầm thành Nhà cung cấp tóc lớn nhất Việt Nam và là một nhà cung cấp những sản phẩm về tóc tốt nhất trên thế giới Công ty TNHH Jera Vietnam (Jenhair Vietnam) tự hào là một trong những nhà cung cấp Tóc nối đầu tiên tại Việt Nam từ những năm 2013 nay . Qua quá trình phát triển, từ một nơi thu mua tóc nhỏ lẻ đến nay Jen hair đã phát triển và vươn tầm thành Nhà cung cấp tóc lớn nhất Việt Nam và là một nhà cung cấp những sản phẩm về tóc tốt nhất trên thế giới Công ty TNHH Jera Vietnam (Jenhair Vietnam) tự hào là một trong những nhà cung cấp Tóc nối đầu tiên tại Việt Nam từ những năm 2013 nay . Qua quá trình phát triển, từ một nơi thu mua tóc nhỏ lẻ đến nay Jen hair đã phát triển và vươn tầm thành Nhà cung cấp tóc lớn nhất Việt Nam và là một nhà cung cấp những sản phẩm về tóc tốt nhất trên thế giới Công ty TNHH Jera Vietnam (Jenhair Vietnam) tự hào là một trong những nhà cung cấp Tóc nối đầu tiên tại Việt Nam từ những năm 2013 nay . Qua quá trình phát triển, từ một nơi thu mua tóc nhỏ lẻ đến nay Jen hair đã phát triển và vươn tầm thành Nhà cung cấp tóc lớn nhất Việt Nam và là một nhà cung cấp những sản phẩm về tóc tốt nhất trên thế giới Công ty TNHH Jera Vietnam (Jenhair Vietnam) tự hào là một trong những nhà cung cấp Tóc nối đầu tiên tại Việt Nam từ những năm 2013 nay . Qua quá trình phát triển, từ một nơi thu mua tóc nhỏ lẻ đến nay Jen hair đã phát triển và vươn tầm thành Nhà cung cấp tóc lớn nhất Việt Nam và là một nhà cung cấp những sản phẩm về tóc tốt nhất trên thế giới Công ty TNHH Jera Vietnam (Jenhair Vietnam) tự hào là một trong những nhà cung cấp Tóc nối đầu tiên tại Jen hair đã phát triển và vươn tầm thành Nhà cung cấp tóc lớn nhất Việt Nam và là một nhà cung cấp nhữ
                                    Jen hair đã phát triển và vươn tầm thành Nhà cung cấp tóc lớn nhất Việt Nam và là một nhà cung cấp nhữJen hair đã phát triển và vươn tầm thành Nhà cung cấp tóc lớn nhất Việt Nam và là một nhà cung cấp Jen hair đã phát triển và vươn tầm thành Nhà cung cấp tóc lớn nhất Việt Nam và là một nhà cung cấp nhữJen hair đã phát triển và vươn tầm thành Nhà cung cấp tóc lớn nhất Việt Nam và là một nhà cung cấp nhữJen hair đã phát triển và vươn tầm thành Nhà cung cấp tóc lớn nhất Việt Nam và là một nhà cung cấp Jen hair đã phát triển và vươn tầm thành Nhà cung cấp tóc lớn nhất Việt Nam và là một nhà cung cấp nhữJen hair đã phát triển và vươn tầm thành Nhà cung cấp tóc lớn nhất Việt Nam và là một nhà cung cấp nhữJen hair đã phát triển và vươn tầm thành Nhà cung cấp tóc lớn nhất Việt Nam và là một nhà cung cấp Jen hair đã phát triển và vươn tầm thành Nhà cung cấp tóc lớn nhất Việt Nam và là một nhà cung cấp nhữJen hair đã phát triển và vươn tầm thành Nhà cung cấp tóc lớn nhất Việt Nam và là một nhà cung cấp nhữJen hair đã phát triển và vươn tầm thành Nhà cung cấp tóc lớn nhất Việt Nam và là một nhà cung.</p>
                            </div>
                        </div>

                        <div class="item_box">
                            <h3 class="font_s24 line_h28 font_w700 cl_primary bd_l4 pd_l8">Video giới thiệu công ty</h3>
                            <div class="content_cty mt_24">
                                <!-- nhúng video -->
                                <!-- <img src="../../images/anh_video_cty.png " alt=""> -->
                                <div class="video_peolpe mt_16">
                                    <video controls="" class="img_full br_16">
                                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                                        Your browser does not support HTML video.
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="details_cty_right" data-id="1">
                    <div class="box_cty" data-id="1" data-orderOld="0" data-new="0">
                        <h3 class="font_s24 line_h28 font_w700 cl_primary bd_bpr">Tổng quan</h3>
                        <div class="list_if mt_24">
                            <div class="d_flex align_s">
                                <div class="wh_16">
                                    <img src="../../images/people_oran.png" alt="">
                                </div>
                                <div class="pd_l8">
                                    <span class="font_s16 line_h19 font_w400 cl_55 block">Quy mô nhân sự</span>
                                    <span class="font_s16 line_h19 font_w500 cl_primary block mt_8">100 - 500 Nhân viên</span>
                                </div>
                            </div>

                            <div class="d_flex align_s">
                                <div class="wh_16">
                                    <img src="../../images/addrress_oran.png" alt="">
                                </div>
                                <div class="pd_l8">
                                    <span class="font_s16 line_h19 font_w400 cl_55 block">Địa chỉ</span>
                                    <span class="font_s16 line_h19 font_w500 cl_primary block mt_8">Thanh Xuân, Hà Nội</span>
                                </div>
                            </div>

                            <div class="d_flex align_s">
                                <div class="wh_16">
                                    <img src="../../images/web_oran.png" alt="">
                                </div>
                                <div class="pd_l8">
                                    <span class="font_s16 line_h19 font_w400 cl_55 block">Website</span>
                                    <span class="font_s16 line_h19 font_w500 cl_primary block mt_8">Timviec365.vn</span>
                                </div>
                            </div>

                            <div class="d_flex align_s">
                                <div class="wh_16">
                                    <img src="../../images/phone_oran.png" alt="">
                                </div>
                                <div class="pd_l8">
                                    <span class="font_s16 line_h19 font_w400 cl_55 block">Số điện thoại</span>
                                    <span class="font_s16 line_h19 font_w500 cl_primary block mt_8">0987 445 334</span>
                                </div>
                            </div>

                            <div class="d_flex align_s">
                                <div class="wh_16">
                                    <img src="../../images/email_oran.png" alt="">
                                </div>
                                <div class="pd_l8">
                                    <span class="font_s16 line_h19 font_w400 cl_55 block">Email</span>
                                    <span class="font_s16 line_h19 font_w500 cl_primary block mt_8">congtyabc@gmail.com</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box_cty mt_24" data-id="1" data-orderOld="1" data-new="2">
                        <h3 class="font_s24 line_h28 font_w700 cl_primary bd_bpr">Chia sẻ công ty với bạn bè</h3>
                        <div class="mxh mt_24">
                            <div class="copy_box">
                                <span class="font_s16 line_h19 font_w400 cl_a4">Sao chép đường dẫn</span>
                                <div class="link mt_16">
                                    <span class="link_copy">https://job3s/congtycophanthanh toán hưng hà</span>
                                    <div class="copyeid" onclick="Copyied(this,'.link_copy')">
                                        <img src="../../images/copy_primary.png" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="mxh_box">
                                <span class="font_s16 line_h19 font_w400 cl_a4">Mạng xã hội</span>
                                <div class="list_mxh_big mt_16">
                                    <a href="" target="_blank" class="wh_42">
                                        <img src="../../images/facebook_icon.png" alt="">
                                    </a>

                                    <a href="" target="_blank" class="wh_42">
                                        <img src="../../images/twitter_icon.png" alt="">
                                    </a>

                                    <a href="" target="_blank" class="wh_42">
                                        <img src="../../images/in_icon.png" alt="">
                                    </a>

                                    <a href="" target="_blank" class="wh_42">
                                        <img src="../../images/zalo_icon.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lr_68 news_recruit mt_48">
                <div class="box_cty">
                    <div class="item_box">
                        <h3 class="font_s24 line_h28 font_w700 cl_primary bd_l4 pd_l8">Thông tin công ty</h3>
                        <div class="item_pdt24 silder_news">
                            <? for ($i = 0; $i < 50; $i++) : ?>
                                <div class="item_news">
                                    <div class="item_news_top">
                                        <div class="img_news">
                                            <img src="../../images/img_news_ts.png" alt="">
                                        </div>
                                        <div class="content_news">
                                            <h3 class="font_s16 line_h19 font_w500 cl_primary pd_r23">Nhân viên kinh doanh bất động sản</h3>
                                            <span class="font_s16 line_h19 font_w400 cl_73 block mt_5">Công ty Cổ phần Thanh toán Hưng Hà</span>

                                            <div class="save_new">
                                                <img src="../../images/save_icon.png" alt="">
                                            </div>

                                            <div class="infor_new d_flex mt_6">
                                                <div class="item_infor_new">
                                                    <div class="mr_5 w_16h17">
                                                        <img src="../../images/date_icon.png" alt="date" class="img_full">
                                                    </div>
                                                    <span class="font_s16 line_h19 font_w400 cl_55">Hạn nộp: 30/04/2022</span>
                                                </div>

                                                <div class="item_infor_new">
                                                    <div class="mr_5 w_16h17">
                                                        <img src="../../images/time_icon.png" alt="date" class="img_full">
                                                    </div>
                                                    <span class="font_s16 line_h19 font_w400 cl_55">Toàn thời gian</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item_news_bottom d_flex flex_w">
                                        <span class="bg_kv">Hà Nội</span>
                                        <span class="bg_money">10 -16 triệu</span>
                                    </div>
                                </div>
                            <? endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <? include("../../includes/footer.php") ?>
    </div>
    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/slick.min.js"></script>
    <script src="../../js/js_t.js"></script>
    <script>
        $('.silder_news').slick({
            rows: 3,
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 2,
            slidesToScroll: 2,
            prevArrow: `<button type='button' class='slick-prev pull-left'><img src="../../images/arrow_prev.png" alt=""></button>`,
            nextArrow: `<button type='button' class='slick-next pull-right'><img src="../../images/arrow_next.png" alt=""></button>`,
            responsive: [{
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }]
        })


        eyeChange('.eye_btn', '#password', 'eye_hidden');

        let isCheck = false;
        $('.td_btn').click(() => {
            if (!isCheck) {
                $('.td_btn > span').text('Đã theo dõi')
                $('.td_btn').css({
                    backgroundColor: '#007580',
                    color: 'white'
                })

                isCheck = true;
            } else {
                let {
                    infor_menu,
                    cancel,
                    clearAmintions
                } = viewAndClosePopupUpdate('#unfower_popup', '.main_popup', '.close_popup', '.cancel', '');
                if (infor_menu) {
                    let unfow = infor_menu.querySelector('.unfower');
                    if (unfow) {
                        unfow.onclick = () => {
                            clearAmintions();
                            $('.td_btn > span').text('Theo dõi');
                            $('.td_btn').css({
                                backgroundColor: 'white',
                                color: '#007580'
                            })

                            isCheck = false;
                        }
                    }
                }
            }
        })


        responsiveLayout({
            elemAppenNew: '.details_cty',
            resize: true
        })

        scrollControlMobile({
            elemView: '.controll_node',
            classActive: 'view_controll',
            boxCompare: '.infor_controll'
        })
    </script>
</body>

</html>