<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/select2.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/style_t.css">
    <title>Đăng tin tuyển dụng</title>
</head>

<body>
    <div id="root">
        <?php include("../../includes/after_header.php"); ?>
        <div class="container bg_fa d_flex flex_end">
            <?php include("../../includes/slider_bar.php"); ?>
            <div class="content wbjsb mt_90 pd_48_24_91 pd_t24">
                <div class="box_search d_flex align_c space_b">
                    <a href="/tin-tuyen-dung/" class="btn td_btn flex_im center_center cl_primary bg_w bd_td br_8 pd_t12_b11_lr24">
                        <div class="mr_6 d_flex align_c">
                            <img src="../../images/next_pri.png" alt="">
                        </div>
                        <span class="font_s16 line_h19 font_w500 currentColor">Quay lại</span>
                    </a>
                </div>

                <div class="box_form mt_24">
                    <div class="box_form_header">
                        <h1 class="font_s24 line_h28 font_w700 cl_white">Đăng tin tuyển dụng</h1>
                    </div>
                    <div class="box_form_content">
                        <form action="" method="post" class="chilfr_mt24" enctype='multipart/form-data'>
                            <p class="font_s16 line_h19 font_w400 cl_55">Tin tuyển dụng của bạn sẽ được kiểm duyệt trước khi chính thức hiển thị với các ứng viên tiềm năng. Tìm hiểu về <a href="" class="cl_primary">Quy định đăng tin tại Job3s.</a></p>
                            <div class="form_group">
                                <h2 class="font_s20 line_h23 font_w700 cl_primary bd_l4 pd_l8">Tiêu đề tin tuyển dụng</h2>
                                <span class="font_s16 line_h19 font_w500 cl_a4 mt_16 block">Tiêu đề tin tuyển dụng<span class="cl_red">*</span></span>
                                <div class="d_flex align_c mt_8 bd_dc w_100 br_5">
                                    <textarea name="title" id="" class="resert_txt w_100 h_100 pd_11_14 br_5 h_84" placeholder="Ví dụ: Tuyển dụng nhân viên kinh doanh"></textarea>
                                </div>
                            </div>

                            <div class="form_group chil_div16">
                                <h2 class="font_s20 line_h23 font_w700 cl_primary bd_l4 pd_l8">Ngành nghề</h2>
                                <div class="d_flex w_100">
                                    <div class="w_50pt">
                                        <span class="font_s16 line_h19 font_w500 cl_a4 block">Ngành nghề chính</span>
                                        <div class="d_flex align_c mt_5 w_100 br_5 custom_select">
                                            <select name="" class="select_one" data-placeholder="Chọn ngành nghề" data-minimum-results-for-search="Infinity">
                                                <option value=""></option>
                                                <option value="0">Hà Nội</option>
                                                <option value="1">Hồ Chí Minh</option>
                                                <option value="3">Đà Nẵng</option>
                                                <option value="3">Bắc Ninh</option>
                                                <option value="3">Cà Mau</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="w_50pt ml_24">
                                        <span class="font_s16 line_h19 font_w500 cl_a4 block">Ngành nghề phụ</span>
                                        <div class="d_flex align_c mt_5 w_100 br_5 custom_select">
                                            <select name="" class="select_one" data-placeholder="Chọn tối đa 2 ngành nghề phụ" multiple="multiple" data-minimum-results-for-search="Infinity">
                                                <option value=""></option>
                                                <option value="0">Hà Nội</option>
                                                <option value="1">Hồ Chí Minh</option>
                                                <option value="3">Đà Nẵng</option>
                                                <option value="3">Bắc Ninh</option>
                                                <option value="3">Cà Mau</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="form_group chil_div16">
                                <h2 class="font_s20 line_h23 font_w700 cl_primary bd_l4 pd_l8">Thông tin chung</h2>
                                <div class="d_flex w_100">
                                    <div class="w_50pt">
                                        <span class="font_s16 line_h19 font_w500 cl_a4 block">Số lượng tuyển</span>
                                        <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                                            <input type="text" autocomplete="off" name="sl_tuyen" class="rs_input ip_lhd pd_tb11 flex_1" placeholder="Nhập số lượng ứng viên cần tuyển" />
                                        </div>
                                    </div>

                                    <div class="w_50pt ml_24">
                                        <span class="font_s16 line_h19 font_w500 cl_a4 block">Hình thức làm việc</span>
                                        <div class="d_flex align_c mt_5 w_100 br_5 custom_select">
                                            <select name="" class="select_one" data-placeholder="Chọn tối đa 2 ngành nghề phụ" data-minimum-results-for-search="Infinity">
                                                <option value="0">Toàn thời gian cố định</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="d_flex w_100">
                                    <div class="w_50pt">
                                        <span class="font_s16 line_h19 font_w500 cl_a4 block">Giới tính</span>
                                        <div class="d_flex align_c mt_5 w_100 br_5 custom_select">
                                            <select name="" class="select_one" data-placeholder="Không yêu cầu" data-minimum-results-for-search="Infinity">
                                                <option value=""></option>
                                                <option value="0">Nam</option>
                                                <option value="1">Nữ</option>
                                                <option value="3">Khác</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="w_50pt ml_24">
                                        <span class="font_s16 line_h19 font_w500 cl_a4 block">Cấp bậc</span>
                                        <div class="d_flex align_c mt_5 w_100 br_5 custom_select">
                                            <select name="" class="select_one" data-placeholder="Cấp bậc" data-minimum-results-for-search="Infinity">
                                                <option value="0">Nhân viên</option>
                                                <option value="1">Nữ</option>
                                                <option value="3">Khác</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="d_flex w_100">
                                    <div class="w_50pt">
                                        <span class="font_s16 line_h19 font_w500 cl_a4 block">Kinh nghiệm</span>
                                        <div class="d_flex align_c mt_5 w_100 br_5 custom_select">
                                            <select name="" class="select_one" data-placeholder="Không yêu cầu" data-minimum-results-for-search="Infinity">
                                                <option value=""></option>
                                                <option value="0">Nam</option>
                                                <option value="1">Nữ</option>
                                                <option value="3">Khác</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="w_50pt ml_24">
                                        <span class="font_s16 line_h19 font_w500 cl_a4 block">Bằng cấp</span>
                                        <div class="d_flex align_c mt_5 w_100 br_5 custom_select">
                                            <select name="" class="select_one" data-placeholder="Cấp bậc" data-minimum-results-for-search="Infinity">
                                                <option value="0">Nhân viên</option>
                                                <option value="1">Nữ</option>
                                                <option value="3">Khác</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="d_flex w_100">
                                    <div class="w_50pt">
                                        <span class="font_s16 line_h19 font_w500 cl_a4 block">Mức lương</span>
                                        <div class="d_flex align_c mt_5 w_100 br_5 custom_select">
                                            <select name="" class="select_one" data-placeholder="Không yêu cầu" data-minimum-results-for-search="Infinity">
                                                <option value=""></option>
                                                <option value="0">Nam</option>
                                                <option value="1">Nữ</option>
                                                <option value="3">Khác</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_group chil_div16">
                                <h2 class="font_s20 line_h23 font_w700 cl_primary bd_l4 pd_l8">Địa điểm làm việc</h2>
                                <div class="d_flex w_100">
                                    <div class="w_50pt">
                                        <span class="font_s16 line_h19 font_w500 cl_a4 block">Tỉnh thành</span>
                                        <div class="d_flex align_c mt_5 w_100 br_5 custom_select">
                                            <select name="" class="select_one" data-placeholder="Chọn tỉnh/thành phố" data-minimum-results-for-search="Infinity">
                                                <option value=""></option>
                                                <option value="0">Hà Nội</option>
                                                <option value="1">Hồ Chí Minh</option>
                                                <option value="3">Đà Nẵng</option>
                                                <option value="3">Bắc Ninh</option>
                                                <option value="3">Cà Mau</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="w_50pt ml_24">
                                        <span class="font_s16 line_h19 font_w500 cl_a4 block">Quận huyện</span>
                                        <div class="d_flex align_c mt_5 w_100 br_5 custom_select">
                                            <select name="" class="select_one" data-placeholder="Chọn quận/huyện" data-minimum-results-for-search="Infinity">
                                                <option value=""></option>
                                                <option value="0">Hà Nội</option>
                                                <option value="1">Hồ Chí Minh</option>
                                                <option value="3">Đà Nẵng</option>
                                                <option value="3">Bắc Ninh</option>
                                                <option value="3">Cà Mau</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <span class="font_s16 line_h19 font_w500 cl_a4 mt_16 block">Địa chỉ chi tiết</span>
                                    <div class="d_flex align_c mt_8 bd_dc w_100 br_5">
                                        <textarea name="title" id="" class="resert_txt w_100 h_100 pd_11_14 br_5 h_84" placeholder="Nhập địa chỉ chi tiết"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form_group chil_div16">
                                <h2 class="font_s20 line_h23 font_w700 cl_primary bd_l4 pd_l8">Nội dung chi tiết</h2>
                                <div>
                                    <span class="font_s16 line_h19 font_w500 cl_a4 mt_16 block">Mô tả công việc<span class="cl_red">*</span></span>
                                    <div class="d_flex align_c mt_8 bd_dc w_100 br_5">
                                        <textarea name="title" id="" class="resert_txt w_100 h_100 pd_11_14 br_5 h_84" placeholder="Nhập nội dung mô tả công việc"></textarea>
                                    </div>
                                </div>

                                <div>
                                    <span class="font_s16 line_h19 font_w500 cl_a4 mt_16 block">Yêu cầu công việc</span>
                                    <div class="d_flex align_c mt_8 bd_dc w_100 br_5">
                                        <textarea name="title" id="" class="resert_txt w_100 h_100 pd_11_14 br_5 h_84" placeholder="Nhập nội dung yêu cầu ứng viên"></textarea>
                                    </div>
                                </div>

                                <div>
                                    <span class="font_s16 line_h19 font_w500 cl_a4 mt_16 block">Quyền lợi được hưởng</span>
                                    <div class="d_flex align_c mt_8 bd_dc w_100 br_5">
                                        <textarea name="title" id="" class="resert_txt w_100 h_100 pd_11_14 br_5 h_84" placeholder="Nhập nội dung quyền lợi của ứng viên"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form_group">
                                <h2 class="font_s20 line_h23 font_w700 cl_primary bd_l4 pd_l8">Nội dung chi tiết</h2>
                                <span class="font_s16 line_h19 font_w500 cl_a4 mt_16 block">Video giới thiệu việc làm (định dạng mp4)</span>
                                <div class="append_error">
                                    <div class="d_flex align_c mt_6 bd_dc w_100 br_5 space_b file_drop">
                                        <span class="d_flex space_b flex_1 align_c font_s15 line_h18 font_w400 cl_73 pd_11_14 br_5">
                                            <span data-placeholder="Tải lên video giới thiệu việc làm (Dung lượng tối đa 100MB)" class="append">Tải lên video từ máy tính của bạn (Dung lượng tối đa 100MB)</span>
                                            <div class="close_file align_c cursor_p d_none">
                                                <img src="../../images/close_red_nobd.png" alt="">
                                            </div>
                                        </span>
                                        <input type="file" accept="video/*" class="files d_none" id="files" name="files" />
                                        <label for="files" class="cursor_p d_flex center_center btn_add_files">
                                            <img src="../../images/add_files_pri.png" alt="add_files">
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form_group chil_div16">
                                <h2 class="font_s20 line_h23 font_w700 cl_primary bd_l4 pd_l8">Thông tin nhận CV</h2>
                                <div class="d_flex w_100">
                                    <div class="w_50pt">
                                        <span class="font_s16 line_h19 font_w500 cl_a4 block">Hạn nộp hồ sơ</span>
                                        <div class="d_flex align_c mt_5 w_100">
                                            <input type="date" name="fullname" class="custom_ipdate" placeholder="Tài khoản Skype" />
                                        </div>
                                    </div>

                                    <div class="w_50pt ml_24">
                                        <span class="font_s16 line_h19 font_w500 cl_a4 block">Người liên hệ</span>
                                        <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                                            <input type="text" value="Nguyễn Thị Hoa" class="rs_input ip_lhd pd_tb11 flex_1" placeholder="Tài khoản Skype" />
                                        </div>
                                    </div>
                                </div>

                                <div class="d_flex w_100">
                                    <div class="w_50pt">
                                        <span class="font_s16 line_h19 font_w500 cl_a4 block">Số điện thoại</span>
                                        <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                                            <input type="text" value="0987654144" class="rs_input ip_lhd pd_tb11 flex_1" placeholder="Tài khoản Skype" />
                                        </div>
                                    </div>

                                    <div class="w_50pt ml_24">
                                        <span class="font_s16 line_h19 font_w500 cl_a4 block">Email</span>
                                        <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                                            <input type="text" value="nguyenhoa@gmail.com" class="rs_input ip_lhd pd_tb11 flex_1" placeholder="Tài khoản Skype" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_submit mt_24 d_flex align_c">
                                <a href="/tin-tuyen-dung/" class="btn mw_120 td_btn flex_im center_center cl_primary bg_w bd_td br_8 pd_t12_b11_lr24 mr_24">
                                    <span class="font_s16 line_h19 font_w500 currentColor">Hủy</span>
                                </a>

                                <button class="btn btn_hover_primary mw_120 flex_im center_center br_8 btn_primary cl_white pd_t12_b11_lr24">
                                    <span class="font_s16 line_h19 font_w500 currentColor">Đăng tin</span>
                                </button>
                            </div>
                        </form>
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

        ChangeFiles('.files', '.append', '.close_file', {
            selecter: '.file_drop',
            appendError: '.append_error',
            isDropFile: true,
            isAppenError: true,
            classErorr: 'error_valid_cus',
            isTypeFileVaild: ['mp4'],
            customMessType: (file, type) => `File upload phải là tệp thuộc định dạng: ${type.join(', ')}`,
            customMessSize: (file, size) => `File " ${file.name} " quá lớn. Kích cỡ tối đa được phép tải lên là 100 MB.`,
            isMaxSize: 1000000,
        });
    </script>
</body>

</html>