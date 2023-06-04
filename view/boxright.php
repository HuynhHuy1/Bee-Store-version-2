<div class="row mb">
                    <div class="boxtitle">Tài khoản</div>
                    <div class="boxcontent formtaikhoan">
                        <form action="#" method="POST">
                            <div class="row mb10">
                            Tên đăng nhập<br>
                            <input type="text" name="user" id="">
                            </div>
                            <div class="row mb10">
                             Mật khảu <br>
                            <input type="password" name="pass" id="">
                            </div>
                            <div class="row mb10">
                            <input type="checkbox" name="" id=""> Ghi nhớ tài khoản </div>
                            <div class="row mb10">
                            <input type="submit" value="Đăng nhập">
                            </div>
                            <li>
                                <a href="#"> Quên mật khẩu</a>
                            </li>
                            <li>
                                <a href="index.php?act=dangky">Đăng kí thành viên</a>
                            </li>
                        </form>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">Danh mục</div>
                    <div class="boxcontent2 menudoc">
                        <ul>
                            <?php
                            foreach ($dsdm as $dm) {
                                extract($dm);
                                $linkdm = "index.php?act=sanpham&iddm=".$id;
                                echo '<li>
                                        <a href="'.$linkdm.'">'.$name.'</a>
                                      </li>';
                            }
                            ?>
                            <!-- <li>
                                <a href="#">Đồng hồ</a>
                            </li>
                            <li>
                                <a href="#">Laptop</a>
                            </li>
                            <li>
                                <a href="#">Điện thoại</a>
                            </li>
                            <li>
                                <a href="#">Ba lô</a>
                            </li> -->

                        </ul>
                    </div>
                    <div class="boxfooter searchbox">
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" name="kyw" id="">
                            <input type="submit" name="timkiem" value="Tìm kiếm">
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="boxtitle">Top 10 yêu thích</div>
                    <div class="row boxcontent">
                        <?php
                        foreach($dstop10 as $sp){
                            extract($sp);
                            $linksp = "index.php?act=sanphamct&idsp=".$id;
                            $img = $img_path.$img;
                            echo '<div class="row mn10 top10">
                            <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                                    <a href="'.$linksp.'">'.$name.'</a>
                                 </div>';
                        } 
                        ?>
                        <!-- <div class="row mn10 top10">
                            <img src="images/products/1001.jpg" alt="">
                            <a href="#"> Sir Rodney's Marmalade</a>
                        </div>
                        <div class="row mn10 top10">
                            <img src="images/products/1002.jpg" alt="">
                            <a href="#"> Sir Rodney's Marmalade</a>
                        </div>
                        <div class="row mn10 top10">
                            <img src="images/products/1003.jpg" alt="">
                            <a href="#"> Sir Rodney's Marmalade</a>
                        </div>
                        <div class="row mn10 top10">
                            <img src="images/products/1004.jpg" alt="">
                            <a href="#"> Sir Rodney's Marmalade</a>
                        </div>
                        <div class="row mn10 top10">
                            <img src="images/products/1005.jpg" alt="">
                            <a href="#"> Sir Rodney's Marmalade</a>
                        </div>
                        <div class="row mn10 top10">
                            <img src="images/products/1006.jpg" alt="">
                            <a href="#"> Sir Rodney's Marmalade</a>
                        </div>
                        <div class="row mn10 top10">
                            <img src="images/products/1007.jpg" alt="">
                            <a href="#"> Sir Rodney's Marmalade</a>
                        </div>
                        <div class="row mn10 top10">
                            <img src="images/products/1008.jpg" alt="">
                            <a href="#"> Sir Rodney's Marmalade</a>
                        </div>
                        <div class="row mn10 top10">
                            <img src="images/products/1009.jpg" alt="">
                            <a href="#"> Sir Rodney's Marmalade</a>
                        </div>
                        <div class="row mn10 top10">
                            <img src="images/products/1010.jpg" alt="">
                            <a href="#"> Sir Rodney's Marmalade</a>
                        </div>
                        <div class="row mn10 top10">
                            <img src="images/products/1001.jpg" alt="">
                            <a href="#"> Sir Rodney's Marmalade</a>
                        </div> -->
                    </div>
                </div>