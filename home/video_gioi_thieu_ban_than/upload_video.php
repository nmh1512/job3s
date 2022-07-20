<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/style_t.css">
    <title>Video giới thiệu bản thân</title>
</head>

<body class="full_vh">
    <div id="root" class="h_100">
        <?php include("../../includes/after_header.php"); ?>
        <div class="container bg_fa d_flex flex_end h_100">
            <?php include("../../includes/slider_bar.php"); ?>
            <div class="content wbjsb mt_90 pd_24 chil_24">
                <div class="box_cty">
                    <div class="d_flex align_c space_b">
                        <h2 class="font_s18 line_h20 font_w500 cl_primary bd_l4 pd_l8">Video giới thiệu bản thân</h2>
                    </div>
                    <div class="mt_24">
                        <form action="" method="post" enctype="multipart/form-data">
                            <p class="font_s16 line_h20 font_w500 cl_a4">Đính kèm video giới thiệu bản thân để gây ấn tượng với nhà tuyển dụng</p>
                            <span class="font_s16 line_h19 font_w500 cl_a4 mt_16 block">Video/clip tải lên <span class="font_w400 cl_73">(định dạng mp4)</span></span>
                            <div class="append_error">
                                <div class="d_flex mt_6 bd_dc w_100 br_5 space_b file_drop upload_vd_ch vd_ul">
                                    <span class="d_flex space_b flex_1 align_c font_s15 line_h18 font_w400 cl_73 pd_11_14 br_5">
                                        <span data-placeholder="Tải lên video từ máy tính của bạn (Dung lượng tối đa 100MB)" class="append">Tải lên video từ máy tính của bạn (Dung lượng tối đa 100MB)</span>
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

                            <div class="d_flex align_c list_btn_tt chil_ml0 mt_16">
                                <button type="button" class="btn td_btn btn_huy_upload btn_loctd flex_im center_center cl_primary bg_w bd_td br_5 pd_t12_b11_lr24">
                                    <span class="font_s16 line_h19 font_w500 currentColor">Hủy</span>
                                </button>

                                <button type="submit" class="btn btn_hover_primary flex_im center_center br_5 btn_primary cl_white pd_t12_b11_lr24">
                                    <span class="font_s16 line_h19 font_w500 currentColor">Tải lên</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="../../js/jquery-3.4.1.min.js"></script> -->
    <script src="../../js/js_t.js"></script>
    <script>
        ChangeFiles('.files', '.append', '.close_file', {
            selecter: '.file_drop',
            appendError: '.append_error',
            isDropFile: true,
            isAppenError: true,
            classErorr: 'error_valid',
            isTypeFileVaild: ['mp4'],
            customMessType: (file, type) => `File upload phải là tệp thuộc dạng: ${type.join(', ')}`,
            customMessSize: (file, size) => `File " ${file.name} " quá lớn. Kích cỡ tối đa được phép tải lên là 100 MB.`,
            isMaxSize: 1000000,
        });
    </script>
</body>

</html>