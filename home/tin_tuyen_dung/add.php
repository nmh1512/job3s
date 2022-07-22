<?php
include("../config.php");
// require_once("../../functions/functions.php");
// require_once("../../classes/database1.php");
// if ($_SESSION['quyen'] == 1) {
//     $com_id = $_SESSION['com_id'];
// } elseif ($_SESSION['quyen'] == 2) {
//     $com_id = $_SESSION['user_com_id'];
// }
// $creator = $_SESSION['ep_id'];

// ngành nghề chính
$jobs = new db_query('SELECT cat_id, cat_name FROM category');
$jobs = $jobs -> result_array();

// kinh nghiệm làm việc
$exps = new db_query('SELECT ExperienceID, TitleEX FROM experience');
$exps = $exps -> result_array();

// bằng cấp
$levels = new db_query('SELECT EduID, TitleEdu FROM edulevel');
$levels = $levels -> result_array();

// bằng cấp
$cap_bac = new db_query('SELECT LevelID, Title FROM level');
$cap_bac = $cap_bac -> result_array();

// hình thức làm việc
$worktime = new db_query('SELECT worktimeID, Title FROM worktime');
$worktime = $worktime -> result_array();

// tỉnh thành phố
$city = new db_query('SELECT cit_id, cit_name, cit_parent FROM city2');
$city = $city -> result_array();


