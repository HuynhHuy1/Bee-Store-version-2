<html>
<head>
    <title>PHP2-Demo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="boxcenter">
            <div class="row mb header">
                <h1> Trang quản trị</h1>
            </div>
            <div class="row mb menu">
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="index.php?act=adddm">Danh mục</a></li>
                    <li><a href="index.php?act=addsp">Hàng hoá</a></li>
                    <li><a href="index.php?act=dskh">Khách hàng</a></li>
                    <li><a href="index.php?act=dsbl">Bình luận</a></li>
                    <li><a href="index.php?act=thongke">Thống kê</a></li>
                    <li><a href="index.php?act=listbill">Danh sách đơn hàng</a></li>
                </ul>
            </div>
    


        <!-- <?php
          if(isset($_SESSION["admin"]))
          {
            echo ' <li class="nav-item">
            <a class="nav-link" href="index.php?act=logout">Logout:'.$_SESSION["admin"].'</a>
          </li>';
          }
           
        ?> -->
       
      </ul>
    </nav>