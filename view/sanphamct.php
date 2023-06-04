<div class="content">
   <div class="row">
      <div class="col-md-7">
         <div class="content__img">
            <?php
               extract($onesp);
               $img = $img_path.$img;
               echo '<img
               src="'.$img.'"
               alt=""
               class="content__img--content"
               />'
               ?>
         </div>
      </div>
      <div class="col-md-5">
         <div class="content__info">
            <?php
               extract($onesp);
               echo '<h3 class="content__info__title">'.$name.'</h3>
               <h3 class="content__info__price">'.$price.',000 VND</h3>'
               ?>
            <div class="content__info__select_color">
               <div class="content__info__select_color--select">
                  <input
                     type="radio"
                     name="color"
                     class="content__info__select_color--input"
                     />
                  <p class="content__info__select_color--color">White</p>
               </div>
               <div class="content__info__select_color--select">
                  <input
                     type="radio"
                     name="color"
                     class="content__info__select_color--input"
                     />
                  <p class="content__info__select_color--color">Black</p>
               </div>
               <div class="content__info__select_color--select">
                  <input
                     type="radio"
                     name="color"
                     class="content__info__select_color--input"
                     value=""
                     />
                  <p class="content__info__select_color--color">Blue</p>
               </div>
            </div>
            <div class="content__info__select_size">
               <div class="content__info__select_size--input">
                  <p class="content__info__select_size--input--paragrap">S</p>
               </div>
               <div class="content__info__select_size--input">
                  <p class="content__info__select_size--input--paragrap">M</p>
               </div>
               <div class="content__info__select_size--input">
                  <p class="content__info__select_size--input--paragrap">L</p>
               </div>
            </div>
            <!-- <div class="content__info__count">
              <form action="index.php?act=addtocart" method="post">
                <input type="hidden" name="id" value="'.$id.'">
                <input type="hidden" name="name" value="'.$name.'">
                <input type="hidden" name="img" value="'.$img.'">
                <input type="text" placeholder="Số lượng sản phẩm" name="count">
              </form> -->
               <!-- <input
                  type="submit"
                  class="content__info__count--content"
                  value="+"
                  />
               <label for="" class="content__info__count__number">1</label>
               <input
                  type="submit"
                  class="content__info__count--content"
                  value="-"
                  /> -->
            </div>
            <div class="content__info__shoping">
              <?php
              echo '<form action="index.php?act=addtocart" method="post" class="content__info__shoping__form">
              <input type="text" placeholder="Số lượng" name="count" id="count">
              <input type="hidden" name="id" value="'.$id.'">
              <input type="hidden" name="name" value="'.$name.'">
              <input type="hidden" name="img" value="'.$img.'">
              <input type="hidden" name="price" value="'.$price.'">
              <input
                 type="submit"
                 class="content__info__shoping__form__product"
                 value="Đặt hàng"
                 id="buy_product"
                 name ="buy"
              />

           </form>'
                            
              ?>

            </div>
            <div class="content__info__describe">
               <h3 class="content__info__describe--title">Mô tả</h3>
               <div class="content__info__describe--content">
                  <p class="content__info__describr--content--item">
                     Chất liệu: Vải cotton
                  </p>
                  <p class="content__info__describr--content--item">Size: S/M/L</p>
                  <p class="content__info__describr--content--item" id="paragrap3">
                     Hãy cân nhắc tham khảo size chart để lựa chọn được size áo phù hợp
                     nhất với bản thân bạn nhé!
                  </p>
               </div>
               <img
                  src="https://file.hstatic.net/200000195489/file/size_swe_d316ea96cb584dae858b1a62222cab35_grande.png"
                  alt=""
                  class="content__info__describe--size_img"
                  />
            </div>
         </div>
      </div>
   </div>
</div>
<div class="related_product">
      <h1 class="related_product--title">Sản phẩm liên quan</h1>
      <div class="row related_product--img">
        <a class="col-md-3" href="itemrl1.html" style="text-decoration: none;">
          <div class="related_product--img--item text-center">
            <img
              src="https://product.hstatic.net/200000195489/product/agd1_7f22e3a3b8e649e899c9d2bffe0074f8_master.jpg"
              alt=""
              class="related_product--img--item--img"
            />
            <h4 class="related_product--img--item--paragrap">ANGLE TEE</h4>
            <h4 class="related_product--img--item--paragrap">350,000₫</h4>
          </div>
        </a>        
        <a class="col-md-3" href="itemrl2.html" style="text-decoration: none;">
          <div class="related_product--img--item">
              <img
                src="https://product.hstatic.net/200000195489/product/cloud_tee_trang_08fab21bd3a0474b9f67f1cba5c19848_master.jpg"
                alt=""
                class="related_product--img--item--img"
              />
              <h4 class="related_product--img--item--paragrap">ÁO THUN CLOUD MST</h4>
              <h4 class="related_product--img--item--paragrap">340,000₫</h4>
          </div>
        </a>
        <a class="col-md-3" href="itemrl2.html" style="text-decoration: none;">
          <div class="related_product--img--item">
              <img
                src="https://product.hstatic.net/200000195489/product/cloud_tee_trang_08fab21bd3a0474b9f67f1cba5c19848_master.jpg"
                alt=""
                class="related_product--img--item--img"
              />
              <h4 class="related_product--img--item--paragrap">ÁO THUN CLOUD MST</h4>
              <h4 class="related_product--img--item--paragrap">340,000₫</h4>
          </div>
        </a>
        <a class="col-md-3" href="itemrl2.html" style="text-decoration: none;">
          <div class="related_product--img--item">
              <img
                src="https://product.hstatic.net/200000195489/product/cloud_tee_trang_08fab21bd3a0474b9f67f1cba5c19848_master.jpg"
                alt=""
                class="related_product--img--item--img"
              />
              <h4 class="related_product--img--item--paragrap">ÁO THUN CLOUD MST</h4>
              <h4 class="related_product--img--item--paragrap">340,000₫</h4>
          </div>
        </a>
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