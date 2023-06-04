
    <div class="content">
      <div class="row row__content">
        <div class="col-md-3">
          <div class="content__list">
            <h3 class="content__list--title">BEESTORE</h3>
            <ol class="content__list--content">
                          <?php
                            foreach ($dsdm as $dm) {
                                extract($dm);
                                $linkdm = "index.php?act=sanpham&iddm=".$id;
                                echo '<a href="'.$linkdm.'" style="text-decoration: none; color: #5c5c5c">
                                <li class="content__list--title--menu">'.$name.'</li>
                              </a>';
                            }
                          ?>
            </ol>
          </div>
        </div>

        <div class="col-md-9">
          <div class="content__product">
            <h2 class="content__product--title"><?=$tendanhmuc?></h2>
            <!-- product__item -->
            <div class="content__product__content">
              <!-- Row -->
              <div class="row"></div>
              <div class="content__product__content__row">
              <?php
                  foreach ($dssp as $sp) {
                      extract($sp);
                      
                      $hinh = $img_path.$img;
                      $linksp = "index.php?act=sanphamct&idsp=".$id;
                      echo '<a href="'.$linksp.'" class="content__product__row--link">
                      <div class="content__product__content__row--item">
                        <img
                          src="'.$hinh.'"
                          alt=""
                        />
                        <div class="content__product__content__row--item--paragrap">
                          <h4>'.$name.'</h4>
                          <h4>'.$price.',000 VND</h4>
                        </div>
                      </div>
                    </a>';
                  }
                  ?>
              </div>
              <!-- Row -->
            </div>
            <!-- <div class="content__product__menu_number">
              <p class="content__product__menu_number--item">1</p>
              <p class="content__product__menu_number--item">2</p>
              <svg
                class="logo_muiten"
                version="1.1"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px"
                y="0px"
                viewBox="0 0 31 10"
                style="enable-background: new 0 0 31 10; width: 31px; height: 10px"
                xml:space="preserve"
              >
                <polygon points="31,5 25,0 25,4 0,4 0,6 25,6 25,10 "></polygon>
              </svg>
            </div> -->
          </div>
        </div>
      </div>
    </div>

     <!-- footer -->
     <div class="footer">
      <div class="footer__img__sizeM">
        <div class="footer__img__sizeM__content" >
          <img src="https://file.hstatic.net/200000195489/file/raw1321_3563c52a235c4d06a9e73da806bac647.jpg" alt="" class="footer__img__sizeM--content-img" id="content21">
        </div>
        <div class="footer__img__sizeM__content" >
          <img src="https://file.hstatic.net/200000195489/file/raw0877_5e85efeae0484b3da855db665b808040.jpg" alt="" class="footer__img__sizeM--content-img" id="content21">
        </div>
        <div class="footer__img__sizeM__content" >
          <img src="https://file.hstatic.net/200000195489/file/raw1308_22caef964d514bebb5b1bfb90568b368.jpg" alt="" class="footer__img__sizeM--content-img" id="content21">
        </div>
        <div class="footer__img__sizeM__content" >
          <img src="https://file.hstatic.net/200000195489/file/raw0907_312bf46e87674054b4d2ddd0c079273a.jpg" alt="" class="footer__img__sizeM--content-img" id="content21">
        </div>
        <div class="footer__img__sizeM__content" >
          <img src="https://file.hstatic.net/200000195489/file/raw0977_3c636405a64b47519eeb0490a48055ec.jpg" alt="" class="footer__img__sizeM--content-img" id="content21">
        </div>
        <div class="footer__img__sizeM__content" >
          <img src="https://file.hstatic.net/200000195489/file/raw1033_247a1e511eb54fe3aa9df7d35709e9ab.jpg" alt="" class="footer__img__sizeM--content-img" id="content21">
        </div>
      </div>
    </div>
      <div class="footer__thongtinlienhe">
        <div class="row row_footer__thongtinlienhe">
          <div class="col-md-4 col_footer__thongtinlienhe ">
            <div class="footer__thongtinlienhe__content--logo">
              <h3
                class="footer__thongtinlienhe__content--logo--content"
                id="gioithieu"
              >
                GIỚI THIỆU
              </h3>
              <h3
                class="footer__thongtinlienhe__content--logo--content"
                id="beestore"
              >
                BEESTORE ESSENCE
              </h3>
              <img
                src="https://file.hstatic.net/200000195489/file/mis_995656bbd2e64d5888b95d037ad885ab.png"
                alt=""
                class="footer__thongtinlienhe__content--logo--content"
                id="logo__content"
              />
            </div>
          </div>
          <div class="col-md-4 col_footer__thongtinlienhe">
            <div class="footer__thongtinlienhe__content--diachi">
              <h3 class="footer__thongtinlienhe__content--diachi--title">
                THÔNG TIN LIÊN HỆ
              </h3>
              <ol class="footer__thongtinlienhe__content--diachi--list">
                <li class="footer__thongtinlienhe__content--diachi--list--content">
                  Địa chỉ: 464 Lê Trọng Tấn, tp Đà Nẵng
                </li>
                <li class="footer__thongtinlienhe__content--diachi--list--content">
                  Điện thoại: 0935484164
                </li>
                <li class="footer__thongtinlienhe__content--diachi--list--content">
                  Mail: huyhn2.21it@vku.udn.vn
                </li>
              </ol>
            </div>
          </div>
          <div class="col-md-4 col_footer__thongtinlienhe">
            <div class="footer__thongtinlienhe__content--MXH">
              <h3 class="footer__thongtinlienhe__content--MXH--title">
                THEO DÕI CHÚNG TÔI
              </h3>
              
              <a
                href="https://www.facebook.com/boicodontimgirlcungtke"
                style="text-decoration: none"
              >
                <div class="footer__thongtinlienhe__content--MXH--fb">
                  <img
                    src="https://icon2.cleanpng.com/20180412/sge/kisspng-question-mark-ip-multimedia-subsystem-information-logo-facebook-5acfeb02079b46.3904295615235755540312.jpg"
                    alt=""
                    class="footer__thongtinlienhe__content--MXH--fb--img"
                  />
                  <p class="footer__thongtinlienhe__content--MXH--fb--p">
                    Facebook
                  </p>
                </div>
              </a>
              <a
                href="https://www.instagram.com/huy2112003/"
                style="text-decoration: none"
              >
                <div class="footer__thongtinlienhe__content--MXH--ig">
                  <img
                    src="https://e7.pngegg.com/pngimages/730/864/png-clipart-instagram-logo-computer-icons-insta-logo-text-computer-icons.png"
                    alt=""
                    class="footer__thongtinlienhe__content--MXH--ig--img"
                  />
                  <p class="footer__thongtinlienhe__content--MXH--ig--p">
                    Instagram
                  </p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer__copyright">
        <p>Copyright © 2022 BEESTORE. Powered by Haravan</p>
      </div>
    </div>