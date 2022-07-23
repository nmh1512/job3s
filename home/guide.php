<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://timviec365.vn/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="../../css/select2.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/globe.css">
    <link rel="stylesheet" href="../css/home.css">
    <title>Hướng dẫn</title>
</head>

<body>
    <div class="wapper">
        <?php include "../includes/before_header.php" ?>
        <div class="container">
            <div class="banner_home position_r mt_52 guid_hsd">
                <div class="banner_images w_100 h_100">
                    <img src="../images/banner_home.png" alt="banner_home" class="img_full">
                </div>
                <div class="d_flex position_a tlrb_0 space_b pd_r_69 align_c guid_r">
                    <div class="banner_content pd_lr_83 d_flex align_s flex_column align_c w_49pt in_p hd_banner">
                        <h1 class="font_s40 line_h47 font_w700 cl_white">Hướng dẫn sử dụng Quản lý đầu tư xây dựng 365 </h1>
                        <div class="mt_20">
                            <a href="/" class="btn br_30 font_w400 cl_white pd_9_32 font_s24 line_h28 btn_waring">Đăng ký sử dụng ngay</a>
                        </div>
                    </div>

                    <div class="souser_yt wh_535_300 br_20 over_hd gidue_page hd">
                        <img src="../images/test_hd.png" alt="" class="img_full">
                    </div>
                </div>
            </div>

            <div class="function_manual">
                <h2 class="font_s28 line_h33 font_w700 cl_md txt_center">Hướng dẫn chức năng</h2>
                <div class="function_manual_list mt_7 d_flex space_b">
                    <div class="function_manual_left">
                        <div class="row">
                            <?php for ($i = 0; $i < 10; $i++) : ?>
                                <div class="item_function d_flex align_c bd_cl47 br_50  cl_md">
                                    <div class="d_flex align_c mr_5">
                                        <svg width="24" height="24" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M33.3333 5H20C19.0833 5 18.3333 5.75 18.3333 6.66667V9.35C18.3333 9.35 18.3333 9.35 18.35 9.36667L26.6833 16.8667C27.7333 17.8 28.3333 19.1667 28.3333 20.5833V21.6667H31.6666V25H28.3333V28.3333H31.6666V31.6667H28.3333V35H33.3333C34.25 35 35 34.25 35 33.3333V6.66667C35 5.75 34.25 5 33.3333 5ZM25 11.6667H21.6666V8.33333H25V11.6667ZM31.6666 18.3333H28.3333V15H31.6666V18.3333ZM31.6666 11.6667H28.3333V8.33333H31.6666V11.6667Z" fill="currentColor" />
                                            <path d="M25 33.3333V20.5833C25 20.1166 24.8 19.6666 24.45 19.35L16.1167 11.85C15.8 11.55 15.4 11.4166 15 11.4166C14.6 11.4166 14.2 11.5666 13.8833 11.85L5.55 19.35C5.2 19.65 5 20.1 5 20.5833V33.3333C5 34.25 5.75 35 6.66667 35H10C10.9167 35 11.6667 34.25 11.6667 33.3333V26.6666H18.3333V33.3333C18.3333 34.25 19.0833 35 20 35H23.3333C24.25 35 25 34.25 25 33.3333Z" fill="currentColor" />
                                        </svg>
                                    </div>
                                    <span class="font_s16 line_h19 font_w500 currentColor">
                                        Dự án
                                    </span>
                                </div>
                            <?php endfor; ?>

                            <!-- category mb 375 -->
                            <div class="cate_375 h_36 acitve_selector">
                                <select name="" id="" class="select_option" data-minimum-results-for-search="Infinity">
                                    <option value="">
                                        <div class="d_flex align_c mr_5">
                                            <svg width="24" height="24" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M33.3333 5H20C19.0833 5 18.3333 5.75 18.3333 6.66667V9.35C18.3333 9.35 18.3333 9.35 18.35 9.36667L26.6833 16.8667C27.7333 17.8 28.3333 19.1667 28.3333 20.5833V21.6667H31.6666V25H28.3333V28.3333H31.6666V31.6667H28.3333V35H33.3333C34.25 35 35 34.25 35 33.3333V6.66667C35 5.75 34.25 5 33.3333 5ZM25 11.6667H21.6666V8.33333H25V11.6667ZM31.6666 18.3333H28.3333V15H31.6666V18.3333ZM31.6666 11.6667H28.3333V8.33333H31.6666V11.6667Z" fill="currentColor" />
                                                <path d="M25 33.3333V20.5833C25 20.1166 24.8 19.6666 24.45 19.35L16.1167 11.85C15.8 11.55 15.4 11.4166 15 11.4166C14.6 11.4166 14.2 11.5666 13.8833 11.85L5.55 19.35C5.2 19.65 5 20.1 5 20.5833V33.3333C5 34.25 5.75 35 6.66667 35H10C10.9167 35 11.6667 34.25 11.6667 33.3333V26.6666H18.3333V33.3333C18.3333 34.25 19.0833 35 20 35H23.3333C24.25 35 25 34.25 25 33.3333Z" fill="currentColor" />
                                            </svg>
                                        </div>
                                        <span class="font_s16 line_h19 font_w500 currentColor">
                                            Dự án
                                        </span>
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="function_manual_right br_10">
                        <h3 class="font_s18 line_h21 font_w700 cl_md">1. Chức năng dự án</h3>
                        <p class="font_s16 line_h19 font_w400 cl_md txt_justify mt_5">Ngay từ thời điểm doanh nghiệp hình thành,các thiết bị chấm công kết hợp với việc điểm danh cơ học của nhân sự trở thành căn cứ tiêu biểu giúp các công ty ghi lại được thời điểm đến làm việc, tan làm, nghỉ phép của người lao động từ đó, tính công và lương, thưởng cho người lao động vào cuối tháng một cách chính xác, đồng thời góp phần nâng cao ý thức làm việc và kỷ luật của nhân viên tại nơi làm việc.</p>
                        <div style="display: flex; align-items: center; flex-direction: column;margin-top: 10px">
                            <img src="../images/image 10.png" alt="" width="632">
                            <span style="font-size: 18px;line-height:21px; font-weight: 400; font-style:italic; color: #474747; display: block; margin-top: 5px">Quản lý đầu tư xây dựng là gì?</span>
                        </div>
                        <p class="font_s16 line_h19 font_w400 cl_md txt_justify mt_20">Ngay từ thời điểm doanh nghiệp hình thành,các thiết bị chấm công kết hợp với việc điểm danh cơ học của nhân sự trở thành căn cứ tiêu biểu giúp các công ty ghi lại được thời điểm đến làm việc, tan làm, nghỉ phép của người lao động từ đó, tính công và lương, thưởng cho người lao động vào cuối tháng một cách chính xác, đồng thời góp phần nâng cao ý thức làm việc và kỷ luật của nhân viên tại nơi làm việc.</p>
                        <p class="font_s16 line_h19 font_w400 cl_md txt_justify mt_20">Ngay từ thời điểm doanh nghiệp hình thành,các thiết bị chấm công kết hợp với việc điểm danh cơ học của nhân sự trở thành căn cứ tiêu biểu giúp các công ty ghi lại được thời điểm đến làm việc, tan làm, nghỉ phép của người lao động từ đó, tính công và lương, thưởng cho người lao động vào cuối tháng một cách chính xác, đồng thời góp phần nâng cao ý thức làm việc và kỷ luật của nhân viên tại nơi làm việc.</p>
                        <p class="font_s16 line_h19 font_w400 cl_md txt_justify mt_20">Ngay từ thời điểm doanh nghiệp hình thành,các thiết bị chấm công kết hợp với việc điểm danh cơ học của nhân sự trở thành căn cứ tiêu biểu giúp các công ty ghi lại được thời điểm đến làm việc, tan làm, nghỉ phép của người lao động từ đó, tính công và lương, thưởng cho người lao động vào cuối tháng một cách chính xác, đồng thời góp phần nâng cao ý thức làm việc và kỷ luật của nhân viên tại nơi làm việc.</p>
                        <p class="font_s16 line_h19 font_w400 cl_md txt_justify mt_20">Ngay từ thời điểm doanh nghiệp hình thành,các thiết bị chấm công kết hợp với việc điểm danh cơ học của nhân sự trở thành căn cứ tiêu biểu giúp các công ty ghi lại được thời điểm đến làm việc, tan làm, nghỉ phép của người lao động từ đó, tính công và lương, thưởng cho người lao động vào cuối tháng một cách chính xác, đồng thời góp phần nâng cao ý thức làm việc và kỷ luật của nhân viên tại nơi làm việc.</p>
                        <p class="font_s16 line_h19 font_w400 cl_md txt_justify mt_20">Ngay từ thời điểm doanh nghiệp hình thành,các thiết bị chấm công kết hợp với việc điểm danh cơ học của nhân sự trở thành căn cứ tiêu biểu giúp các công ty ghi lại được thời điểm đến làm việc, tan làm, nghỉ phép của người lao động từ đó, tính công và lương, thưởng cho người lao động vào cuối tháng một cách chính xác, đồng thời góp phần nâng cao ý thức làm việc và kỷ luật của nhân viên tại nơi làm việc.</p>
                    </div>
                </div>
            </div>
        </div>
        <?php include "../includes/footer.php" ?>
    </div>
    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../js/js_t.js"></script>
    <script type="text/javascript" src="../js/select2.min.js"></script>
    <script>
        $(".select_option").select2({
            width: "100%",
            height: "100%"
        });
        activeHeader('#huong_dan', 'active_hd');
    </script>
</body>

</html>