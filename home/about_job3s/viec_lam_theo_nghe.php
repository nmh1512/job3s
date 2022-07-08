<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="../../css/style_h.css" />
  </head>

  <body>
    <?
  include "../../includes/before_header.php"
  ?>
    <div class="container_about box_sodoweb">
      <section>
        <div class="bg_f5 text_c ptb_48">
          <h1 class="font_s28 main_color">Việc làm theo ngành nghề</h1>
          <div class="search box_center mt_24 position_r">
            <input class="w_100" type="text" value="" placeholder="Tìm kiếm nhanh" />
          </div>
        </div>
      </section>
      <section>
        <div class="plr_resp ptb_48px d_flex flex_w">
          <? for($i = 0; $i < 56; $i++) { ?>
          <div class="w_33pt mb_12">
            <a href="">Bán hàng</a>
          </div>
          <? } ?>
        </div>
      </section>
    
      <section>
        <div class="d_flex plr_resp ptb_48px bg_wb">
          <div class="w_80pt">
            <h2 class="font_s24 main_color">
              Ứng dụng tìm việc làm Job3s tuyển dụng thông minh
            </h2>
            <p class="mt_12">
              Tải ngay app để đăng tin và tìm việc làm miễn phí
            </p>
            <div class="d_flex space_b mt_24 box_download_info w_65pt">
              <div class="text_c">
                <p class="mb_24">Ứng dụng tìm việc Job3s</p>
                <img src="../../images/app_qr.svg" alt="" />
                <div class="url_download">
                  <a
                    class="btn_bg_white d_flex align_c flex_center border_none shadow_15"
                    href=""
                    >Tải App tìm việc Job3s</a
                  >
                </div>
              </div>
              <div class="text_c">
                <p class="mb_24">Ứng dụng CV Job3s</p>
                <img src="../../images/app_qr.svg" alt="" />
                <div class="url_download">
                  <a
                    class="btn_bg_white d_flex align_c flex_center border_none shadow_15"
                    href=""
                    >Tải App CV365</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="w_50pt text_c space_b">
            <img src="../../images/person_app.png" alt="" />
          </div>
        </div>
      </section>
    </div>
    <?
  include "../../includes/footer.php";
  ?>
  </body>
</html>
