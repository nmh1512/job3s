<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/select2.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/style_t.css">
    <title>Danh sách tin tuyển dụng</title>
</head>

<body>
    <!-- poup xác nhận -->
    <div class="popup hidden" id="del_new_td">
        <div class="main_popup bg_white popup_500 br_20 animation_zoom_in">
            <div class="header_popup position_r btn_primary d_flex center_center pd_19_18 hd_popup">
                <h3 class="font_s20 line_h23 cl_white font_w700">Xác nhận</h3>
                <div class="close_popup">
                    <img src="../../images/close_white.png" alt="">
                </div>
            </div>
            <div class="conatent_popup">
                <form onsubmit="return false" action="" method="POST">
                    <p class="font_s16 line_h19 font_w400 cl_a4 pd_48_24 txt_center">Bạn có đồng xóa hồ sơ ứng tuyển của<br><span class="font_w500">Nguyễn Thị Hoa không?</span></p>
                    <div class="form_submit d_flex center_center pd_24 pd_t0">
                        <button class="cancel font_s16 line_h19 font_w700 btn h_42 flex_im m_w140 center_center cl_primary bg_w bg_td bd_td br_12">Hủy</button>
                        <button class="btn h_42 m_w140 br_12 font_s16 line_h19 font_w700 bg_td cl_white btn_primary ml_68">Đồng ý</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end poup xác nhận -->

    <!-- poup đánh giá ứng viên-->
    <div class="popup hidden" id="danh_gia_uv">
        <div class="main_popup bg_white popup_500 br_20 animation_zoom_in drop_poup">
            <div class="header_popup position_r btn_primary d_flex center_center pd_19_18 hd_popup">
                <h3 class="font_s20 line_h23 cl_white font_w700">Đánh giá ứng viên</h3>
                <div class="close_popup">
                    <img src="../../images/close_white.png" alt="">
                </div>
            </div>
            <div class="conatent_popup pd_24 mt_16chil">
                <form onsubmit="return false" class="form_check" action="" method="POST">
                    <div class="form_group">
                        <span class="font_s16 line_h19 font_w500 cl_a4">Trạng thái</span>
                        <div class="d_flex align_c mt_5 w_100 br_5 custom_select_popup custom_select test">
                            <select name="" class="select_one" data-placeholder="Tất cả trạng thái" data-minimum-results-for-search="Infinity">
                                <option value=""></option>
                                <option value="0">Đang hiển thị</option>
                                <option value="1">Chưa hiển thị</option>
                            </select>
                        </div>
                    </div>
                    <div class="form_group">
                        <span class="font_s16 line_h19 font_w500 cl_a4 mt_16 block">Ghi chú<span class="cl_red">*</span></span>
                        <div class="d_flex align_c mt_8 bd_dc w_100 br_5">
                            <textarea name="title" id="" class="resert_txt w_100 h_100 pd_11_14 br_5 h_166" placeholder="Bạn có muốn ghi chú cho sự thay đổi trạng thái này không?"></textarea>
                        </div>
                    </div>
                    <div class="form_submit d_flex center_center mt_24">
                        <button class="cancel font_s16 line_h19 font_w700 btn h_42 flex_im m_w140 center_center cl_primary bg_w bg_td bd_td br_5">Hủy</button>
                        <button class="btn h_42 m_w140 br_5 font_s16 line_h19 font_w700 bg_td cl_white btn_primary ml_68">Cập nhật</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end poup đánh giá ứng viên-->

    <!-- poup đánh giá ứng viên-->
    <div class="popup hidden" id="ghi_chu_uv">
        <div class="main_popup bg_white popup_600 br_20 animation_zoom_in drop_poup">
            <div class="header_popup position_r btn_primary d_flex center_center pd_19_18 hd_popup">
                <h3 class="font_s20 line_h23 cl_white font_w700">Ghi chú</h3>
                <div class="close_popup">
                    <img src="../../images/close_white.png" alt="">
                </div>
            </div>
            <div class="conatent_popup pd_24">
                <form onsubmit="return false" class="form_check" action="" method="POST">
                    <div class="form_group">
                        <span class="font_s16 line_h19 font_w500 cl_a4 block">Ghi chú</span>
                        <div class="d_flex align_c mt_8 bd_dc w_100 br_5">
                            <textarea name="title" id="" class="resert_txt w_100 h_100 pd_11_14 br_5 h_166" placeholder="Bạn có muốn ghi chú cho sự thay đổi trạng thái này không?"></textarea>
                        </div>
                    </div>
                    <div class="form_submit d_flex center_center mt_24">
                        <button class="cancel font_s16 line_h19 font_w700 btn h_42 flex_im m_w140 center_center cl_primary bg_w bg_td bd_td br_5">Hủy</button>
                        <button class="btn h_42 m_w140 br_5 font_s16 line_h19 font_w700 bg_td cl_white btn_primary ml_68">Cập nhật</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end poup đánh giá ứng viên-->

    <div id="root">
        <?php include("../../includes/after_header.php"); ?>
        <div class="container bg_fa d_flex flex_end">
            <?php include("../../includes/slider_bar.php"); ?>
            <div class="content wbjsb mt_90 pd_48_24_91">
                <div class="box_item">
                    <h2 class="font_s24 line_h28 font_w700 cl_primary bd_l4 pd_l8">Thông tin điểm tuyển dụng</h2>
                    <div class="list_common mt_24">
                        <div class="row row_tq">
                            <?php
                            $arr = [
                                [
                                    'txt' => 'Số điểm miễn phí còn lại',
                                    'class' => 'cl_oran',
                                    'bg_icon' => 'bg_ffbc',
                                    'bg_box' => 'bg_BF5',
                                    'src' => '../../images/lua_stroke.png'
                                ],
                                [
                                    'txt' => 'Số điểm mua còn lại',
                                    'class' => 'cl_green',
                                    'bg_icon' => 'bg_ccffd',
                                    'bg_box' => 'bg_f5fff',
                                    'src' => '../../images/tui_green.png'
                                ],
                                [
                                    'txt' => 'Tổng số điểm còn lại',
                                    'class' => 'cl_33ff',
                                    'bg_icon' => 'bg_ccff',
                                    'bg_box' => 'bg_F5F5',
                                    'src' => '../../images/z_blue.png'
                                ]
                            ];
                            ?>
                            <!-- có thể thêm style inline -->
                            <?php foreach ($arr as $item) :
                                $ran = rand(10, 99);
                            ?>
                                <div class="col_3 item_common <?= $item['class'] . ' ' . $item['bg_box'] ?>">
                                    <div class="pd_r10">
                                        <h3 class="font_s30 line_h35 font_w700 currentColor"><?= $ran ?></h3>
                                        <p class="font_s16 line_h19 font_w500 mt_16"><?= $item['txt'] ?></p>
                                    </div>
                                    <div class="wh_60 d_flex center_center <?= $item['bg_icon'] ?> br_100">
                                        <img src="<?= $item['src'] ?>" alt="">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="mt_48">
                    <h2 class="font_s24 line_h28 font_w700 cl_primary bd_l4 pd_l8">Thông tin điểm tuyển dụng</h2>
                    <div class="bg_w drop_poup br_16 mt_24">
                        <div class="pd_t24_lr26_b25 d_flex flex_w ct_box_sear">
                            <div class="box_search loc_box_search flex_1 d_flex space_b">
                                <div class="searching d_flex align_c pd_lr15 bd_dc br_8 br_5 bg_white">
                                    <input type="text" class="rs_input ph_fz16 ip_lhd pd_tb11 flex_1 mr_10 font_s16 line_h19 font_w400 cl_73" placeholder="Tìm kiếm tin tuyển dụng">
                                    <div class="d_flex align_c wh_16 cursor_p">
                                        <img src="../../images/search_pri.png" alt="" class="img_full">
                                    </div>
                                </div>

                                <div class="d_flex flex_1 pd_l23_r55 loc_mr">
                                    <div class="d_flex align_c">
                                        <span class="font_s16 line_h19 font_w500 cl_55 white_s_nw">Từ ngày:</span>
                                        <div class="d_flex align_c br_5 ml_8 date_loc">
                                            <input type="date" name="start_date" class="custom_ipdate">
                                        </div>
                                    </div>

                                    <div class="d_flex align_c flex_1">
                                        <span class="font_s16 line_h19 font_w500 cl_55 white_s_nw">Đến ngày:</span>
                                        <div class="d_flex align_c br_5 ml_8 date_loc">
                                            <input type="date" name="start_date" class="custom_ipdate">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d_flex align_c btn_exe">
                                <button class="btn flex_im align_c br_8 bg096 btn_primary cl_white pd_t12_b11_lr24">
                                    <span class="font_s16 line_h19 font_w500 currentColor">Xuất excel</span>
                                </button>
                            </div>

                            <div class="d_flex align_c mt_5 br_5 custom_select mt_23 w_222">
                                <select name="" class="select_one" data-placeholder="Tất cả trạng thái hồ sơ" data-minimum-results-for-search="Infinity">
                                    <option value=""></option>
                                    <option value="0">Hà Nội</option>
                                    <option value="1">Hồ Chí Minh</option>
                                    <option value="3">Đà Nẵng</option>
                                    <option value="3">Bắc Ninh</option>
                                    <option value="3">Cà Mau</option>
                                </select>
                            </div>
                        </div>

                        <div class="main_table_list_all position_r mt_10">
                            <div class="box_main_table_list list_td tb_loc_diem">
                                <table class="table tb_diemloc">
                                    <thead class="">
                                        <tr>
                                            <th class="stt">STT</th>
                                            <th>Ngày lọc</th>
                                            <th>Thông tin chi tiết</th>
                                            <th>Thông tin liên hệ</th>
                                            <th>Trạng thái</th>
                                            <th>Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tr_wap ">
                                        <?php for ($i = 0; $i < 2; $i++) :
                                        ?>
                                            <tr class="tr" data-id="">
                                                <td><?= $i + 1 ?></td>
                                                <td>29/12/2020 10:10</td>
                                                <td>
                                                    <div class="d_flex">
                                                        <div class="wh_60 br_100 bd_dc mr_8">
                                                            <img src="../../images/ntd_1.png" alt="" class="img_full br_100">
                                                        </div>
                                                        <div class="d_flex align_s flex_column">
                                                            <h2 class="font_s16 line_h19 font_w500 cl_primary">Nguyễn Thị Lan Anh</h2>
                                                            <span class="mt_8 block font_s16 line_h19 font_w400">Nhân viên thiết kế</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="list_inforuv">
                                                        <div class="d_flex align_c">
                                                            <div class="d_flex align_c mr_8 wh_16">
                                                                <img src="../../images/email_green.png" alt="" class="img_full">
                                                            </div>
                                                            <span class="font_s16 line_h19 font_w400 cl_55">nguyenthilan@gmail.com</span>
                                                        </div>

                                                        <div class="d_flex align_c">
                                                            <div class="d_flex align_c mr_8 wh_16">
                                                                <img src="../../images/phone_blue.png" alt="" class="img_full">
                                                            </div>
                                                            <span class="font_s16 line_h19 font_w400 cl_55">0987654341</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="bg_kv font_s14 line_h16 font_w400 cl_55 pd_5_19 br_100">Hà Nội</span>
                                                </td>
                                                <td>
                                                    <div class="d_flex flex_center cursor_p position_r hove_tc" data-tab="0">
                                                        <div class="center_center wh_26 br_100 d_flex bg_kv ">
                                                            <img src="../../images/3_dots_pri.png" alt="">
                                                        </div>

                                                        <div class="popup_more">
                                                            <div class="d_flex align_c">
                                                                <div class="mr_8 d_flex align_c">
                                                                    <img src="../../images/upload_fill_pri.png" alt="">
                                                                </div>
                                                                <span class="font_s16 line_h19 font_w500 cl_primary">Cập nhật trạng thái CV</span>
                                                            </div>

                                                            <a href="/tin-tuyen-dung/chinh-sua-dang-tin-tuyen-dung.html" class="d_flex align_c">
                                                                <div class="mr_8 d_flex align_c">
                                                                    <img src="../../images/edit_icon_pri.png" alt="">
                                                                </div>
                                                                <span class="font_s16 line_h19 font_w500 cl_primary">Ghi chú</span>
                                                            </a>

                                                            <div class="d_flex align_c">
                                                                <div class="mr_8 d_flex align_c">
                                                                    <img src="../../images/dow_pri.png" alt="">
                                                                </div>
                                                                <span class="font_s16 line_h19 font_w500 cl_primary">Tải CV</span>
                                                            </div>

                                                            <div class="d_flex align_c del_btn" data-effect="mfp-zoom-in">
                                                                <div class="mr_8 d_flex align_c">
                                                                    <img src="../../images/del_pri.png" alt="">
                                                                </div>
                                                                <span class="font_s16 line_h19 font_w500 cl_primary">Xóa ứng viên</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endfor; ?>
                                    </tbody>
                                </table>
                                <!-- no result -->
                                <div class="no_result bg_w br_10" style="display: none;">
                                    <div>
                                        <img src="../../images/no_result.png" alt="">
                                    </div>
                                    <span class="font_s16 line_h19 font_w400 cl_oran block mt_16">Bạn chưa có ứng viên nào trong danh sách!</span>
                                    <a href="/tin-tuyen-dung/dang-tin-tuyen-dung.html" class="btn mt_24 btn_hover_primary flex_im align_c br_100 btn_primary cl_white pd_t12_b11_lr24">
                                        <div class="mr_6 d_flex align_c">
                                            <img src="../../images/add_pri.png" alt="">
                                        </div>
                                        <span class="font_s16 line_h19 font_w500 currentColor">Tìm ứng viên ngay</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paging mt_24">
                        <div class="paging_limit h_42">
                            <select class="resert_select" id="">
                                <option value="10">Hiển thị 10 bản ghi</option>
                                <option value="20">Hiển thị 20 bản ghi</option>
                            </select>
                        </div>
                        <div class="paging_total">
                            <span class="font_s16 line_h19 font_w400 cl_55">Tổng số: <span class="font_w500">10 / 100 Tin tuyển dụng</span></span>
                        </div>
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
    </div>
    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/select2.min.js"></script>
    <script src="../../js/js_t.js"></script>
    <script>
        $('.select_one').select2({
            width: '100%',
        })


        $('.del_btn').each((i, elem) => {
            $(elem).click((event) => {
                event.preventDefault();
                let objectELemet = viewAndClosePopupUpdate('#del_new_td', '.main_popup', '.close_popup', '.cancel', '.form_check')
                console.log(objectELemet);
            })
        })

        $('.btn_loctd').click(() => {
            let objectELemet = viewAndClosePopupUpdate('#loc_new_td', '.main_popup', '.close_popup', '.cancel', '.form_check')
        })

        $('.hove_tc').each((i, elem) => {
            $(elem).click(() => {
                moreShow (elem);
            })
        })
    </script>
</body>

</html>