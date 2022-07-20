<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/style_t.css">
    <title>Đăng nhập ứng viên</title>
</head>

<body>
    <div id="root">
        <div class="authen d_flex bg_white">
            <div class="authen_left pd_25 w_50pt">
                <div class="fit_content">
                    <a href="/">
                        <div class="d_flex align_c">
                            <div class="d_flex align_c mr_5">
                                <img src="../../images/arr_blue.png" alt="">
                            </div>
                            <span class="font_s16 line_h19 font_w400 cl_primary">Quay lại</span>
                        </div>
                    </a>
                </div>

                <div class="mt_42 pd_lr89">
                    <form id="authe_uv" action="" method="POST">
                        <h1 class="font_s24 line_h28 font_w700 cl_primary">Đăng nhập tài khoản Ứng viên</h1>
                        <p class="font_s16 line_h19 font_w400 cl_55 mt_15 mb_30">Cùng xây dựng một hồ sơ nổi bật và nhận được các cơ hội việc làm lý tưởng.</p>
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
                            <button type="submit" class="btn btn_hover_primary w_100 br_100 pd_t12_b11_lr10 font_s16 line_h19 font_w700 cl_white btn_primary">Đăng nhập</button>
                        </div>

                        <div class="authen_extend mt_15 d_flex space_b">
                            <span class="font_s16 line_h19 font_w400 cl_a4">Bạn chưa có tài khoản? <a href="/authen/dang-ky-ung-vien" class="font_w700 cl_oran">Đăng ký ngay</a></span>

                            <a href="/authen/quen-mat-khau-ung-vien" class="font_s16 line_h19 font_w700 cl_primary">Quên mật khẩu?</a>
                        </div>

                        <div class="authen_other">
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
    <script src="../../js/js_t.js"></script>
    <script>
        eyeChange('.eye_btn', '#password', 'eye_hidden')

        $('#authe_uv').validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true
                }
            },
            messages: {
                email: {
                    required: 'Vui lòng nhập email',
                    email: 'Trường này phải là email'
                },
                password: {
                    required: 'Vui lòng nhập mật khẩu'
                }
            },
            errorPlacement: function(error, element) {
                let parent = $(element).parents('.form_group');
                if (parent.length > 0) {
                    $(parent).append(error);
                }
            },
        });
    </script>
</body>

</html>