if (!empty($_POST)) {
    $title_recruit = getValue('title_recruit', 'str', 'POST', '');
    $title_recruit = sql_injection_rp(replaceMQ($title_recruit));

    $alias = removeAccent($title_recruit);
    $alias = strtolower($title_recruit);
    // echo $alias;
    // $alias = str_replace($alias, '-', ' ');

    // echo $alias;die;

    $main_job = getValue('main_job', 'int', 'POST', 0);
    $main_job = (int)$main_job;

    $professions = getValue('professions', 'arr', 'POST', []);
    $professions = json_encode($professions, JSON_UNESCAPED_UNICODE);

    $sl_tuyen = getValue('sl_tuyen', 'int', 'POST', 0);
    $sl_tuyen = (int)$sl_tuyen;

    $working_form = getValue('working_form', 'int', 'POST', 0);
    $working_form = (int)$working_form;

    $gender = getValue('gender', 'int', 'POST', 0);
    $gender = (int)$gender;

    $rank = getValue('rank', 'int', 'POST', 0);
    $rank = (int)$rank;

    $wage = getValue('wage', 'int', 'POST', 0);
    $wage = (int)$wage;

    $exp_work = getValue('exp_work', 'int', 'POST', 0);
    $exp_work = (int)$exp_work;

    $degree = getValue('degree', 'int', 'POST', 0);
    $degree = (int)$degree;

    $province = getValue('province', 'int', 'POST', 0);
    $province = (int)$province;

    $district = getValue('district', 'int', 'POST', 0);
    $district = (int)$district;

    $address = getValue('address', 'str', 'POST', '');
    $address = sql_injection_rp(replaceMQ($address));

    $job_description = getValue('job_description', 'str', 'POST', '');
    $job_description = sql_injection_rp(replaceMQ($job_description));

    $job_requirements = getValue('job_requirements', 'str', 'POST', '');
    $job_requirements = sql_injection_rp(replaceMQ($job_requirements));

    $benefits_enjoyed = getValue('benefits_enjoyed', 'str', 'POST', '');
    $benefits_enjoyed = sql_injection_rp(replaceMQ($benefits_enjoyed));

    $money_range = getValue('ml_tk', 'arr', 'POST', []);
    $money_range = json_encode($money_range, JSON_UNESCAPED_UNICODE);

    $submission = getValue('submission', 'str', 'POST', '');
    $submission = strtotime($submission);

    // $people_contact
    $people_contact = getValue('people_contact', 'str', 'POST', '');
    $people_contact = sql_injection_rp(replaceMQ($people_contact));

    //email_lh
    $email_lh = getValue('email_lh', 'str', 'POST', '');
    $email_lh = sql_injection_rp(replaceMQ($email_lh));

    // phone_lh
    $phone_lh = getValue('phone_lh', 'str', 'POST', '');
    $phone_lh = sql_injection_rp(replaceMQ($phone_lh));

    // file
    $file = $_FILES['files'];

    
    $file_name = $file['name'];
    //upload img riêng
    $file_name = $file['name'];
    $file_type = $file['type'];
    $file_tmp_name = $file['tmp_name'];
    $file_error = $file['error'];
    $file_size = $file['size'];
    
    if ($file_error == 0) {

        $file_size_mb =  $file_size / 1024 / 1024;
        $file_size_mb = round($file_size_mb, 2);

        if ($file_size_mb > 5) {
            echo "<script>alert('File Upload quá lớn !');</script>";
            $error = "File Upload quá lớn !";
        }
    }

    $time_created = time();
    $y = date('Y', $time_created);
    $m = date('m', $time_created);
    $d = date('d', $time_created);
    $dir = __DIR__ . "/../../pictures/" . $y;

    if (!is_dir($dir)) {
        mkdir($dir);
    }
    if (!is_dir($dir . "/" . $m)) {
        mkdir($dir . "/" . $m);
    }
    if (!is_dir($dir . "/" . $m . "/" . $d)) {
        mkdir($dir . "/" . $m . "/" . $d);
    }
    $dir .= "/" . $m . "/" . $d;
    $filename = time() . "_" . $file_name;
    // $file_size_kb = ceil($_FILES['size'] / 1024);
    move_uploaded_file($file_tmp_name, $dir . '/' . $filename);

    if($file['size'] == 0) {
        $filename = '';
    }

    $add_new = new db_query("INSERT INTO new (new_title, new_alias, new_cat_id, new_cat_phu, new_city, new_district, new_so_luong, new_hinh_thuc, new_gioi_tinh, new_cap_bac, new_exp, new_bang_cap, new_money, money_range, source, new_han_nop, name_lh, email_lh, phone_lh) VALUES ('$title_recruit', '$alias', '$main_job', '$professions', '$province', '$district', '$sl_tuyen', '$working_form', '$gender', '$rank', '$exp_work', '$degree', '$wage', '$money_range', '$filename', '$submission', '$people_contact','$email_lh', '$phone_lh')");


    // $file = $_FILES['files'];
    // $file_name = $file['name'];
    // //upload img riêng
    // $file_name = $file['name'];
    // $file_type = $file['type'];
    // $file_tmp_name = $file['tmp_name'];
    // $file_error = $file['error'];
    // $file_size = $file['size'];

    // if ($file_error == 0) {

    //     $file_size_mb =  $file_size / 1024 / 1024;
    //     $file_size_mb = round($file_size_mb, 2);

    //     if ($file_size_mb > 5) {
    //         echo "<script>alert('File Upload quá lớn !');</script>";
    //         $error = "File Upload quá lớn !";
    //     }
    // }
    // $time_created = time();
    // $y = date('Y', $time_created);
    // $m = date('m', $time_created);
    // $d = date('d', $time_created);
    // $dir = __DIR__ . "/../../pictures/" . $y;

    // if (!is_dir($dir)) {
    //     mkdir($dir);
    // }
    // if (!is_dir($dir . "/" . $m)) {
    //     mkdir($dir . "/" . $m);
    // }
    // if (!is_dir($dir . "/" . $m . "/" . $d)) {
    //     mkdir($dir . "/" . $m . "/" . $d);
    // }
    // $dir .= "/" . $m . "/" . $d;
    // $filename = time() . "_" . $file_name;
    // $file_size_kb = ceil($_FILES['size'] / 1024);
    // move_uploaded_file($file_tmp_name, $dir . '/' . $filename);

    // if($file['size'] == 0) {
    //     $filename = '';
    // }

    //         setcookie("taohoso", "hoso", time() + 3, "");
    // header("Location: tao-ho-so.html");

    // files







    // $title_recruit = getValue('title_recruit', 'str', 'POST', '');
    // $title_recruit = sql_injection_rp(replaceMQ($title_recruit));


    // $project = getValue('project', 'int', 'POST', 0);
    // $project = (int)$project;

    // $workday = getValue('workday', 'str', 'POST', '');
    // $workday = strtotime($workday);

    // $representative = getValue('representative', 'str', 'POST', '');
    // $representative = sql_injection_rp(replaceMQ($representative));
}

