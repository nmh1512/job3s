<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/select2.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/style_t.css">
    <title>Danh sách mẫu thư xin việc đẹp nhất hiện nay</title>
</head>

<body class="bg_f5">
    <!-- poup ứng tuyển-->
    <div class="popup hidden" id="popup_viewcv">
        <div class="main_popup bg_white position_r br_20 animation_zoom_in drop_poup wh_90pt pd_tbl36_r24 d_flex">
            <div class="poup_left scroll_y">
                <div class="list_imgcv">
                    <img src="../../images/mcv1.png" alt="">
                    <img src="../../images/mcv2.png" alt="">
                </div>
            </div>
            <div class="poup_right">
                <form action="" method="post" class="form_check">
                    <h2 class="font_s24 line_h28 font_w500 cl_primary">Nhân viên bảo hiểm</h2>
                    <div class="mt_14 chil_24">
                        <div class="cv-group">
                            <span class="font_s18 line_h22 font_w500 cl_a4">Ngôn ngữ</span>
                            <div class="mt_16 cv_select">
                                <select name="" id="" class="select_one">
                                    <option value="">Tiếng Việt</option>
                                    <option value="">Tiếng Việt2</option>
                                    <option value="">Tiếng Việt3</option>
                                    <option value="">Tiếng Việt4</option>
                                </select>
                            </div>
                        </div>

                        <div class="cv-group">
                            <span class="font_s18 line_h22 font_w500 cl_a4">Ngành nghề</span>
                            <div class="mt_16 cv_select">
                                <select name="" id="" class="select_one">
                                    <option value="">Nhân viên bảo hiểm</option>
                                </select>
                            </div>
                        </div>

                        <div class="cv-group">
                            <span class="font_s18 line_h22 font_w500 cl_a4">Font chữ</span>
                            <div class="mt_16 cv_select">
                                <select name="" id="" class="select_one">
                                    <option value="">Roboto</option>
                                </select>
                            </div>
                        </div>

                        <div class="cv-group">
                            <span class="font_s18 line_h22 font_w500 cl_a4">Màu sắc</span>
                            <div class="list_color_cv mt_16_i">
                                <span class="color_cv" style="color: #FF823C"></span>
                                <span class="color_cv" style="color: #40BA77"></span>
                                <span class="color_cv" style="color: #5D5FEF"></span>
                            </div>
                        </div>


                        <div class="cv-submit mt_24">
                            <div class="mt_16chil">
                                <a href="/tin-tuyen-dung/dang-tin-tuyen-dung.html" class="btn btn_hover_primary flex_im center_center h_42 br_5 w_100 btn_primary cl_white pd_t12_b11_lr24">
                                    <div class="mr_6 d_flex align_c">
                                        <img src="../../images/edit_white.png" alt="">
                                    </div>
                                    <span class="font_s16 line_h19 font_w500 currentColor">Dùng mẫu này</span>
                                </a>


                                <button type="button" class="cancel btn td_btn btn_loctd flex_im center_center h_42 cl_primary bg_w bd_td br_5 w_100 pd_t12_b11_lr24">
                                    <span class="font_s16 line_h19 font_w500 currentColor">Đóng lại</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="close_popup close_ppcv">
                <img src="../../images/close_red_nobd.png" alt="">
            </div>
        </div>
    </div>
    <!-- end poup lọc-->

    <div id="root">
        <?php include("../../includes/after_header.php") ?>
        <div class="container mt_90 pd_b48">
            <div class="banner_cv h_400 bg_cv">
                <div class="content_banner wf_tinhthanh">
                    <div class="heading_cv">
                        <h1 class="font_s28 line_h33 font_w700 cl_primary">Tạo CV hay nhận ngay việc làm</h1>
                        <p class="font_16 line_h19 font_w400 cl_55 mt_12">1000+ mẫu CV miễn phí đa dạng ngành nghề chỉ có tại Job3S</p>
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

                    <div class="mt_32 d_flex">
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
                    <img src="../../images/banner_cv.png" alt="" />
                </div>
            </div>
            <div class="cv_warp d_flex pd_lr68 mt_24">
                <div class="cv_left">
                    <div class="search_box drop_sd bg_w br_10 pd_32_24">
                        <h2 class="font_s18 line_h22 font_w500 cl_a4">Tìm mẫu thư phù hợp với bạn</h2>
                        <form action="" method="post" class="form_cv">
                            <div class="cv-group">
                                <span class="font_s18 line_h22 font_w500 cl_a4">Ngành nghề</span>
                                <div class="mt_16 cv_select">
                                    <select name="" id="" class="select_one">
                                        <option value="">Nhân viên bảo hiểm</option>
                                    </select>
                                </div>
                            </div>

                            <div class="cv-group">
                                <span class="font_s18 line_h22 font_w500 cl_a4">Phong cách</span>
                                <div class="mt_16 cv_select">
                                    <select name="" id="" class="select_one">
                                        <option value="">Nhân viên bảo hiểm</option>
                                    </select>
                                </div>
                            </div>

                            <div class="cv-group">
                                <span class="font_s18 line_h22 font_w500 cl_a4">Màu sắc</span>
                                <div class="mt_16 cv_select">
                                    <select name="" id="" class="select_one">
                                        <option value="">Nhân viên bảo hiểm</option>
                                    </select>
                                </div>
                            </div>

                            <div class="cv-group">
                                <span class="font_s18 line_h22 font_w500 cl_a4">Sắp xếp theo</span>
                                <div class="mt_16 d_flex">
                                    <div class="d_flex space_b w_100">
                                        <div class="d_flex align_c">
                                            <input type="checkbox" class="wh23 mr_12">
                                            <span class="font_s14 line_h19 font_w400 cl_37 pd_t1 el1">Mới nhất</span>
                                        </div>
                                        <span class="font_s12 line_h16 font_w400 d_flex center_center reslt_sapxep fshick0">235</span>
                                    </div>
                                </div>
                            </div>


                            <div class="cv-submit mt_24">
                                <button class="btn btn_hover_primary flex_im center_center w_100 br_10 btn_primary cl_white pd_t12_b11_lr24">
                                    <span class="font_s16 line_h14 font_w500 currentColor">Tìm thư ngay</span>
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="cv_hot_job drop_sd bg_w br_10 pd_32_24 mt_24 pd_b24">
                        <h2 class="font_s18 line_h22 font_w500 cl_primary">Mẫu CV hot theo ngành nghề</h2>
                        <div class="list_job mt_17">
                            <div class="job_item cl_73">
                                <a class="font_s14 line_h16 font_w400 currentColor">Bảo hiểm</a>
                            </div>

                            <div class="job_item cl_73">
                                <a class="font_s14 line_h16 font_w400 currentColor">Bất động sản</a>
                            </div>

                            <div class="job_item cl_73">
                                <a class="font_s14 line_h16 font_w400 currentColor">Hành chính nhân sự</a>
                            </div>

                            <div class="job_item cl_73">
                                <a class="font_s14 line_h16 font_w400 currentColor">IT</a>
                            </div>

                            <div class="job_item cl_73">
                                <a class="font_s14 line_h16 font_w400 currentColor">Giáo viên</a>
                            </div>

                            <div class="job_item cl_73">
                                <a class="font_s14 line_h16 font_w400 currentColor">Thư ký trợ lý</a>
                            </div>
                        </div>
                        <div class="more_cv mt_8 txt_center">
                            <span class="font_s14 line_h14 font_w500 cl_primary cursor_p">Xem thêm</span>
                        </div>
                    </div>

                    <!-- <div class="download_app drop_sd br_10 pd_16 mt_24 bg_fa pd">
                        <div class="download_app_list d_flex">
                            <div class="app_infor pdr_15">
                                <h2 class="font_s16 line_h19 font_w500 cl_primary">Viết CV ngay</h2>
                                <p class="font_s16 line_h19 font_w500 cl_primary mt_8">Nhận việc liền tay!!!</p>
                                <p class="font_s12 line_h14 font_w400 cl_55 mt_12">Tải ngay app CV365 để sử dụng những mẫu CV đẹp nhất của riêng bạn</p>
                                <div class="mt_12 d_flex center_center">
                                    <img src="../../images/qr_job3s_small.png" alt="">
                                </div>
                            </div>
                            <div class="app_img">
                                <img src="../../images/ip_13.png" alt="">
                            </div>
                        </div>
                        <div class="mt_8">
                            <button class="btn btn_hover_primary flex_im align_c br_100 pd_lr16 shdown_btn btn_primary cl_white pd_t12_b11_lr24">
                                <div class="mr_6 d_flex align_c">
                                    <img src="../../images/down_icon_white.png" alt="">
                                </div>
                                <span class="font_s14 line_h16 font_w500">Tải App tìm việc Job3s</span>
                            </button>
                        </div>
                    </div> -->
                </div>
                <div class="cv_right">
                    <h2 class="font_s24 line_h28 font_w500 cl_primary txt_center">Danh sách mẫu thư xin việc đẹp nhất hiện nay</h2>
                    <div class="slider_list_cv mt_24 ">
                        <div class="row row_cv">
                            <?php for ($i = 0; $i < 12; $i++) : ?>
                                <div class="item_cv col_3 hover_itemcv">
                                    <div class="cv_img">
                                        <img src="../../images/img_cvtes.png" alt="" class="img_full br_cv">
                                    </div>
                                    <div class="cv_content">
                                        <div class="career_list">
                                            <span>Bảo hiểm</span>
                                            <span>Sáng tạo</span>
                                        </div>
                                        <span class="name_cv mt_12">Nhân viên bảo hiểm</span>
                                        <div class="list_color_cv">
                                            <span class="color_cv" style="color: #FF823C"></span>
                                            <span class="color_cv" style="color: #40BA77"></span>
                                            <span class="color_cv" style="color: #5D5FEF"></span>
                                        </div>
                                    </div>

                                    <div class="overlay_cv">
                                        <div class="child_17">
                                            <button class="btn td_btn flex_im center_center cl_oran bg_w bd_ff99 br_100 btn_viewcv">
                                                <div class="mr_6 d_flex align_c">
                                                    <img src="../../images/eye_oran.png" alt="">
                                                </div>
                                                <span class="font_s16 line_h14 font_w500 currentColor">Xem trước</span>
                                            </button>

                                            <a href="/mau-cv/dung-cv.html" class="btn btn_hover_primary flex_im center_center br_100 btn_primary cl_white">
                                                <div class="mr_6 d_flex align_c">
                                                    <img src="../../images/edit_white.png" alt="">
                                                </div>
                                                <span class="font_s16 line_h14 font_w500 currentColor">Dùng mẫu này</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
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
        </div>
        <?php include("../../includes/footer.php") ?>
    </div>

    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/select2.min.js"></script>
    <script src="../../js/js_t.js"></script>
    <script>
        $('.select_one').select2({
            width: '100%'
        })

        $('.btn_viewcv').each(function() {
            $(this).click(function() {
                let objectELemet = viewAndClosePopupUpdate('#popup_viewcv', '.main_popup', '.close_popup', '.cancel', '.form_check')
            })
        })
    </script>
</body>

</html>