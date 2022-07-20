<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/style_t.css">
    <title>Quên mật khẩu</title>
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
                    <form onsubmit="return false" action="" method="POST">
                        <h1 class="font_s24 line_h28 font_w700 cl_primary">Quên mật khẩu</h1>
                        <div class="is_checkemail ">
                            <p class="font_s16 line_h19 font_w400 cl_55 mt_15 mb_30">Nhập email mà bạn đã sử dụng để đăng kí tài khoản, hệ thống sẽ gửi lại thông tin để cập nhật mật khẩu.</p>
                            <div class="form_group">
                                <span class="font_s16 line_h19 font_w500 cl_a4">Email</span>
                                <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                                    <label for="email" class="d_flex align_c mr_10">
                                        <img src="../../images/email_blue.png" alt="">
                                    </label>
                                    <input type="text" id="email" name="email" class="rs_input ip_lhd pd_tb11 flex_1" placeholder="Nhập email của bạn" />
                                </div>
                            </div>

                            <p class="font_s16 line_h22 font_w400 cl_a4 mt_25">Bằng việc thực hiện đổi mật khẩu, bạn đã đồng ý với <a class="cl_primary">Điều khoản dịch vụ</a> và <a class="cl_primary">Chính sách bảo mật</a> của chúng tôi.</p>

                            <div class="form_submit mt_25">
                                <button class="btn btn_hover_primary w_100 br_100 pd_t12_b11_lr10 font_s16 line_h19 font_w700 cl_white btn_primary">Đổi mật khẩu</button>
                            </div>

                            <div class="authen_extend mt_15 d_flex">
                                <a href="/authen/dang-ky-ung-vien.html" class="font_s16 line_h19 font_w700 cl_primary">Đăng ký tài khoản mới</a>
                            </div>
                        </div>

                        <div class="check_email d_none  mt_40 bg_clE5 pd_15 br_10 d_flex align_s">
                            <div class="mr_15">
                                <img src="../../images/sussess_icon_green.png" alt="">
                            </div>
                            <span class="font_s16 line_h22 font_w400 cl_green">Hãy kiểm tra email của bạn. Sau đó nhấn vào nút đổi mật khẩu trong hộp thư để đổi lại mật khẩu</span>
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
    </script>
</body>

</html>