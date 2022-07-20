<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/select2.min.css">
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
                    <p class="font_s16 line_h19 font_w400 cl_a4 pd_48_24 txt_center">Bạn có đồng xóa tin tuyển dụng<br><span class="font_w500">Tuyển nhân viên kinh doanh không yêu cầu kinh nghiệm?</span></p>
                    <div class="form_submit d_flex center_center pd_24 pd_t0">
                        <button class="cancel font_s16 line_h19 font_w700 btn h_42 flex_im m_w140 center_center cl_primary bg_w bg_td bd_td br_12">Hủy</button>
                        <button class="btn h_42 m_w140 br_12 font_s16 line_h19 font_w700 bg_td cl_white btn_primary ml_68">Đồng ý</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end poup xác nhận -->

    <!-- ssusss -->
    <div class="popup hidden" id="suss_ws_td">
        <div class="main_popup bg_white fit_content br_16 animation_zoom_in d_flex pd_17_23 align_c">
            <div class="d_flex align_c mr_9">
                <img src="../../images/check_susses.png" alt="">
            </div>
            <span class="font_s16 line_h19 font_w500 cl_green txt_js">Ngừng hiển thị tin tuyển dụng thành công!</span>
        </div>
    </div>

    <!-- poup lọc-->
    <div class="popup hidden" id="loc_new_td">
        <div class="main_popup bg_white popup_500 br_20 animation_zoom_in drop_poup">
            <div class="header_popup position_r d_flex align_c flex_s pd_19_18 pd_lr16 hd_popup bd_bdc">
                <h3 class="font_s20 line_h23 cl_primary font_w700">Bộ lọc</h3>
                <div class="close_popup">
                    <img src="../../images/close_red_nobd.png" alt="">
                </div>
            </div>
            <div class="conatent_popup pd_tlr16_b24 mt_16chil">
                <form onsubmit="return false" class="form_check" action="" method="POST">
                    <div class="form_group">
                        <span class="font_s16 line_h19 font_w500 cl_a4">Trạng thái duyệt tin</span>
                        <div class="d_flex align_c mt_5 w_100 br_5 custom_select_popup custom_select test">
                            <select name="" class="select_one" data-placeholder="Tất cả trạng thái" data-minimum-results-for-search="Infinity">
                                <option value=""></option>
                                <option value="0">Đang hiển thị</option>
                                <option value="1">Chưa hiển thị</option>
                            </select>
                        </div>
                    </div>

                    <div class="form_group">
                        <span class="font_s16 line_h19 font_w500 cl_a4">Trạng thái tin đăng</span>
                        <div class="d_flex align_c mt_5 w_100 br_5 custom_select_popup custom_select">
                            <select name="" class="select_one" data-placeholder="Tất cả trạng thái" data-minimum-results-for-search="Infinity">
                                <option value=""></option>
                                <option value="0">Đã duyệt</option>
                                <option value="1">Chờ duyệt</option>
                                <option value="2">Từ chối</option>
                            </select>
                        </div>
                    </div>

                    <div class="form_group">
                        <span class="font_s16 line_h19 font_w500 cl_a4">Ngày cập nhật</span>
                        <div class="d_flex w_100 mt_5">
                            <div class="d_flex align_c br_5 w_50pt">
                                <input type="date" name="start_date" class="custom_ipdate">
                            </div>

                            <div class="d_flex align_c br_5 w_50pt ml_20">
                                <input type="date" name="end_date" class="custom_ipdate">
                            </div>
                        </div>
                    </div>
                    <div class="form_submit d_flex center_center mt_24">
                        <button class="cancel font_s16 line_h19 font_w700 btn h_42 flex_im m_w140 center_center cl_primary bg_w bg_td bd_td br_12">Hủy lọc</button>
                        <button class="btn h_42 m_w140 br_12 font_s16 line_h19 font_w700 bg_td cl_white btn_primary ml_68">Áp dụng</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end poup lọc-->

    <div id="root">
        <?php include("../../includes/after_header.php"); ?>
        <div class="container bg_fa d_flex flex_end">
            <?php include("../../includes/slider_bar.php"); ?>
            <div class="content wbjsb mt_90 pd_48_24_91">
                <h1 class="font_s24 line_h28 font_w700 cl_primary bd_l4 pd_l8">Danh sách tin tuyển dụng</h1>
                <div class="box_search mt_24 d_flex align_c space_b ttd">
                    <div class="searching d_flex align_c pd_lr15 bd_dc br_100 br_5 bg_white">
                        <input type="text" class="rs_input ph_fz16 ip_lhd pd_tb11 flex_1 mr_10 font_s16 line_h19 font_w400 cl_73" placeholder="Tìm kiếm tin tuyển dụng">
                        <div class="d_flex align_c wh_16 cursor_p">
                            <img src="../../images/search_pri.png" alt="" class="img_full">
                        </div>
                        <!-- <div class="">
                        </div> -->
                    </div>

                    <div class="d_flex align_c list_btn_tt">
                        <a href="/tin-tuyen-dung/dang-tin-tuyen-dung" class="btn btn_hover_primary flex_im align_c br_100 btn_primary cl_white pd_t12_b11_lr24">
                            <div class="mr_6 d_flex align_c">
                                <img src="../../images/add_pri.png" alt="">
                            </div>
                            <span class="font_s16 line_h19 font_w500 currentColor">Đăng tin</span>
                        </a>


                        <button class="btn td_btn btn_loctd flex_im center_center cl_primary bg_w bd_td br_100 pd_t12_b11_lr24">
                            <div class="mr_6 d_flex align_c">
                                <img src="../../images/icon_loc.png" alt="">
                            </div>
                            <span class="font_s16 line_h19 font_w500 currentColor">Bộ lọc</span>
                        </button>
                    </div>
                </div>

                <div class="main_table_list_all position_r mt_10 mt_24">
                    <div class="box_main_table_list list_td tb_ttd">
                        <table class="table table_tdd">
                            <thead class="">
                                <tr>
                                    <th class="stt">STT<span class="span_thead"></span></th>
                                    <th style="width: 32%;">Tin tuyển dụng<span class="span_thead"></span></th>
                                    <th>Ngày cập nhật<span class="span_thead"></span></th>
                                    <th>Trạng thái<span class="span_thead"></span></th>
                                    <th>Dịch vụ đang sử dụng<span class="span_thead"></span></th>
                                    <th class="mb_1024th th_fuc">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody class="tr_wap">
                                <?php
                                $arrTT = [
                                    [
                                        'txt' => 'Chờ duyệt',
                                        'color' => 'bg_ff99',
                                    ],

                                    [
                                        'txt' => 'Đã duyệt',
                                        'color' => 'bg096',
                                    ],

                                    [
                                        'txt' => 'Từ chối',
                                        'color' => 'bg_ff33',
                                    ]
                                ];

                                $att = [
                                    [
                                        'class' => 'cl_green_im',
                                        'txt' => 'Đang hiển thị'
                                    ],
                                    [
                                        'class' => 'cl_oran_im',
                                        'txt' => 'Chưa hiển thị'
                                    ]
                                ];
                                ?>
                                <?php for ($i = 0; $i < 0; $i++) :
                                    $index = rand(0, count($arrTT) - 1);
                                    $indexs = rand(0, count($att) - 1);
                                ?>
                                    <tr class="tr" data-id="">
                                        <td><?= $i + 1 ?></td>
                                        <td class="txt_left_i">
                                            <a href="" class="cl_primary font_w500">Tuyển nhân viên kinh doanh không yêu cầu kinh nghiệm</a>
                                            <button class="btn w_116 flex_im align_c pd_7_12 br_100 mt_8 <?= $arrTT[$index]['color'] ?>">
                                                <div class="wh_16 d_flex align_c mr_8">
                                                    <img src="../../images/time_white.png" alt="">
                                                </div>
                                                <span class="font_s15 line_h18 font_w500 cl_white"><?= $arrTT[$index]['txt'] ?></span>
                                            </button>
                                        </td>
                                        <td class="txt_center">10/07/2022</td>
                                        <td class="<?= $att[$indexs]['class'] ?>"><?= $att[$indexs]['txt'] ?></td>
                                        <td>Chưa kích hoạt dịch vụ</td>
                                        <td class="mb_1024td">
                                            <div class="d_flex align_c cursor_p position_r hove_tc" data-tab="<?= $i ?>" style="width: fit-content">
                                                <div class="d_flex align_c mr_6">
                                                    <img src="../../images/3_dots_pri.png" alt="">
                                                </div>
                                                <span class="font_w500 cl_primary white_s_nw">Tùy chỉnh</span>

                                                <div class="popup_more">
                                                    <div class="d_flex align_c">
                                                        <div class="mr_8 d_flex align_c">
                                                            <img src="../../images/res_icon_pri.png" alt="">
                                                        </div>
                                                        <span class="font_s16 line_h19 font_w500 cl_primary">Làm mới</span>
                                                    </div>

                                                    <a href="/tin-tuyen-dung/chinh-sua-dang-tin-tuyen-dung" class="d_flex align_c">
                                                        <div class="mr_8 d_flex align_c">
                                                            <img src="../../images/edit_icon_pri.png" alt="">
                                                        </div>
                                                        <span class="font_s16 line_h19 font_w500 cl_primary">Chỉnh sửa</span>
                                                    </a>

                                                    <div class="d_flex align_c show_hidden_btn">
                                                        <div class="mr_8 d_flex align_c">
                                                            <img src="../../images/eye_open_pri.png" alt="">
                                                            <img src="../../images/eye_close_pri.png" alt="">
                                                        </div>
                                                        <span class="font_s16 line_h19 font_w500 cl_primary">Ngừng hiển thị</span>
                                                    </div>

                                                    <div class="d_flex align_c">
                                                        <div class="mr_8 d_flex align_c">
                                                            <img src="../../images/arro_45_pri.png" alt="">
                                                        </div>
                                                        <span class="font_s16 line_h19 font_w500 cl_primary">Tăng tốc tuyển dụng</span>
                                                    </div>

                                                    <div class="d_flex align_c del_btn" data-effect="mfp-zoom-in">
                                                        <div class="mr_8 d_flex align_c">
                                                            <img src="../../images/del_pri.png" alt="">
                                                        </div>
                                                        <span class="font_s16 line_h19 font_w500 cl_primary">Xóa</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>

                        <!-- <div class="box_main_table_function">
                            <table class="table_function">
                                <thead>
                                    <tr class="">
                                        <th colspan="3">Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <div class="cot_noidung2 text-center">
                                        <tr>
                                            <td>
                                                <a href="/chi-tiet-phieu-chuyen-kho-0.html" class="chon_chucnang chon_chucnang_left">
                                                    <img src="/images/chitiet_green.png" alt="">
                                                    <div class="title_chucnang">Chi tiết</div>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="/chinh-sua-phieu-chuyen-0.html" class="chon_chucnang chon_chucnang_mid">
                                                    <img src="/images/edit_blue.png" alt="">
                                                    <div class="title_chucnang">Chỉnh sửa</div>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <div class="chon_chucnang chon_chucnang_right inline_blk " onclick="hienpopup('popup_xac_nhan_xoa')">
                                                    <img src="/images/delete_red.png" alt="">
                                                    <div class="title_chucnang">Xóa</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="/chi-tiet-phieu-chuyen-kho-0.html" class="chon_chucnang chon_chucnang_left">
                                                    <img src="/images/chitiet_green.png" alt="">
                                                    <div class="title_chucnang">Chi tiết</div>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="/chinh-sua-phieu-chuyen-0.html" class="chon_chucnang chon_chucnang_mid">
                                                    <img src="/images/edit_blue.png" alt="">
                                                    <div class="title_chucnang">Chỉnh sửa</div>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <div class="chon_chucnang chon_chucnang_right inline_blk " onclick="hienpopup('popup_xac_nhan_xoa')">
                                                    <img src="/images/delete_red.png" alt="">
                                                    <div class="title_chucnang">Xóa</div>
                                                </div>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                        </div> -->


                        <!-- no result -->
                        <div class="no_result table_tdd bg_w resul_tin" style="display: flex;">
                            <div class="d_flex flex_column align_c">
                                <div>
                                    <img src="../../images/no_result.png" alt="">
                                </div>
                                <span class="font_s16 line_h19 font_w400 cl_oran block mt_16">Bạn chưa đăng tin tuyển dụng nào!</span>
                                <a href="/tin-tuyen-dung/dang-tin-tuyen-dung.html" class="btn mt_24 btn_hover_primary flex_im align_c br_100 btn_primary cl_white pd_t12_b11_lr24">
                                    <div class="mr_6 d_flex align_c">
                                        <img src="../../images/add_pri.png" alt="">
                                    </div>
                                    <span class="font_s16 line_h19 font_w500 currentColor">Đăng tin ngay </span>
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
            })
        })

        $('.show_hidden_btn').each(function() {
            $(this).click(() => {
                let objectELemet = viewAndClosePopupUpdate('#suss_ws_td', '.main_popup', '.close_popup', '', '', false, true, 1000)
                let {
                    infor_menu
                } = objectELemet;
                $(this).children('div').toggleClass('show_view');
                if ($(this).children('div').hasClass('show_view')) {
                    $(this).children('span').text('Hiển thị tin');
                    $('.txt_js').text('Ngừng hiển thị tin tuyển dụng thành công!');
                } else {
                    $(this).children('span').text('Ngừng hiển thị');
                    $('.txt_js').text('Hiển thị tin tuyển dụng thành công!');
                }

            })
        })

        $('.btn_loctd').click(() => {
            let objectELemet = viewAndClosePopupUpdate('#loc_new_td', '.main_popup', '.close_popup', '.cancel', '.form_check');

        })

        $('.hove_tc').each((i, elem) => {
            $(elem).click(() => {
                moreShow(elem);
            })
        })

        // màn 1024
        sizeChildrenTable(1024, {
            tag: 'div',
            className: 'no_result_table'
        })

        sliderBarToggle({
            slideBar: '.slider_bar',
            classShow: '.menu_moblie',
            breackpoint: 1260
        })
    </script>
</body>

</html>