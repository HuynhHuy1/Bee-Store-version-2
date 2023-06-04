<html>
<head>
    <title>PHP2-Demo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="boxcenter">
            <div class="row mb headeradmin">
                <h1> QUẢN LÝ LOẠI HÀNG</h1>
            </div>
            <div class="row mb menu" style="padding-top: 15px ;">
                <ul>
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Danh mục</a></li>
                    <li><a href="#">Quản lý sản phẩm</a></li>
                    <li><a href="#">Hàng hoá</a></li>
                    <li><a href="#">Khách hàng</a></li>
                    <li><a href="#">Bình luận</a></li>
                    <li><a href="#">Thống kê</a></li>
                </ul>
            </div>
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
                                    <th>MÃ LOẠI</th>
                                    <th>TÊN LOẠI</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>0001</td>
                                    <td>Đồng hồ</td>
                                    <td><input type="button" value="Sửa" style="margin-right: 10px;"><input type="button" value="Xoá"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                        <div class="row mb10">
                            <input type="button" value="Chọn tất cả">
                            <input type="button" value="Bỏ chọn tất cả">
                            <input type="button" value="Xoá các mục đã chọn">
                            <a href="admin.php"><input type="button" value="Nhập thêm"></a>
                        </div>
                    </form>
                </div>
                
            </div>
    </div>

</body>
</html>