<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/style_t.css">
    <title>Đánh giá</title>
</head>

<body>
    <!-- poup xác nhận -->
    <div class="popup hidden" id="danh_gia_ss">
        <div class="main_popup bg_white popup_500 br_20 animation_zoom_in">
            <div class="conatent_popup pd_t32_lrb24">
                <div class="d_flex center_center flex_column">
                    <div class="wh_42">
                        <img src="../../images/check_medium.png" alt="" class="img_full">
                    </div>
                    <h3 class="font_s20 line_h23 font_w700 cl_primary mt_16">Đánh giá thành công</h3>
                    <p class="font_s16 line_h19 font_w400 cl_55 mt_8">Cảm ơn bạn đã tin tưởng và sử dụng dịch vụ của chúng tôi! </p>
                    <div class="form_submit d_flex center_center mt_16">
                        <a href="" class="btn flex_im center_center h_42 m_w140 br_5 font_s16 line_h19 font_w700 bg_td cl_white btn_primary">Đóng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end poup xác nhận -->


    <div id="root">
        <?php include("../../includes/after_header.php"); ?>
        <div class="container bg_fa d_flex flex_end">
            <?php include("../../includes/slider_bar.php"); ?>
            <div class="content wbjsb mt_90 pd_24">
                <div class="box_form br_16 pd_24">
                    <form action="" method="POST" class="chil_div16">
                        <h1 class="font_s24 line_h28 font_w700 cl_primary bd_l4 pd_l8">Đánh giá</h1>
                        <div class="form_group">
                            <div class="danh_gia_start">
                                <h2 class="font_s16 line_h19 font_w500 cl_a4">Đánh giá về Job3s</h2>
                                <div class="list_start mt_6">
                                    <!--  #FF9900 -->
                                    <?php for ($i = 0; $i < 5; $i++) : ?>
                                        <div class="item_start cl_f2">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.5133 19.3473C4.03081 19.5948 3.48331 19.161 3.58081 18.6073L4.6183 12.6948L0.214566 8.49982C-0.196683 8.10732 0.0170667 7.38983 0.568315 7.31233L6.6908 6.44233L9.42079 1.03359C9.66704 0.546094 10.3333 0.546094 10.5795 1.03359L13.3095 6.44233L19.432 7.31233C19.9833 7.38983 20.197 8.10732 19.7845 8.49982L15.382 12.6948L16.4195 18.6073C16.517 19.161 15.9695 19.5948 15.487 19.3473L9.99829 16.5273L4.51205 19.3473H4.5133Z" fill="currentColor" />
                                            </svg>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>

                        <div class="form_group">
                            <span class="font_s16 line_h19 font_w500 cl_a4">Nhận xét<span class="cl_red">*</span></span>
                            <div class="d_flex align_c mt_6 bd_dc w_100 br_5">
                                <textarea name="title" id="" class="resert_txt w_100 h_100 pd_11_14 br_5 h_208" placeholder="Chia sẻ cảm nhận của bạn đến chúng tôi"></textarea>
                            </div>
                        </div>

                        <div class="form_submit mt_24_im d_flex align_c">
                            <a href="/tin-tuyen-dung/" class="btn mw_120 td_btn flex_im center_center cl_primary bg_w bd_td br_5 pd_t12_b11_lr24 mr_24">
                                <span class="font_s16 line_h19 font_w500 currentColor">Hủy</span>
                            </a>

                            <button type="button" onclick="showHiddenPopup('#danh_gia_ss', 'hidden')" class="btn btn_hover_primary mw_120 flex_im center_center br_5 btn_primary cl_white pd_t12_b11_lr24">
                                <span class="font_s16 line_h19 font_w500 currentColor">Cập nhật</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../../js/js_t.js"></script>
</body>

</html>