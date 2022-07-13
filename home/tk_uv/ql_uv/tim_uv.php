<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/select2.min.css">
    <link rel="stylesheet" href="../../../css/slick.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../../../css/style_t.css">
    <title>Danh sách mẫu thư xin việc đẹp nhất hiện nay</title>
</head>

<body class="bg_f5">
    <div id="root">
        <?php include("../../../includes/after_header.php") ?>
        <div class="container mt_90 bg_f5 pd_b_48">
            <div class="banner_cv mh_428 bg_cv">
                <div class="content_banner wf_tinhthanh">
                    <!-- <h1 class="font_s28 line_h33 font_w700 cl_a4">Tìm kiếm ứng viên</h1> -->
                    <!-- <h1 class="font_s28 line_h33 font_w700 cl_a4">Tìm kiếm ứng viên <span class="cl_oran">Bán hàng</span> trên toàn quốc </h1> -->
                    <h1 class="font_s28 line_h33 font_w700 cl_a4">Tìm kiếm ứng viên <span class="cl_oran">Bán hàng</span> trên <span class="cl_oran">Hà Nội</span></h1>
                    <div class="search_kv d_flex mt_24">
                        <div class="d_flex align_c pd_lr15 bg_w w_294 br_5">
                            <div class="mr_10 d_flex align_c">
                                <img src="../../images/search_gray.png" alt="">
                            </div>
                            <input type="text" autocomplete="off" name="sl_tuyen" class="sr_tt rs_input ip_lhd pd_t17_b16 flex_1" placeholder="Bán hàng" />
                        </div>
                        <div class="d_flex align_c br_5 custom_select w_248 nganh_nghe bg_w">
                            <div class="icon_add_nn d_flex align_c">
                                <img src="../../images/adrress_icon.png" alt="">
                            </div>
                            <select name="" class="select_one" data-placeholder="Tất cả địa điểm">
                                <option value=""></option>
                                <option value="0">Nam</option>
                                <option value="1">Nữ</option>
                                <option value="3">Khác</option>
                            </select>
                        </div>

                        <div>
                            <button class="btn hover_oran h_100 btn_hover_primary flex_im align_c br_6 bg_ff99 cl_white pd_t12_b11_lr24">
                                <span class="font_s16 line_h19 font_w700 currentColor white_s_nw">Tìm ứng viên</span>
                            </button>
                        </div>
                    </div>

                    <!-- tìm kiếm nâng cao màn 1024 -->
                    <div class="search_advanced bg_20white mt_24 align_s">
                        <div class="flex_1 mr_8">
                            <div class="d_flex align_c pd_lr15 bg_w flex_1 br_5">
                                <div class="mr_10 d_flex align_c">
                                    <img src="../../images/search_gray.png" alt="">
                                </div>
                                <input type="text" autocomplete="off" name="search" class="pl_ip99 sr_tt rs_input ip_lhd pd_t17_b16 flex_1" placeholder="Tìm kiếm mẫu CV phù hợp" />
                            </div>
                            <div class="d_flex space_b mt_16">
                                <span class="font_s16 line_h22 font_w500 cl_a4">Bộ lọc nâng cao</span>
                                <a href="" class="d_flex align_c">
                                    <div class="wh_16 d_flex align_c mr_6">
                                        <img src="../../images/up_pri.png" alt="">
                                    </div>
                                    <span class="font_s16 line_h19 font_w400 cl_primary">Thu gọn</span>
                                </a>
                            </div>
                            <div class="d_flex align_c br_5 custom_select search_nc w_100 nganh_nghe mt_16 bg_w">
                                <div class="icon_add_nn d_flex align_c">
                                    <img src="../../images/adrress_icon.png" alt="">
                                </div>
                                <select name="" class="select_one" data-placeholder="Tất cả địa điểm">
                                    <option value=""></option>
                                    <option value="0">Nam</option>
                                    <option value="1">Nữ</option>
                                    <option value="3">Khác</option>
                                </select>
                            </div>

                            <div class="d_flex align_c br_5 custom_select search_nc w_100 nganh_nghe mt_8 bg_w">
                                <div class="icon_add_nn d_flex align_c">
                                    <img src="../../images/adrress_icon.png" alt="">
                                </div>
                                <select name="" class="select_one" data-placeholder="Tất cả địa điểm">
                                    <option value=""></option>
                                    <option value="0">Nam</option>
                                    <option value="1">Nữ</option>
                                    <option value="3">Khác</option>
                                </select>
                            </div>

                            <div class="d_flex align_c br_5 custom_select search_nc w_100 nganh_nghe mt_8 bg_w">
                                <div class="icon_add_nn d_flex align_c">
                                    <img src="../../images/adrress_icon.png" alt="">
                                </div>
                                <select name="" class="select_one" data-placeholder="Tất cả địa điểm">
                                    <option value=""></option>
                                    <option value="0">Nam</option>
                                    <option value="1">Nữ</option>
                                    <option value="3">Khác</option>
                                </select>
                            </div>

                            <div class="cv-group mt_32">
                                <span class="font_s18 line_h22 font_w500 cl_a4">Sắp xếp theo</span>
                                <div class="mt_16 d_flex">
                                    <div class="d_flex space_b w_100">
                                        <div class="d_flex align_c">
                                            <input type="checkbox" id="cb_sx1" class="cb_cus_ip d_none">
                                            <label for="cb_sx1" class="cus_cb cus_btn_sx mr_12"></label>
                                            <label for="cb_sx1" class="font_s14 line_h19 font_w400 cl_37 pd_t1 el1">Mới nhất</label>
                                        </div>
                                        <span class="font_s12 line_h16 font_w400 d_flex center_center reslt_sapxep fshick0">235</span>
                                    </div>
                                </div>
                            </div>

                            <button class="btn mt_16 flex_im center_center bg_w w_100 br_6 w_100 pd_tb13 cl_primary bd_td ">
                                <span class="font_s16 line_h14 font_w500 currentColor">Hủy lọc</span>
                            </button>
                        </div>


                        <div>
                            <button class="btn btn_cv hover_oran h_100 flex_im align_c br_6 bg_ff99 cl_white">
                                <span class="font_s16 line_h19 font_w700 currentColor white_s_nw">Tìm CV</span>
                            </button>
                        </div>
                    </div>

                    <div class="mt_48 d_flex">
                        <div>
                            <span class="font_s16 line_h19 font_w500 cl_a4">Tải app tìm việc Job3s</span>
                            <div class="mt_16 d_flex h_100px">
                                <div class="mr_16">
                                    <img src="../../images/qc_ap.png" alt="">
                                </div>

                                <div class="d_flex flex_column space_b">
                                    <a href="" class="h_42 block">
                                        <img src="../../images/img_app_adroi.png" alt="">
                                    </a>

                                    <a href="" class="h_42 block">
                                        <img src="../../images/img_app_appstore.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="ml_69">
                            <span class="font_s16 line_h19 font_w500 cl_a4">Tải CV Job3s</span>
                            <div class="mt_16 d_flex h_100px">
                                <div class="mr_16">
                                    <img src="../../images/qc_ap.png" alt="">
                                </div>

                                <div class="d_flex flex_column space_b">
                                    <a href="" class="h_42 block">
                                        <img src="../../images/img_app_adroi.png" alt="">
                                    </a>

                                    <a href="" class="h_42 block">
                                        <img src="../../images/img_app_appstore.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="img_tt d_flex align_e">
                    <img src="../../images/banner_uv.png" alt="" />
                </div>
            </div>
            <p class="font_s24 line_h28 font_w700 cl_a4 pd_lr68 mt_48">Hiện có <span class="cl_primary">652</span> <span class="cl_oran">ứng viên</span> phù hợp với yêu cầu của bạn.</p>
            <div class="cv_warp d_flex pd_lr68 mt_24">
                <div class="cv_left">
                    <div class="search_box drop_sd br_10 pd_24 bg_w">
                        <form action="" method="post" class="form_cv mt_0fisrt">
                            <div class="cv-group">
                                <span class="font_s18 line_h22 font_w500 cl_a4">Kinh nghiệm làm việc</span>
                                <div class="mt_12 cv_select">
                                    <select name="" id="" class="select_one">
                                        <option value="">Tất cả kinh nghiệm</option>
                                    </select>
                                </div>
                            </div>

                            <div class="cv-group">
                                <span class="font_s18 line_h22 font_w500 cl_a4">Cấp bậc</span>
                                <div class="mt_12 cv_select">
                                    <select name="" id="" class="select_one">
                                        <option value="">Trưởng phòng</option>
                                    </select>
                                </div>
                            </div>

                            <div class="cv-group">
                                <span class="font_s18 line_h22 font_w500 cl_a4">Sắp xếp theo</span>
                                <div class="mt_16 d_flex flex_column chil_mt12">
                                    <div class="d_flex space_b w_100">
                                        <div class="d_flex align_c">
                                            <input type="checkbox" class="wh23 mr_12">
                                            <span class="font_s14 line_h19 font_w400 cl_37 pd_t1 el1">Mới nhất</span>
                                        </div>
                                        <span class="font_s12 line_h16 font_w400 d_flex center_center reslt_sapxep fshick0">235</span>
                                    </div>

                                    <div class="d_flex space_b w_100">
                                        <div class="d_flex align_c">
                                            <input type="checkbox" class="wh23 mr_12">
                                            <span class="font_s14 line_h19 font_w400 cl_37 pd_t1 el1">Mới nhất</span>
                                        </div>
                                        <span class="font_s12 line_h16 font_w400 d_flex center_center reslt_sapxep fshick0">235</span>
                                    </div>

                                    <div class="d_flex space_b w_100">
                                        <div class="d_flex align_c">
                                            <input type="checkbox" class="wh23 mr_12">
                                            <span class="font_s14 line_h19 font_w400 cl_37 pd_t1 el1">Mới nhất</span>
                                        </div>
                                        <span class="font_s12 line_h16 font_w400 d_flex center_center reslt_sapxep fshick0">235</span>
                                    </div>
                                </div>
                            </div>

                            <div class="cv-group">
                                <span class="font_s18 line_h22 font_w500 cl_a4">Sắp xếp theo</span>
                                <div class="mt_16 d_flex flex_column chil_mt12">
                                    <div class="d_flex space_b w_100">
                                        <div class="d_flex align_c">
                                            <input type="checkbox" class="wh23 mr_12">
                                            <span class="font_s14 line_h19 font_w400 cl_37 pd_t1 el1">Mới nhất</span>
                                        </div>
                                        <span class="font_s12 line_h16 font_w400 d_flex center_center reslt_sapxep fshick0">235</span>
                                    </div>

                                    <div class="d_flex space_b w_100">
                                        <div class="d_flex align_c">
                                            <input type="checkbox" class="wh23 mr_12">
                                            <span class="font_s14 line_h19 font_w400 cl_37 pd_t1 el1">Mới nhất</span>
                                        </div>
                                        <span class="font_s12 line_h16 font_w400 d_flex center_center reslt_sapxep fshick0">235</span>
                                    </div>

                                    <div class="d_flex space_b w_100">
                                        <div class="d_flex align_c">
                                            <input type="checkbox" class="wh23 mr_12">
                                            <span class="font_s14 line_h19 font_w400 cl_37 pd_t1 el1">Mới nhất</span>
                                        </div>
                                        <span class="font_s12 line_h16 font_w400 d_flex center_center reslt_sapxep fshick0">235</span>
                                    </div>
                                </div>
                            </div>

                            <div class="cv-group">
                                <span class="font_s18 line_h22 font_w500 cl_a4">Mức lương mong muốn</span>
                                <div class="mt_23">
                                    <div class="ranger_ml">
                                        <span style="left: -1px"></span>
                                        <span style="right: -1px"></span>
                                    </div>
                                    <div class="d_flex mt_23">
                                        <div class="w_50pt">
                                            <span class="font_s16 line_h24 font_w400 cl_a4">Từ</span>
                                            <div class="d_flex align_c bd_ec bg_f9 pd_lr15 br_10 mt_5">
                                                <input type="text" autocomplete="off" name="sl_tuyen" value="1 triệu" class="sr_tt txt_center font_w700 w_100 rs_input ip_lhd pd_t17_b16 flex_1 cl_oran" placeholder="Bán hàng" />
                                            </div>
                                        </div>

                                        <div class="w_50pt ml_30">
                                            <span class="font_s16 line_h24 font_w400 cl_a4">đến</span>
                                            <div class="d_flex align_c bd_ec bg_f9 pd_lr15 br_10 mt_5 bf_ns">
                                                <input type="text" autocomplete="off" name="sl_tuyen" value="500 triệu" class="sr_tt txt_center font_w700 w_100 rs_input ip_lhd pd_t17_b16 flex_1 cl_oran" placeholder="Bán hàng" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cv-submit mt_24">
                                <button class="btn btn_hover_primary flex_im center_center w_100 br_10 btn_primary cl_white w_100 pd_tb14">
                                    <span class="font_s16 line_h14 font_w500 currentColor">Áp dụng</span>
                                </button>

                                <button class="btn mt_16 flex_im center_center w_100 br_10 w_100 pd_tb13 cl_primary bd_td ">
                                    <span class="font_s16 line_h14 font_w500 currentColor">Hủy lọc</span>
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="mess_job drop_sd br_10 mt_24 bg_w h_504 d_flex flex_column">
                        <h2 class="font_s22 line_h26 font_w700 cl_primary pd_12_20 bg_f5 br_ltr10">Chat với ứng viên</h2>
                        <div class="mess_chat flex_1">
                            <div class="mess_chat_box pd_20">
                                <div class="d_flex bg_w br_100 bd_99">
                                    <input type="text" autocomplete="off" name="sl_tuyen" class="pd_tb11_r18_l19 rs_input ip_lhd w_100 pl_se" placeholder="Nhập tên nhà tuyển dụng" />
                                    <div class="d_flex center_center bg_ff99 pd_tb12_r19_l20 fshick bd_rb100">
                                        <img src="../../images/search_white.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="list_mess">
                                <div class="scroll_mess">
                                    <?php for ($i = 0; $i < 10; $i++) : ?>
                                        <div class="item_mess">
                                            <div class="wh_50 br_50pt bd_ee mr_10 position_r">
                                                <span class="online is_offline"></span>
                                                <img src="../../images/txv_mau1.png" alt="" class="img_full br_50pt">
                                            </div>
                                            <div>
                                                <span class="font_s16 line_h19 font_w500 cl_a4">Công ty Cổ phần Thanh ...</span>
                                                <span class="font_s15 line_h18 font_w400 cl_73 block mt_5">Hồ Chí Minh</span>
                                            </div>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cv_right">
                    <div class="row row_g25">
                        <? for ($i = 0; $i < 20; $i++) : ?>
                            <div class="col_2 item_news bg_w">
                                <div class="item_news_top">
                                    <div class="img_news bd_dc">
                                        <img src="../../images/avt_1.png" alt="">
                                    </div>
                                    <div class="content_news">
                                        <h3 class="font_s16 line_h19 font_w500 cl_primary pd_r23">Nguyễn Đình Mạnh</h3>
                                        <span class="font_s16 line_h19 font_w400 cl_73 block mt_5">Kỹ sư cầu đường</span>

                                        <div class="save_new">
                                            <img src="../../images/save_icon.png" alt="">
                                        </div>

                                        <div class="infor_new d_flex mt_6">
                                            <div class="item_infor_new">
                                                <div class="mr_5 w_16h17">
                                                    <img src="../../images/time_small_gray.png" alt="date" class="img_full">
                                                </div>
                                                <span class="font_s16 line_h19 font_w400 cl_55">1 năm kinh nghiệm</span>
                                            </div>

                                            <div class="item_infor_new">
                                                <div class="mr_5 d_flex align_c">
                                                    <img src="../../images/inbox_green.png" alt="">
                                                </div>
                                                <span class="font_s16 line_h18 font_w400 cl_green">Chat</span>
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
                    <div class="paging flex_e">
                        <div class="paging_pages">
                            <span>
                                <div class="d_flex center_center rota_360">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.39844 15.25L11.6484 8L4.39844 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </span>
                            <span class="active_pages">1</span>
                            <span>2</span>
                            <span>3</span>
                            <span>4</span>
                            <span>
                                <div class="d_flex center_center">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.39844 15.25L11.6484 8L4.39844 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lr_68 news_recruit mt_48">
                <div class="box_cty">
                    <div class="item_box">
                        <div class="d_flex align_c space_b">
                            <h3 class="font_s24 line_h18 font_w500 cl_primary">Ứng viên phù hợp</h3>
                        </div>
                        <div class="silder_news pd_tb24_slder uv_tim">
                            <? for ($i = 0; $i < 20; $i++) : ?>
                                <div class="item_news bg_w">
                                    <div class="item_news_top">
                                        <div class="img_news bd_dc">
                                            <img src="../../images/avt_1.png" alt="">
                                        </div>
                                        <div class="content_news">
                                            <h3 class="font_s16 line_h19 font_w500 cl_primary pd_r23">Nguyễn Đình Mạnh</h3>
                                            <span class="font_s16 line_h19 font_w400 cl_73 block mt_5">Kỹ sư cầu đường</span>

                                            <div class="save_new">
                                                <img src="../../images/save_icon.png" alt="">
                                            </div>

                                            <div class="infor_new d_flex mt_6">
                                                <div class="item_infor_new">
                                                    <div class="mr_5 w_16h17">
                                                        <img src="../../images/time_small_gray.png" alt="date" class="img_full">
                                                    </div>
                                                    <span class="font_s16 line_h19 font_w400 cl_55">1 năm kinh nghiệm</span>
                                                </div>

                                                <div class="item_infor_new">
                                                    <div class="mr_5 d_flex align_c">
                                                        <img src="../../images/inbox_green.png" alt="">
                                                    </div>
                                                    <span class="font_s16 line_h18 font_w400 cl_green">Chat</span>
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
            </div>
        </div>
        <? include("../../../includes/footer.php") ?>
    </div>

    <script src="../../../js/jquery-3.4.1.min.js"></script>
    <script src="../../../js/slick.min.js"></script>
    <script src="../../../js/select2.min.js"></script>
    <script>
        $('.select_one').select2({
            width: '100%'
        })

        $('.silder_news').slick({
            rows: 1,
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            prevArrow: `<button type='button' class='slick-prev pull-left'><img src="../../../images/arrow_prev.png" alt="" class="img_full"></button>`,
            nextArrow: `<button type='button' class='slick-next pull-right'><img src="../../../images/arrow_next.png" alt="" class="img_full"></button>`,
            responsive: [{
                breakpoint: 1172,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            }]
        })
    </script>
</body>

</html>