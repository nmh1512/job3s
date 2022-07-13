<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/style_t.css">
    <title>Xác thực tài khoản ứng viên</title>
</head>

<body>
    <div id="root">
        <?php include("../../includes/after_header.php"); ?>
        <div class="container bg_fa d_flex flex_end">
            <div class="content mt_90 pd_48_24_91 bg_f5fff w_100 d_flex flex_center">
                <div class="box_xt ">
                    <!-- error cl_ff33 bg_ffe5 -->
                    <div class="mess_box cl_green bg_e5" style="display: none;">
                        <span class="font_s18 line_h21 font_w400 currentColor">Hoàn thành! Gửi email xác thực thành công.</span>
                        <div class="cursor_p close">
                            <img src="../../images/close_gray.png" alt="">
                        </div>
                    </div>
                    <span class="font_s18 line_h21 font_w400 cl_55">Xác thực email đăng nhập</span>
                    <div class="box_cty mt_24 pd_0">
                        <form action="" method="post" class="bt_xt">
                            <div class="mt_16chil pd_24">
                                <span class="font_s16 line_h19 font_w400 cl_a4">Xác thực email của bạn để được đảm bảo quyền lợi và sự hỗ trợ tốt nhất từ Job3s.com</span>
                                <span class="block font_s16 line_h19 font_w400 cl_a4">Để xác thực email, bấm nút Nhận email xác thực dưới đây, sau đó đăng nhập email <span class="font_w500 cl_primary">NguyenDinhManh123@gmail.com</span> và làm theo hướng dẫn trong email.</span>
                                <span class="font_s16 line_h19 font_w400 cl_a4 block">Trường hợp không nhận được email, bạn vui lòng bấm nút nhận email xác thực dưới dây:</span>
                                <div class="">
                                    <button class="btn btn_hover_primary flex_im align_c br_8 btn_primary cl_white pd_t12_b11_lr24 pd_t13_b12">
                                        <div class="mr_6 d_flex align_c">
                                            <img src="../../images/email_white.png" alt="">
                                        </div>
                                        <span class="font_s16 line_h19 font_w500 currentColor">Nhận email xác thực</span>
                                    </button>
                                </div>
                            </div>

                            <div class="mt_16chil pd_tb16_lr24">
                                <span class="font_s16 line_h19 font_w400 cl_a4">Nếu email không đúng vui lòng bấm <span class="change_email cl_primary font_w500 cursor_p">vào đây</span> để thay đổi.</span>
                                <div class="input_email_change" style="display: none;">
                                    <div class="d_flex align_c pd_lr15 bd_dc w_100 br_5">
                                        <input type="text" autocomplete="off" name="sl_tuyen" class="rs_input ip_lhd pd_tb11 flex_1" placeholder="Nhập email mới" />
                                    </div>

                                    <button class="btn ml_16 btn_hover_primary flex_im align_c br_8 btn_primary cl_white pd_t12_b11_lr24 pd_t13_b12">
                                        <div class="mr_6 d_flex align_c">
                                            <img src="../../images/res_icon_white.png" alt="">
                                        </div>
                                        <span class="font_s16 line_h19 font_w500 currentColor white_s_nw">Thay đổi</span>
                                    </button>
                                </div>
                            </div>

                            <div class="mt_12chil pd_tb16_lr24 pd_b24">
                                <span class="font_s16 line_h21 font_w400 cl_55">Mọi thắc mắc vui lòng liên hệ bộ phận CSKH của Job3s.com</span>
                                <span class="font_s16 line_h19 font_w400 cl_a4 block">Điện thoại: <span class="cl_primary font_w500">0906 289 381</span></span>
                                <span class="font_s16 line_h19 font_w400 cl_a4 block">Email: <span class="cl_primary font_w500">Timviec365net.@gmail.com</span></span>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="box_xt d_none">
                    <div class="box_cty mt_24 pd_0">
                        <form action="" method="post" class="bt_xt">
                            <div class="mt_16chil pd_24">
                                <span class="font_s16 line_h19 font_w400 cl_a4">Chúc mừng bạn <span>Nguyễn Đình Mạnh</span>,</span>
                                <span class="block font_s16 line_h19 font_w400 cl_a4">Bạn đã xác thực email <span class="font_w500 cl_primary">NguyenDinhManh123@gmail.com</span> thành công.</span>
                                <span class="font_s16 line_h19 font_w400 cl_a4 block">Bạn có thể <span class="font_w500 cl_primary">Tạo CV</span> và <span class="font_w500 cl_primary">Tìm việc làm phù hợp</span> trên hệ thống Job3s.com.</span>
                                <div class="d_flex mt_48_im pd_lr24">
                                    <div class="d_flex center_center flex_column bd_dc br_8 pd_24 w_50pt">
                                        <div>
                                            <img src="../../images/doc_blue.png" alt="">
                                        </div>
                                        <h2 class="font_s24 line_h28 font_w700 cl_primary mt_19">TẠO CV XIN VIỆC</h2>
                                        <span class="font_s16 line_h19 font_w400 cl_a4 mt_6 block">CV chuyên nghiệp, dễ dàng cập nhật</span>
                                    </div>

                                    <div class="d_flex center_center flex_column bd_dc br_8 pd_24 w_50pt ml_24">
                                        <div>
                                            <img src="../../images/cap_pri_md.png" alt="">
                                        </div>
                                        <h2 class="font_s24 line_h28 font_w700 cl_primary mt_19">TÌM VIỆC LÀM</h2>
                                        <span class="font_s16 line_h19 font_w400 cl_a4 mt_6 block">Việc làm phù hợp từ các NTD hàng đầu</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt_12chil pd_tb16_lr24 pd_b24">
                                <span class="font_s16 line_h21 font_w400 cl_55">Mọi thắc mắc vui lòng liên hệ bộ phận CSKH của Job3s.com: <span class="font_w500 cl_primary">0906 289 381</span></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/js_t.js"></script>
    <script>
        $('.change_email').click(function () {
            console.log(this)
            $('.input_email_change').slideToggle(150)
        })

        $('.mess_box .close').click(function() {
            $('.mess_box').css('display', 'none')
        })
    </script>
</body>

</html>