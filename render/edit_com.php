<form action="">
            <div class="avatar_account">
              <label class="font_w500">Avatar</label>
              <div class="input_container d_flex align_c">
                <img src="../images/doggo.jpg" alt="" />
                <button type="button" class="change_avatar d_flex align_c flex_center">
                  Đổi logo
                </button>
              </div>
            </div>
            <div class="d_flex">
              <div class="div_input">
                <label for="" class="font_w500">Tên công ty<span class="color_red">*</span></label>
                <div class="input_container">
                  <input type="text" placeholder="Nhập tên công ty" />
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
                  <input type="text" placeholder="Nhập mã số thuế" />
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
                  <input type="text" placeholder="Nhập email công ty" />
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

              <div class="d_flex">
                <div class="div_input mt-0">
                  <div class="input_container">
                    <select class="address" name="" id="city" data-placeholder="Chọn tỉnh/thành phố">
                      <option value=""></option>
                    </select>
                  </div>
                </div>
                <div class="div_input mt_8">
                <select class="address" name="" id="district" data-placeholder="Chọn tỉnh/thành phố">
                      <option value=""></option>
                    </select>
                </div>
              </div>
              <div class="w_100 mt_16">
                <textarea name="" id="" cols="30" rows="3" placeholder="Địa chỉ chi tiết"></textarea>
              </div>
            </div>
            <div class="mt_16">
              <label for="" class="font_w500">Mô tả công ty<span class="color_red">*</span></label>
              <textarea class="mt_8" name="" id="" cols="30" rows="5" placeholder="Nhập mô tả công ty (tối thiểu 150 ký tự)"></textarea>
            </div>
            <div class="mt_16">
              <label for="">Video giới thiệu công ty (định dạng mp4)</label>
              <div class="mt_8 d_flex border_gray upload_vid_container position_r h_42px">
                <input id="filename" type="text" placeholder="Tải lên video giới thiệu công ty (Dung lượng tối đa 100MB)" readonly>
                <div class="upload_video_container d_flex align_c flex_center position_a">
                  <label class="upload_vid" for="upload_vid"><img src="../images/add_file.svg" alt=""></label>
                  <input type="file" id="upload_vid" />
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
    $("#filename").val(fileName);   
    // console.log(this.files[0].size);
  })
          </script>