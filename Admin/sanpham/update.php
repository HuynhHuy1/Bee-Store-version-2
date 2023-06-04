<?php
    if(is_array($dm)){
        extract($dm);
    }
    $hinh = '<img src="upload/'.$img. '" height ="80px">';
?>
<div class="row">
                <div class="row frmtitle">
                    <h1 style="margin: 0; ;" > CẬP NHẬT LOẠI HÀNG</h1>
                </div>
                <div class="row frmcontent">
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                        <div class="row mb10">
                        <select name="iddm" id="" style="margin-left:10px;">
                                <option value="0" selected>Tất cả</option>
                                <?php
                                foreach($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    if($iddm == $id){
                                    echo '<option value="'.$id.'" selected>'.$name.'</option>';
                                    }
                                    echo '<option value="'.$id.'">'.$name.'</option>';
                                }
                                 ?>
                            </select>
                        </div>
                        <div class="row mb10">
                            Tên sản phẩm<br>
                            <input type="text" name="tensanpham" value="<?=$name?>">
                        </div>
                        <div class="row mb10">
                            Giá<br>
                            <input type="text" name="giasp" value="<?=$price?>">
                        </div>
                        <div class="row mb10">
                            Hình<br>
                            <input type="file" name="hinh">
                            <?=$hinh?>
                        </div>
                        <div class="row mb10">
                            Mô tả<br>
                            <textarea name="mota" id="" cols="30" rows="10"><?=$description?>"</textarea>
                        </div>
                        
                        <div class="row mb10">
                            <input type="hidden" name="id" value="<?=$id?>">
                            <input type="submit" value=" CẬP NHẬT" name="capnhat"margin-right: 15px ;>
                            <input type="reset" value=" NHẬP LẠI" style="margin-right: 15px ;" >
                            <a href="index.php?act=listsp"><input type="button" value=" DANH SÁCH" style="margin-right: 15px ;"></a>
                        </div>
                        <?php
                            if(isset($thongbao)){
                                echo $thongbao;
                            }
                        ?>
                    </form>
                </div>
                
            </div>