<form id="formThongTinTK" action="">
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
                    <input type="text" placeholder="Nhập họ và tên" name="ho_ten" class="is_check_first_space"/>
                </div>
            </div>
            <div class="div_input">
                <label for="" class="font_w500">Giới tính<span class="color_red">*</span></label>
                <div class="input_container select_vali">
                    <select name="gioi_tinh" id="gioi_tinh" data-placeholder="Chọn giới tính">
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
                    <input type="text" placeholder="Nhập email" class="is_check_space" name="email"/>
                </div>
            </div>
            <div class="div_input">
                <label for="" class="font_w500">Số điện thoại<span class="color_red">*</span></label>
                <div class="input_container">
                    <input type="text" placeholder="Nhập số điện thoại" name="sdt" class="is_check_number" />
                </div>
            </div>
        </div>
        <div class="d_flex">
            <div class="div_input">
                <label for="" class="font_w500">Vị trí công tác<span class="color_red">*</span></label>
                <div class="input_container select_vali">
                    <select name="vi_tri_ct" id="vi_tri_ct" data-placeholder="Chọn vị trí công tác">
                        <option value=""></option>
                    </select>
                </div>
            </div>
            <div class="div_input">
                <label for="" class="font_w500">Skype</label>
                <div class="input_container">
                    <input type="text" placeholder="Tài khoản Skype" class="is_check_first_space" />
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
    $('#formThongTinTK').validate({
        rules: {
            ho_ten: "required",
            gioi_tinh: "required",
            email: "email",
            sdt: {
                required: true,
                minlength: 10,
                maxlength: 15
            },
            vi_tri_ct: "required",


        },
        messages: {
            ho_ten: "Vui lòng nhập họ tên",
            gioi_tinh: "Vui lòng chọn giới tính",
            email: "Vui lòng nhập đúng định dạng email",
            sdt: {
                required: "Vui lòng nhập số điện thoại",
                minlength: "Số điện thoại có tối thiểu 10 số và nhiều nhất là 15 số",
                maxlength: "Số điện thoại có tối thiểu 10 số và nhiều nhất là 15 số"
            },
            vi_tri_ct: "Vui lòng chọn vị trí công tác",

        }
    })
    $(".is_check_space").keypress(function(event) {
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