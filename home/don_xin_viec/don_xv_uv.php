<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/style_t.css">
    <title>Đơn xin việc</title>
</head>

<body>
    <div id="root">
        <?php include("../../includes/after_header.php"); ?>
        <div class="container bg_fa d_flex flex_end">
            <?php include("../../includes/slider_bar.php"); ?>
            <div class="content wbjsb mt_90 pd_24 chil_24">
                <div class="box_cty">
                    <div class="d_flex align_c space_b">
                        <h2 class="font_s24 line_h28 font_w700 cl_primary bd_l4 pd_l8">Đơn xin việc đã lưu</h2>
                    </div>
                    <div class="mt_24">
                        <div class="row row_g36 ">
                            <?php for ($i = 0; $i < 3; $i++) : ?>
                                <div class="col_3 txv_item br_16 over_hd">
                                    <div class="txv_img">
                                        <img src="../../images/txv_mau1.png" alt="thư xin việc">
                                    </div>

                                    <div class="txv_content">
                                        <div class="txv_content_top position_r ">
                                            <h3 class="font_s16 line_h19 font_w700 cl_white pd_r28">ĐÂY LÀ TIÊU ĐỀ ĐƠN XIN VIỆC</h3>
                                            <p class="font_s14 line_h16 font_w400 mt_8 cl_white">Cập nhật lần cuối: <span>10/20/2020 10:10 AM</span></p>

                                            <div class="edit_cv_icon cursor_p">
                                                <img src="../../images/edit_white.png" alt="">
                                            </div>
                                        </div>
                                        <div class="txv_content_bottom mt_16 d_flex space_b align_c">
                                            <div class="d_flex pd_r10">
                                                <button class="btn flex_im align_c pd_3_8 bg_8d br_100">
                                                    <div class="mr_6 d_flex align_c">
                                                        <img src="../../images/down_icon_white.png" alt="">
                                                    </div>
                                                    <span class="font_s14 line_h16 font_w500 cl_white">Tải xuống</span>
                                                </button>

                                                <button class="btn flex_im align_c pd_3_8 bg_8d br_100">
                                                    <div class="mr_6 d_flex align_c">
                                                        <img src="../../images/eye_white_open.png" alt="">
                                                    </div>
                                                    <span class="font_s14 line_h16 font_w500 cl_white">Xem trước</span>
                                                </button>
                                            </div>

                                            <div class="cursor_p d_flex align_c">
                                                <img src="../../images/del_white.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>

                        <!-- no result -->
                        <div class="no_result bg_w pd_tb0" style="display: none;">
                            <div>
                                <img src="../../images/no_result.png" alt="">
                            </div>
                            <span class="font_s16 line_h19 font_w400 cl_oran block mt_16">oops!! Bạn chưa tạo đơn xin việc nào</span>
                            <a href="/tin-tuyen-dung/dang-tin-tuyen-dung.html" class="btn mt_24 btn_hover_primary flex_im align_c br_100 btn_primary cl_white pd_t12_b11_lr24">
                                <div class="mr_6 d_flex align_c">
                                    <img src="../../images/add_pri.png" alt="">
                                </div>
                                <span class="font_s16 line_h19 font_w500 currentColor">Tạo đơn xin việc ngay</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="box_cty">
                    <div class="d_flex align_c space_b">
                        <h2 class="font_s24 line_h28 font_w700 cl_primary bd_l4 pd_l8">Đơn xin việc đã thích</h2>
                    </div>
                    <div class="mt_24">
                        <div class="row row_g36">
                            <?php for ($i = 0; $i < 3; $i++) : ?>
                                <div class="col_3 br_16 over_hd position_r">
                                    <a href="" class="txv_img">
                                        <img src="../../images/txv_mau1.png" alt="thư xin việc">
                                    </a>

                                    <div class="cv_save">
                                        <img src="../../images/save_border_fill.png" alt="">
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                        <div class="no_result bg_w pd_tb0 " style="display: none;">
                            <div>
                                <img src="../../images/no_result.png" alt="">
                            </div>
                            <span class="font_s16 line_h19 font_w400 cl_oran block mt_16">oops!! Bạn chưa thích thư xin việc nào</span>
                            <a href="/tin-tuyen-dung/dang-tin-tuyen-dung.html" class="btn mt_24 btn_hover_primary flex_im align_c br_100 btn_primary cl_white pd_t12_b11_lr24">
                                <div class="mr_6 d_flex align_c">
                                    <img src="../../images/search_white.png" alt="">
                                </div>
                                <span class="font_s16 line_h19 font_w500 currentColor">Tham khảo đơn xin việc Jo3s.com </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="box_cty">
                    <div class="d_flex align_c space_b">
                        <h2 class="font_s24 line_h28 font_w700 cl_primary bd_l4 pd_l8">Việc làm phù hợp</h2>
                    </div>
                    <div class="mt_24">
                        <div class="row row_g25 vl_ut">
                            <? for ($i = 0; $i < 6; $i++) : ?>
                                <div class="col_2 item_news">
                                    <div class="item_news_top">
                                        <div class="img_news">
                                            <img src="../../images/img_news_ts.png" alt="">
                                        </div>
                                        <div class="content_news">
                                            <h3 class="font_s16 line_h19 font_w500 cl_primary pd_r23">Nhân viên kinh doanh bất động sản</h3>
                                            <span class="font_s16 line_h19 font_w400 cl_73 block mt_5">Công ty Cổ phần Thanh toán Hưng Hà</span>

                                            <div class="save_new">
                                                <img src="../../images/save_icon.png" alt="">
                                            </div>

                                            <div class="infor_new d_flex mt_6">
                                                <div class="item_infor_new">
                                                    <div class="mr_5 w_16h17">
                                                        <img src="../../images/date_icon.png" alt="date" class="img_full">
                                                    </div>
                                                    <span class="font_s16 line_h19 font_w400 cl_55">Hạn nộp: 30/04/2022</span>
                                                </div>

                                                <div class="item_infor_new">
                                                    <div class="mr_5 w_16h17">
                                                        <img src="../../images/time_icon.png" alt="date" class="img_full">
                                                    </div>
                                                    <span class="font_s16 line_h19 font_w400 cl_55">Toàn thời gian</span>
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

                        <div class="d_flex center_center">
                            <button class="btn td_btn btn_loctd flex_im center_center cl_primary bg_w bd_td br_100 pd_t11_b10_lr24 pd_lr20">
                                <span class="font_s16 line_h19 font_w500 currentColor">Xem tất cả</span>
                                <div class="ml_6 d_flex align_c">
                                    <img src="../../images/back_pri.png" alt="">
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>