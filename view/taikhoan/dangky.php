<div class="content">
          <div class="content__login">
            <div class="content__login--title">
              <h1 class="content__login--title--item">TẠO TÀI KHOẢN</h1>
            </div>
            <form action="index.php?act=dangky" method="post" class="content__login--form">
              <input type="text" name="email" id="" class="content__login--form--item" placeholder="Email">
              <input type="text" name="user" id="" class="content__login--form--item" placeholder="Tên đăng nhập">
              <input type="password" name="pass" class="content__login--form--item" placeholder="Mật khẩu">

              <input type="submit" class="content__login--form--submit" id="submit_1" value="ĐĂNG KÍ" name= 'dangky'>
              
              <a href="index.php?act=dangnhap" style="text-decoration: none; color: #5c5c5c;">
              <label for="" class="content__login--form--label">Đã có tài khoản?</label>
              </a>
            </form>
            <?php
                if(isset($thongbao)){
                    echo $thongbao;
                }
            ?>
          </div>
</div>