<?
include 'config.php';

$type = getValue('type', 'str', 'GET', '');
if ($type == 'thong_tin_co_ban') {
?>
    <div class="d_flex">
        <h4 class="font_w500">Họ và tên:</h4>
        <p>Nguyễn Đình Mạnh</p>
    </div>
    <div class="d_flex mt_16">
        <h4 class="font_w500">Giới tính:</h4>
        <p class="gray_c4">Nhập giới tính</p>
    </div>
    <div class="d_flex mt_16">
        <h4 class="font_w500">Ngày sinh:</h4>
        <p class="gray_c4">Nhập ngày sinh</p>
    </div>
    <div class="d_flex mt_16">
        <h4 class="font_w500">Tình trạng hôn nhân:</h4>
        <p class="gray_c4">Nhập tình trạng</p>
    </div>
    <div class="d_flex mt_16">
        <h4 class="font_w500">Số điện thoại:</h4>
        <p class="gray_c4">Nhập số điện thoại</p>
    </div>
    <div class="d_flex mt_16">
        <h4 class="font_w500">Email:</h4>
        <p class="gray_c4">Nhập email</p>
    </div>
    <div class="d_flex mt_16">
        <h4 class="font_w500">Địa chỉ:</h4>
        <p class="gray_c4">Nhập địa chỉ</p>
    </div>
    <div class="d_flex mt_16">
        <h4 class="font_w500">Vị trí công việc:</h4>
        <p class="gray_c4">Nhập vị trí công việc</p>
    </div>
    <div class="d_flex mt_16">
        <h4 class="font_w500">Kinh nghiệm làm việc:</h4>
        <p class="gray_c4">Nhập kinh nghiệm</p>
    </div>
    <div class="d_flex mt_16">
        <h4 class="font_w500">Giới thiệu bản thân:</h4>
        <p class="gray_c4">Giới thiệu bản thân</p>
    </div>
<?
} elseif ($type == 'so_thich') {
?>
    <ul>
        <li>Xem phim</li>
        <li>Nghe nhạc</li>
        <li>Du lịch</li>
    </ul>
<?
} elseif ($type == 'muc_tieu') {
?>
    <p>Mục tiêu của em là bla bla bla......</p>
<?
} elseif ($type == 'hoc_van') {
?>
    <div class="mb_24 info_ungvien_item_box">
        <div class="position_r">
            <h4 class="font_w500 mb_8 main_color">Đại học Hoa Sen</h4>
            <p class="mb_8">Công nghệ thông tin</p>
            <p class="mb_8">2017 - hiện nay</p>
            <p class="min_h60">Mô tả quá trình học tập: abcxyz</p>
            <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p" onclick="getForm(this)">
                    <img class="mr_7" src="../../../images/change.svg" alt="" />
                    Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                    <img class="mr_7" src="../../../images/delete_red.svg" alt="" />
                    Xóa
                </div>
            </div>
        </div>
    </div>
    <div class="mb_24 info_ungvien_item_box">
        <div class="position_r">
            <h4 class="font_w500 mb_8 main_color">Đại học Hoa Sen</h4>
            <p class="mb_8">Công nghệ thông tin</p>
            <p class="mb_8">2017 - hiện nay</p>
            <p class="min_h60">Mô tả quá trình học tập: abcxyz</p>
            <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p" onclick="getForm(this)">
                    <img class="mr_7" src="../../../images/change.svg" alt="" />
                    Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                    <img class="mr_7" src="../../../images/delete_red.svg" alt="" />
                    Xóa
                </div>
            </div>
        </div>

    </div>
    <button class="d_flex align_c flex_center btn_bg_white" onclick="getForm(this)">
        <img class="mr_7" src="../../../images/plus_green.svg" alt="" />
        Thêm học vấn
    </button>
<?
} elseif ($type == 'chung_chi') {
?>
    <div class="info_ungvien_item_box mb_24">
        <div class="position_r">
            <h4 class="font_w500 mb_8 main_color">
                Test of English for International Communication( TOEIC)
            </h4>
            <p class="mb_8">2021- 2023</p>
            <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p" onclick="getForm(this)">
                    <img class="mr_7" src="../../../images/change.svg" alt="" />
                    Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                    <img class="mr_7" src="../../../images/delete_red.svg" alt="" />
                    Xóa
                </div>
            </div>
        </div>
    </div>
    <div class="info_ungvien_item_box mb_24">
        <div class="position_r">
            <h4 class="font_w500 mb_8 main_color">
                Test of English for International Communication( TOEIC)
            </h4>
            <p class="mb_8">Không có thời hạn</p>
            <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p">
                    <img class="mr_7" src="../../../images/change.svg" alt="" />
                    Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                    <img class="mr_7" src="../../../images/delete_red.svg" alt="" />
                    Xóa
                </div>
            </div>
        </div>
    </div>
    <button data-form="chung_chi" class="d_flex align_c flex_center btn_bg_white" onclick="getForm(this)">
        <img class="mr_7" src="../../../images/plus_green.svg" alt="" />
        Thêm chứng chỉ
    </button>
<?
} elseif ($type == 'kinh_nghiem') {
?>
    <div class="info_ungvien_item_box mb_24">
        <div class="position_r">
            <h4 class="font_w500 mb_8 main_color">Plus Studio</h4>
            <p class="mb_8">Công nghệ thông tin</p>
            <p class="mb_8">2017 - hiện nay</p>
            <p class="min_h60">Mô tả quá trình học tập: abcxyz</p>
            <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p" onclick="getForm(this)">
                    <img class="mr_7" src="../../../images/change.svg" alt="" />
                    Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                    <img class="mr_7" src="../../../images/delete_red.svg" alt="" />
                    Xóa
                </div>
            </div>
        </div>
    </div>
    <div class="info_ungvien_item_box mb_24">
        <div class="position_r">
            <h4 class="font_w500 mb_8 main_color">Đại học Hoa Sen</h4>
            <p class="mb_8">Công nghệ thông tin</p>
            <p class="mb_8">2017 - hiện nay</p>
            <p class="min_h60">Mô tả quá trình học tập: abcxyz</p>
            <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p" onclick="getForm(this)">
                    <img class="mr_7" src="../../../images/change.svg" alt="" />
                    Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                    <img class="mr_7" src="../../../images/delete_red.svg" alt="" />
                    Xóa
                </div>
            </div>
        </div>
    </div>
    <button class="d_flex align_c flex_center btn_bg_white" onclick="getForm(this)">
        <img class="mr_7" src="../../../images/plus_green.svg" alt="" />
        Thêm kinh nghiệm
    </button>
<?
} elseif ($type == 'ky_nang') {
?>
    <div class="info_ungvien_item_box mb_24">
        <div class="position_r">
            <h4 class="font_w500 mb_8 main_color">After Effect</h4>
            <div class="d_flex">
                <img class="mr_8" src="../../../images/star.svg" alt="" />
                <img class="mr_8" src="../../../images/star.svg" alt="" />
                <img class="mr_8" src="../../../images/star.svg" alt="" />
                <img class="mr_8" src="../../../images/star.svg" alt="" />
                <img src="../../../images/star_gray.svg" alt="" />
            </div>
            <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p" onclick="getForm(this)">
                    <img class="mr_7" src="../../../images/change.svg" alt="" />
                    Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                    <img class="mr_7" src="../../../images/delete_red.svg" alt="" />
                    Xóa
                </div>
            </div>
        </div>
    </div>
    <button class="d_flex align_c flex_center btn_bg_white" onclick="getForm(this)">
        <img class="mr_7" src="../../../images/plus_green.svg" alt="" />
        Thêm kỹ năng
    </button>
<?
} elseif ($type == 'ngon_ngu') {
?>
    <div class="mb_24 info_ungvien_item_box">
        <div class="position_r">
            <h4 class="font_w500 mb_8 main_color">Tiếng Anh</h4>
            <p class="mb_8">Cơ bản</p>
            <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p" onclick="getForm(this)">
                    <img class="mr_7" src="../../../images/change.svg" alt="" />
                    Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                    <img class="mr_7" src="../../../images/delete_red.svg" alt="" />
                    Xóa
                </div>
            </div>
        </div>
    </div>
    <div class="info_ungvien_item_box mb_24">
        <div class="position_r">
            <h4 class="font_w500 mb_8 main_color">Tiếng Đức</h4>
            <p class="mb_8">Thành thạo</p>
            <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p" onclick="getForm(this)">
                    <img class="mr_7" src="../../../images/change.svg" alt="" />
                    Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                    <img class="mr_7" src="../../../images/delete_red.svg" alt="" />
                    Xóa
                </div>
            </div>
        </div>
    </div>
    <div class="info_ungvien_item_box mb_24">
        <div class="position_r">
            <h4 class="font_w500 mb_8 main_color">Tiếng Đức</h4>
            <p class="mb_8">Thành thạo</p>
            <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p" onclick="getForm(this)">
                    <img class="mr_7" src="../../../images/change.svg" alt="" />
                    Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                    <img class="mr_7" src="../../../images/delete_red.svg" alt="" />
                    Xóa
                </div>
            </div>
        </div>
    </div>
    <button class="d_flex align_c flex_center btn_bg_white" onclick="getForm(this)">
        <img class="mr_7" src="../../../images/plus_green.svg" alt="" />
        Thêm ngôn ngữ
    </button>
<?
} elseif ($type == 'giai_thuong') {
?>
    <div class="info_ungvien_item_box mb_24">
        <div class="position_r">
            <h4 class="font_w500 mb_8 main_color">
                Cuộc thi “THE ARTIST AVATAR CHALLENGE”
            </h4>
            <p class="mb_8">Trung tâm nghệ thuật quốc gia</p>
            <p class="mb_8">03/2021</p>
            <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p" onclick="getForm(this)">
                    <img class="mr_7" src="../../../images/change.svg" alt="" />
                    Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                    <img class="mr_7" src="../../../images/delete_red.svg" alt="" />
                    Xóa
                </div>
            </div>
        </div>
    </div>
    <button class="d_flex align_c flex_center btn_bg_white" onclick="getForm(this)">
        <img class="mr_7" src="../../../images/plus_green.svg" alt="" />
        Thêm giải thưởng
    </button>
<?
} elseif ($type == 'du_an') {
?>
    <div class="mb_24 info_ungvien_item_box">
        <div class="position_r">
            <h4 class="font_w500 mb_8 main_color">
                Cuộc thi “THE ARTIST AVATAR CHALLENGE”
            </h4>
            <div class="d_flex mb_8">
                <span class="mr_8 font_w500">Khách hàng:</span>
                <p>VTV 6</p>
            </div>
            <div class="d_flex mb_8">
                <span class="mr_8 font_w500">Số thành viên tham gia:</span>
                <p>VTV 6</p>
            </div>
            <div class="d_flex mb_8">
                <span class="mr_8 font_w500">Vị trí:</span>
                <p>VTV 6</p>
            </div>
            <div class="d_flex mb_8">
                <span class="mr_8 font_w500">Nhiệm vụ:</span>
                <p>VTV 6</p>
            </div>
            <div class="d_flex mb_8">
                <span class="mr_8 font_w500">Công nghệ sử dụng: </span>
                <p>VTV 6</p>
            </div>
            <div class="d_flex mb_8">
                <span class="mr_8 font_w500">Thời gian:</span>
                <p>VTV 6</p>
            </div>
            <div class="d_flex mb_8">
                <span class="mr_8 font_w500">Mô tả dự án:</span>
                <p>VTV 6</p>
            </div>

            <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p" onclick="getForm(this)">
                    <img class="mr_7" src="../../../images/change.svg" alt="" />
                    Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                    <img class="mr_7" src="../../../images/delete_red.svg" alt="" />
                    Xóa
                </div>
            </div>
        </div>
    </div>
    <div class="mb_24 info_ungvien_item_box">
        <div class="position_r">
            <h4 class="font_w500 mb_8 main_color">
                Cuộc thi “THE ARTIST AVATAR CHALLENGE”
            </h4>
            <div class="d_flex mb_8">
                <span class="mr_8 font_w500">Khách hàng:</span>
                <p>VTV 6</p>
            </div>
            <div class="d_flex mb_8">
                <span class="mr_8 font_w500">Số thành viên tham gia:</span>
                <p>VTV 6</p>
            </div>
            <div class="d_flex mb_8">
                <span class="mr_8 font_w500">Vị trí:</span>
                <p>VTV 6</p>
            </div>
            <div class="d_flex mb_8">
                <span class="mr_8 font_w500">Nhiệm vụ:</span>
                <p>VTV 6</p>
            </div>
            <div class="d_flex mb_8">
                <span class="mr_8 font_w500">Công nghệ sử dụng: </span>
                <p>VTV 6</p>
            </div>
            <div class="d_flex mb_8">
                <span class="mr_8 font_w500">Thời gian:</span>
                <p>VTV 6</p>
            </div>
            <div class="d_flex mb_8">
                <span class="mr_8 font_w500">Mô tả dự án:</span>
                <p>VTV 6</p>
            </div>

            <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500" onclick="getForm(this)">
                    <img class="mr_7" src="../../../images/change.svg" alt="" />
                    Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500">
                    <img class="mr_7" src="../../../images/delete_red.svg" alt="" />
                    Xóa
                </div>
            </div>
        </div>
    </div>
    <button class="d_flex align_c flex_center btn_bg_white" onclick="getForm(this)">
        <img class="mr_7" src="../../../images/plus_green.svg" alt="" />
        Thêm dự án
    </button>
<?
} elseif ($type == 'hoat_dong') {
?>
    <div class="mb_24 info_ungvien_item_box">
        <div class="position_r">
            <h4 class="font_w500 mb_8 main_color">Đại học Hoa Sen</h4>
            <p class="mb_8">Công nghệ thông tin</p>
            <p class="mb_8">2017 - hiện nay</p>
            <p class="min_h60">Mô tả quá trình học tập: abcxyz</p>
            <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p" onclick="getForm(this)">
                    <img class="mr_7" src="../../../images/change.svg" alt="" />
                    Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                    <img class="mr_7" src="../../../images/delete_red.svg" alt="" />
                    Xóa
                </div>
            </div>
        </div>
    </div>
    <div class="mb_24 info_ungvien_item_box">
        <div class="position_r">
            <h4 class="font_w500 mb_8 main_color">Đại học Hoa Sen</h4>
            <p class="mb_8">Công nghệ thông tin</p>
            <p class="mb_8">2017 - hiện nay</p>
            <p class="min_h60">Mô tả quá trình học tập: abcxyz</p>
            <div class="position_a d_flex edit_info_uv_btn">
                <div class="d_flex mlr_8 main_color font_w500 cursor_p" onclick="getForm(this)">
                    <img class="mr_7" src="../../../images/change.svg" alt="" />
                    Sửa
                </div>
                |
                <div class="d_flex mlr_8 color_red font_w500 cursor_p">
                    <img class="mr_7" src="../../../images/delete_red.svg" alt="" />
                    Xóa
                </div>
            </div>
        </div>
    </div>
    <button class="d_flex align_c flex_center btn_bg_white" onclick="getForm(this)">
        <img class="mr_7" src="../../../images/plus_green.svg" alt="" />
        Thêm hoạt động
    </button>
<?
}

?>