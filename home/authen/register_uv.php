<?
include '../config.php';

?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow" />

    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/style_t.css">
    <title>Đăng ký ứng viên</title>
</head>

<body>
    <div id="root">
        <div class="authen d_flex bg_white">
            <div class="authen_left pd_25 w_50pt">
                <div class="fit_content">
                    <a href="/authen/dang-nhap-ung-vien">
                        <div class="d_flex align_c">
                            <div class="d_flex align_c mr_5">
                                <img src="../../images/arr_blue.png" alt="">
                            </div>
                            <span class="font_s16 line_h19 font_w400 cl_primary">Quay lại</span>
                        </div>
                    </a>
                </div>

                <div class="mt_42 pd_lr89">
                    <form id="register_uv" method="POST" onsubmit="return false">
                        <h1 class="font_s24 line_h28 font_w700 cl_primary">Đăng ký tài khoản Ứng viên</h1>
                        <p class="font_s16 line_h19 font_w400 cl_55 mt_15 mb_30">Cùng xây dựng một hồ sơ nổi bật và nhận được các cơ hội việc làm lý tưởng.</p>

                        <div class="form_group">
                            <span class="font_s16 line_h19 font_w500 cl_a4">Họ và tên<span class="cl_red">*</span></span>
                            <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                                <label for="fullname" class="d_flex align_c mr_10">
                                    <img src="../../images/user_blue.png" alt="">
                                </label>
                                <input type="text" id="fullname" name="fullname" class="is_check_first_space rs_input ip_lhd pd_tb11 flex_1" placeholder="Nhập họ và tên của bạn" />
                            </div>
                        </div>

                        <div class="form_group">
                            <span class="font_s16 line_h19 font_w500 cl_a4">Email<span class="cl_red">*</span></span>
                            <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                                <label for="email" class="d_flex align_c mr_10">
                                    <img src="../../images/email_blue.png" alt="">
                                </label>
                                <input type="text" id="email" name="email" class="is_check_space rs_input ip_lhd pd_tb11 flex_1" placeholder="Nhập email của bạn" />
                            </div>
                        </div>

                        <div class="form_group">
                            <span class="font_s16 line_h19 font_w500 cl_a4">Mật khẩu<span class="cl_red">*</span></span>
                            <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                                <label for="password" class="d_flex align_c mr_10">
                                    <img src="../../images/pass_blue.png" alt="">
                                </label>
                                <input type="password" autocomplete="off" id="password" name="password" class="is_check_space rs_input ip_lhd pd_tb11 flex_1" placeholder="Nhập email của bạn" />
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
                                <input type="password" autocomplete="off" id="confirm_password" name="confirm_password" class="is_check_space rs_input ip_lhd pd_tb11 flex_1" placeholder="Nhập lại mật khẩu" />
                                <div class="d_flex align_c cursor_p eyecf_btn">
                                    <img src="../../images/eve_open.png" alt="">
                                    <img src="../../images/eve_close.png" alt="">
                                </div>
                            </div>
                        </div>

                        <p class="font_s16 line_h22 font_w400 cl_a4 mt_25">Bằng việc đăng ký tài khoản, bạn đã đồng ý với <a class="cl_primary">Điều khoản dịch vụ</a> và <a class="cl_primary">Chính sách bảo mật</a> của chúng tôi.</p>

                        <div class="form_submit mt_15">
                            <div class="load_data position_a align_c flex_center">
                                <div class="loadingio-spinner-ellipsis-hwg8bfn38dq">
                                    <div class="loadingio-spinner-ellipsis-g5flt5ae9q8">
                                        <div class="ldio-0q6g6j8frqsd">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn_register btn btn_hover_primary w_100 br_100 pd_t12_b11_lr10 font_s16 line_h19 font_w700 cl_white btn_primary">Đăng ký</button>
                        </div>

                        <div class="authen_extend mt_15 d_flex space_b">
                            <span class="font_s16 line_h19 font_w400 cl_a4">Bạn đã có tài khoản? <a href="/authen/dang-nhap-ung-vien" class="font_w700 cl_primary">Đăng nhập ngay</a></span>
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
    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/jquery.validate.min.js"></script>
    <script src="../../js/validate_t.js"></script>
    <script src="../../js/js_t.js"></script>
    <script>
        eyeChange('.eye_btn', '#password', 'eye_hidden')
        eyeChange('.eyecf_btn', '#confirm_password', 'eye_hidden')
    </script>
</body>

</html>