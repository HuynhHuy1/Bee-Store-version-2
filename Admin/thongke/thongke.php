<div class="row">
                <div class="row frmtitle">
                    <h1 >DANH SÁCH LOẠI HÀNG</h1>
                </div>
                <div class="row frmcontent">
                    <form action="#" method="post">
                        <div class="row mb10 frmdsloai">
                            <table>
                                <tr >
                                    <th>MÃ DANH MỤC</th>
                                    <th>TÊN DANH MỤC</th>
                                    <th>SỐ LƯỢNG</th>
                                    <th>GIÁ CAO NHẤT</th>
                                    <th>GIÁ THẤP NHẤT</th>
                                    <th>GIÁ TRUNG BÌNH</th>
                                </tr>
                                <?php
                                    foreach($listthongke as $tk){
                                        extract($tk);
                                        echo '
                                        <tr>
                                            <td>'.$madm.'</td>
                                            <td>'.$tendm.'</td>
                                            <td>'.$maxprice.'</td>
                                            <td>'.$minprice.'</td>
                                            <td>'.$avg.'</td>
                                        <tr>
                                        ';
                                    }
                                ?>


                            </table>
                        </div>
                        <div class="row mb10">
                            <input type="button" value="Chọn tất cả">
                            <input type="button" value="Bỏ chọn tất cả">
                            <input type="button" value="Xoá các mục đã chọn">
                            <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
                        </div>
                    </form>
                </div>
                
            </div>