<div class="w3-content w3-display-container banner">
  <img class="mySlides" src="https://file.hstatic.net/200000195489/file/z3879780954051_7f34d0352a90667ceb5c1f46a65d7675_copy_12f7142637c64483a6f0e6c9a020d51d.jpg" style="width: 1349px;">
  <img class="mySlides" src="https://file.hstatic.net/200000195489/file/website_0617672658b14fd798d1511498ae4159.jpg" style="width: 1686px">
  <img class="mySlides" src="https://file.hstatic.net/200000195489/file/z2743884719247_334bdc0c02a44f4270fa8421d2926407_90a22b395f364dcfbfd5515eecafd412.jpg" style="width: 1349px">


  <button class="w3-button w3-black prev" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black next" onclick="plusDivs(1)">&#10095;</button>
</div>
<div class="center">
      <div class ="center__content1">
        <div class="center_content1_title"><h4>NEW ITEMS</h4></div>
        <div class="center_content1_row">
          <?php
              $i = 0;
              foreach ($spnew as $sp) {
                  extract($sp);
                  $hinh = $img_path.$img;
                  $linksp = "index.php?act=sanphamct&idsp=".$id;
                  echo '<a href="'.$linksp.'" style="text-decoration: none;" class="center_content1_row_item">
                    <div >
                      <img
                        src="'.$hinh.'"
                        alt=""
                        style="width: 100%"
                      />
                      <p>'.$name.'</p>
                      <p>'.$price.',000 VND</p>
                    </div>
                  </a>';
                  $i = $i + 1;
                  
              }              
          ?>
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