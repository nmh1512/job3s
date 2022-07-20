<form action="">
    <div class="avatar_account">
        <label class="font_w500">Avatar</label>
        <div class="input_container d_flex align_c">
            <img src="../images/img_logo.svg" alt="" />
            <button type="button" class="change_avatar d_flex align_c flex_center">
                Đổi avatar
            </button>
        </div>
    </div>
    <div>
        <div class="d_flex">
            <div class="div_input">
                <label for="" class="font_w500">Họ và tên<span class="color_red">*</span></label>
                <div class="input_container">
                    <input type="text" placeholder="Nhập họ và tên" />
                </div>
            </div>
            <div class="div_input">
                <label for="" class="font_w500">Giới tính<span class="color_red">*</span></label>
                <div class="input_container">
                    <select name="" id="gioi_tinh" data-placeholder="Chọn giới tính">
                        <option value=""></option>
                        <option value="1">Nam</option>
                        <option value="2">Nữ</option>
                        <option value="3">Khác</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="d_flex">
            <div class="div_input">
                <label for="" class="font_w500">Email</label>
                <div class="input_container">
                    <input type="text" placeholder="Nhập email" />
                </div>
            </div>
            <div class="div_input">
                <label for="" class="font_w500">Số điện thoại<span class="color_red">*</span></label>
                <div class="input_container">
                    <input type="text" placeholder="Nhập số điện thoại" />
                </div>
            </div>
        </div>
        <div class="d_flex">
            <div class="div_input">
                <label for="" class="font_w500">Vị trí công tác<span class="color_red">*</span></label>
                <div class="input_container">
                    <select name="" id="vi_tri_ct" data-placeholder="Chọn vị trí công tác">
                        <option value=""></option>
                    </select>
                </div>
            </div>
            <div class="div_input">
                <label for="" class="font_w500">Skype<span class="color_red">*</span></label>
                <div class="input_container">
                    <input type="text" placeholder="Tài khoản Skype" />
                </div>
            </div>
        </div>
    </div>

    <div class="form_btns">
        <button type="button" class="btn_huy" onclick="showPopup('#popupXacNhanHuy')">Hủy</button>
        <button type="submit" class="btn_xacnhan">Lưu</button>
    </div>
</form>
<script>
    $("#gioi_tinh").select2();
    $("#vi_tri_ct").select2();
</script>