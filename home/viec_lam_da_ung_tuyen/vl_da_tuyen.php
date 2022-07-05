<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/slick.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/style_t.css">
    <title>Việc làm đã ứng tuyển</title>
</head>

<body>
    <div id="root">
        <?php include("../../includes/after_header.php"); ?>
        <div class="container bg_fa d_flex flex_end">
            <?php include("../../includes/slider_bar.php"); ?>
            <div class="content wbjsb mt_90 pd_24 chil_24">
                <div class="box_cty">
                    <div class="d_flex align_c space_b">
                        <h2 class="font_s24 line_h28 font_w700 cl_primary bd_l4 pd_l8">Việc làm đã ứng tuyển</h2>
                    </div>
                    <div class="mt_24">
                        <div class="slider_ut silder_news">
                            <? for ($i = 0; $i < 100; $i++) : ?>
                                <div class="item_news">
                                    <div class="item_news_top">
                                        <div class="img_news">
                                            <img src="../../images/img_news_ts.png" alt="">
                                        </div>
                                        <div class="content_news">
                                            <h3 class="font_s16 line_h19 font_w500 cl_primary pd_r23">Nhân viên kinh doanh bất động sản</h3>
                                            <span class="font_s16 line_h19 font_w400 cl_73 block mt_5">Công ty Cổ phần Thanh toán Hưng Hà</span>

                                            <div class="save_new cursor_p">
                                                <img src="../../images/del_red.png" alt="">
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
                    </div>
                </div>

                <div class="box_cty">
                    <div class="d_flex align_c space_b">
                        <h2 class="font_s24 line_h28 font_w700 cl_primary bd_l4 pd_l8">Việc làm phù hợp</h2>
                    </div>
                    <div class="mt_24">
                        <div class="row row_g25">
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

    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/slick.min.js"></script>
    <script src="../../js/js_t.js"></script>
    <script>
        $('.slider_ut').slick({
            rows: 4,
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 2,
            slidesToScroll: 2,
            prevArrow: `<button type='button' class='slick-prev pull-left'><img src="../../images/arrow_prev.png" alt=""></button>`,
            nextArrow: `<button type='button' class='slick-next pull-right'><img src="../../images/arrow_next.png" alt=""></button>`
        })
    </script>
</body>

</html>