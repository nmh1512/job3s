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
            <div class="fuc_controll">
                <div class="list_control_fuc">
                    <div class="item_control_fuc fuc_lange">
                        <span class="font_s16 line_h19 font_w500 cl_55">Ngôn ngữ</span>
                        <div class="list_c">
                            <div class="item_c active_lan">
                                <img src="../../images/vn_qk.png" alt="">
                            </div>

                            <div class="item_c">
                                <img src="../../images/vn_qk.png" alt="">
                            </div>

                            <div class="item_c">
                                <img src="../../images/vn_qk.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="item_control_fuc">
                        <span class="font_s16 line_h19 font_w500 cl_55">Màu sắc</span>
                        <div class="list_color_cv mt_8_i">
                            <span class="color_cv" style="color: #FF823C"></span>
                            <span class="color_cv" style="color: #40BA77"></span>
                            <span class="color_cv" style="color: #5D5FEF"></span>
                            <span class="color_cv" style="color: #5D5FEF"></span>
                            <span class="color_cv" style="color: #5D5FEF"></span>
                        </div>
                    </div>

                    <div class="item_control_fuc">
                        <span class="font_s16 line_h19 font_w500 cl_55">Font chữ</span>
                        <div class="list_c w_138 cus_fuc_cv">
                            <select class="select_one">
                                <option value="">Roboto</option>
                            </select>
                        </div>
                    </div>

                    <div class="item_control_fuc">
                        <span class="font_s16 line_h19 font_w500 cl_55">Cỡ chữ</span>
                        <div class="list_c w_138 cus_fuc_cv d_flex center_center co_chu">
                            <span class="small_fuc act_ch">A</span>
                            <span class="medium_fuc">A</span>
                            <span class="">A</span>
                        </div>
                    </div>

                    <div class="item_control_fuc">
                        <span class="font_s16 line_h19 font_w500 cl_55">Giãn dòng</span>
                        <div class="list_c w_138 cus_fuc_cv d_flex center_center co_chu">
                            <span class="small_fuc act_ch">
                                <svg width="6" height="12" viewBox="0 0 6 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.28284 0.717157C3.12663 0.560947 2.87337 0.560947 2.71716 0.717157L0.171573 3.26274C0.0153631 3.41895 0.0153631 3.67222 0.171573 3.82843C0.327783 3.98464 0.581048 3.98464 0.737258 3.82843L3 1.56569L5.26274 3.82843C5.41895 3.98464 5.67222 3.98464 5.82843 3.82843C5.98464 3.67222 5.98464 3.41895 5.82843 3.26274L3.28284 0.717157ZM3.4 6L3.4 1L2.6 1L2.6 6L3.4 6Z" fill="currentColor" />
                                    <path d="M2.71716 11.2828C2.87337 11.4391 3.12663 11.4391 3.28284 11.2828L5.82843 8.73726C5.98464 8.58105 5.98464 8.32778 5.82843 8.17157C5.67222 8.01536 5.41895 8.01536 5.26274 8.17157L3 10.4343L0.737258 8.17157C0.581049 8.01536 0.327783 8.01536 0.171573 8.17157C0.0153633 8.32778 0.0153633 8.58105 0.171573 8.73726L2.71716 11.2828ZM2.6 6L2.6 11L3.4 11L3.4 6L2.6 6Z" fill="currentColor" />
                                </svg>
                            </span>
                            <span class="medium_fuc">
                                <svg width="8" height="16" viewBox="0 0 8 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.35355 0.648324C4.15829 0.453062 3.84171 0.453062 3.64645 0.648324L0.464466 3.8303C0.269204 4.02557 0.269204 4.34215 0.464466 4.53741C0.659728 4.73267 0.976311 4.73267 1.17157 4.53741L4 1.70898L6.82843 4.53741C7.02369 4.73267 7.34027 4.73267 7.53553 4.53741C7.7308 4.34215 7.7308 4.02557 7.53553 3.8303L4.35355 0.648324ZM4.5 8.00391L4.5 1.00188L3.5 1.00188L3.5 8.00391L4.5 8.00391Z" fill="currentColor" />
                                    <path d="M3.64645 15.3517C3.84171 15.5469 4.15829 15.5469 4.35355 15.3517L7.53553 12.1697C7.7308 11.9744 7.7308 11.6579 7.53553 11.4626C7.34027 11.2673 7.02369 11.2673 6.82843 11.4626L4 14.291L1.17157 11.4626C0.976311 11.2673 0.659728 11.2673 0.464466 11.4626C0.269204 11.6579 0.269204 11.9744 0.464466 12.1697L3.64645 15.3517ZM3.5 7.99609L3.5 14.9981L4.5 14.9981L4.5 7.99609L3.5 7.99609Z" fill="currentColor" />
                                </svg>
                            </span>
                            <span class="">
                                <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.53033 0.470968C6.23744 0.178075 5.76256 0.178075 5.46967 0.470968L0.696699 5.24394C0.403806 5.53683 0.403806 6.01171 0.696699 6.3046C0.989592 6.59749 1.46447 6.59749 1.75736 6.3046L6 2.06196L10.2426 6.3046C10.5355 6.59749 11.0104 6.59749 11.3033 6.3046C11.5962 6.01171 11.5962 5.53683 11.3033 5.24394L6.53033 0.470968ZM6.75 10.0039L6.75 1.0013L5.25 1.0013L5.25 10.0039L6.75 10.0039Z" fill="currentColor" />
                                    <path d="M5.46967 19.529C5.76256 19.8219 6.23744 19.8219 6.53033 19.529L11.3033 14.7561C11.5962 14.4632 11.5962 13.9883 11.3033 13.6954C11.0104 13.4025 10.5355 13.4025 10.2426 13.6954L6 17.938L1.75736 13.6954C1.46447 13.4025 0.989593 13.4025 0.696699 13.6954C0.403806 13.9883 0.403806 14.4632 0.696699 14.7561L5.46967 19.529ZM5.25 9.99609L5.25 18.9987L6.75 18.9987L6.75 9.99609L5.25 9.99609Z" fill="currentColor" />
                                </svg>
                            </span>
                        </div>
                    </div>

                    <div class="item_control_fuc">
                        <span class="font_s16 line_h19 font_w500 cl_55">Thêm mục</span>
                        <div class="list_c w_138 flex_center">
                            <button class="btn btn_primary flex_im center_center wh_28 br_50pt">
                                <img src="../../images/add_pri.png" alt="">
                            </button>
                        </div>
                    </div>

                    <div class="item_control_fuc">
                        <span class="font_s16 line_h19 font_w500 cl_55">Đổi mẫu CV</span>
                        <div class="list_c w_138 flex_center">
                            <button class="btn flex_im center_center wh_28 br_50pt">
                                <img src="../../images/change_icon.png" alt="" class="img_full">
                            </button>
                        </div>
                    </div>

                    <div class="item_control_fuc">
                        <span class="font_s16 line_h19 font_w500 cl_55">Lưu CV</span>
                        <div class="list_c w_138 flex_center">
                            <button class="btn flex_im center_center wh_28 br_50pt">
                                <img src="../../images/sv_nofill.png" alt="">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cv_warp pd_lr68 mt_24">
                <span class="name_cv_box font_s16 line_h19 font_w400 txt_center cl_73 block title_cv_fuc" contenteditable="true">Chưa có tên</span>
                <div class="d_flex mt_24">
                    <div class="box_cv_flex">
                        <div class="render_cv">
                            <img src="../../images/mcv1.png" alt="" class="w_100">
                        </div>
                    </div>
                    <div class="box_cv_right flex_1 ml_36">
                        <!-- hướng đẫn -->
                        <div class="box_cv_fuc d_none">
                            <div class="header_cv_fuc pd_15 bd_bds_dc">
                                <h3 class="font_s20 line_h20 font_w700 cl_primary txt_center">Hướng dẫn</h3>
                            </div>
                            <div class="cn_fuc pd_15">
                                <ol class="sz_fuc ls_num">
                                    <li>Điền đầy đủ các thông tin hiển thị trong CV</li>
                                    <li>Bấm nút <span class="font_w700 cl_a4">Lưu CV</span></li>
                                    <li>Xem & Tải CV về máy</li>
                                </ol>
                                <span class="font_s16 line_h20 font_w400 cl_a4 block mt_12">Một số lưu ý chung</span>
                                <ul class="sz_fuc cl_a4 mt_8 pd_l12">
                                    <li class="cs_style_dots">Sắp xếp thời gian theo thứ tự mới -> cũ.</li>
                                    <li class="cs_style_dots">Ưu tiên những gì quan trọng, có liên quan đến vị trí ứng tuyển lên đầu </li>
                                    <li class="cs_style_dots">Ngày tháng nên dùng: 01/2016, 01-2016 hoặc Jan 2016</li>
                                </ul>
                            </div>
                            <div class="lh_fuc d_flex flex_column">
                                <span class="font_s16 line_h20 font_w400 cl_a4">Mọi chi tiết vui lòng liên hệ:</span>
                                <span class="font_s16 line_h20 font_w400 cl_a4">Email: Timviec365net.@gmail.com</span>
                            </div>
                        </div>
                        <!-- hướng dẫn -->

                        <!-- thông tn các nhân -->
                        <div class="box_cv_fuc d_none">
                            <div class="header_cv_fuc pd_15 bd_bds_dc">
                                <h3 class="font_s20 line_h20 font_w700 cl_primary txt_center">Thông tin cá nhân</h3>
                            </div>
                            <div class="cn_fuc pd_15">
                                <ul class="sz_fuc cl_a4 mt_8">
                                    <li class="cs_style_dots">Viết đầy đủ họ tên của bạn.</li>
                                    <li class="cs_style_dots">Email cần nghiêm túc nên chứa họ tên bạn.</li>
                                    <li class="cs_style_dots">Chèn ảnh đại diện:</li>
                                    <li class="cs_style_dots">Nên: chèn ảnh phù hợp với vị trí ứng tuyển,nhìn thấy khuôn mặt trực diện.</li>
                                    <li class="cs_style_dots">Không nên: ảnh chỉ nhìn thấy một phần khuôn mặt hoặc quay lưng về phía trước.</li>
                                    <li class="cs_style_dots">Nếu bạn ứng tuyển cho một số công ty trong nước hoặc các công ty không phải là công ty nước ngoài liên quan đến các nước như Mỹ, Anh bạn cỏ thể thêm một số thông tin cá nhân khác: Ngày sinh, giới tính, tình trạng hôn nhân.</li>
                                </ul>
                            </div>
                            <div class="lh_fuc d_flex flex_column">
                                <span class="font_s16 line_h20 font_w400 cl_a4">Mọi chi tiết vui lòng liên hệ:</span>
                                <span class="font_s16 line_h20 font_w400 cl_a4">Email: Timviec365net.@gmail.com</span>
                            </div>
                        </div>
                        <!-- thông tin cá nhân -->


                        <!-- Nghề nghiệp -->
                        <div class="box_cv_fuc">
                            <div class="header_cv_fuc pd_15 bd_bds_dc">
                                <h3 class="font_s20 line_h20 font_w700 cl_primary txt_center">Mục tiêu nghề nghiệp</h3>
                            </div>
                            <div class="cn_fuc pd_15">
                                <span class="font_s16 line_h20 font_w400 cl_a4 block font_w500 mt_12">Nên:</span>
                                <ul class="sz_fuc cl_a4 mt_8 pd_l12">
                                    <li class="cs_style_dots">Vị trí mong muốn ứng tuyển,có thể đề cập đến công ty ứng tuyển.</li>
                                    <li class="cs_style_dots">Thể hiện kỹ năng, kiến thức chuyên môn bạn có thể áp dụng vào vị trí công việc.</li>
                                    <li class="cs_style_dots">Có thể phân ra thành mục tiêu ngắn hạn như thành thạo công việc trong vòng…tháng và mục tiêu dài hạn như cơ hội thăng tiến đến một vị trí nào đó.</li>
                                    <li class="cs_style_dots">Mục tiêu hướng đến lợi ích công ty như tăng doanh số, đẩy mạnh brand, mở rộng tập khách hàng…</li>
                                </ul>
                                <span class="font_s16 line_h20 font_w400 cl_a4 block font_w500 mt_12">Không nên:</span>
                                <ul class="sz_fuc cl_a4 mt_8 pd_l12">
                                    <li class="cs_style_dots">Viết mục tiêu chung chung như làm việc trong một môi trường năng động, có thể học hỏi được nhiều… hoặc tìm kiếm vị trí phù hợp với bản thân để phát huy hết tất cả những kinh nghiệm, kĩ năng của bản thân…</li>
                                </ul>
                            </div>
                            <div class="lh_fuc d_flex flex_column">
                                <span class="font_s16 line_h20 font_w400 cl_a4">Mọi chi tiết vui lòng liên hệ:</span>
                                <span class="font_s16 line_h20 font_w400 cl_a4">Email: Timviec365net.@gmail.com</span>
                            </div>
                        </div>
                        <!-- Nghề nghiệp -->

                        <div class="down_app btn_primary br_16 mt_24 d_flex">
                            <div class="app_left">
                                <h2 class="font_s24 line_h28 font_w500 cl_white">Tìm <span class="cl_oran">“ghế”</span> trong mơ Đập tan nỗi sợ</h2>
                                <span class="font_s16 line_h19 font_w400 cl_white block mt_12">30000+ Việc làm đang tuyển dụng</span>
                                <div class="mt_24 d_flex align_c">
                                    <button class="btn td_btn bg_ff99 flex_im m_w142 pd_lr24 center_center cl_white bg_td br_100">
                                        <span class="font_s16 line_h19 font_w500 currentColor">Tìm việc ngay</span>
                                    </button>
                                </div>
                            </div>
                            <div class="app_right">
                                <img src="../../images/iphone_fuc.png" alt="">
                            </div>
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

        changeAjax({
            listElem: '.fuc_lange .list_c',
            classChange: 'active_lan',
            // callBack: function (e, parent, className) {
            //     console.log()
            // }
        })
    </script>
</body>

</html>