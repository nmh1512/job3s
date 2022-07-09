<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/style_t.css">
    <title>Tổng quan</title>
</head>

<body>
    <div id="root">
        <?php include("../../includes/after_header.php"); ?>
        <div class="container bg_fa d_flex flex_end">
            <?php include("../../includes/slider_bar.php"); ?>
            <div class="content wbjsb mt_90 pd_48_24_91">
                <div class="box_item">
                    <h3 class="font_s24 line_h28 font_w700 cl_primary bd_l4 pd_l8">Đăng tin tuyển dụng</h3>
                    <div class="list_tds mt_24">
                        <div class="row row_tq">
                            <div class="col_2 item_td pd_lrt24_b25 bg_clE5">
                                <div class="w_49h18">
                                    <img src="../../images/logo_small.png" alt="" class="img_full">
                                </div>
                                <div class="mt_16">
                                    <h2 class="font_s22 line_h26 font_w700 cl_primary">Đăng tin tuyển dụng miễn phí</h2>
                                    <p class="font_s15 line_h18 font_w400 cl_55 mt_8">Đăng tin tuyển dụng dễ dàng, không quá 1 phút. Kiểm duyệt và đăng tin trong 24h.</p>
                                </div>
                                <div class="mt_24">
                                    <button class="btn br_100 sh_btn bg_w font_s16 line_h19 font_w500 cl_primary pd_t12_b11_lr24">Đăng tin ngay</button>
                                </div>
                            </div>

                            <div class="col_2 item_td pd_lrt24_b25 bg_white">
                                <div class="w_49h18">
                                    <img src="../../images/logo_small.png" alt="" class="img_full">
                                </div>
                                <div class="mt_16">
                                    <h2 class="font_s22 line_h26 font_w700 cl_primary">Quảng cáo tin tuyển dụng</h2>
                                    <p class="font_s15 line_h18 font_w400 cl_55 mt_8">Tăng lượt tiếp cận người tìm việc.Tin tuyển dụng hiển thị ở những vị trí nổi bật. Đẩy tin lên vị trí đầu trong kết quả tìm kiếm.</p>
                                </div>
                                <div class="mt_24">
                                    <button class="btn br_100 sh_btn btn_primary font_s16 line_h19 font_w500 cl_white pd_t12_b11_lr24">Tăng tốc tuyển dụng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box_item">
                    <h3 class="font_s24 line_h28 font_w700 cl_primary bd_l4 pd_l8">Thống kê tin tuyển dụng</h3>
                    <div class="list_common mt_24">
                        <div class="row">
                            <?php
                            $arr = [
                                [
                                    'txt' => 'Tin tuyển dụng còn hạn',
                                    'class' => 'cl_oran',
                                    'bg_icon' => 'bg_ffbc',
                                    'bg_box' => 'bg_BF5',
                                    'src' => '../../images/time_oran.png'
                                ],
                                [
                                    'txt' => 'Tin tuyển dụng hết hạn',
                                    'class' => 'cl_ff33',
                                    'bg_icon' => 'bg_FFC',
                                    'bg_box' => 'bg_fff5',
                                    'src' => '../../images/close_red.png'
                                ],
                                [
                                    'txt' => 'Tổng số tin tuyển dụng',
                                    'class' => 'cl_primary',
                                    'bg_icon' => 'bg_CCFB',
                                    'bg_box' => 'bg_f5fe',
                                    'src' => '../../images/icon_cap.png'
                                ]
                            ];
                            ?>
                            <!-- có thể thêm style inline -->
                            <?php foreach ($arr as $item) :
                                $ran = rand(10, 99999999999);
                            ?>
                                <div class="col_3 item_common <?= $item['class'] . ' ' . $item['bg_box'] ?>">
                                    <div class="pd_r10">
                                        <h3 class="font_s30 line_h35 font_w700 currentColor"><?= $ran ?></h3>
                                        <p class="font_s16 line_h19 font_w500 mt_16"><?= $item['txt'] ?></p>
                                    </div>
                                    <div class="wh_60 d_flex center_center <?= $item['bg_icon'] ?> br_100">
                                        <img src="<?= $item['src'] ?>" alt="" class="wh_26">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="box_item">
                    <h3 class="font_s24 line_h28 font_w700 cl_primary bd_l4 pd_l8">Thống kê hồ sơ ứng viên</h3>
                    <div class="list_common mt_24">
                        <div class="row">
                            <?php
                            $arr = [
                                [
                                    'txt' => 'Hồ sơ ứng tuyển',
                                    'class' => 'cl_33ff',
                                    'bg_icon' => 'bg_ccff',
                                    'bg_box' => 'bg_F5F5',
                                    'src' => '../../images/down_icon_blue.png'
                                ],
                                [
                                    'txt' => 'Ứng viên đã trúng tuyển',
                                    'class' => 'cl_green',
                                    'bg_icon' => 'bg_ccffd',
                                    'bg_box' => 'bg_f5fff',
                                    'src' => '../../images/check_susses.png'
                                ],
                                [
                                    'txt' => 'Ứng viên đã lưu',
                                    'class' => 'cl_64',
                                    'bg_icon' => 'bg_e4d9',
                                    'bg_box' => 'bg_faf7',
                                    'src' => '../../images/save_uv.png'
                                ]
                            ];
                            ?>
                            <!-- có thể thêm style inline -->
                            <?php foreach ($arr as $item) :
                                $ran = rand(10, 99999999999);
                            ?>
                                <div class="col_3 item_common <?= $item['class'] . ' ' . $item['bg_box'] ?>">
                                    <div class="pd_r10">
                                        <h3 class="font_s30 line_h35 font_w700 currentColor"><?= $ran ?></h3>
                                        <p class="font_s16 line_h19 font_w500 mt_16"><?= $item['txt'] ?></p>
                                    </div>
                                    <div class="wh_60 d_flex center_center <?= $item['bg_icon'] ?> br_100">
                                        <img src="<?= $item['src'] ?>" alt="" class="wh_26">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="box_item">
                    <h3 class="font_s24 line_h28 font_w700 cl_primary bd_l4 pd_l8">Tải App tìm việc job3s</h3>
                    <div class="item_td bg_w mt_24 pd_24 position_r">
                        <div class="w_49h18">
                            <img src="../../images/logo_small.png" alt="" class="img_full">
                        </div>
                        <div class="mt_16">
                            <h2 class="font_s22 line_h26 font_w700 cl_primary">Ứng dụng di động job3s miễn phí</h2>
                            <p class="font_s15 line_h18 font_w400 cl_55 mt_8">Đăng tin tuyển dụng dễ dàng, mọi lúc mọi nơi ngay trên thiết bị di động.</p>
                            <div class="mt_16 wh_100 ml_63">
                                <img src="../../images/qc_job3s.png" alt="" class="img_full">
                            </div>
                        </div>
                        <div class="mt_24">
                            <button class="btn btn_hover_primary flex_im align_c br_100 pd_lr20 shdown_btn btn_primary font_s16 line_h19 font_w500 cl_white pd_t12_b11_lr24">
                                <div class="mr_6 d_flex align_c">
                                    <img src="../../images/down_icon_white.png" alt="">
                                </div>
                                <span>Tải App tìm việc Job3s</span>
                            </button>
                        </div>

                        <!--  -->
                        <div class="img_app d_flex align_e">
                            <img src="../../images/down_img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>