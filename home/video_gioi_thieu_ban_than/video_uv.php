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

<body>
    <!-- poup xác nhận -->
    <div class="popup hidden" id="del_video">
        <div class="main_popup bg_white popup_500 br_20 animation_zoom_in">
            <div class="header_popup position_r btn_primary d_flex center_center pd_19_18 hd_popup">
                <h3 class="font_s20 line_h23 cl_white font_w700">Xác nhận</h3>
                <div class="close_popup">
                    <img src="../../images/close_white.png" alt="">
                </div>
            </div>
            <div class="conatent_popup">
                <p class="font_s16 line_h19 font_w400 cl_a4 pd_48_24 txt_center">Bạn có chắc chắn muốn xóa bỏ video giới thiệu bản thân của bạn không?</p>
                <div class="form_submit d_flex center_center pd_24 pd_t0">
                    <button class="cancel font_s16 line_h19 font_w700 btn h_42 flex_im m_w140 center_center cl_primary bg_w bg_td bd_td br_12">Hủy</button>
                    <button class="btn h_42 m_w140 br_12 font_s16 line_h19 font_w700 bg_td cl_white btn_primary ml_68 dong_y">Đồng ý</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end poup xác nhận -->


    <div id="root">
        <?php include("../../includes/after_header.php"); ?>
        <div class="container bg_fa d_flex flex_end">
            <?php include("../../includes/slider_bar.php"); ?>
            <div class="content wbjsb mt_90 pd_24 chil_24">
                <div class="box_cty">
                    <div class="d_flex align_c space_b">
                        <h2 class="font_s24 line_h28 font_w700 cl_primary bd_l4 pd_l8">Video giới thiệu bản thân</h2>
                    </div>

                    <div class="video_susses mt_24">
                        <span class="font_s16 line_h20 font_w400 cl_a4">Video giới thiệu bản thân đã tải lên</span>
                        <div class="video_peolpe mt_16">
                            <video controls class="img_full br_16">
                                <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                                Your browser does not support HTML video.
                            </video>
                        </div>

                        <div class="d_flex center_center video_btn mt_24">
                            <a href="" class="btn btn_del_video td_btn btn_loctd flex_im center_center cl_ff33 bg_w bd_currentColor br_5 pd_t12_b11_lr24">
                                <span class="font_s16 line_h19 font_w500 currentColor">Xóa bỏ</span>
                            </a>

                            <a href="/tin-tuyen-dung/dang-tin-tuyen-dung.html" class="btn btn_hover_primary flex_im center_center br_5 btn_primary cl_white pd_t12_b11_lr24">
                                <span class="font_s16 line_h19 font_w500 currentColor">Cập nhật</span>
                            </a>
                        </div>
                    </div>

                    <div class="no_video no_result bg_w " style="display: none;">
                        <!--  -->
                        <div>
                            <img src="../../images/no_result.png" alt="">
                        </div>
                        <span class="font_s16 line_h19 font_w400 cl_oran block mt_16">oops!! Bạn chưa đăng tải video nào</span>
                        <div class="d_flex align_s flex_column mt_48 w_100">
                            <div class="no_video_ct">
                                <p class="font_s14 line_h20 font_w400"><span class="font_w500 cl_oran">Video giới thiệu bản thân</span> là một đoạn video ngắn khoảng từ 30 giây đến 1 phút giới thiệu bản thân với nhà tuyển dụng. Video CV thường gồm các nội dung sau:</p>
                                <ul>
                                    <li class="cts_style">Thông tin cá nhân</li>
                                    <li class="cts_style">Mục tiêu công việc</li>
                                    <li class="cts_style">Thông tin liên hệ (không bắt buộc)</li>
                                </ul>
                            </div>

                            <div class="no_video_ct">
                                <span class="font_w500 cl_oran font_s14 line_h20 block">Những lưu ý khác:</span>
                                <ul>
                                    <li class="cts_style">Thể hiện sự tự tin</li>
                                    <li class="cts_style">Tốc độ nói vừa phải, có điểm nhấn.</li>
                                    <li class="cts_style">Chất lượng hình ảnh và âm thanh rõ nét.</li>
                                    <li class="cts_style">Bố cục khung hình hợp lý (mặt không quá gần hay quá xa)</li>
                                    <li class="cts_style">Bí kíp từ Job3S: Hãy thể hiện những điều đặc biệt mà CV thông thường chưa thể hiện được nhé!</li>
                                </ul>
                                <p><span class="font_w500 cl_primary">Let's Go!</span> Tạo ấn tượng với Nhà tuyển dụng ngay thôi!</p>
                            </div>
                        </div>
                        <a href="/tin-tuyen-dung/dang-tin-tuyen-dung.html" class="btn mt_24 btn_hover_primary flex_im align_c br_100 btn_primary cl_white pd_t12_b11_lr24">
                            <div class="mr_6 d_flex align_c">
                                <img src="../../images/upload_white.png" alt="">
                            </div>
                            <span class="font_s16 line_h19 font_w500 currentColor">Tải lên video ngay</span>
                        </a>
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
    <script src="../../js/js_t.js"></script>
    <script>
        $('.btn_del_video').click(function (e) {
            e.preventDefault();
            let {infor_menu} = viewAndClosePopupUpdate('#del_video', '.main_popup', '.close_popup', '.cancel');
            let dong_y = infor_menu.querySelector('.dong_y');
            if(dong_y) {
                dong_y.onclick = () => {
                    location.href = this.getAttribute('href');
                }
            }
        })
    </script>
</body>

</html>