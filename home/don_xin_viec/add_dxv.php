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
    <!-- poup xác nhận -->
    <div class="popup hidden" id="save_xv">
        <div class="main_popup bg_white popup_500 br_20 animation_zoom_in">
            <div class="header_popup position_r btn_primary d_flex center_center pd_19_18 hd_popup">
                <h3 class="font_s20 line_h23 cl_white font_w700">Lưu đơn</h3>
                <div class="close_popup">
                    <img src="../../images/close_white.png" alt="">
                </div>
            </div>
            <div class="conatent_popup pd_tlr32_b24">
                <form onsubmit="return false" action="" method="POST" class="form_check">
                    <div class="form_group">
                        <span class="font_s16 line_h19 font_w500 cl_a4">Tiêu đề đơn xin việc<span class="cl_red">*</span></span>
                        <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                            <input type="text" id="email" name="email" autocomplete="off" class="rs_input ip_lhd pd_tb11 flex_1" placeholder="Nhập tiêu đề đơn xin việc" />
                        </div>
                    </div>

                    <span class="vd_po">Ví dụ: Đơn xin việc marketing, đơn xin việc bán hàng...</span>

                    <div class="form_submit d_flex center_center mt_24">
                        <button class="cancel font_s16 line_h19 font_w700 btn h_42 flex_im m_w140 center_center cl_primary bg_w bg_td bd_td br_5">Quay lại</button>
                        <button class="dong_y btn h_42 m_w140 br_5 font_s16 line_h19 font_w700 bg_td cl_white btn_primary ml_24">Tiếp tục</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end poup xác nhận -->

    <!-- poup xác nhận -->
    <div class="popup hidden" id="popup_thong_bao">
        <div class="main_popup bg_white popup_500 br_20 animation_zoom_in">
            <div class="header_popup position_r btn_primary d_flex center_center pd_19_18 hd_popup">
                <h3 class="font_s20 line_h23 cl_white font_w700">Thông báo</h3>
                <div class="close_popup">
                    <img src="../../../images/close_white.png" alt="" class="img_full">
                </div>
            </div>
            <div class="conatent_popup pd_24_32">
                <form onsubmit="return false" action="" method="POST">
                    <p class="font_s16 line_h19 font_w400 cl_a4 txt_center">Lần tạo mới <span class="font_w500">Đơn xin việc</span> cuối cùng của bạn chưa được lưu, bạn có muốn khôi phục lại không?</p>
                    <div class="form_submit d_flex center_center mt_24">
                        <button class="cancel font_s16 line_h19 font_w700 btn h_42 flex_im m_w120 center_center cl_73 bg_w bg_td bd_73 br_12">Bỏ qua</button>
                        <button class="btn h_42 m_w120 br_12 font_s16 line_h19 font_w700 bg_td cl_white btn_primary ml_36">Đồng ý</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end poup xác nhận -->

    <!-- poup xác nhận -->
    <div class="popup hidden" id="popup_ss">
        <div class="main_popup bg_white popup_500 br_20 animation_zoom_in">
            <div class="conatent_popup pd_t32_lrb24">
                <div class="d_flex center_center flex_column">
                    <div class="wh_42">
                        <img src="../../images/check_medium.png" alt="" class="img_full">
                    </div>
                    <h3 class="font_s20 line_h23 font_w700 cl_primary mt_16">Lưu đơn thành công!</h3>
                    <p class="font_s16 line_h19 font_w400 cl_55 mt_8 txt_center">Giờ đây bạn có thể dùng đơn này để ứng tuyển các công việc phù hợp! </p>
                    <div class="form_submit d_flex center_center mt_16">
                        <a href="/don-xin-viec/" class="btn flex_im center_center h_42 m_w140 br_5 font_s16 line_h19 font_w700 bg_td cl_white btn_primary">Đóng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end poup xác nhận -->

    <!-- poup xác nhận -->
    <div class="popup hidden" id="popup_waring">
        <div class="main_popup bg_white popup_500 br_20 animation_zoom_in">
            <div class="conatent_popup pd_t32_lrb24">
                <div class="d_flex center_center flex_column">
                    <div class="wh_42">
                        <img src="../../images/warning_medium.png" alt="" class="img_full">
                    </div>
                    <h3 class="font_s20 line_h23 font_w700 cl_primary mt_16">Cảnh báo!</h3>
                    <p class="font_s16 line_h19 font_w400 cl_55 mt_8 txt_center">Các thay đổi bạn đã thực hiện có thể không được lưu</p>
                    <div class="form_submit d_flex center_center mt_24">
                        <a href="/don-xin-viec/" class="btn flex_im center_center h_42 m_w140 br_5 font_s16 line_h19 font_w700 bg_td cl_white btn_primary">Rời trang web</a>
                        <button class="cancel font_s16 line_h19 font_w700 btn h_42 flex_im m_w140 center_center cl_primary bg_w bg_td bd_td br_5 ml_36">Bỏ qua</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end poup xác nhận -->


    <div id="root">
        <?php include("../../includes/after_header.php") ?>
        <div class="container mt_90 pd_b48">
            <div class="fuc_controll">
                <div class="align_c btn_prev is_disable">
                    <img src="../../images/arrow_prev.png" alt="">
                </div>
                <div class="ovex_x">
                    <div class="list_control_fuc m_wap">
                        <div class="item_control_fuc fuc_lange">
                            <span class="font_s16 line_h19 font_w500 cl_55">Ngôn ngữ</span>
                            <div class="list_c" id="pre_language">
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
                            <div class="list_color_cv mt_8_i mau_js cusr_p m_wap">
                                <span class="color_cv ac_color" data-color="326c73" style="color: #326c73"></span>
                                <span class="color_cv" data-color="1d5902" style="color: #1d5902"></span>
                                <span class="color_cv" data-color="731717" style="color: #731717"></span>
                            </div>
                        </div>

                        <div class="item_control_fuc">
                            <span class="font_s16 line_h19 font_w500 cl_55">Font chữ</span>
                            <div class="list_c w_138 cus_fuc_cv">
                                <select class="select_one" id="font-selector">
                                    <option value="roboto">Roboto</option>
                                    <option value="roboto">Arial</option>
                                    <option value="roboto">Times New Roman</option>
                                    <option value="roboto">Open sans</option>
                                </select>
                            </div>
                        </div>

                        <div class="item_control_fuc mw_124">
                            <span class="font_s16 line_h19 font_w500 cl_55">Cỡ chữ</span>
                            <div class="list_c cus_fuc_cv d_flex center_center co_chu co_js" id="font_size">
                                <span class="small_fuc " data-size="small">A</span>
                                <span class="medium_fuc act_ch" data-size="normal">A</span>
                                <span class="" data-size="large">A</span>
                            </div>
                        </div>

                        <div class="item_control_fuc mw_124">
                            <span class="font_s16 line_h19 font_w500 cl_55">Giãn dòng</span>
                            <div class="list_c cus_fuc_cv d_flex center_center co_chu gd_js">
                                <span class="small_fuc " data-line='small'>
                                    <svg width="6" height="12" viewBox="0 0 6 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.28284 0.717157C3.12663 0.560947 2.87337 0.560947 2.71716 0.717157L0.171573 3.26274C0.0153631 3.41895 0.0153631 3.67222 0.171573 3.82843C0.327783 3.98464 0.581048 3.98464 0.737258 3.82843L3 1.56569L5.26274 3.82843C5.41895 3.98464 5.67222 3.98464 5.82843 3.82843C5.98464 3.67222 5.98464 3.41895 5.82843 3.26274L3.28284 0.717157ZM3.4 6L3.4 1L2.6 1L2.6 6L3.4 6Z" fill="currentColor" />
                                        <path d="M2.71716 11.2828C2.87337 11.4391 3.12663 11.4391 3.28284 11.2828L5.82843 8.73726C5.98464 8.58105 5.98464 8.32778 5.82843 8.17157C5.67222 8.01536 5.41895 8.01536 5.26274 8.17157L3 10.4343L0.737258 8.17157C0.581049 8.01536 0.327783 8.01536 0.171573 8.17157C0.0153633 8.32778 0.0153633 8.58105 0.171573 8.73726L2.71716 11.2828ZM2.6 6L2.6 11L3.4 11L3.4 6L2.6 6Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <span class="medium_fuc act_ch" data-line='normal'>
                                    <svg width="8" height="16" viewBox="0 0 8 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.35355 0.648324C4.15829 0.453062 3.84171 0.453062 3.64645 0.648324L0.464466 3.8303C0.269204 4.02557 0.269204 4.34215 0.464466 4.53741C0.659728 4.73267 0.976311 4.73267 1.17157 4.53741L4 1.70898L6.82843 4.53741C7.02369 4.73267 7.34027 4.73267 7.53553 4.53741C7.7308 4.34215 7.7308 4.02557 7.53553 3.8303L4.35355 0.648324ZM4.5 8.00391L4.5 1.00188L3.5 1.00188L3.5 8.00391L4.5 8.00391Z" fill="currentColor" />
                                        <path d="M3.64645 15.3517C3.84171 15.5469 4.15829 15.5469 4.35355 15.3517L7.53553 12.1697C7.7308 11.9744 7.7308 11.6579 7.53553 11.4626C7.34027 11.2673 7.02369 11.2673 6.82843 11.4626L4 14.291L1.17157 11.4626C0.976311 11.2673 0.659728 11.2673 0.464466 11.4626C0.269204 11.6579 0.269204 11.9744 0.464466 12.1697L3.64645 15.3517ZM3.5 7.99609L3.5 14.9981L4.5 14.9981L4.5 7.99609L3.5 7.99609Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <span class="" data-line='large'>
                                    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.53033 0.470968C6.23744 0.178075 5.76256 0.178075 5.46967 0.470968L0.696699 5.24394C0.403806 5.53683 0.403806 6.01171 0.696699 6.3046C0.989592 6.59749 1.46447 6.59749 1.75736 6.3046L6 2.06196L10.2426 6.3046C10.5355 6.59749 11.0104 6.59749 11.3033 6.3046C11.5962 6.01171 11.5962 5.53683 11.3033 5.24394L6.53033 0.470968ZM6.75 10.0039L6.75 1.0013L5.25 1.0013L5.25 10.0039L6.75 10.0039Z" fill="currentColor" />
                                        <path d="M5.46967 19.529C5.76256 19.8219 6.23744 19.8219 6.53033 19.529L11.3033 14.7561C11.5962 14.4632 11.5962 13.9883 11.3033 13.6954C11.0104 13.4025 10.5355 13.4025 10.2426 13.6954L6 17.938L1.75736 13.6954C1.46447 13.4025 0.989593 13.4025 0.696699 13.6954C0.403806 13.9883 0.403806 14.4632 0.696699 14.7561L5.46967 19.529ZM5.25 9.99609L5.25 18.9987L6.75 18.9987L6.75 9.99609L5.25 9.99609Z" fill="currentColor" />
                                    </svg>
                                </span>
                            </div>
                        </div>

                        <div class="item_control_fuc doi_mau_cv mw_124">
                            <span class="font_s16 line_h19 font_w500 cl_55">Đổi mẫu đơn CV</span>
                            <div class="list_c flex_center cl_primary">
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24.1564 10.1914H12.7401C11.339 10.1914 10.2031 11.3273 10.2031 12.7285V24.1454C10.2031 25.5466 11.339 26.6825 12.7401 26.6825H24.1564C25.5575 26.6825 26.6933 25.5466 26.6933 24.1454V12.7285C26.6933 11.3273 25.5575 10.1914 24.1564 10.1914Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M5.11793 17.8036H3.84945C3.17661 17.8036 2.53133 17.5363 2.05556 17.0605C1.57979 16.5847 1.3125 15.9394 1.3125 15.2665V3.84959C1.3125 3.17671 1.57979 2.53139 2.05556 2.0556C2.53133 1.5798 3.17661 1.3125 3.84945 1.3125H15.2657C15.9386 1.3125 16.5839 1.5798 17.0596 2.0556C17.5354 2.53139 17.8027 3.17671 17.8027 3.84959V5.11814" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>

                        <div class="item_control_fuc save_xv mw_100px">
                            <span class="font_s16 line_h19 font_w500 cl_55">Lưu CV</span>
                            <div class="list_c flex_center">
                                <button class="btn flex_im center_center wh_28 br_50pt">
                                    <img src="../../images/sv_nofill.png" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="align_c btn_next">
                    <img src="../../images/arrow_next.png" alt="">
                </div>
            </div>
            <div class="cv_warp pd_lr68 mt_24">
                <!-- <span class="name_cv_box font_s16 line_h19 font_w400 txt_center cl_73 block title_cv_fuc" contenteditable="true">Chưa có tên</span> -->
                <div class="d_flex mt_24">
                    <div class="box_cv_flex">
                        <!-- <div class="render_cv">
                            <img src="../../images/mcv1.png" alt="" class="w_100">
                        </div> -->
                        <link rel="stylesheet" href="../../list_mau/mau_don_xin_viec/sinh-vien-moi-ra-truong/sinh-vien-moi-ra-truong-05/css/letter.css">
                        <link rel="stylesheet" href="../../list_mau/mau_don_xin_viec/sinh-vien-moi-ra-truong/sinh-vien-moi-ra-truong-05/css/lth.css?v=2">
                        <link rel="stylesheet" href="../../list_mau/mau_don_xin_viec/sinh-vien-moi-ra-truong/sinh-vien-moi-ra-truong-05/css/color/326c73.css" id="cv-color-css">
                        <link id="font_change" rel="stylesheet" href="../../list_mau/mau_don_xin_viec/sinh-vien-moi-ra-truong/sinh-vien-moi-ra-truong-05/font-size/normal.css">
                        <link id="font_spacing" rel="stylesheet" href="../../list_mau/mau_don_xin_viec/sinh-vien-moi-ra-truong/sinh-vien-moi-ra-truong-05/font-spacing/normal.css">
                        <link id="font_family" rel="stylesheet" href="../../list_mau/mau_don_xin_viec/sinh-vien-moi-ra-truong/sinh-vien-moi-ra-truong-05/font-spacing/roboto.css">

                        <? include("../../list_mau/mau_don_xin_viec/sinh-vien-moi-ra-truong/sinh-vien-moi-ra-truong-05/index.php") ?>
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
            <!-- render ds -->
            <div class="change_list mt_24 lr_68 d_none"></div>
            <!-- render ds -->
        </div>
        <?php include("../../includes/footer.php") ?>
    </div>

    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/select2.min.js"></script>
    <script src="https://timviec365.vn/cv365/js/donh.js?v=1"></script>
    <script src="../../js/js_t.js"></script>
    <script>
        $('.select_one').select2({
            width: '100%'
        })

        $('.save_xv').click(function() {
            let objectELemet = viewAndClosePopupUpdate('#save_xv', '.main_popup', '.close_popup', '.cancel', '.form_check');
            let {
                infor_menu,
                box_popup_infor_menu,
                clearAmintions
            } = objectELemet;
            let dong_y = infor_menu.querySelector('.dong_y');

            if (dong_y) {
                dong_y.onclick = () => {
                    clearAmintions();
                    viewAndClosePopupUpdate('#popup_ss', '.main_popup', '', '.cancel', '', false);
                }
            }
        })

        changeAjax({
            listElem: '.fuc_lange .list_c',
            classChange: 'active_lan',
            callBack: function(e, parent, className) {
                console.log(e)
            }
        })

        // màu sắc
        changeAjax({
            listElem: '.mau_js',
            classChange: 'ac_color',
            // call ajax
            callBack: function(e, parent, className) {
                var newcolor = $(e).attr('data-color');
                var oldlink = $('#cv-color-css').attr('href');
                var newlink = oldlink.slice(0, oldlink.lastIndexOf("/")) + '/' + newcolor + '.css';
                $('#cv-color-css').attr('href', newlink);
            }
        })

        // cỡ chữ
        changeAjax({
            listElem: '.co_js',
            classChange: 'act_ch',
            // call ajax
            callBack: function(e, parent, className) {
                var newSize = $(e).attr('data-size');
                var oldlink = $('#font_change').attr('href');
                var newlink = oldlink.slice(0, oldlink.lastIndexOf("/")) + '/' + newSize + '.css';
                $('#font_change').attr('href', newlink);
            }
        })

        // giãn dòng
        changeAjax({
            listElem: '.gd_js',
            classChange: 'act_ch',
            // call ajax
            callBack: function(e, parent, className) {
                var newLine = $(e).attr('data-line');
                var oldlink = $('#font_spacing').attr('href');
                var newlink = oldlink.slice(0, oldlink.lastIndexOf("/")) + '/' + newLine + '.css';
                $('#font_spacing').attr('href', newlink);
            }
        })

        $('.doi_mau_cv').click(() => {
            $.ajax({
                url: '../../ajax/ds_dx.php',
                method: 'POST',
                success: (data) => {
                    $('.change_list').empty()
                    $('.cv_warp').css('display', 'none')
                    $('.change_list').css('display', 'block');
                    $('.change_list').html(data)
                    $('.btn_huys').click(() => {
                        $('.change_list').css('display', 'none');
                        $('.cv_warp').css('display', 'block')
                    })
                }
            })
        })


        $("#font-selector").change(function() {

            var newLine = $(this).val();
            var oldlink = $('#font_family').attr('href');
            var newlink = oldlink.slice(0, oldlink.lastIndexOf("/")) + '/' + newLine + '.css';
            $('#font_family').attr('href', newlink);
        });
    </script>
</body>

</html>