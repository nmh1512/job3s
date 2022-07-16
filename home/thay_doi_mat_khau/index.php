<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/style_t.css">
    <title>Thay đổi mật khẩu</title>
</head>

<body class="full_vh">
    <!-- poup xác nhận -->
    <div class="popup hidden" id="danh_gia_ss">
        <div class="main_popup bg_white popup_500 br_20 animation_zoom_in">
            <div class="conatent_popup pd_t32_lrb24">
                <div class="d_flex center_center flex_column">
                    <div class="wh_42">
                        <img src="../../images/check_medium.png" alt="" class="img_full">
                    </div>
                    <h3 class="font_s20 line_h23 font_w700 cl_primary mt_16">Đổi mật khẩu thành công</h3>
                    <p class="font_s16 line_h19 font_w400 cl_55 mt_8">Mật khẩu mới của bạn đã được cập nhật trên hệ thống</p>
                    <div class="form_submit d_flex center_center mt_16">
                        <a href="" class="btn flex_im center_center h_42 m_w140 br_5 font_s16 line_h19 font_w700 bg_td cl_white btn_primary">Đóng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end poup xác nhận -->


    <div id="root" class="h_100">
        <?php include("../../includes/after_header.php"); ?>
        <div class="container bg_fa d_flex flex_end h_100">
            <?php include("../../includes/slider_bar.php"); ?>
            <div class="content wbjsb mt_90 pd_24 mb_40 tdmk">
                <div class="box_form pd_24">
                    <h1 class="font_s24 line_h28 font_w700 cl_primary bd_l4 pd_l8">Đổi mật khẩu</h1>
                    <div class="br_16 d_flex align_c flex_center">
                        <form action="" method="POST" class="pass_w chilfr_mt24">
                            <div class="form_group">
                                <span class="font_s16 line_h19 font_w500 cl_a4">Mật khẩu hiện tại<span class="cl_red">*</span></span>
                                <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                                    <input type="password" autocomplete="off" id="password_old" name="password_old" class="rs_input ip_lhd pd_tb11 flex_1" placeholder="Nhập email của bạn" />
                                    <div class="d_flex align_c cursor_p eye_btn_old">
                                        <img src="../../images/eve_open.png" alt="">
                                        <img src="../../images/eve_close.png" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="form_group">
                                <span class="font_s16 line_h19 font_w500 cl_a4">Mật khẩu mới<span class="cl_red">*</span></span>
                                <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                                    <input type="password" autocomplete="off" id="password_new" name="password_new" class="rs_input ip_lhd pd_tb11 flex_1" placeholder="Nhập email của bạn" />
                                    <div class="d_flex align_c cursor_p eye_btn">
                                        <img src="../../images/eve_open.png" alt="">
                                        <img src="../../images/eve_close.png" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="form_group">
                                <span class="font_s16 line_h19 font_w500 cl_a4">Xác nhận mật khẩu mới<span class="cl_red">*</span></span>
                                <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                                    <input type="password" autocomplete="off" id="confirm_password_new" name="confirm_password_new" class="rs_input ip_lhd pd_tb11 flex_1" placeholder="Nhập lại mật khẩu" />
                                    <div class="d_flex align_c cursor_p eyecf_btn">
                                        <img src="../../images/eve_open.png" alt="">
                                        <img src="../../images/eve_close.png" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="form_submit mt_24_im d_flex align_c">
                                <button type="button" onclick="showHiddenPopup('#danh_gia_ss', 'hidden')" class="btn btn_hover_primary mw_120 flex_im center_center br_5 btn_primary cl_white pd_t12_b11_lr24">
                                    <span class="font_s16 line_h19 font_w500 currentColor">Đổi mật khẩu</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../js/js_t.js"></script>
    <script>
        eyeChange('.eye_btn_old', '#password_old', 'eye_hidden')
        eyeChange('.eye_btn', '#password_new', 'eye_hidden')
        eyeChange('.eyecf_btn', '#confirm_password_new', 'eye_hidden')
    </script>
</body>

</html>