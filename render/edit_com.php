<form id="formThongTinCty" action="">
  <div class="avatar_account">
    <label class="font_w500">Avatar</label>
    <div class="input_container d_flex align_c">
      <img src="../images/doggo.jpg" alt="" />
      <button type="button" class="change_avatar d_flex align_c flex_center">
        Đổi logo
      </button>
    </div>
  </div>
  <div>
    <div class="d_flex">
      <div class="div_input">
        <label for="" class="font_w500">Tên công ty<span class="color_red">*</span></label>
        <div class="input_container">
          <input type="text" placeholder="Nhập tên công ty" name="ten_cty"/>
        </div>
      </div>
      <div class="div_input">
        <label for="" class="font_w500">Mã số thuế</label>
        <div class="input_container">
          <input type="text" placeholder="Nhập mã số thuế" />
        </div>
      </div>
    </div>
    <div class="d_flex">
      <div class="div_input">
        <label for="" class="font_w500">Số điện thoại<span class="color_red">*</span></label>
        <div class="input_container">
          <input type="text" placeholder="Nhập số điện thoại" name="sdt_cty"/>
        </div>
      </div>
      <div class="div_input">
        <label for="" class="font_w500">Quy mô nhân sự</label>
        <div class="input_container">
          <select name="" id="quymo_ns" data-placeholder="Chọn quy mô nhân sự">
            <option value=""></option>
          </select>
        </div>
      </div>
    </div>
    <div class="d_flex">
      <div class="div_input">
        <label for="" class="font_w500">Email<span class="color_red">*</span></label>
        <div class="input_container">
          <input type="text" placeholder="Nhập email công ty" name="email_cty"/>
        </div>
      </div>
      <div class="div_input">
        <label for="" class="font_w500">Website</label>
        <div class="input_container">
          <input type="text" placeholder="Nhập website công ty" />
        </div>
      </div>
    </div>
    <div class="d_flex flex_column mt_16">
      <label for="" class="font_w500">Địa chỉ<span class="color_red">*</span></label>
      <div class="d_flex select_city">
        <div class="div_input mt-0">
          <div class="input_container select_vali">
            <select class="address" name="tinh_thanh" id="city" data-placeholder="Chọn tỉnh/thành phố">
              <option value=""></option>
            </select>
          </div>
        </div>
        <div class="div_input mt_8 select_vali">
          <select class="address" name="quan_huyen" id="district" data-placeholder="Chọn quận huyện">
            <option value=""></option>
          </select>
        </div>
      </div>
      <div class="w_100 mt_16">
        <textarea name="dia_chi" id="" cols="30" rows="3" placeholder="Địa chỉ chi tiết"></textarea>
      </div>
    </div>
    <div class="mt_16">
      <label for="" class="font_w500">Mô tả công ty<span class="color_red">*</span></label>
      <textarea class="mt_8" name="mo_ta" id="" cols="30" rows="5" placeholder="Nhập mô tả công ty (tối thiểu 150 ký tự)"></textarea>
    </div>
    <div class="mt_16">
      <label for="">Video giới thiệu công ty (định dạng mp4)</label>
      <div class="mt_8 d_flex border_gray upload_vid_container position_r h_42px">
        <div id="filename" class="d_flex align_c w_100 position_r">
          <p class="gray ellipsis">Tải lên video giới thiệu công ty <span>(Dung lượng tối đa 100MB)</span></p>
          <img hidden src="../images/x_red.svg" alt="" class="position_a remove_vid">
        </div>
        <div class="upload_video_container d_flex align_c flex_center position_a">
          <label class="upload_vid" for="upload_vid"><img src="../images/add_file.svg" alt=""></label>
          <input type="file" id="upload_vid" accept="" />
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
  $('.address').select2()
  $('#quymo_ns').select2()
  $('#upload_vid').change(function() {
    var fileName = $(this)
      .val()
      .replace(/C:\\fakepath\\/i, "");
    $('.remove_vid').show();
    if (fileName != '') {
      $("#filename p").text(fileName);
    }
  })
  $('.remove_vid').click(function() {
    var text = 'Tải lên video giới thiệu công ty <span>(Dung lượng tối đa 100MB)</span>';
    $("#filename p").html(text);
    $(this).hide();
  })

  $('#formThongTinCty').validate({
    rules: {
      ten_cty: "required",
      sdt_cty: "required",
      email_cty: "required",
      tinh_thanh: "required",
      quan_huyen: "required",
      dia_chi: "required",
      mo_ta: "required",

    },
    messages: {
      ten_cty: "Vui lòng nhập tên công ty",
      sdt_cty: "Vui lòng nhập số điện thoại",
      email_cty: "Vui lòng nhập email công ty",
      tinh_thanh: "Vui lòng chọn tỉnh thành",
      quan_huyen: "Vui lòng chọn quận huyện",
      dia_chi: "Vui lòng nhập địa chỉ chi tiết",
      mo_ta: "Vui lòng nhập mô tả về công ty",
    }
  })
</script>