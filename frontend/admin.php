<html>
<head>
    <title>PHP2-Demo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="boxcenter">
            <div class="row mb headeradmin">
                <h1 style="font-size: 14px;"> Trang quản trị</h1>
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
                    <h1 style="margin: 0; ;" >THÊM MỚI LOẠI HÀNG</h1>
                </div>
                <div class="row frmcontent">
                    <form action="#" method="post">
                        <div class="row mb10">
                            Mã loại<br>
                            <input type="text" name="maloai" disabled>
                        </div>
                        <div class="row mb10">
                            Tên loại<br>
                            <input type="text" name="tenloai" disabled>
                        </div>
                        <div class="row mb10">
                            <input type="submit" value=" THÊM MỚI" style="margin-right: 15px ;">
                            <input type="reset" value=" NHẬP LẠI" style="margin-right: 15px ;" >
                            <a href="danhsachloaihang.php"><input type="button" value=" DANH SÁCH" style="margin-right: 15px ;"></a>
                        </div>
                    </form>
                </div>
                
            </div>
    </div>

</body>
</html>