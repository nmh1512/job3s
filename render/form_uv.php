<?
include 'config.php';

$text = getValue('text', 'str', 'GET', '');

if ($text == 'thong_tin_co_ban') {
?>
    <form id="formThongTin" action="">
        <div class="d_flex">
            <div class="div_input mt-0">
                <label for="" class="font_w500">Họ và tên<span class="color_red">*</span></label>
                <div class="input_container">
                    <input type="text" placeholder="Nhập họ tên" name="ho_ten" />
                </div>
            </div>
            <div class="div_input mt-0">
                <label for="" class="font_w500">Giới tính<span class="color_red">*</span></label>
                <div class="input_container select_vali">
                    <select class="select_form" name="gioi_tinh" data-placeholder="Chọn giới tính">
                        <option value=""></option>
                    </select>
                </div>
            </div>
        </div>
        <div class="d_flex">
            <div class="div_input">
                <label for="" class="font_w500">Ngày sinh</label>
                <div class="input_container">
                    <input type="date" />
                </div>
            </div>
            <div class="div_input">
                <label for="" class="font_w500">Tình trạng hôn nhân</label>
                <div class="input_container">
                    <select class="select_form" name="" data-placeholder="Chọn tình trạng hôn nhân">
                        <option value=""></option>
                    </select>
                </div>
            </div>
        </div>

        <div class="d_flex flex_column mt_16">
            <label for="" class="font_w500">Địa chỉ<span class="color_red">*</span></label>

            <div class="d_flex">
                <div class="div_input mt-0">
                    <div class="input_container select_vali">
                        <select class="address select_form" name="tinh_thanh" data-placeholder="Chọn tỉnh/thành phố">
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="div_input mt_8 select_vali">
                    <select class="address select_form" name="quan_huyen" data-placeholder="Chọn quận/huyện">
                        <option value=""></option>
                    </select>
                </div>
            </div>
            <div class="w_100 mt_16">
                <textarea name="dia_chi" id="" cols="30" rows="3" placeholder="Địa chỉ chi tiết"></textarea>
            </div>
        </div>
        <div class="d_flex">
            <div class="div_input">
                <label for="" class="font_w500">Số điện thoại<span class="color_red">*</span></label>
                <div class="input_container">
                    <input type="text" placeholder="Nhập số điện thoại" name="sdt" class="is_check_number"/>
                </div>
            </div>
            <div class="div_input">
                <label for="" class="font_w500">Email<span class="color_red">*</span></label>
                <div class="input_container">
                    <input type="text" placeholder="Nhập email" name="email" />
                </div>
            </div>
        </div>
        <div class="d_flex">
            <div class="div_input">
                <label for="" class="font_w500">Vị trí công việc<span class="color_red">*</span></label>
                <div class="input_container select_vali ">
                    <select class="select_form" name="vi_tri_cv" data-placeholder="Chọn vị trí công việc">
                        <option value=""></option>
                    </select>
                </div>
            </div>
            <div class="div_input">
                <label for="" class="font_w500">Kinh nghiệm làm việc<span class="color_red">*</span></label>
                <div class="input_container select_vali">
                    <select class="select_form" name="kinh_nghiem" data-placeholder="Chọn kinh nghiệm làm việc">
                        <option value=""></option>
                    </select>
                </div>
            </div>
        </div>
        <div class="mt_16">
            <label for="" class="font_w500">Giới thiệu bản thân</label>
            <textarea class="mt_8" name="" id="" cols="30" rows="5" placeholder="Thêm giới thiệu bản thân để nhà tuyển dụng có thể hiểu hơn về bạn"></textarea>
        </div>
        <div class="form_btns">
            <button data-type="Thông tin cơ bản" type="button" class="btn_huy" onclick="showPopup(this)">
                Hủy
            </button>
            <button type="submit" class="btn_xacnhan">Cập nhật</button>
        </div>
    </form>
    <script>
        $('#formThongTin').validate({
            rules: {
                ho_ten: "required",
                gioi_tinh: "required",
                tinh_thanh: "required",
                quan_huyen: "required",
                dia_chi: "required",
                sdt: "required",
                email: {
                    required: true,
                    email: true
                },
                vi_tri_cv: "required",
                kinh_nghiem: "required",


            },
            messages: {
                ho_ten: "Vui lòng nhập họ tên",
                gioi_tinh: "Vui lòng chọn giới tính",
                tinh_thanh: "Vui lòng chọn tỉnh thành",
                quan_huyen: "Vui lòng chọn quận huyện",
                dia_chi: "Vui lòng nhập địa chỉ chi tiết",
                sdt: "Vui lòng nhập số điện thoại",
                email: {
                    required: "Vui lòng nhập email",
                    email: "Vui lòng nhập đúng định dạng email"
                },
                vi_tri_cv: "Vui lòng chọn vị trí công việc",
                kinh_nghiem: "Vui lòng chọn kinh nghiệm",
            }
        })
    </script>
<?
} elseif ($text == 'so_thich') {
?>
    <form id="formSoThich" action="">
        <div>
            <label for="" class="font_w500">Sở thích<span class="color_red">*</span></label>
            <textarea class="mt_8" name="so_thich" id="" cols="30" rows="5" placeholder="Sở thích của bạn là?"></textarea>
        </div>
        <div class="form_btns">
            <button data-type="Sở thích" type="button" class="btn_huy" onclick="showPopup(this)">
                Hủy
            </button>
            <button type="submit" class="btn_xacnhan">Cập nhật</button>
        </div>
    </form>
    <script>
        $('#formSoThich').validate({
            rules: {
                so_thich: "required",
            },
            messages: {
                so_thich: "Vui lòng nhập sở thích",
            }
        })
    </script>
<?
} elseif ($text == 'muc_tieu') {
?>
    <form action="" id="formMucTieu">
        <div>
            <label for="" class="font_w500">Mục tiêu<span class="color_red">*</span></label>
            <textarea class="mt_8" name="muc_tieu" id="" cols="30" rows="5" placeholder="Mục tiêu của bạn là gì?"></textarea>
        </div>
        <div class="form_btns">
            <button data-type="Mục tiêu" type="button" class="btn_huy" onclick="showPopup(this)">
                Hủy
            </button>
            <button type="submit" class="btn_xacnhan">Cập nhật</button>
        </div>
    </form>
    <script>
        $('#formMucTieu').validate({
            rules: {
                muc_tieu: "required",
            },
            messages: {
                muc_tieu: "Vui lòng nhập mục tiêu",
            }
        })
    </script>
<?
} elseif ($text == 'hoc_van') {
?>
    <form id="formHocVan" action="" class="form_uv">
        <div class="d_flex">
            <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Trường học<span class="color_red">*</span></label>
                <div class="input_container">
                    <input type="text" placeholder="Nhập trường học" name="truong_hoc" />
                </div>
            </div>
        </div>
        <div class="d_flex mt_16">
            <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Chuyên ngành<span class="color_red">*</span></label>
                <div class="input_container">
                    <input type="text" placeholder="Nhập chuyên ngành" name="chuyen_nganh" />
                </div>
            </div>
        </div>
        <div class="mt_16">
            <div>
                <label for="" class="font_w500">Thời gian<span class="color_red">*</span></label>
                <div class="d_flex mt_8">
                    <label class="container_checkbox">
                        <input type="checkbox" />
                        <span class="checkmark"></span>
                    </label>
                    <p>Tôi đang học ở đây</p>
                </div>
            </div>
            <div class="mt_16 select_time d_flex space_b">
                <div>
                    <label for="" class="font_w500">Bắt đầu</label>
                    <div class="input_container d_flex">
                        <div class="mr_24 w_50pt select_vali">
                            <select class="select_form mr_24" name="thang_batdau" data-placeholder="Chọn tháng">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="w_50pt select_vali">
                            <select class="select_form" name="nam_batdau" data-placeholder="Chọn năm">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div>
                    <label for="" class="font_w500">Kết thúc</label>
                    <div class="input_container d_flex">
                        <div class="mr_24 w_50pt select_vali">
                            <select class="select_form mr_24" name="thang_ketthuc" data-placeholder="Chọn tháng">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="w_50pt select_vali">
                            <select class="select_form" name="nam_ketthuc" data-placeholder="Chọn năm">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt_16">
            <label for="" class="font_w500">Mô tả</label>
            <textarea class="mt_8" name="" id="" cols="30" rows="5" placeholder="Thêm mô tả"></textarea>
        </div>
        <div class="form_btns">
            <button data-type="Học vấn" type="button" class="btn_huy" onclick="showPopup(this)">
                Hủy
            </button>
            <button type="submit" class="btn_xacnhan">Cập nhật</button>
        </div>
    </form>
    <script>
        $('#formHocVan').validate({
            rules: {
                truong_hoc: "required",
                chuyen_nganh: "required",
                thang_batdau: "required",
                nam_batdau: "required",
            },
            messages: {
                truong_hoc: "Vui lòng nhập tên trường học",
                chuyen_nganh: "Vui lòng nhập chuyên ngành",
                thang_batdau: "Vui lòng chọn tháng bắt đầu",
                nam_batdau: "Vui lòng chọn năm bắt đầu",
            }
        })
    </script>
<?
} elseif ($text == 'chung_chi') {
?>
    <form id="formChungChi" action="" class="form_uv">
        <div class="d_flex">
            <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Tên chứng chỉ<span class="color_red">*</span></label>
                <div class="input_container">
                    <input type="text" placeholder="Nhập tên chứng chỉ" name="chung_chi" />
                </div>
            </div>
        </div>
        <div class="d_flex mt_16">
            <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Tổ chức</label>
                <div class="input_container">
                    <input type="text" placeholder="Tổ chức" />
                </div>
            </div>
        </div>
        <div class="mt_16">
            <div>
                <label for="" class="font_w500">Thời gian<span class="color_red">*</span></label>
                <div class="d_flex mt_8">
                    <label class="container_checkbox">
                        <input type="checkbox" />
                        <span class="checkmark"></span>
                    </label>
                    <p>Chứng chỉ không có ngày hết hạn</p>
                </div>
            </div>
            <div class="mt_16 select_time d_flex space_b">
                <div>
                    <label for="" class="font_w500">Thời gian xác thực</label>
                    <div class="input_container d_flex">
                        <div class="mr_24 w_50pt">
                            <select class="select_form mr_24" name="thang_xacthuc" data-placeholder="Chọn tháng">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="w_50pt">
                            <select class="select_form" name="nam_xacthuc" data-placeholder="Chọn năm">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div>
                    <label for="" class="font_w500">Thời gian hết hạn</label>
                    <div class="input_container d_flex">
                        <div class="mr_24 w_50pt">
                            <select class="select_form mr_24" name="" data-placeholder="Chọn tháng">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="w_50pt">
                            <select class="select_form" name="" data-placeholder="Chọn năm">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form_btns">
            <button type="button" data-type="Chứng chỉ" class="btn_huy" onclick="showPopup(this)">
                Hủy
            </button>
            <button type="submit" class="btn_xacnhan">Cập nhật</button>
        </div>
    </form>
    <script>
        $('#formChungChi').validate({
            rules: {
                chung_chi: "required",
                thang_xacthuc: "required",
                nam_xacthuc: "required",

            },
            messages: {
                chung_chi: "Vui lòng nhập tên chứng chỉ",
                thang_xacthuc: "Vui lòng nhập tháng xác thực",
                nam_xacthuc: "Vui lòng chọn năm xác thực",

            }
        })
    </script>
<?
} elseif ($text == 'kinh_nghiem') {
?>
    <form id="formKinhNghiem" action="" class="form_uv">
        <div class="d_flex">
            <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Công ty<span class="color_red">*</span></label>
                <div class="input_container">
                    <input type="text" placeholder="Nhập tên công ty" name="ten_cty" />
                </div>
            </div>
        </div>
        <div class="d_flex mt_16">
            <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Chức vụ<span class="color_red">*</span></label>
                <div class="input_container">
                    <input type="text" placeholder="Nhập chức vụ" name="chuc_vu" />
                </div>
            </div>
        </div>
        <div class="mt_16">
            <div>
                <label for="" class="font_w500">Thời gian<span class="color_red">*</span></label>
                <div class="d_flex mt_8">
                    <label class="container_checkbox">
                        <input type="checkbox" />
                        <span class="checkmark"></span>
                    </label>
                    <p>Tôi đang làm việc ở đây</p>
                </div>
            </div>
            <div class="mt_16 select_time d_flex space_b">
                <div>
                    <label for="" class="font_w500">Bắt đầu</label>
                    <div class="input_container d_flex">
                        <div class="mr_24 w_50pt select_vali">
                            <select class="select_form mr_24" name="thang_batdau" data-placeholder="Chọn tháng">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="w_50pt select_vali">
                            <select class="select_form" name="nam_batdau" data-placeholder="Chọn năm">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div>
                    <label for="" class="font_w500">Kết thúc</label>
                    <div class="input_container d_flex">
                        <div class="mr_24 w_50pt">
                            <select class="select_form mr_24" name="" data-placeholder="Chọn tháng">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="w_50pt">
                            <select class="select_form" name="" data-placeholder="Chọn năm">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt_16">
            <label for="" class="font_w500">Mô tả</label>
            <textarea class="mt_8" name="" id="" cols="30" rows="5" placeholder="Thêm mô tả"></textarea>
        </div>
        <div class="form_btns">
            <button data-type="Kinh nghiệm" type="button" class="btn_huy" onclick="showPopup(this)">
                Hủy
            </button>
            <button type="submit" class="btn_xacnhan">Cập nhật</button>
        </div>
    </form>
    <script>
        $('#formKinhNghiem').validate({
            rules: {
                ten_cty: "required",
                chuc_vu: "required",
                thang_batdau: "required",
                nam_batdau: "required",

            },
            messages: {
                ten_cty: "Vui lòng nhập tên công ty",
                chuc_vu: "Vui lòng nhập chức vụ",
                thang_batdau: "Vui lòng chọn tháng bắt đầu",
                nam_batdau: "Vui lòng chọn năm bắt đầu",

            }
        })
    </script>
<?
} elseif ($text == 'ky_nang') {
?>
    <form id="formKyNang" action="">
        <div class="d_flex">
            <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Tên kỹ năng<span class="color_red">*</span></label>
                <div class="input_container">
                    <input type="text" placeholder="Nhập kỹ năng" name="ten_kynang" />
                </div>
            </div>
        </div>
        <div class="d_flex mt_16">
            <div class="div_input mt-0 w_100">
                <label for="" class="font_w500">Đánh giá</label>
                <div class="d_flex mt_8">
                    <img class="mr_8" src="../../../images/star.svg" alt="" />
                    <img class="mr_8" src="../../../images/star.svg" alt="" />
                    <img class="mr_8" src="../../../images/star.svg" alt="" />
                    <img class="mr_8" src="../../../images/star.svg" alt="" />
                    <img src="../../../images/star_gray.svg" alt="" />
                </div>
            </div>
        </div>
        <div class="mt_16">
            <label for="" class="font_w500">Mô tả chi tiết</label>
            <textarea class="mt_8" name="" id="" cols="30" rows="5" placeholder="Mô tả chi tiết kỹ năng"></textarea>
        </div>
        <div class="form_btns">
            <button data-type="Kỹ năng" type="button" class="btn_huy" onclick="showPopup(this)">
                Hủy
            </button>
            <button type="submit" class="btn_xacnhan">Cập nhật</button>
        </div>
    </form>
    <script>
        $('#formKyNang').validate({
            rules: {
                ten_kynang: "required",
            },
            messages: {
                ten_kynang: "Vui lòng nhập tên kỹ năng",
            }
        })
    </script>
<?
} else if ($text == 'ngon_ngu') {
?>
    <form id="formNgonNgu" action="">
        <div class="d_flex">
            <div class="div_input mt-0">
                <label for="" class="font_w500">Ngôn ngữ<span class="color_red">*</span></label>
                <div class="input_container select_vali">
                    <select class="select_form" name="ngon_ngu" data-placeholder="Chọn ngôn ngữ">
                        <option value=""></option>
                    </select>
                </div>
            </div>
            <div class="div_input mt-0">
                <label for="" class="font_w500">Mức độ thành thạo<span class="color_red">*</span></label>
                <div class="input_container select_vali">
                    <select class="select_form" name="thanh_thao" data-placeholder="Chọn mức độ">
                        <option value=""></option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form_btns">
            <button data-type="Ngôn ngữ" type="button" class="btn_huy" onclick="showPopup(this)">
                Hủy
            </button>
            <button type="submit" class="btn_xacnhan">Cập nhật</button>
        </div>
    </form>
    <script>
        $('#formNgonNgu').validate({
            rules: {
                ngon_ngu: "required",
                thanh_thao: "required",
            },
            messages: {
                ngon_ngu: "Vui lòng nhập ngôn ngữ",
                thanh_thao: "Vui lòng chọn mức độ thành thạo",
            }
        })
    </script>
<?
} elseif ($text == 'giai_thuong') {
?>
    <form id="formGiaiThuong" action="" class="form_uv">
        <div class="d_flex">
            <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Tên giải thưởng<span class="color_red">*</span></label>
                <div class="input_container">
                    <input type="text" placeholder="Nhập tên giải thưởng" name="giai_thuong" />
                </div>
            </div>
        </div>
        <div class="d_flex mt_16">
            <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Tổ chức</label>
                <div class="input_container">
                    <input type="text" placeholder="Tổ chức" />
                </div>
            </div>
        </div>
        <div class="mt_16">
            <div class="mt_16 select_time d_flex space_b">
                <div>
                    <label for="" class="font_w500">Thời gian nhận</label>
                    <div class="input_container d_flex">
                        <div class="mr_24 w_50pt">
                            <select class="select_form mr_24" name="" data-placeholder="Chọn tháng">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="w_50pt">
                            <select class="select_form" name="" data-placeholder="Chọn năm">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form_btns">
            <button data-type="Giải thưởng" type="button" class="btn_huy" onclick="showPopup(this)">
                Hủy
            </button>
            <button type="submit" class="btn_xacnhan">Cập nhật</button>
        </div>
    </form>
    <script>
        $('#formGiaiThuong').validate({
            rules: {
                giai_thuong: "required",
            },
            messages: {
                giai_thuong: "Vui lòng nhập tên giải thưởng",
            }
        })
    </script>
<?
} elseif ($text == 'du_an') {
?>
    <form id="formDuAn" action="" class="form_uv">
        <div class="d_flex">
            <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Tên dự án<span class="color_red">*</span></label>
                <div class="input_container">
                    <input type="text" placeholder="Nhập tên dự án" name="du_an" />
                </div>
            </div>
        </div>
        <div class="d_flex mt_16">
            <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Khách hàng<span class="color_red">*</span></label>
                <div class="input_container">
                    <input type="text" placeholder="Nhập tên khách hàng" name="khach_hang" />
                </div>
            </div>
        </div>
        <div class="d_flex mt_16">
            <div class="div_input mt-0 w_100">
                <label for="" class="font_w500 mr_0">Số thành viên<span class="color_red">*</span></label>
                <div class="input_container">
                    <input type="text" placeholder="Số thành viên tham gia dự án" name="so_thanhvien" class="is_check_number"/>
                </div>
            </div>
        </div>
        <div class="d_flex mt_16">
            <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Vị trí<span class="color_red">*</span></label>
                <div class="input_container">
                    <input type="text" placeholder="Vị trí của bạn trong dự án" name="vi_tri_duan" />
                </div>
            </div>
        </div>
        <div class="d_flex mt_16">
            <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Nhiệm vụ<span class="color_red">*</span></label>
                <div class="input_container">
                    <input type="text" placeholder="Nhiệm vụ của bạn trong dự án" name="nhiem_vu" />
                </div>
            </div>
        </div>
        <div class="d_flex mt_16">
            <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Công nghệ sử dụng</label>
                <div class="input_container">
                    <input type="text" placeholder="Công nghệ sử dụng trong dự án" />
                </div>
            </div>
        </div>
        <div class="mt_16">
            <div>
                <label for="" class="font_w500">Thời gian<span class="color_red">*</span></label>
                <div class="d_flex mt_8">
                    <label class="container_checkbox">
                        <input type="checkbox" />
                        <span class="checkmark"></span>
                    </label>
                    <p>Tôi đang làm việc ở đây</p>
                </div>
            </div>
            <div class="mt_16 select_time d_flex space_b">
                <div>
                    <label for="" class="font_w500">Bắt đầu</label>
                    <div class="input_container d_flex">
                        <div class="mr_24 w_50pt select_vali">
                            <select class="select_form mr_24" name="thang_batdau" data-placeholder="Chọn tháng">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="w_50pt select_vali">
                            <select class="select_form" name="nam_batdau" data-placeholder="Chọn năm">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div>
                    <label for="" class="font_w500">Kết thúc</label>
                    <div class="input_container d_flex">
                        <div class="mr_24 w_50pt">
                            <select class="select_form mr_24" name="" data-placeholder="Chọn tháng">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="w_50pt">
                            <select class="select_form" name="" data-placeholder="Chọn năm">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt_16">
            <label for="" class="font_w500">Mô tả</label>
            <textarea class="mt_8" name="" id="" cols="30" rows="5" placeholder="Thêm mô tả chi tiết dự án"></textarea>
        </div>
        <div class="form_btns">
            <button data-type="Dự án" type="button" class="btn_huy" onclick="showPopup(this)">
                Hủy
            </button>
            <button type="submit" class="btn_xacnhan">Cập nhật</button>
        </div>
    </form>
    <script>
        $('#formDuAn').validate({
            rules: {
                du_an: "required",
                khach_hang: "required",
                so_thanhvien: "required",
                vi_tri_duan: "required",
                nhiem_vu: "required",
                thang_batdau: "required",
                nam_batdau: "required",
            },
            messages: {
                du_an: "Vui lòng nhập tên dự án",
                khach_hang: "Vui lòng nhập tên khách hàng",
                so_thanhvien: "Vui lòng nhập số thành viên",
                vi_tri_duan: "Vui lòng nhập vị trí của bạn trong dự án",
                nhiem_vu: "Vui lòng nhập nhiệm vụ của bạn trong dự án",
                thang_batdau: "Vui lòng nhập tháng bắt đầu",
                nam_batdau: "Vui lòng nhập năm bắt đầu",
            }
        })
    </script>
<?
} elseif ($text == 'hoat_dong') {
?>
    <form id="formHoatDong" action="" class="form_uv">
        <div class="d_flex">
            <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Tên tổ chức<span class="color_red">*</span></label>
                <div class="input_container">
                    <input type="text" placeholder="VD: CLB Tình Nguyện Hà Nội" name="to_chuc" />
                </div>
            </div>
        </div>
        <div class="d_flex mt_16">
            <div class="div_input mt-0 w_100 mr_0">
                <label for="" class="font_w500">Vị trí tham gia<span class="color_red">*</span></label>
                <div class="input_container">
                    <input type="text" placeholder="VD: Thành viên" name="vi_tri" />
                </div>
            </div>
        </div>

        <div class="mt_16">
            <div>
                <label for="" class="font_w500">Thời gian<span class="color_red">*</span></label>
                <div class="d_flex mt_8">
                    <label class="container_checkbox">
                        <input type="checkbox" />
                        <span class="checkmark"></span>
                    </label>
                    <p>Tôi vẫn đang hoạt động trong tổ chức này</p>
                </div>
            </div>
            <div class="mt_16 select_time d_flex space_b">
                <div>
                    <label for="" class="font_w500">Bắt đầu</label>
                    <div class="input_container d_flex">
                        <div class="mr_24 w_50pt select_vali">
                            <select class="select_form mr_24" name="thang_batdau" data-placeholder="Chọn tháng">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="w_50pt select_vali">
                            <select class="select_form" name="nam_batdau" data-placeholder="Chọn năm">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div>
                    <label for="" class="font_w500">Kết thúc</label>
                    <div class="input_container d_flex">
                        <div class="mr_24 w_50pt">
                            <select class="select_form mr_24" name="" data-placeholder="Chọn tháng">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="w_50pt">
                            <select class="select_form" name="" data-placeholder="Chọn năm">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt_16">
            <label for="" class="font_w500">Mô tả</label>
            <textarea class="mt_8" name="" id="" cols="30" rows="5" placeholder="Mô tả chi tiết về quá trình tham gia hoạt động xã hội của bạn"></textarea>
        </div>
        <div class="form_btns">
            <button data-type="Hoạt động xã hội và tình nguyện" type="button" class="btn_huy" onclick="showPopup(this)">
                Hủy
            </button>
            <button type="submit" class="btn_xacnhan">Cập nhật</button>
        </div>
    </form>
    <script>
        $('#formHoatDong').validate({
            rules: {
                to_chuc: "required",
                vi_tri: "required",
                thang_batdau: "required",
                nam_batdau: "required",
            },
            messages: {
                to_chuc: "Vui lòng nhập tên tổ chức",
                vi_tri: "Vui lòng nhập vị trí tham gia",
                thang_batdau: "Vui lòng nhập tháng bắt đầu",
                nam_batdau: "Vui lòng nhập năm bắt đầu",
            }
        })
    </script>
<?
}
?>

<script>
    $(".select_form").select2();
    $("input").keypress(function(event) {
        var character = String.fromCharCode(event.keyCode);
        return !(/\s/.test(character));
    });

    $(".is_check_first_space").on('input', (function(event) {
        var value = ($(this).val()).trimStart();
        $(this).val(value);
    }));

    $('.is_check_number').keypress(function(event) {
        var character = String.fromCharCode(event.keyCode);
        return (/[0-9]/.test(character));
    });
</script>