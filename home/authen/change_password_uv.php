<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/style_t.css">
    <title>Tạo lại mật khẩu của bạn</title>
</head>

<body>
    <div id="root">
        <div class="authen d_flex bg_white">
            <div class="authen_left pd_25 w_50pt">
                <div class="mt_42 pd_lr89">
                    <form onsubmit="return false" action="" method="POST">
                        <div class="is_checkemail d_none">
                            <h1 class="font_s24 line_h28 font_w700 cl_primary">Tạo lại mật khẩu của bạn</h1>
                            <p class="font_s16 line_h19 font_w400 cl_55 mt_15 mb_30">Cùng xây dựng một hồ sơ nổi bật và nhận được các cơ hội việc làm lý tưởng.</p>
                            <div class="form_group">
                                <span class="font_s16 line_h19 font_w500 cl_a4">Mật khẩu mới<span class="cl_red">*</span></span>
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

                            <div class="form_group">
                                <span class="font_s16 line_h19 font_w500 cl_a4">Xác nhận mật khẩu<span class="cl_red">*</span></span>
                                <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                                    <label for="confirm_password" class="d_flex align_c mr_10">
                                        <img src="../../images/pass_blue.png" alt="">
                                    </label>
                                    <input type="password" autocomplete="off" id="confirm_password" name="confirm_password" class="rs_input ip_lhd pd_tb11 flex_1" placeholder="Nhập lại mật khẩu" />
                                    <div class="d_flex align_c cursor_p eyecf_btn">
                                        <img src="../../images/eve_open.png" alt="">
                                        <img src="../../images/eve_close.png" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="form_submit mt_25">
                                <button class="btn btn_hover_primary w_100 br_100 pd_t12_b11_lr10 font_s16 line_h19 font_w700 cl_white btn_primary">Tạo mật khẩu mới</button>
                            </div>

                            <div class="authen_extend mt_15 d_flex space_b">
                                <a href="/authen/dang-ky-ung-vien.html" class="font_s16 line_h19 font_w700 cl_primary">Đăng nhập ngay</a>
                                <a href="/authen/dang-ky-ung-vien.html" class="font_s16 line_h19 font_w700 cl_oran">Đăng ký tài khoản mới</a>
                            </div>
                        </div>

                        <div class="change_suss">
                            <h2 class="font_s24 line_h28 font_w700 cl_primary">Tạo mật khẩu thành công!</h2>
                            <p class="font_s16 line_h19 font_w400 cl_55 mt_15 mb_30">Đăng nhập ngay để bắt đầu dựng một hồ sơ nổi bật và nhận được các cơ hội việc làm lý tưởng.</p>

                            <div class="form_submit">
                                <a class="btn flex_im center_center btn_hover_primary w_100 br_100 pd_t12_b11_lr10 font_s16 line_h19 font_w700 cl_white btn_primary">Đăng nhập ngay</a>
                            </div>
                        </div>

                        <div class="authen_other">
                            <div class="list_btn">
                                <p class="font_s16 line_h19 font_w400 cl_a4">
                                    Bạn gặp khó khăn khi đổi mật khẩu?<br>
                                    Vui lòng gọi tới số: 0906 289 381 (Giờ hành chính)
                                </p>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="authen_right bg_f5 w_50pt d_flex flex_column center_center">
                <div>
                    <img src="../../images/uv_1.png" alt="">
                </div>
                <div class="mt_40 d_flex flex_column align_c">
                    <h2 class="txt_center font_s24 line_h28 font_w500 cl_a4">Hỗ trợ ứng viên</h2>
                    <p class="mt_15 txt_center font_s16 line_h24 font_w400 cl_a4 w_60">Hơn 1 triệu ứng viên tìm được việc làm mơ ước. Hãy xây dựng một hồ sơ thật nổi bật.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="../../js/js_t.js"></script>
    <script>
        eyeChange('.eye_btn', '#password', 'eye_hidden')
        eyeChange('.eyecf_btn', '#confirm_password', 'eye_hidden')
    </script>
</body>

</html>