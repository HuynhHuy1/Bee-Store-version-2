<div class="row">
                <div class="row frmtitle" style="margin-bottom: 15px;">
                    <h5>DANH SÁCH LOẠI HÀNG</h5>
                </div>
                <form action="#" method="post">
                        <div class="row mb10 frmdsloai">
                            <form action="#" method="post">
                                <input type="text" name="kyw">
                                <select name="iddm" id="" style="margin-left:10px;">
                                <option value="0" selected>Tất cả</option>
                                <?php
                                foreach($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    echo '<option value="'.$id.'">'.$name.'</option>';
                                }
                                 ?>
                            </select>
                            <input type="submit" value="go" name="listok" style="margin-left: 10px ;">
                </form>
                <div class="row frmcontent">

                            <table>
                                <tr >
                                    <th></th>
                                    <th>MÃ LOẠI</th>
                                    <th>TÊN SẢN PHẨM</th>
                                    <th>HÌNH</th>
                                    <th>GIÁ</th>
                                    <th>LƯỢT XEM</th>
                                    <th></th>
                                </tr>
                                <?php
                                    foreach ($listsanpham as $sanpham){
                                        extract($sanpham);
                                        $suasp = "index.php?act=suasp&id=".$id;
                                        $xoasp = "index.php?act=xoasp&id=".$id;
                                        $hinh = '<img src="Image/T_Shirt/'.$img. '" height ="80px">';
                                        echo '
                                        <tr>
                                            <td><input type="checkbox" name="" id=""></td>
                                            <td>'.$id.'</td>
                                            <td>'.$name.'</td>
                                            <td>'.$hinh.'</td>
                                            <td>'.$price.'</td>
                                            <td>'.$view.'</td>
                                            <td><a href="'.$suasp.'"><input type="button" value="Sửa" style="margin-right: 10px;"></a><a href="'.$xoasp.'"><input type="button" value="Xoá"></a></td>
                                        <tr>';
                                    }
                                ?>
                                
                            </table>
                        </div>
                        <div class="row mb10">
                            <input type="button" value="Chọn tất cả">
                            <input type="button" value="Bỏ chọn tất cả">
                            <input type="button" value="Xoá các mục đã chọn">
                            <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                        </div>
                    </form>
                </div>
            </div>