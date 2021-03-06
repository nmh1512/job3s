<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/slick.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../../../css/style_t.css">
    <title>Chi tiết nhà tuyển dụng</title>
</head>

<body>
    <!-- đăng nhập -->
    <div class="popup hidden">
        <div class="main_popup bg_white popup_591 br_20 animation_zoom_in">
            <div class="header_popup position_r btn_primary d_flex center_center pd_19_18 hd_popup">
                <h3 class="font_s20 line_h23 cl_white font_w700">Đăng nhập</h3>
                <div class="close_popup">
                    <img src="../../../images/close_white.png" alt="" class="img_full">
                </div>
            </div>
            <div class="conatent_popup pd_48_68">
                <form onsubmit="return false" action="" method="POST">
                    <div class="form_group">
                        <span class="font_s16 line_h19 font_w500 cl_a4">Email</span>
                        <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                            <label for="email" class="d_flex align_c mr_10">
                                <img src="../../../images/email_blue.png" alt="" class="img_full">
                            </label>
                            <input type="text" id="email" name="email" class="rs_input ip_lhd pd_tb11 flex_1" placeholder="Nhập email của bạn" />
                        </div>
                    </div>

                    <div class="form_group">
                        <span class="font_s16 line_h19 font_w500 cl_a4">Mật khẩu</span>
                        <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                            <label for="password" class="d_flex align_c mr_10">
                                <img src="../../../images/pass_blue.png" alt="" class="img_full">
                            </label>
                            <input type="password" autocomplete="off" id="password" name="password" class="rs_input ip_lhd pd_tb11 flex_1" placeholder="Nhập email của bạn" />
                            <div class="d_flex align_c cursor_p eye_btn">
                                <img src="../../../images/eve_open.png" alt="" class="img_full">
                                <img src="../../../images/eve_close.png" alt="" class="img_full">
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

                    <!-- <div class="authen_other pd_b_0">
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
                    </div> -->
                </form>
            </div>
        </div>
    </div>
    <!-- đăng nhập -->

    <!-- poup xác nhận -->
    <div class="popup hidden" id="popup_xh_chat">
        <div class="main_popup bg_white popup_500 br_20 animation_zoom_in">
            <div class="header_popup position_r btn_primary d_flex center_center pd_19_18 hd_popup">
                <h3 class="font_s20 line_h23 cl_white font_w700">Xác nhận</h3>
                <div class="close_popup">
                    <img src="../../../images/close_white.png" alt="" class="img_full">
                </div>
            </div>
            <div class="conatent_popup">
                <form onsubmit="return false" action="" method="POST">
                    <p class="font_s16 line_h19 font_w400 cl_a4 pd_48_24 txt_center">Bạn cần sử dụng <span class="font_w500">1 điểm</span> để xem thông tin và chat với ứng viên này?</p>
                    <div class="form_submit d_flex center_center pd_24 pd_t0">
                        <button class="cancel font_s16 line_h19 font_w700 btn h_42 flex_im m_w140 center_center cl_primary bg_w bg_td bd_td br_12">Hủy</button>
                        <button class="btn h_42 m_w140 br_12 font_s16 line_h19 font_w700 bg_td cl_white btn_primary ml_68">Đồng ý</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end poup xác nhận -->

    <!-- poup xác nhận -->
    <div class="popup hidden" id="popup_het_diem">
        <div class="main_popup bg_white popup_500 br_20 animation_zoom_in">
            <div class="header_popup position_r btn_primary d_flex center_center pd_19_18 hd_popup">
                <h3 class="font_s20 line_h23 cl_white font_w700">Thông báo</h3>
                <div class="close_popup">
                    <img src="../../../images/close_white.png" alt="" class="img_full">
                </div>
            </div>
            <div class="conatent_popup">
                <form onsubmit="return false" action="" method="POST">
                    <p class="font_s16 line_h19 font_w400 cl_a4 pd_48_24 txt_center"><span class="cl_ff33">Điểm của bạn đã sử dụng hết.</span> Để tiếp tục xem hồ sơ vui lòng nạp thêm điểm <a href="" class="cl_primary">Xem chi tiết</a></p>
                    <div class="form_submit d_flex center_center pd_24 pd_t0">
                        <button class="cancel font_s16 line_h19 font_w700 btn h_42 flex_im m_w140 center_center cl_primary bg_w bg_td bd_td br_12">Đóng</button>
                        <button class="btn h_42 m_w140 br_12 font_s16 line_h19 font_w700 bg_td cl_white bg_ffa ml_68">Mua điểm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end poup xác nhận -->

    <div id="root">
        <? include('../../../includes/after_header.php') ?>
        <div class="container bg_f5 pd_b48 mt_90">
            <div class="infor_controll pd_48 d_flex bg_clE5 space_b pd_t49_b47_lr68">
                <div class="infor_left d_flex">
                    <div class="wh_120 br_16 bd_dc mr_24 fshick position_r">
                        <span class="online is_offline"></span>
                        <img src="../../../images/avt_1.png" alt="avatar_ctytest" class="br_16 img_full">
                    </div>
                    <div class="infor_ct ct_uv">
                        <h1 class="font_s28 line_h33 font_w700 cl_primary pd_b12">Nguyễn Thanh Hằng</h1>
                        <span class="font_s20 line_h23 font_w500 cl_55">Nhân viên thiết kế</span>
                        <div class="d_flex space_b flex_w align_c mb_w">
                            <div class="mt_16 d_flex flex_w if_add">
                                <div class="d_flex">
                                    <div class="d_flex align_c wh_16 mr_8">
                                        <img src="../../images/adrress_icon.png" alt="icon_addrress" class="img_full">
                                    </div>
                                    <span class="font_s16 line_h19 font_w400 cl_55">Thanh Xuân, Hà Nội</span>
                                </div>

                                <div class="d_flex">
                                    <div class="d_flex align_s mr_8">
                                        <img src="../../../images/time_small_gray.png" alt="icon_addrress">
                                    </div>
                                    <span class="font_s16 line_h19 font_w400 cl_55">Fulltime</span>
                                </div>
                            </div>
                            <div class="infor_follower d_flex align_e">
                                <button class="btn td_btn btn_ut hover_td flex_im m_w142 pd_lr24 center_center cl_primary bg_w bg_td bd_td br_100">
                                    <div class="mr_6 d_flex align_c">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1146_3719)">
                                                <path d="M7.98438 13.667H15.016" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12.0389 1.47176C12.3642 1.1697 12.8054 1 13.2654 1C13.4932 1 13.7188 1.04166 13.9292 1.12261C14.1397 1.20355 14.3309 1.32219 14.4919 1.47176C14.653 1.62133 14.7808 1.79889 14.868 1.99431C14.9551 2.18972 15 2.39917 15 2.61069C15 2.82221 14.9551 3.03166 14.868 3.22708C14.7808 3.42249 14.653 3.60006 14.4919 3.74962L4.27078 13.2407L1 14L1.81769 10.9629L12.0389 1.47176Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1146_3719">
                                                    <rect width="16" height="16" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <span class="font_s16 line_h19 font_w500 currentColor">Đánh giá ứng viên</span>
                                </button>

                                <button class="btn btn_chat hover_chat flex_im m_w142 pd_lr24 center_center cl_green bg_w bg_td bd_chat br_100">
                                    <div class="mr_6 d_flex align_c">
                                        <!-- <img src="../../../images/ib_green.png" alt="" class="img_full"> -->
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
                    <div class="box_cty h_100" data-id="0" data-orderOld="0" data-new="1">
                        <div class="nav_details item_box d_flex">
                            <span class="font_s20 line_h23 font_w400 cl_primary">Hồ sơ online</span>
                            <span class="font_s20 line_h23 font_w400 cl_primary">CV xin việc</span>
                            <span class="font_s20 line_h23 font_w400 cl_primary">Video giới thiệu bản thân</span>
                        </div>
                        <div class="nav_content_details">
                            <div class="lis_box_deatls chil_24 mt_24">
                                <div class="item_box">
                                    <h3 class="font_s24 line_h28 font_w700 cl_primary bd_l4 pd_l8">Giới thiệu bản thân</h3>
                                    <div class="content_cty mt_24">
                                        <p class="font_s16 line_h19 font_w400 cl_a4">
                                            Xin chào, tôi là Nguyễn Thanh Hằng, một nhà thiết kế đồ họa và Ui / Ux chuyên nghiệp với hơn 4 năm kinh nghiệm. Tôi có thể thiết kế ui trang web, ui ứng dụng, ui bảng điều khiển, thẻ cảm ơn, logo, tờ rơi, tài liệu quảng cáo, biểu ngữ, v.v. Nếu bạn cần bất kỳ sự trợ giúp nào, hãy liên hệ với tôi. Rất mong được làm việc với bạn!
                                            <br><br>
                                            Xin chào, tôi là Nguyễn Thanh Hằng, một nhà thiết kế đồ họa và Ui / Ux chuyên nghiệp với hơn 4 năm kinh nghiệm. Tôi có thể thiết kế ui trang web, ui ứng dụng, ui bảng điều khiển, thẻ cảm ơn, logo, tờ rơi, tài liệu quảng cáo, biểu ngữ, v.v. Nếu bạn cần bất kỳ sự trợ giúp nào, hãy liên hệ với tôi. Rất mong được làm việc với bạn!
                                        </p>
                                    </div>
                                </div>

                                <div class="item_box">
                                    <h3 class="font_s24 line_h28 font_w700 cl_primary bd_l4 pd_l8">Sở thích</h3>
                                    <div class="content_cty mt_24 pd_l12">
                                        <ul class="cl_55">
                                            <li class="cs_style_dots">Xem phim</li>
                                            <li class="cs_style_dots">Nghe nhạc</li>
                                            <li class="cs_style_dots">Đọc sách</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="item_box">
                                    <h3 class="font_s24 line_h28 font_w700 cl_primary bd_l4 pd_l8">Mục tiêu</h3>
                                    <div class="content_cty mt_24 pd_l12">
                                        <p class="font_s16 line_h18 font_w400 cl_a4">
                                            Thiết kế ui trang web, ui ứng dụng, ui bảng điều khiển, thẻ cảm ơn, logo, tờ rơi, tài liệu quảng cáo, biểu ngữ, v.v. Nếu bạn cần bất kỳ sự trợ giúp nào, hãy liên hệ với tôi. Rất mong được làm việc với bạn!
                                        </p>
                                    </div>
                                </div>


                                <div class="item_box">
                                    <h3 class="font_s24 line_h28 font_w700 cl_primary bd_l4 pd_l8">Học vấn</h3>
                                    <div class="list_edu mt_24 chil_24">
                                        <div class="d_flex">
                                            <div>
                                                <img src="../../../images/icon_edu.png" alt="">
                                            </div>
                                            <div class="d_flex flex_column pd_l8 edu_content">
                                                <h3 class="font_s16 line_h20 font_w500 cl_primary">Đại học Hoa Sen</h3>
                                                <span class="font_s16 line_h20 font_w400 cl_55">Thiết kế đồ họa</span>
                                                <span class="font_s16 line_h20 font_w400 cl_55">2017 - hiện nay</span>
                                                <span class="font_s16 line_h20 font_w400 cl_55">Mô tả quá trình làm việc: Lorem ipsum s simply dummy text of the printing and typesetting industry</span>
                                            </div>
                                        </div>

                                        <div class="d_flex">
                                            <div>
                                                <img src="../../../images/icon_edu.png" alt="">
                                            </div>
                                            <div class="d_flex flex_column pd_l8 edu_content">
                                                <h3 class="font_s16 line_h20 font_w500 cl_primary">Đại học Hoa Sen</h3>
                                                <span class="font_s16 line_h20 font_w400 cl_55">Thiết kế đồ họa</span>
                                                <span class="font_s16 line_h20 font_w400 cl_55">2017 - hiện nay</span>
                                                <span class="font_s16 line_h20 font_w400 cl_55">Mô tả quá trình làm việc: Lorem ipsum s simply dummy text of the printing and typesetting industry</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item_box">
                                    <h3 class="font_s24 line_h28 font_w700 cl_primary bd_l4 pd_l8">Chứng chỉ</h3>
                                    <div class="list_edu mt_24 chil_24">
                                        <div class="d_flex">
                                            <div>
                                                <img src="../../../images/icon_toppic.png" alt="">
                                            </div>
                                            <div class="d_flex flex_column pd_l8 edu_content">
                                                <h3 class="font_s16 line_h20 font_w500 cl_primary">Test of English for International Communication( TOEIC)</h3>
                                                <span class="font_s16 line_h20 font_w400 cl_55">2021- 2023</span>
                                            </div>
                                        </div>

                                        <div class="d_flex">
                                            <div>
                                                <img src="../../../images/icon_toppic.png" alt="">
                                            </div>
                                            <div class="d_flex flex_column pd_l8 edu_content">
                                                <h3 class="font_s16 line_h20 font_w500 cl_primary">Test of English for International Communication( TOEIC)</h3>
                                                <span class="font_s16 line_h20 font_w400 cl_55">2021- 2023</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item_box">
                                    <h3 class="font_s24 line_h28 font_w700 cl_primary bd_l4 pd_l8">Kỹ năng</h3>
                                    <div class="list_skill mt_24 chil_24 ml_34">
                                        <div class="item_skill d_flex align_c">
                                            <div class="d_flex align_c mr_16">
                                                <span class="font_s16 line_h19 font_w500 cl_73 block mr_4">Figma</span>
                                                <span class="font_s14 line_h16 font_w400 cl_73">4/5</span>
                                            </div>
                                            <div class="d_flex align_c chil_8">
                                                <!--  -->
                                                <img src="../../../images/start_oran.png" alt="">
                                                <img src="../../../images/start_oran.png" alt="">
                                                <img src="../../../images/start_oran.png" alt="">
                                                <img src="../../../images/start_oran.png" alt="">
                                                <img src="../../../images/start_gray.png" alt="">
                                            </div>
                                        </div>

                                        <div class="item_skill d_flex align_c">
                                            <div class="d_flex align_c mr_16">
                                                <span class="font_s16 line_h19 font_w500 cl_73 block mr_4">Figma</span>
                                                <span class="font_s14 line_h16 font_w400 cl_73">4/5</span>
                                            </div>
                                            <div class="d_flex align_c chil_8">
                                                <!--  -->
                                                <img src="../../../images/start_oran.png" alt="">
                                                <img src="../../../images/start_oran.png" alt="">
                                                <img src="../../../images/start_oran.png" alt="">
                                                <img src="../../../images/start_oran.png" alt="">
                                                <img src="../../../images/start_gray.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item_box">
                                    <h3 class="font_s24 line_h28 font_w700 cl_primary bd_l4 pd_l8">Kinh nghiệm làm việc</h3>
                                    <div class="list_edu mt_24 chil_24">
                                        <div class="d_flex">
                                            <div>
                                                <img src="../../../images/book_icon_peo.png" alt="">
                                            </div>
                                            <div class="d_flex flex_column pd_l8 edu_content">
                                                <h3 class="font_s16 line_h20 font_w500 cl_primary">Plus Studio</h3>
                                                <span class="font_s16 line_h20 font_w400 cl_55">Thiết kế Animation 2D- 3D</span>
                                                <span class="font_s16 line_h20 font_w400 cl_55">2017 - hiện nay</span>
                                                <span class="font_s16 line_h20 font_w400 cl_55">Mô tả quá trình làm việc: Lorem ipsum s simply dummy text of the printing and typesetting industry</span>
                                            </div>
                                        </div>

                                        <div class="d_flex">
                                            <div>
                                                <img src="../../../images/book_icon_peo.png" alt="">
                                            </div>
                                            <div class="d_flex flex_column pd_l8 edu_content">
                                                <h3 class="font_s16 line_h20 font_w500 cl_primary">Plus Studio</h3>
                                                <span class="font_s16 line_h20 font_w400 cl_55">Thiết kế Animation 2D- 3D</span>
                                                <span class="font_s16 line_h20 font_w400 cl_55">2017 - hiện nay</span>
                                                <span class="font_s16 line_h20 font_w400 cl_55">Mô tả quá trình làm việc: Lorem ipsum s simply dummy text of the printing and typesetting industry</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item_box">
                                    <h3 class="font_s24 line_h28 font_w700 cl_primary bd_l4 pd_l8">Kinh nghiệm làm việc</h3>
                                    <div class="list_edu mt_24 chil_24">
                                        <div class="d_flex">
                                            <div>
                                                <img src="../../../images/book_icon_peo.png" alt="">
                                            </div>
                                            <div class="d_flex flex_column pd_l8 edu_content">
                                                <h3 class="font_s16 line_h20 font_w500 cl_primary">Plus Studio</h3>
                                                <span class="font_s16 line_h20 font_w400 cl_55">Thiết kế Animation 2D- 3D</span>
                                                <span class="font_s16 line_h20 font_w400 cl_55">2017 - hiện nay</span>
                                                <span class="font_s16 line_h20 font_w400 cl_55">Mô tả quá trình làm việc: Lorem ipsum s simply dummy text of the printing and typesetting industry</span>
                                            </div>
                                        </div>

                                        <div class="d_flex">
                                            <div>
                                                <img src="../../../images/book_icon_peo.png" alt="">
                                            </div>
                                            <div class="d_flex flex_column pd_l8 edu_content">
                                                <h3 class="font_s16 line_h20 font_w500 cl_primary">Plus Studio</h3>
                                                <span class="font_s16 line_h20 font_w400 cl_55">Thiết kế Animation 2D- 3D</span>
                                                <span class="font_s16 line_h20 font_w400 cl_55">2017 - hiện nay</span>
                                                <span class="font_s16 line_h20 font_w400 cl_55">Mô tả quá trình làm việc: Lorem ipsum s simply dummy text of the printing and typesetting industry</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item_box">
                                    <h3 class="font_s24 line_h28 font_w700 cl_primary bd_l4 pd_l8">Kinh nghiệm làm việc</h3>
                                    <div class="list_edu mt_24 chil_24">
                                        <div class="d_flex">
                                            <div>
                                                <img src="../../../images/book_icon_peo.png" alt="">
                                            </div>
                                            <div class="d_flex flex_column pd_l8 edu_content">
                                                <h3 class="font_s16 line_h20 font_w500 cl_primary">Plus Studio</h3>
                                                <span class="font_s16 line_h20 font_w400 cl_55">Thiết kế Animation 2D- 3D</span>
                                                <span class="font_s16 line_h20 font_w400 cl_55">2017 - hiện nay</span>
                                                <span class="font_s16 line_h20 font_w400 cl_55">Mô tả quá trình làm việc: Lorem ipsum s simply dummy text of the printing and typesetting industry</span>
                                            </div>
                                        </div>

                                        <div class="d_flex">
                                            <div>
                                                <img src="../../../images/book_icon_peo.png" alt="">
                                            </div>
                                            <div class="d_flex flex_column pd_l8 edu_content">
                                                <h3 class="font_s16 line_h20 font_w500 cl_primary">Plus Studio</h3>
                                                <span class="font_s16 line_h20 font_w400 cl_55">Thiết kế Animation 2D- 3D</span>
                                                <span class="font_s16 line_h20 font_w400 cl_55">2017 - hiện nay</span>
                                                <span class="font_s16 line_h20 font_w400 cl_55">Mô tả quá trình làm việc: Lorem ipsum s simply dummy text of the printing and typesetting industry</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d_flex mt_24 chil_ml0 infor_follower pd_t_24 bd_t_dashed1">
                                    <button class="btn td_btn btn_ut hover_td flex_im m_w142 pd_lr24 center_center cl_primary bg_w bg_td bd_td br_100">
                                        <div class="mr_6 d_flex align_c">
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.6389 15.75H2.36111C1.93382 15.75 1.52403 15.5803 1.22188 15.2781C0.919742 14.976 0.75 14.5662 0.75 14.1389V2.86111C0.75 2.43382 0.919742 2.02403 1.22188 1.72188C1.52403 1.41974 1.93382 1.25 2.36111 1.25H11.2222L15.25 5.27778V14.1389C15.25 14.5662 15.0803 14.976 14.7781 15.2781C14.476 15.5803 14.0662 15.75 13.6389 15.75Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12.0282 15.7491V9.30469H3.97266V15.7491" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M3.97266 1.25V5.27778H10.4171" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <span class="font_s16 line_h19 font_w500 currentColor">Lưu hồ sơ</span>
                                    </button>

                                    <button class="btn td_btn hover_sv flex_im m_w142 pd_lr24 center_center cl_oran bg_w bg_td bd_ff99 br_100">
                                        <div class="mr_6 d_flex align_c">
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 10.832V13.9431C15 14.3557 14.8361 14.7514 14.5444 15.0431C14.2527 15.3348 13.857 15.4987 13.4444 15.4987H2.55556C2.143 15.4987 1.74733 15.3348 1.45561 15.0431C1.16389 14.7514 1 14.3557 1 13.9431V10.832" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M4.10938 6.94531L7.99826 10.8342L11.8872 6.94531" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M8 10.8333V1.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <span class="font_s16 line_h19 font_w500 currentColor">Tải xuống CV</span>
                                    </button>
                                </div>
                            </div>


                            <div class="lis_box_deatls chil_24 mt_24">
                                <div class="item_box">
                                    <div class="w_100 cv_xv_img">
                                        <img src="../../../images/cv_mts.png" alt="" class="w_100">
                                    </div>

                                    <div class="d_flex mt_24 chil_ml0 infor_follower pd_t_24">
                                        <button class="btn td_btn btn_ut hover_td flex_im m_w142 pd_lr24 center_center cl_primary bg_w bg_td bd_td br_100">
                                            <div class="mr_6 d_flex align_c">
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.6389 15.75H2.36111C1.93382 15.75 1.52403 15.5803 1.22188 15.2781C0.919742 14.976 0.75 14.5662 0.75 14.1389V2.86111C0.75 2.43382 0.919742 2.02403 1.22188 1.72188C1.52403 1.41974 1.93382 1.25 2.36111 1.25H11.2222L15.25 5.27778V14.1389C15.25 14.5662 15.0803 14.976 14.7781 15.2781C14.476 15.5803 14.0662 15.75 13.6389 15.75Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M12.0282 15.7491V9.30469H3.97266V15.7491" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M3.97266 1.25V5.27778H10.4171" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <span class="font_s16 line_h19 font_w500 currentColor">Lưu hồ sơ</span>
                                        </button>

                                        <button class="btn td_btn hover_sv flex_im m_w142 pd_lr24 center_center cl_oran bg_w bg_td bd_ff99 br_100">
                                            <div class="mr_6 d_flex align_c">
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15 10.832V13.9431C15 14.3557 14.8361 14.7514 14.5444 15.0431C14.2527 15.3348 13.857 15.4987 13.4444 15.4987H2.55556C2.143 15.4987 1.74733 15.3348 1.45561 15.0431C1.16389 14.7514 1 14.3557 1 13.9431V10.832" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M4.10938 6.94531L7.99826 10.8342L11.8872 6.94531" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8 10.8333V1.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <span class="font_s16 line_h19 font_w500 currentColor">Tải xuống CV</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="lis_box_deatls chil_24 mt_24">
                                <div class="item_box">
                                    <h3 class="font_s24 line_h28 font_w700 cl_primary bd_l4 pd_l8">Video giới thiệu bản thân</h3>
                                    <div class="content_cty mt_24">
                                        <!-- nhúng video -->
                                        <div class="video_peolpe mt_16">
                                            <video controls class="img_full br_16">
                                                <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                                                Your browser does not support HTML video.
                                            </video>
                                        </div>
                                    </div>

                                    <div class="d_flex mt_24 chil_ml0 infor_follower">
                                        <button class="btn td_btn btn_ut hover_td flex_im m_w142 pd_lr24 center_center cl_primary bg_w bg_td bd_td br_100">
                                            <div class="mr_6 d_flex align_c">
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.6389 15.75H2.36111C1.93382 15.75 1.52403 15.5803 1.22188 15.2781C0.919742 14.976 0.75 14.5662 0.75 14.1389V2.86111C0.75 2.43382 0.919742 2.02403 1.22188 1.72188C1.52403 1.41974 1.93382 1.25 2.36111 1.25H11.2222L15.25 5.27778V14.1389C15.25 14.5662 15.0803 14.976 14.7781 15.2781C14.476 15.5803 14.0662 15.75 13.6389 15.75Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M12.0282 15.7491V9.30469H3.97266V15.7491" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M3.97266 1.25V5.27778H10.4171" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <span class="font_s16 line_h19 font_w500 currentColor">Lưu hồ sơ</span>
                                        </button>

                                        <button class="btn td_btn hover_sv flex_im m_w142 pd_lr24 center_center cl_oran bg_w bg_td bd_ff99 br_100">
                                            <div class="mr_6 d_flex align_c">
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15 10.832V13.9431C15 14.3557 14.8361 14.7514 14.5444 15.0431C14.2527 15.3348 13.857 15.4987 13.4444 15.4987H2.55556C2.143 15.4987 1.74733 15.3348 1.45561 15.0431C1.16389 14.7514 1 14.3557 1 13.9431V10.832" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M4.10938 6.94531L7.99826 10.8342L11.8872 6.94531" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8 10.8333V1.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <span class="font_s16 line_h19 font_w500 currentColor">Tải xuống CV</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="details_cty_right" data-id="1">
                    <div class="box_cty" data-id="1" data-orderOld="0" data-new="0">
                        <h3 class="font_s24 line_h28 font_w700 cl_primary bd_bpr pdb16">Tổng quan</h3>
                        <div class="list_if mt_24">
                            <div class="d_flex align_s">
                                <div class="wh_16">
                                    <img src="../../../images/date_oran.png" alt="" class="img_full">
                                </div>
                                <div class="pd_l8">
                                    <span class="font_s16 line_h19 font_w400 cl_55 block">Ngày sinh</span>
                                    <span class="font_s16 line_h19 font_w500 cl_primary block mt_8">14/05/1997</span>
                                </div>
                            </div>

                            <div class="d_flex align_s">
                                <div class="wh_16">
                                    <img src="../../../images/people_oran.png" alt="" class="img_full">
                                </div>
                                <div class="pd_l8">
                                    <span class="font_s16 line_h19 font_w400 cl_55 block">Giới tính</span>
                                    <span class="font_s16 line_h19 font_w500 cl_primary block mt_8">Nữ</span>
                                </div>
                            </div>

                            <div class="d_flex align_s">
                                <div class="wh_16">
                                    <img src="../../../images/bc_oran.png" alt="" class="img_full">
                                </div>
                                <div class="pd_l8">
                                    <span class="font_s16 line_h19 font_w400 cl_55 block">Trình độ học vấn</span>
                                    <span class="font_s16 line_h19 font_w500 cl_primary block mt_8">Đại học</span>
                                </div>
                            </div>


                            <div class="d_flex align_s">
                                <div class="wh_16">
                                    <img src="../../../images/time_oran.png" alt="" class="img_full">
                                </div>
                                <div class="pd_l8">
                                    <span class="font_s16 line_h19 font_w400 cl_55 block">Kinh nghiệm</span>
                                    <span class="font_s16 line_h19 font_w500 cl_primary block mt_8">1 năm kinh nghiệm</span>
                                </div>
                            </div>

                            <div class="d_flex align_s">
                                <div class="wh_16">
                                    <img src="../../../images/money_oran.png" alt="" class="img_full">
                                </div>
                                <div class="pd_l8">
                                    <span class="font_s16 line_h19 font_w400 cl_55 block">Mức lương mong muốn</span>
                                    <span class="font_s16 line_h19 font_w500 cl_primary block mt_8">10 - 15 Triệu</span>
                                </div>
                            </div>


                            <div class="d_flex align_s">
                                <div class="wh_16">
                                    <img src="../../../images/cap_oran.png" alt="" class="img_full">
                                </div>
                                <div class="pd_l8">
                                    <span class="font_s16 line_h19 font_w400 cl_55 block">Ngành nghề</span>
                                    <span class="font_s16 line_h19 font_w500 cl_primary block mt_8">Thiết kế</span>
                                </div>
                            </div>

                            <div class="d_flex align_s">
                                <div class="wh_16">
                                    <img src="../../../images/save_oran_nfill.png" alt="" class="img_full">
                                </div>
                                <div class="pd_l8">
                                    <span class="font_s16 line_h19 font_w400 cl_55 block">Công việc mong muốn</span>
                                    <span class="font_s16 line_h19 font_w500 cl_primary block mt_8">UI UX Designer</span>
                                </div>
                            </div>

                            <div class="d_flex align_s">
                                <div class="wh_16">
                                    <img src="../../../images/addrress_oran.png" alt="" class="img_full">
                                </div>
                                <div class="pd_l8">
                                    <span class="font_s16 line_h19 font_w400 cl_55 block">Nơi ở hiện nay</span>
                                    <span class="font_s16 line_h19 font_w500 cl_primary block mt_8">Vũ Trọng Phụng, Thanh Xuân, Hà Nội</span>
                                </div>
                            </div>


                            <div class="d_flex align_s">
                                <div class="wh_16">
                                    <img src="../../../images/email_oran.png" alt="" class="img_full">
                                </div>
                                <div class="pd_l8">
                                    <span class="font_s16 line_h19 font_w400 cl_55 block">Mail</span>
                                    <span class="is_login mt_8">Đăng nhập để xem email</span>
                                    <!-- <span class="font_s16 line_h19 font_w500 cl_primary block mt_8">Vũ Trọng Phụng, Thanh Xuân, Hà Nội</span> -->
                                </div>
                            </div>

                            <div class="d_flex align_s">
                                <div class="wh_16">
                                    <img src="../../../images/icon_phone_oran_nwf.png" alt="" class="img_full">
                                </div>
                                <div class="pd_l8">
                                    <span class="font_s16 line_h19 font_w400 cl_55 block">Số điện thoại</span>
                                    <span class="is_login mt_8">Đăng nhập để xem liên hệ</span>
                                    <!-- <span class="font_s16 line_h19 font_w500 cl_primary block mt_8">Vũ Trọng Phụng, Thanh Xuân, Hà Nội</span> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box_cty mt_24" data-id="1" data-orderOld="0" data-new="2">
                        <h3 class="font_s24 line_h28 font_w700 cl_primary bd_bpr">Giới thiệu ứng viên</h3>
                        <div class="mxh mt_24">
                            <div class="copy_box">
                                <span class="font_s16 line_h19 font_w400 cl_a4">Sao chép đường dẫn</span>
                                <div class="link mt_16">
                                    <span class="link_copy">https://job3s/congtycophanthanh toán hưng hà</span>
                                    <div class="copyeid" onclick="Copyied(this,'.link_copy')">
                                        <img src="../../../images/copy_primary.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="down_app btn_primary br_16 mt_24" data-id="1" data-orderOld="0" data-new="3">
                        <div class="d_flex center_center">
                            <svg width="94" height="34" viewBox="0 0 94 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M54.2935 20.7766C54.3083 22.1932 54.0534 23.5997 53.5425 24.9209C53.0804 26.1271 52.3898 27.2327 51.5087 28.1772C50.6499 29.1026 49.6157 29.848 48.4662 30.37C47.3221 30.8741 46.0818 31.1229 44.8317 31.0991C43.6022 31.1152 42.3889 30.8171 41.3069 30.2329C40.4043 29.7402 39.6478 29.0178 39.1141 28.1388H38.7961V29.6463C38.7961 29.8644 38.7095 30.0736 38.5553 30.2278C38.4011 30.382 38.1919 30.4686 37.9739 30.4686H34.9095C35.6379 30.0294 36.3115 29.5049 36.9158 28.9063C37.9266 27.8872 38.7193 26.6729 39.2457 25.3376C39.4223 24.9017 39.5706 24.4549 39.6897 24C39.8841 24.314 40.114 24.6047 40.3749 24.8661C40.8443 25.3379 41.4035 25.7107 42.0195 25.9625C42.6395 26.2127 43.3025 26.3394 43.9711 26.3353C44.6435 26.3385 45.3095 26.2041 45.9281 25.9406C46.5414 25.6837 47.0997 25.3115 47.5727 24.8442C48.0621 24.3446 48.4494 23.7543 48.7129 23.1064C49.2979 21.6367 49.2979 19.9988 48.7129 18.5291C48.4508 17.8804 48.0634 17.2899 47.5727 16.7913C47.1008 16.3226 46.5422 15.9502 45.9281 15.6949C45.3095 15.4314 44.6435 15.297 43.9711 15.3002C43.3021 15.2979 42.6391 15.4264 42.0195 15.6785C41.4013 15.9261 40.8413 16.2994 40.3749 16.7748C40.1157 17.0358 39.8859 17.3244 39.6897 17.6355C39.4651 17.994 39.2812 18.3764 39.1415 18.7757V20.8369C39.1413 21.3869 39.1046 21.9363 39.0319 22.4815C38.9154 23.3355 38.6925 24.1716 38.3686 24.9703C37.8881 26.1889 37.1644 27.2969 36.2416 28.2265C35.5732 28.8945 34.8081 29.4581 33.9721 29.8985C33.6578 30.0706 33.3338 30.2244 33.0018 30.359C30.3469 31.3825 27.4064 31.3825 24.7515 30.359C23.542 29.871 22.4423 29.1459 21.5172 28.2265C20.5927 27.2972 19.8671 26.1892 19.3847 24.9703C18.3613 22.3022 18.3613 19.3498 19.3847 16.6816C19.8698 15.4641 20.595 14.3567 21.5172 13.4254C22.4438 12.5078 23.5431 11.7831 24.7515 11.2929C27.3983 10.277 30.3276 10.277 32.9744 11.2929V17.4382C32.8147 17.1989 32.6311 16.9767 32.4262 16.7748C31.9598 16.2994 31.3998 15.9261 30.7816 15.6785C30.1747 15.4286 29.5247 15.3001 28.8684 15.3002C28.2046 15.2959 27.5466 15.4245 26.9333 15.6785C26.3252 15.9299 25.7749 16.303 25.3162 16.7748C24.8266 17.269 24.444 17.8587 24.1924 18.5071C23.6367 20.0106 23.6367 21.6632 24.1924 23.1667C24.4439 23.8169 24.8264 24.4084 25.3162 24.9045C26.2624 25.8472 27.5437 26.3765 28.8794 26.3765C30.2151 26.3765 31.4963 25.8472 32.4426 24.9045C32.9305 24.4069 33.3128 23.8158 33.5664 23.1667C33.7954 22.5851 33.9305 21.9708 33.9666 21.3468V4.76948C33.9666 4.0847 34.2386 3.42796 34.7228 2.94375C35.207 2.45953 35.8638 2.1875 36.5486 2.1875C37.2333 2.1875 37.8901 2.45953 38.3743 2.94375C38.8585 3.42796 39.1305 4.0847 39.1305 4.76948V13.4364C39.6657 12.5585 40.4218 11.8365 41.3233 11.3423C42.4625 10.7316 43.7428 10.4328 45.0345 10.4761C46.253 10.4735 47.4575 10.7354 48.5649 11.2436C49.6796 11.7573 50.6848 12.4814 51.5251 13.3761C52.404 14.3223 53.0942 15.4274 53.5589 16.6323C54.0632 17.955 54.3125 19.3612 54.2935 20.7766Z" fill="white" />
                                <path d="M8.44795 31.0795C6.34854 31.1208 4.29169 30.4845 2.58232 29.265C1.74685 28.6612 1.02019 27.9197 0.433411 27.0723C0.219287 26.7487 0.079997 26.3815 0.0256897 25.9974C-0.0286176 25.6132 0.00342436 25.2218 0.119475 24.8516C0.235525 24.4814 0.432665 24.1417 0.696548 23.8573C0.960431 23.5729 1.28441 23.3509 1.64491 23.2075C2.21677 22.9818 2.8489 22.96 3.43496 23.1457C4.02102 23.3314 4.52525 23.7133 4.86279 24.2271C5.08131 24.547 5.3433 24.8348 5.64122 25.0823C6.43245 25.7254 7.42881 26.0621 8.44795 26.0307C8.98563 26.0607 9.5232 25.9699 10.0212 25.765C10.5192 25.5601 10.965 25.2463 11.3259 24.8466C12.0618 23.9037 12.4265 22.7237 12.3511 21.53V4.83217C12.3525 4.12603 12.6337 3.44922 13.133 2.94989C13.6323 2.45057 14.3091 2.16942 15.0153 2.16797C15.7219 2.16797 16.3995 2.44866 16.8991 2.9483C17.3988 3.44793 17.6795 4.12558 17.6795 4.83217V21.4697C17.7082 22.8926 17.4606 24.3075 16.9504 25.636C16.5092 26.7624 15.8369 27.7838 14.9769 28.6346C14.1443 29.442 13.1478 30.0608 12.055 30.4491C10.8996 30.8716 9.67819 31.0851 8.44795 31.0795Z" fill="white" />
                                <path d="M89.1954 27.6162C89.0503 28.4419 88.7068 29.2199 88.1945 29.8834C87.6507 30.5855 86.9681 31.1682 86.1894 31.595C85.3172 32.0702 84.3661 32.3834 83.3823 32.5195C82.2473 32.6813 81.0935 32.6546 79.9672 32.4406C78.8381 32.259 77.7441 31.9027 76.7245 31.3845C75.8732 30.9511 75.0936 30.3893 74.4131 29.7189C74.1553 29.4486 73.9219 29.156 73.7156 28.8445L73.5174 28.5479C73.1577 28.0033 73.0284 27.3384 73.1579 26.6988C73.2874 26.0591 73.6651 25.4968 74.2083 25.135C74.41 25.0033 74.6286 24.8995 74.8583 24.8266L75.085 24.7719C75.5654 24.6769 76.0633 24.7264 76.5157 24.9141C76.968 25.1019 77.3546 25.4195 77.6266 25.8268L77.759 26.0227C77.762 26.0399 77.7711 26.0553 77.7847 26.0662L77.9261 26.2748C78.0739 26.4721 78.239 26.6558 78.4193 26.8238C79.0698 27.429 79.8837 27.8299 80.7599 27.9769C81.5234 28.1535 82.3211 28.1129 83.0628 27.8597C83.3138 27.7913 83.5419 27.657 83.7235 27.4708C83.9051 27.2846 84.0336 27.0531 84.0957 26.8005C84.142 26.5501 84.1243 26.292 84.0444 26.0502C83.9644 25.8084 83.8247 25.5907 83.6382 25.4173C82.9878 24.8596 82.2429 24.4229 81.4386 24.1277L78.8421 23.0686C78.232 22.8141 77.6499 22.4969 77.1052 22.1222C76.5302 21.7354 76.0128 21.2694 75.5681 20.7379C75.1234 20.1991 74.7829 19.5822 74.564 18.9188C74.3373 18.1912 74.2956 17.4185 74.4427 16.6708C74.5792 15.8007 74.9366 14.9802 75.4808 14.2877C76.0188 13.6314 76.6937 13.1007 77.4583 12.7326C78.2997 12.3347 79.2043 12.0872 80.1311 12.0016C81.1747 11.8989 82.2275 11.9421 83.2591 12.1301C84.9456 12.4002 86.5449 13.0636 87.9274 14.0665C88.2328 14.2955 88.4979 14.5736 88.7119 14.8895L88.8142 15.0356C89.1619 15.517 89.3142 16.1123 89.2402 16.7015C89.1663 17.2908 88.8717 17.83 88.4158 18.2106C88.1714 18.4065 87.8894 18.5501 87.5873 18.6325C87.2851 18.7149 86.9693 18.7343 86.6593 18.6896C86.3493 18.6448 86.0518 18.5369 85.7853 18.3724C85.5188 18.2079 85.2889 17.9904 85.1099 17.7334C84.9256 17.5074 84.712 17.3069 84.4747 17.1371C83.8789 16.6978 83.1911 16.3996 82.4632 16.2648C81.8053 16.1321 81.1245 16.1691 80.4848 16.3724C80.2367 16.4261 80.0089 16.549 79.8277 16.7269C79.6466 16.9048 79.5196 17.1305 79.4615 17.3776C79.4263 17.5991 79.454 17.826 79.5417 18.0324C79.6293 18.2388 79.7732 18.4164 79.957 18.5449C80.4868 18.9568 81.0654 19.3019 81.6796 19.5723L84.4721 20.7827C86.3324 21.5969 87.6407 22.5957 88.3969 23.7793C89.1466 24.908 89.4326 26.2821 89.1954 27.6162Z" fill="white" />
                                <path d="M73.3228 22.983C73.1482 24.0725 72.7392 25.1111 72.124 26.0271C71.5089 26.9431 70.7023 27.7147 69.7599 28.2886C68.7686 28.8868 67.6696 29.2849 66.5251 29.4605C65.2358 29.6609 63.9218 29.6401 62.6395 29.3988C61.5807 29.2147 60.5523 28.8854 59.5835 28.4202C58.6529 27.9696 57.8054 27.3647 57.0768 26.6311C56.4823 26.0351 55.9738 25.359 55.5662 24.6225C55.4616 24.437 55.3615 24.2468 55.266 24.0519C55.1711 23.8566 55.0875 23.656 55.0157 23.4511C54.8555 22.8326 54.9224 22.1772 55.2043 21.6038C55.4862 21.0305 55.9643 20.5772 56.5519 20.3264L56.7907 20.2349L57.3045 20.1307C57.7812 20.079 58.263 20.157 58.6991 20.3564C59.1352 20.5557 59.5094 20.8691 59.7822 21.2634C59.886 21.4132 59.9753 21.5725 60.0491 21.7391L60.3991 22.5634C60.4794 22.6779 60.5659 22.788 60.6583 22.893C61.2244 23.4875 61.9247 23.9379 62.7005 24.2064C63.4763 24.4749 64.3051 24.5537 65.1177 24.4363C65.614 24.3656 66.0917 24.1983 66.5237 23.9439C66.9389 23.6991 67.3023 23.3755 67.5934 22.9914C67.8996 22.5794 68.1008 22.099 68.1798 21.5918C68.2953 21.0775 68.284 20.5427 68.1469 20.0336C68.0097 19.5245 67.7508 19.0565 67.3925 18.6698C66.6575 17.9239 65.7152 17.4164 64.6879 17.2132L64.0833 17.1066C63.5137 16.9651 63.012 16.6278 62.6661 16.1536C62.3202 15.6794 62.1522 15.0986 62.1916 14.513L62.2335 14.2755C62.4022 13.6994 62.7713 13.2026 63.2741 12.8748C63.777 12.547 64.3805 12.4098 64.9756 12.4879L65.1106 12.5117C65.4961 12.5533 65.8847 12.5585 66.2713 12.5271C66.7588 12.4908 67.2356 12.3654 67.678 12.1573C68.1096 11.9427 68.4825 11.6264 68.7646 11.2356C69.0743 10.8107 69.2776 10.3178 69.3576 9.79821C69.4424 9.39399 69.4368 8.97601 69.3411 8.57421C69.2455 8.17241 69.0622 7.79674 68.8044 7.47408C68.2028 6.76027 67.3523 6.30187 66.4254 6.1918C65.9548 6.07585 65.4657 6.05592 64.9873 6.13319C64.5088 6.21046 64.0509 6.38335 63.6407 6.64153C63.5518 6.70378 63.4629 6.76603 63.3785 6.83464L62.9736 7.14178C62.4469 7.54199 61.7827 7.71655 61.1273 7.62708C60.4718 7.5376 59.8787 7.19141 59.4785 6.66465C59.0783 6.1379 58.9037 5.47375 58.9932 4.81828C59.0827 4.16282 59.4289 3.56975 59.9556 3.16954L60.4304 2.8135C60.5042 2.76087 60.5814 2.71312 60.6615 2.67056C60.8311 2.5613 61.0105 2.45934 61.1889 2.36278C62.0504 1.91543 62.9766 1.60544 63.9338 1.44401C65.0606 1.25903 66.2111 1.27348 67.3329 1.48673C68.5182 1.68034 69.6629 2.07031 70.7198 2.64058C71.6462 3.14389 72.4717 3.81407 73.1545 4.61735C73.7841 5.36339 74.2453 6.23646 74.5067 7.177C74.7687 8.13094 74.8111 9.13187 74.6306 10.1045C74.5151 10.817 74.2919 11.5078 73.9688 12.1532C73.6891 12.7114 73.3356 13.2294 72.9179 13.6935C72.5384 14.1128 72.0996 14.4742 71.6154 14.7664C71.186 15.0288 70.7249 15.2355 70.2434 15.3817L70.1786 15.7488C71.3278 16.4486 72.2554 17.4594 72.8542 18.6643C73.4789 20.0137 73.6436 21.5309 73.3228 22.983Z" fill="#FF9900" />
                            </svg>
                        </div>
                        <h3 class="font_s24 line_h28 font_w500 cl_white mt_24 txt_center">Tải ngay app tìm việc Job3s.com</h3>
                        <div class="mt_16 d_flex h_100px flex_center down_app1024">
                            <div class="d_flex flex_column space_b">
                                <a href="" class="h_42 block">
                                    <img src="../../../images/img_app_adroi.png" alt="">
                                </a>

                                <a href="" class="h_42 block">
                                    <img src="../../../images/img_app_appstore.png" alt="">
                                </a>
                            </div>

                            <div class="ml_16">
                                <img src="../../../images/qc_ap.png" alt="">
                            </div>
                        </div>

                        <div class="down_1024">
                            <button class="btn td_btn hover_sv flex_im m_w142 pd_lr24 center_center cl_primary bg_w bg_td br_100">
                                <span class="font_s16 line_h19 font_w500 currentColor">Tải App tìm việc Job3s</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lr_68 news_recruit mt_48">
                <div class="box_cty">
                    <div class="item_box">
                        <div class="d_flex flex_column">
                            <h3 class="font_s28 line_h33 font_w700 cl_primary bd_l4 pd_l8">Ứng viên phù hợp</h3>
                            <span href="" class="font_s16 line_h19 font_w400 cl_a4 block mt_8">Chúng tôi gợi ý một số ứng viên phù hợp</span>
                        </div>
                        <div class="silder_news item_pdt24">
                            <? for ($i = 0; $i < 50; $i++) : ?>
                                <div class="item_news bg_w">
                                    <div class="item_news_top">
                                        <div class="img_news bd_dc">
                                            <img src="../../../images/avt_1.png" alt="">
                                        </div>
                                        <div class="content_news">
                                            <h3 class="font_s16 line_h19 font_w500 cl_primary pd_r23">Nguyễn Hồng Hạnh</h3>
                                            <span class="font_s16 line_h19 font_w400 cl_73 block mt_5">Nhân viên bảo hiểm</span>

                                            <div class="save_new">
                                                <img src="../../../images/save_icon.png" alt="">
                                            </div>

                                            <div class="infor_new d_flex mt_6">
                                                <div class="item_infor_new">
                                                    <div class="mr_5 w_16h17">
                                                        <img src="../../../images/time_small_gray.png" alt="date" class="img_full">
                                                    </div>
                                                    <span class="font_s16 line_h19 font_w400 cl_55">1 năm kinh nghiệm</span>
                                                </div>

                                                <div class="item_infor_new">
                                                    <div class="mr_5 d_flex align_s">
                                                        <img src="../../../images/inbox_green.png" alt="">
                                                    </div>
                                                    <span class="font_s16 line_h18 font_w400 cl_green">Chat</span>
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
        <? include('../../../includes/footer.php') ?>
    </div>
    <script src="../../../js/jquery-3.4.1.min.js"></script>
    <script src="../../../js/slick.min.js"></script>
    <script src="../../../js/js_t.js"></script>
    <script>
        $('.silder_news').slick({
            rows: 3,
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            prevArrow: `<button type='button' class='slick-prev pull-left'><img src="../../../images/arrow_prev.png" alt="" class="img_full"></button>`,
            nextArrow: `<button type='button' class='slick-next pull-right'><img src="../../../images/arrow_next.png" alt="" class="img_full"></button>`,
            responsive: [{
                    breakpoint: 1066,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    }
                },
                {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                }
            ]
        })


        eyeChange('.eye_btn', '#password', 'eye_hidden');

        $('.btn_ut').click(function() {
            let objectELemet = viewAndClosePopupUpdate('#popup_ut', '.main_popup', '.close_popup', '.cancel', '.form_check')
        })

        $('.btn_chat').click(function() {
            let objectELemet = viewAndClosePopupUpdate('#popup_xh_chat', '.main_popup', '.close_popup', '.cancel', '.form_check')
        })

        navigatePopup({
            controllList: '.nav_popup_ut',
            activeControl: 'active_s',
            defaultActive: 0,
            navigateContentList: '.uploade_ct_pp',
        })

        navigatePopup({
            controllList: '.nav_details',
            activeControl: 'active_nav',
            defaultActive: 0,
            navigateContentList: '.nav_content_details',
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