<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/select2.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/style_t.css">
    <title>Danh sách mẫu cv đẹp</title>
</head>
<body>
    <div id="root">
        <div class="container d_flex pd_lr68 mt_138">
            <div class="cv_left">
                <div class="search_box drop_sd br_10 pd_32_24">
                    <h2 class="font_s18 line_h22 font_w500 cl_a4">Tìm mẫu CV phù hợp với bạn</h2>
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
                                <div class="d_flex">
                                    <input type="checkbox" class="wh23 mr_12">
                                    <span class="font_s14 line_h19 font_w400 cl_37 pd_t1">Mới nhất</span>
                                    <span class="font_s12 line_h16 font_w400">235</span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="cv_hot_job drop_sd br_10 pd_32_24 mt_24 pd_b24">
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

                <div class="download_app drop_sd br_10 pd_32_24 mt_24 pd_b24">
                    <div class="download_app_list mt_17">
                        <div class="app_infor">
                            <h2></h2>
                        </div>
                        <div class="app_img"></div>
                    </div>
                </div>
            </div>
            <div class="cv_right">
                <h1 class="font_s24 line_h28 font_w700 cl_primary">Danh sách mẫu CV xin việc đẹp nhất hiện nay</h1>
                <div class="slider_list_cv"></div>
                <div>
                    <button class="btn">Xem thêm</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/select2.min.js"></script>
    <script>
        $('.select_one').select2({
            width: '100%'
        })
    </script>
</body>
</html>