<?
include '../config.php';

$queryCity = new db_query("SELECT * FROM city2");
$dataCity = $queryCity->result_array();
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow" />

    <link rel="stylesheet" href="../../css/select2.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/style_t.css">
    <title>Đăng ký nhà tuyển dụng</title>
</head>

<body>
    <div id="root">
        <div class="authen d_flex bg_f5">
            <div class="authen_left pd_25 w_100">
                <div class="fit_content">
                    <a href="/authen/dang-nhap-nha-tuyen-dung">
                        <div class="d_flex align_c">
                            <div class="d_flex align_c mr_5">
                                <img src="../../images/arr_blue.png" alt="">
                            </div>
                            <span class="font_s16 line_h19 font_w400 cl_primary">Quay lại</span>
                        </div>
                    </a>
                </div>

                <div class="mt_42 pd_lr89 d_flex flex_center">
                    <form onsubmit="return false" id="from_resgiter_ntd" action="" method="POST" class="bg_white pd_40 br_20 drop_shadow form_ntd">
                        <h1 class="font_s24 line_h28 font_w700 cl_primary txt_center">Đăng ký tài khoản Nhà tuyển dụng</h1>
                        <p class="font_s16 line_h19 font_w400 cl_55 mt_15 mb_40 txt_center">Cùng tạo dựng lợi thế cho Doanh nghiệp từ hàng triệu ứng viên tiềm năng.</p>

                        <span class="font_s18 line_h21 font_w500 cl_primary mb_20 block">Thông tin tài khoản</span>

                        <div class="form_group">
                            <span class="font_s16 line_h19 font_w500 cl_a4">Email<span class="cl_red">*</span></span>
                            <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                                <input type="text" id="email" name="email" class="is_check_space rs_input ip_lhd pd_tb11 flex_1" placeholder="Nhập email của bạn" />
                            </div>
                            <label for="" class="error_trungemail error_custom mt_5 color_red font_s16 font_w500"></label>
                        </div>

                        <div class="form_group">
                            <span class="font_s16 line_h19 font_w500 cl_a4">Mật khẩu<span class="cl_red">*</span></span>
                            <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                                <input type="password" autocomplete="off" id="password" name="password" class="is_check_space rs_input ip_lhd pd_tb11 flex_1" placeholder="Nhập mật khẩu" />
                                <div class="d_flex align_c cursor_p eye_btn">
                                    <img src="../../images/eve_open.png" alt="">
                                    <img src="../../images/eve_close.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="form_group">
                            <span class="font_s16 line_h19 font_w500 cl_a4">Xác nhận mật khẩu<span class="cl_red">*</span></span>
                            <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                                <input type="password" autocomplete="off" id="confirm_password" name="confirm_password" class="is_check_space rs_input ip_lhd pd_tb11 flex_1" placeholder="Nhập lại mật khẩu" />
                                <div class="d_flex align_c cursor_p eyecf_btn">
                                    <img src="../../images/eve_open.png" alt="">
                                    <img src="../../images/eve_close.png" alt="">
                                </div>
                            </div>
                        </div>

                        <span class="font_s18 line_h21 font_w500 cl_primary mt_25 mb_20 block">Thông tin tài khoản</span>

                        <div class="form_group">
                            <span class="font_s16 line_h19 font_w500 cl_a4">Họ và tên<span class="cl_red">*</span></span>
                            <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                                <input type="text" id="fullname" name="fullname" class="is_check_first_space rs_input ip_lhd pd_tb11 flex_1" placeholder="Nhập họ và tên của bạn" />
                            </div>
                        </div>

                        <div class="form_group">
                            <span class="font_s16 line_h19 font_w500 cl_a4">Số điện thoại cá nhân<span class="cl_red">*</span></span>
                            <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                                <input type="text" id="phone_number" name="phone_number" class="is_check_number rs_input ip_lhd pd_tb11 flex_1" placeholder="Số điện thoại cá nhân" />
                            </div>
                        </div>

                        <div class="form_group">
                            <span class="font_s16 line_h19 font_w500 cl_a4">Giới tính<span class="cl_red">*</span></span>
                            <div class="d_flex align_c mt_5 w_100 br_5 custom_select">
                                <select name="gender" class="select_one" data-placeholder="Chọn giới tính" data-minimum-results-for-search="Infinity">
                                    <option value=""></option>
                                    <option value="1">Nam</option>
                                    <option value="2">Nữ</option>
                                    <option value="3">Khác</option>
                                </select>
                            </div>
                        </div>

                        <div class="form_group">
                            <span class="font_s16 line_h19 font_w500 cl_a4">Công ty<span class="cl_red">*</span></span>
                            <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                                <input type="text" id="company" name="company" class="is_check_first_space rs_input ip_lhd pd_tb11 flex_1" placeholder="Tên công ty" />
                            </div>
                            <label for="" class="error_trungcty error_custom mt_5 color_red font_s16 font_w500"></label>
                        </div>

                        <div class="form_group">
                            <span class="font_s16 line_h19 font_w500 cl_a4">Vị trí công tác<span class="cl_red">*</span></span>
                            <div class="d_flex align_c mt_5 w_100 br_5 custom_select">
                                <select id="workplace" name="workplace" class="select_one" data-placeholder="Chọn vị trí công tác" data-minimum-results-for-search="Infinity">
                                    <option value=""></option>
                                    <option value="1">Nhân viên</option>
                                    <option value="2">Trưởng nhóm</option>
                                    <option value="3">Phó phòng</option>
                                    <option value="4">Trưởng phòng</option>
                                    <option value="5">Phó giám đốc</option>
                                    <option value="6">Giám đốc</option>
                                    <option value="7">Tổng giám đốc</option>
                                </select>
                            </div>
                        </div>


                        <div class="form_group">
                            <span class="font_s16 line_h19 font_w500 cl_a4">Địa điểm làm việc<span class="cl_red">*</span></span>
                            <div class="d_flex w_100 mb_cl_dd">
                                <div class="mt_5 w_100 br_5 w_50pt">
                                    <div class="custom_select d_flex align_c w_100">
                                        <select id="city" name="city" class="select_one" data-placeholder="Chọn tỉnh/thành phố" data-minimum-results-for-search="Infinity">
                                            <option value=""></option>
                                            <? foreach ($dataCity as $city) { ?>
                                                <option value="<?= $city['cit_id'] ?>"><?= $city['cit_name'] ?></option>
                                            <? } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="mt_5 w_100 br_5 w_50pt ml_20">
                                    <div class="custom_select d_flex align_c w_100">
                                        <select id="district" name="district" class="select_one" data-placeholder="Chọn quận/huyện" data-minimum-results-for-search="Infinity">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form_group">
                            <span class="font_s16 line_h19 font_w500 cl_a4">Skype</span>
                            <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                                <input type="text" id="skype" name="skype" class="rs_input ip_lhd pd_tb11 flex_1" placeholder="Tài khoản Skype" />
                            </div>
                        </div>

                        <div class="mt_20 d_flex align_c">
                            <input type="checkbox" id="cb_1" class="d_none cb_cus_ip">
                            <label for="cb_1" class="cus_cb cus_ntd"></label>
                            <label for="cb_1" class="font_s16 line_h22 font_w400 cl_a4 block ml_10 cursor_p">Tôi đồng ý với <a href="#" class="cl_primary">Điều khoản dịch vụ</a> của Timviec365.net.</label>
                        </div>

                        <div class="form_submit mt_25 position_r">
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
                            <button type="submit" name="submit" class="btn btn_hover_primary w_100 br_100 pd_t12_b11_lr10 font_s16 line_h19 font_w700 cl_white btn_primary btn_register">Đăng ký</button>
                        </div>

                        <div class="authen_extend mt_15 d_flex flex_center">
                            <span class="font_s16 line_h19 font_w400 cl_a4">Bạn đã có tài khoản? <a href="/authen/dang-nhap-nha-tuyen-dung.html" class="font_w700 cl_primary">Đăng nhập ngay</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/jquery.validate.min.js"></script>
    <script src="../../js/select2.min.js"></script>
    <script src="../../js/validate_t.js"></script>
    <script src="../../js/js_t.js"></script>
    <script>
        $('.select_one').select2({
            width: '100%'
        })
        eyeChange('.eye_btn', '#password', 'eye_hidden')
        eyeChange('.eyecf_btn', '#confirm_password', 'eye_hidden')
        $('.cb_cus_ip').change(function() {
            if ($(this).is(':checked')) {
                $('.btn_register').prop('disabled', false);
            } else {
                $('.btn_register').prop('disabled', true);
            }
        })
        $('#city').change(function() {
            var city = $(this).val();
            $.ajax({
                type: 'GET',
                url: "../../ajax/district.php",
                data: {
                    city: city,
                },
                success: function(data) {
                    $('#district').html(data)
                }
            })
        })
        $("input").keyup(function() {
            $(this).parents('.form_group').find('.error_custom').text('');
        })
    </script>
</body>

</html>