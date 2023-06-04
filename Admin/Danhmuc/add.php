            <div class="row">
                <div class="row frmtitle">
                    <h1 style="margin: 0; ;" >THÊM MỚI LOẠI HÀNG</h1>
                </div>
                <div class="row frmcontent">
                    <form action="index.php?act=adddm" method="post">
                        <div class="row mb10">
                            Mã loại<br>
                            <input type="text" name="maloai" disabled>
                        </div>
                        <div class="row mb10">
                            Tên loại<br>
                            <input type="text" name="tenloai">
                        </div>
                        <div class="row mb10">
                            <input type="submit" value=" THÊM MỚI" name="themmoi"margin-right: 15px ;>
                            <input type="reset" value=" NHẬP LẠI" style="margin-right: 15px ;" >
                            <a href="index.php?act=listdm"><input type="button" value=" DANH SÁCH" style="margin-right: 15px ;"></a>
                        </div>
                        <?php
                            if(isset($thongbao)){
                                echo $thongbao;
                            }
                        ?>
                    </form>
                </div>
                
            </div>