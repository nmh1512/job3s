<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/style_t.css">
    <title>Đăng nhập tài khoản Nhà tuyển dụng</title>
</head>

<body>
    <div id="root">
        <div class="authen d_flex bg_white">
            <div class="authen_left pd_25 w_50pt pd_b_130">
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
                    <form action="" method="POST" id="from_login_ntd">
                        <h1 class="font_s24 line_h28 font_w700 cl_primary">Đăng nhập tài khoản Nhà tuyển dụng</h1>
                        <p class="font_s16 line_h19 font_w400 cl_55 mt_15 mb_30">Cùng tạo dựng lợi thế cho Doanh nghiệp từ hàng triệu ứng viên tiềm năng.</p>
                        <div class="form_group">
                            <span class="font_s16 line_h19 font_w500 cl_a4">Email</span>
                            <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                                <label for="email" class="d_flex align_c mr_10">
                                    <img src="../../images/email_blue.png" alt="">
                                </label>
                                <input type="text" id="email" name="email" class="is_check_space  rs_input ip_lhd pd_tb11 flex_1" placeholder="Nhập email của bạn" />
                            </div>
                        </div>

                        <div class="form_group">
                            <span class="font_s16 line_h19 font_w500 cl_a4">Mật khẩu</span>
                            <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                                <label for="password" class="d_flex align_c mr_10">
                                    <img src="../../images/pass_blue.png" alt="">
                                </label>
                                <input type="password" autocomplete="off" id="password" name="password" class="rs_input ip_lhd pd_tb11 flex_1 is_check_space" placeholder="Nhập email của bạn" />
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
                            <span class="font_s16 line_h19 font_w400 cl_a4">Bạn chưa có tài khoản? <a href="/authen/dang-ky-nha-tuyen-dung" class="font_w700 cl_oran">Đăng ký ngay</a></span>

                            <a href="/authen/quen-mat-khau-nha-tuyen-dung" class="font_s16 line_h19 font_w700 cl_primary">Quên mật khẩu?</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="authen_right bg_f5 w_50pt d_flex flex_column center_center">
                <div>
                    <img src="../../images/ntd_1.png" alt="">
                </div>
                <div class="mt_40 d_flex flex_column align_c">
                    <h2 class="txt_center font_s24 line_h28 font_w500 cl_a4">Hỗ trợ nhà tuyển dụng</h2>
                    <p class="mt_15 txt_center font_s16 line_h24 font_w400 cl_a4 w_60">Job3S.com cung cấp dịch vụ tuyển dụng hàng đầu, đăng tin tuyển dụng dễ dàng miễn phí.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/jquery.validate.min.js"></script>
    <script src="../../js/js_t.js"></script>
    <script>
        eyeChange('.eye_btn', '#password', 'eye_hidden');


        $.validator.addMethod("validatePassword", function(value, element) {
            return this.optional(element) || /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/.test(value);
        })

        $(".is_check_space").keypress(function(event) {
            var character = String.fromCharCode(event.keyCode);
            return !(/\s/.test(character));
        });

        $('#from_login_ntd').validate({
            rules: {
                email: {
                    required: true,
                    email: validateEmail($(email).val())
                },
                password: {
                    required: true,
                    validatePassword: true
                }
            },
            messages: {
                email: {
                    required: 'Vui lòng nhập email',
                    email: 'Trường này phải là email'
                },
                password: {
                    required: 'Vui lòng nhập mật khẩu',
                    validatePassword: 'Nhập mật khẩu tối thiểu 6 ký tự bao gồm chữ hoa, chữ thường và ít nhất một chữ số'
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