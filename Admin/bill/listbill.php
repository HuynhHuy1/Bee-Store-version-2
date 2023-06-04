<div class="row">
                <div class="row frmtitle">
                    <h1 >DANH SÁCH LOẠI HÀNG</h1>
                </div>
                <div class="row frmcontent">
                    <form action="#" method="post">
                        <div class="row mb10 frmdsloai">
                            <table>
                                <tr >
                                    <th></th>
                                    <th>MÃ ĐƠN HÀNG</th>
                                    <th>TÊN ĐƠN HÀNG</th>
                                    <th>GIÁ TRỊ ĐƠN HÀNG</th>
                                    <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                                    <th>THAO TÁC</th>
                                    
                                </tr>
                                <?php
                                    foreach($listbill as $bill){
                                        extract($bill);
                                        $kh = $bill["bill_name"].'
                                        <br> '.$bill["bill_email"].'
                                        <br>'.$bill["bill_address"].'
                                        <br> '.$bill["bill_tel"].'
                                        ';
                                        echo '
                                        <tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>DAM-'.$bill['id'].'</td>
                                        <td>'.$kh.'</td>
                                        <td><strong>'.$bill['total'].'</strong> VND</td>
                                        <td>Đơn hàng mới</td>
                                        <tr>
    
                                        ';
                                    }
                                ?>
                                
                            </table>
                        </div>
                    </form>
                </div>
                
            </div>