?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/select2.min.css">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/style_t.css">
        <script src="../../js/jquery-3.4.1.min.js"></script>
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
                            <form action="" method="post" class="chilfr_mt24" enctype='multipart/form-data' id="add_tuyen_dung">
                                <p class="font_s16 line_h19 font_w400 cl_55">Tin tuyển dụng của bạn sẽ được kiểm duyệt trước khi chính thức hiển thị với các ứng viên tiềm năng. Tìm hiểu về <a href="" class="cl_primary">Quy định đăng tin tại Job3s.</a></p>
                                <div class="form_group">
                                    <h2 class="font_s20 line_h23 font_w700 cl_primary bd_l4 pd_l8">Tiêu đề tin tuyển dụng</h2>
                                    <span class="font_s16 line_h19 font_w500 cl_a4 mt_16 block">Tiêu đề tin tuyển dụng<span class="cl_red">*</span></span>
                                    <div class="d_flex align_c mt_8 bd_dc w_100 br_5">
                                        <textarea name="title_recruit" id="" class="is_check_first_space resert_txt w_100 h_100 pd_11_14 br_5 h_84" placeholder="Ví dụ: Tuyển dụng nhân viên kinh doanh"></textarea>
                                    </div>
                                </div>

                                <div class="form_group chil_div16">
                                    <h2 class="font_s20 line_h23 font_w700 cl_primary bd_l4 pd_l8">Ngành nghề</h2>
                                    <div class="d_flex w_100">
                                        <div class="w_50pt">
                                            <span class="font_s16 line_h19 font_w500 cl_a4 block">Ngành nghề chính</span>
                                            <div class="d_flex align_c mt_5 w_100 br_5 custom_select">
                                                <select name="main_job" class="select_one nghe_chinh" data-placeholder="Chọn ngành nghề" data-minimum-results-for-search="Infinity">
                                                    <option value=""></option>
                                                    <?foreach($jobs as $item):?>
                                                        <option value="<?=$item['cat_id']?>"><?=$item['cat_name']?></option>
                                                    <?endforeach;?>
                                                    <!-- <option value="0">Hà Nội</option>
                                                    <option value="3">Đà Nẵng</option>
                                                    <option value="3">Bắc Ninh</option>
                                                    <option value="3">Cà Mau</option> -->
                                                </select>
                                            </div>
                                        </div>

                                        <div class="w_50pt ml_24">
                                            <span class="font_s16 line_h19 font_w500 cl_a4 block">Ngành nghề phụ</span>
                                            <div class="d_flex align_c mt_5 w_100 br_5 custom_select">
                                                <select name="professions[]" class="select_max nganh_phu" data-placeholder="Chọn tối đa 2 ngành nghề phụ" multiple="multiple" data-minimum-results-for-search="Infinity">
                                                    <!-- <option value=""></option>
                                                    <option value="0">Hà Nội</option>
                                                    <option value="1">Hồ Chí Minh</option>
                                                    <option value="3">Đà Nẵng</option>
                                                    <option value="3">Bắc Ninh</option>
                                                    <option value="3">Cà Mau</option> -->
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="form_group chil_div16">
                                    <h2 class="font_s20 line_h23 font_w700 cl_primary bd_l4 pd_l8">Thông tin chung</h2>
                                    <div class="d_flex w_100">
                                        <div class="w_50pt">
                                            <span class="font_s16 line_h19 font_w500 cl_a4 block">Số lượng tuyển<span class="cl_red">*</span> </span>
                                            <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                                                <input type="text" autocomplete="off" name="sl_tuyen" class="is_check_number rs_input ip_lhd pd_tb11 flex_1" placeholder="Nhập số lượng ứng viên cần tuyển" />
                                            </div>
                                        </div>

                                        <div class="w_50pt ml_24">
                                            <span class="font_s16 line_h19 font_w500 cl_a4 block">Hình thức làm việc</span>
                                            <div class="d_flex align_c mt_5 w_100 br_5 custom_select">
                                                <select name="working_form" class="select_one" data-placeholder="Chọn tối đa 2 ngành nghề phụ" data-minimum-results-for-search="Infinity">
                                                    <?foreach($worktime as $wk):?>
                                                        <option value="<?=$wk['worktimeID']?>"><?=$wk['Title']?></option>
                                                    <?endforeach;?>
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="d_flex w_100">
                                        <div class="w_50pt">
                                            <span class="font_s16 line_h19 font_w500 cl_a4 block">Giới tính</span>
                                            <div class="d_flex align_c mt_5 w_100 br_5 custom_select">
                                                <select name="gender" class="select_one" data-placeholder="Chọn giới tính" data-minimum-results-for-search="Infinity">
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
                                                <select name="rank" class="select_one" data-placeholder="Cấp bậc" data-minimum-results-for-search="Infinity">
                                                    <?foreach($cap_bac as $cp):?>
                                                        <option value="<?=$cp['LevelID']?>"><?=$cp['Title']?></option>
                                                    <?endforeach;?>
                                                    <!-- <option value="0">Nhân viên</option>
                                                    <option value="1">Trưởng nhóm</option>
                                                    <option value="3">Khác</option> -->
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="d_flex w_100">
                                        <div class="w_50pt">
                                            <span class="font_s16 line_h19 font_w500 cl_a4 block">Kinh nghiệm</span>
                                            <div class="d_flex align_c mt_5 w_100 br_5 custom_select">
                                                <select name="exp_work" class="select_one" data-placeholder="Không yêu cầu" data-minimum-results-for-search="Infinity">
                                                    <?foreach($exps as $exp):?>
                                                        <option value="<?=$exp['ExperienceID']?>"><?=$exp['TitleEX']?></option>
                                                    <?endforeach;?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="w_50pt ml_24">
                                            <span class="font_s16 line_h19 font_w500 cl_a4 block">Bằng cấp</span>
                                            <div class="d_flex align_c mt_5 w_100 br_5 custom_select">
                                                <select name="degree" class="select_one" data-placeholder="Cấp bậc" data-minimum-results-for-search="Infinity">
                                                    <?foreach($levels as $level):?>
                                                        <option value="<?=$level['EduID']?>"><?=$level['TitleEdu']?></option>
                                                    <?endforeach;?>
                                                    <!-- <option value="0">Nhân viên</option>
                                                    <option value="1">Nữ</option>
                                                    <option value="3">Khác</option> -->
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="d_flex w_100 ml_tl_pr">
                                        <div class="w_50pt">
                                            <span class="font_s16 line_h19 font_w500 cl_a4 block">Mức lương</span>
                                            <div class="d_flex align_c mt_5 w_100 br_5 custom_select">
                                                <select name="wage" class="select_one ml_change" data-minimum-results-for-search="Infinity">
                                                    <option value="0">Thỏa thuận</option>
                                                    <option value="1">Trong khoảng</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="d_flex w_50pt none_im ml_tk ml_24">
                                            <div class="w_50pt">
                                                <span class="font_s16 line_h19 font_w500 cl_a4 block">Từ<span class="cl_red">*</span></span>
                                                <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                                                    <input type="text" autocomplete="off" data-erorr="Vui lòng nhập mức lương từ" name="ml_tk[]" oninput="formatMoney(this)" class="is_check_number is_error rs_input ip_lhd pd_tb11 flex_1" placeholder="Nhập mức lương">
                                                    <span class="font_s15 line_h18 font_w400 cl_a4 block ml_10">VNĐ</span>
                                                </div>
                                            </div>

                                            <div class="w_50pt ml_24">
                                                <span class="font_s16 line_h19 font_w500 cl_a4 block">Đến<span class="cl_red">*</span></span>
                                                <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                                                    <input type="text" autocomplete="off" name="ml_tk[]" data-erorr="Vui lòng nhập mức lương đến" oninput="formatMoney(this)" class="is_check_number is_error rs_input ip_lhd pd_tb11 flex_1" placeholder="Nhập mức lương">
                                                    <span class="font_s15 line_h18 font_w400 cl_a4 block ml_10">VNĐ</span>
                                                </div>
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
                                                <select name="province" class="select_one tinh_thanh" data-placeholder="Chọn tỉnh/thành phố" data-minimum-results-for-search="Infinity">
                                                    <!-- <option value=""></option>
                                                    <option value="0">Hà Nội</option>
                                                    <option value="1">Hồ Chí Minh</option>
                                                    <option value="3">Đà Nẵng</option>
                                                    <option value="3">Bắc Ninh</option>
                                                    <option value="3">Cà Mau</option> -->
                                                </select>
                                            </div>
                                        </div>

                                        <div class="w_50pt ml_24">
                                            <span class="font_s16 line_h19 font_w500 cl_a4 block">Quận huyện</span>
                                            <div class="d_flex align_c mt_5 w_100 br_5 custom_select">
                                                <select name="district" class="select_one" data-placeholder="Chọn quận/huyện" data-minimum-results-for-search="Infinity">
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
                                            <textarea name="address" id="" class="resert_txt is_check_first_space w_100 h_100 pd_11_14 br_5 h_84" placeholder="Nhập địa chỉ chi tiết"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form_group chil_div16">
                                    <h2 class="font_s20 line_h23 font_w700 cl_primary bd_l4 pd_l8">Nội dung chi tiết</h2>
                                    <div>
                                        <span class="font_s16 line_h19 font_w500 cl_a4 mt_16 block">Mô tả công việc<span class="cl_red">*</span></span>
                                        <div class="d_flex align_c mt_8 bd_dc w_100 br_5">
                                            <textarea name="job_description" class="is_check_first_space resert_txt w_100 h_100 pd_11_14 br_5 h_84" placeholder="Nhập nội dung mô tả công việc"></textarea>
                                        </div>
                                    </div>

                                    <div>
                                        <span class="font_s16 line_h19 font_w500 cl_a4 mt_16 block">Yêu cầu công việc</span>
                                        <div class="d_flex align_c mt_8 bd_dc w_100 br_5">
                                            <textarea name="job_requirements" class="is_check_first_space resert_txt w_100 h_100 pd_11_14 br_5 h_84" placeholder="Nhập nội dung yêu cầu ứng viên"></textarea>
                                        </div>
                                    </div>

                                    <div>
                                        <span class="font_s16 line_h19 font_w500 cl_a4 mt_16 block">Quyền lợi được hưởng</span>
                                        <div class="d_flex align_c mt_8 bd_dc w_100 br_5">
                                            <textarea name="benefits_enjoyed" class="is_check_first_space resert_txt w_100 h_100 pd_11_14 br_5 h_84" placeholder="Nhập nội dung quyền lợi của ứng viên"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form_group">
                                    <h2 class="font_s20 line_h23 font_w700 cl_primary bd_l4 pd_l8">Nội dung chi tiết</h2>
                                    <span class="font_s16 line_h19 font_w500 cl_a4 mt_16 block">Video giới thiệu việc làm (định dạng mp4)</span>
                                    <div class="append_error">
                                        <div class="d_flex mt_6 bd_dc w_100 br_5 space_b file_drop upload_vd_ch">
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
                                                <input type="date" name="submission" class="custom_ipdate" />
                                            </div>
                                        </div>

                                        <div class="w_50pt ml_24">
                                            <span class="font_s16 line_h19 font_w500 cl_a4 block">Người liên hệ</span>
                                            <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                                                <input type="text" value="Nguyễn Thị Hoa" name="people_contact" class="is_check_first_space rs_input ip_lhd pd_tb11 flex_1" placeholder="Nhập người liên hệ" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d_flex w_100">
                                        <div class="w_50pt">
                                            <span class="font_s16 line_h19 font_w500 cl_a4 block">Số điện thoại</span>
                                            <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                                                <input type="text" value="0987654144" name="phone_lh" class="rs_input is_check_number ip_lhd pd_tb11 flex_1" placeholder="Nhập số điện thoại" />
                                            </div>
                                        </div>

                                        <div class="w_50pt ml_24">
                                            <span class="font_s16 line_h19 font_w500 cl_a4 block">Email</span>
                                            <div class="d_flex align_c mt_5 pd_lr15 bd_dc w_100 br_5">
                                                <input type="text" value="nguyenhoa@gmail.com" name="email_lh" class="is_check_space rs_input ip_lhd pd_tb11 flex_1" placeholder="Nhập email" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form_submit mt_24 d_flex align_c">
                                    <a href="/tin-tuyen-dung/" class="btn mw_120 td_btn flex_im center_center cl_primary bg_w bd_td br_8 pd_t12_b11_lr24 mr_24">
                                        <span class="font_s16 line_h19 font_w500 currentColor">Hủy</span>
                                    </a>

                                    <button type="submit" class="btn btn_hover_primary mw_120 flex_im center_center br_8 btn_primary cl_white pd_t12_b11_lr24">
                                        <span class="font_s16 line_h19 font_w500 currentColor">Đăng tin</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="../../js/jquery.validate.min.js"></script>
        <script src="../../js/select2.min.js"></script>
        <script src="../../js/validate_t.js"></script>
        <script src="../../js/js_t.js"></script>
        <script>
            $('.select_one').select2({
                width: '100%',
            })

            $('.select_max').select2({
                width: '100%',
                maximumSelectionLength: 2
            });

            $('.nghe_chinh').change(function () {
                let value = parseInt($(this).val());
                findResultJob({
                    valueFind: value,
                    keyFind: 'cat_id',
                    keyApp: 'cat_name',
                    append: '.nganh_phu',
                    arrayFind: <?=json_encode($jobs)?>
                })
            })


            $('.nghe_chinh').change(function () {
                let value = parseInt($(this).val());
                findResultJob({
                    valueFind: value,
                    keyFind: 'cat_id',
                    keyApp: 'cat_name',
                    append: '.nganh_phu',
                    arrayFind: <?=json_encode($jobs)?>
                })
            })

            // function FindKey(arr, key, value) {

            // }


            ChangeFiles('.files', '.append', '.close_file', {
                selecter: '.file_drop',
                appendError: '.append_error',
                isDropFile: true,
                isAppenError: true,
                classErorr: 'error_valid_cus',
                isTypeFileVaild: ['mp4'],
                customMessType: (file, type) => {
                    error = true;
                    return `File upload phải là tệp thuộc định dạng: ${type.join(', ')}`;
                },
                customMessSize: (file, size) => {
                    error = true;
                    return `File " ${file.name} " quá lớn. Kích cỡ tối đa được phép tải lên là 100 MB.`;
                },
                isMaxSize: 1000000
            });
        </script>
    </body>

</html>