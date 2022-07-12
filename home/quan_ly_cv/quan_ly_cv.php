<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/style_t.css">
    <title>Quản lý cv</title>
</head>

<body>
    <div id="root">
        <?php include("../../includes/after_header.php"); ?>
        <div class="container bg_fa d_flex flex_end">
            <?php include("../../includes/slider_bar.php"); ?>
            <div class="content wbjsb mt_90 pd_24 chil_24">
                <div class="box_cty">
                    <div class="d_flex align_c space_b">
                        <h2 class="font_s24 line_h28 font_w700 cl_primary bd_l4 pd_l8">CV đã tạo trên Job3S</h2>
                        <div>
                            <a href="/tin-tuyen-dung/dang-tin-tuyen-dung.html" class="btn btn_hover_primary flex_im align_c br_100 btn_primary cl_white pd_t12_b11_lr24">
                                <div class="mr_6 d_flex align_c">
                                    <img src="../../images/add_pri.png" alt="">
                                </div>
                                <span class="font_s16 line_h19 font_w500 currentColor">Tạo CV</span>
                            </a>
                        </div>
                    </div>
                    <div class="mt_24">
                        <div class="row row_g36">
                            <?php for ($i = 0; $i < 3; $i++) : ?>
                                <div class="col_3 txv_item br_16 over_hd">
                                    <div class="txv_img">
                                        <img src="../../images/txv_mau1.png" alt="thư xin việc">
                                    </div>

                                    <div class="appdung_cv">
                                        <button class="btn flex_im align_c pd_3_8 bg_w dat_cv br_100 cl_73">
                                            <div class="mr_6 d_flex align_c">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.5133 19.3473C4.03081 19.5948 3.48331 19.161 3.58081 18.6073L4.6183 12.6948L0.214566 8.49982C-0.196683 8.10732 0.0170667 7.38983 0.568315 7.31233L6.6908 6.44233L9.42079 1.03359C9.66704 0.546094 10.3333 0.546094 10.5795 1.03359L13.3095 6.44233L19.432 7.31233C19.9833 7.38983 20.197 8.10732 19.7845 8.49982L15.382 12.6948L16.4195 18.6073C16.517 19.161 15.9695 19.5948 15.487 19.3473L9.99829 16.5273L4.51205 19.3473H4.5133Z" fill="currentColor" />
                                                </svg>
                                            </div>
                                            <span class="font_s14 line_h16 font_w500 currentColr">Đặt làm CV chính</span>
                                        </button>
                                    </div>

                                    <div class="txv_content">
                                        <div class="txv_content_top position_r ">
                                            <h3 class="font_s16 line_h19 font_w700 cl_white pd_r28">ĐÂY LÀ TIÊU ĐỀ CV</h3>
                                            <p class="font_s14 line_h16 font_w400 mt_8 cl_white">Cập nhật lần cuối: <span>10/20/2020 10:10 AM</span></p>

                                            <div class="edit_cv_icon cursor_p">
                                                <img src="../../images/edit_white.png" alt="">
                                            </div>
                                        </div>
                                        <div class="txv_content_bottom mt_16 d_flex space_b align_c">
                                            <div class="d_flex btn_cv pd_r10">
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
                        <h2 class="font_s24 line_h28 font_w700 cl_primary bd_l4 pd_l8">CV đã tải lên Job3S</h2>

                        <div>
                            <button class="btn show_upload btn_hover_primary flex_im align_c br_100 btn_primary cl_white pd_t12_b11_lr24">
                                <div class="mr_6 d_flex align_c">
                                    <img src="../../images/upload_white.png" alt="">
                                </div>
                                <span class="font_s16 line_h19 font_w500 currentColor">Tải CV lên</span>
                            </button>
                        </div>
                    </div>

                    <div class="mt_24 show_form_upload" style="display: none;">
                        <form action="" method="post" enctype="multipart/form-data">
                            <p class="font_s16 line_h19 font_w400 cl_a4">Bạn đã có sẵn CV của mình, chỉ cần tải CV lên, hệ thống sẽ tự động đề xuất CV của bạn tới những nhà tuyển dụng uy tín. Tiết kiệm thời gian, tìm việc thông minh, nắm bắt cơ hội và làm chủ đường đua nghề nghiệp của chính mình.</p>
                            <span class="font_s16 line_h19 font_w500 cl_a4 mt_16 block">Tải CV <span class="font_w400 cl_73">(Files hỗ trợ: PDF, DOC, DOCX)</span></span>
                            <div class="append_error">
                                <div class="d_flex align_c mt_6 bd_dc w_100 br_5 space_b file_drop">
                                    <span class="d_flex space_b flex_1 align_c font_s15 line_h18 font_w400 cl_73 pd_11_14 br_5">
                                        <span data-placeholder="Kéo CV của bạn vào đây hoặc bấm để chọn file CV của bạn" class="append">Kéo CV của bạn vào đây hoặc bấm để chọn file CV của bạn</span>
                                        <div class="close_file align_c cursor_p d_none">
                                            <img src="../../images/close_red_nobd.png" alt="">
                                        </div>
                                    </span>
                                    <input type="file" class="files d_none" id="files" name="files" />
                                    <label for="files" class="cursor_p d_flex center_center btn_add_files">
                                        <img src="../../images/add_files_pri.png" alt="add_files">
                                    </label>
                                </div>
                            </div>

                            <div class="d_flex align_c list_btn_tt chil_ml0 mt_16">
                                <button type="submit" class="btn btn_hover_primary flex_im center_center br_5 btn_primary cl_white pd_t12_b11_lr24">
                                    <span class="font_s16 line_h19 font_w500 currentColor">Tải CV lên</span>
                                </button>


                                <button type="button" class="btn td_btn btn_huy_upload btn_loctd flex_im center_center cl_primary bg_w bd_td br_5 pd_t12_b11_lr24">
                                    <span class="font_s16 line_h19 font_w500 currentColor">Hủy</span>
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="mt_24">
                        <div class="row row_g36">
                            <?php for ($i = 0; $i < 3; $i++) : ?>
                                <div class="col_3 txv_item br_16 over_hd">
                                    <div class="txv_img">
                                        <img src="../../images/txv_mau1.png" alt="thư xin việc">
                                    </div>

                                    <div class="appdung_cv">
                                        <button class="btn flex_im align_c pd_3_8 bg_w dat_cv br_100 cl_73">
                                            <div class="mr_6 d_flex align_c">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.5133 19.3473C4.03081 19.5948 3.48331 19.161 3.58081 18.6073L4.6183 12.6948L0.214566 8.49982C-0.196683 8.10732 0.0170667 7.38983 0.568315 7.31233L6.6908 6.44233L9.42079 1.03359C9.66704 0.546094 10.3333 0.546094 10.5795 1.03359L13.3095 6.44233L19.432 7.31233C19.9833 7.38983 20.197 8.10732 19.7845 8.49982L15.382 12.6948L16.4195 18.6073C16.517 19.161 15.9695 19.5948 15.487 19.3473L9.99829 16.5273L4.51205 19.3473H4.5133Z" fill="currentColor" />
                                                </svg>
                                            </div>
                                            <span class="font_s14 line_h16 font_w500 currentColr">Đặt làm CV chính</span>
                                        </button>
                                    </div>

                                    <div class="txv_content">
                                        <div class="txv_content_top position_r ">
                                            <h3 class="font_s16 line_h19 font_w700 cl_white pd_r28">ĐÂY LÀ TIÊU ĐỀ CV</h3>
                                            <p class="font_s14 line_h16 font_w400 mt_8 cl_white">Cập nhật lần cuối: <span>10/20/2020 10:10 AM</span></p>

                                            <div class="edit_cv_icon cursor_p">
                                                <img src="../../images/edit_white.png" alt="">
                                            </div>
                                        </div>
                                        <div class="txv_content_bottom mt_16 d_flex space_b align_c">
                                            <div class="d_flex btn_cv pd_r10">
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
                        <h2 class="font_s24 line_h28 font_w700 cl_primary bd_l4 pd_l8">Hồ sơ cá nhân</h2>
                    </div>
                    <div class="mt_24 hs_canhan pd_16">
                        <div class="hs_canhan_people d_flex pd_8">
                            <div class="people_left wh_120 bd_dc br_16">
                                <img src="../../images/avt_1.png" alt="" class="img_full br_16">
                            </div>
                            <div class="pd_l16">
                                <h3 class="font_s24 line_h28 font_w500 cl_oran">Nguyễn Đình Mạnh</h3>
                                <span class="font_s16 line_h19 font_w500 cl_73 block mt_8">Nhân viên bảo hiểm</span>
                                <span class="font_s16 line_h19 font_w500 cl_73 block mt_8">1 năm kinh nghiệm</span>

                                <div class="d_flex align_c mt_23 list_btn_tt chil_ml0">
                                    <a href="/tin-tuyen-dung/dang-tin-tuyen-dung.html" class="btn btn_hover_primary flex_im align_c br_100 btn_primary cl_white pd_t12_b11_lr24">
                                        <div class="mr_6 d_flex align_c">
                                            <img src="../../images/eye_white_open.png" alt="">
                                        </div>
                                        <span class="font_s16 line_h19 font_w500 currentColor">Xem hồ sơ</span>
                                    </a>


                                    <a href="" class="btn td_btn btn_loctd flex_im center_center cl_primary bg_w bd_td br_100 pd_t12_b11_lr24">
                                        <div class="mr_6 d_flex align_c">
                                            <img src="../../images/edit_icon_pri.png" alt="">
                                        </div>
                                        <span class="font_s16 line_h19 font_w500 currentColor">Chỉnh sửa</span>
                                    </a>

                                    <button class="btn td_btn btn_loctd flex_im center_center cl_primary bg_w bd_td br_100 pd_t12_b11_lr24">
                                        <div class="mr_6 d_flex align_c">
                                            <img src="../../images/start_stro_pri.png" alt="">
                                        </div>
                                        <span class="font_s16 line_h19 font_w500 currentColor">Đặt làm CV chính</span>
                                    </button>
                                </div>
                            </div>
                            <div class="prossgess_canhan">
                                <div class="progress"></div>
                            </div>
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
    <script src="../../js/circle-progress.min.js"></script>
    <script src="../../js/js_t.js"></script>
    <script>
        new CircleProgress('.progress', {
            max: 100,
            value: 50,
            clockwise: false,
            textFormat: 'percent',
        });

        ChangeFiles('.files', '.append', '.close_file', {
            selecter: '.file_drop',
            appendError: '.append_error',
            isDropFile: true,
            isAppenError: true,
            classErorr: 'error_valid',
            isTypeFileVaild: ['pdf', 'doc', 'docx'],
            customMessType: (file, type) => `File upload phải là tệp thuộc dạng: ${type.join(', ')}`,
            // customMessSize: '',
            // isMaxSize: 10000,
        });

        $('.show_upload').click(() => {
            $('.show_upload').addClass('btn_hidden')
            $('.show_form_upload').slideDown(300, ()=> {
                $('.btn_huy_upload').click(()=>{
                    $('.show_form_upload').slideUp(300, () => {
                        $('.btn_huy_upload').unbind();
                    });
                    $('.show_upload').removeClass('btn_hidden');
                })
            });
        })
    </script>
</body>

</html>