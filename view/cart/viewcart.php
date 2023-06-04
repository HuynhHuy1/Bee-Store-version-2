
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}
.xoa a{
    float: right;
    background-color: #ff0000;
    border-radius: 3px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
<h1 style="text-align: center;">Trang đặt hàng</h1>
<div class="row">
  <div class="col-50">

    <div class="container">
      <form action="index.php?act=billcomfirm" method="post">
      
        <div class="row">
          <div class="col-50">
            <label for="fname"><i class="fa fa-user"></i> Tên khách hàng</label>
            <input type="text" id="fname" name="name">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email">
            <label for="adr"><i class="fa fa-address-card-o"></i> Địa chỉ</label>
            <input type="text" id="adr" name="address" >
            <label for="city"><i class="fa fa-institution"></i> Số điện thoại</label>
            <input type="text" id="city" name="tel" >

          </div>
          
        </div>
        <input type="submit" value="Đồng ý đặt hàng" class="btn" name="dongydathang">
      </form>
    </div>
  </div>
  <div class="col-50">
    <div class="container">
      <h4>Cart </h4>
      
      <?php
        $tongtien = 0;
        $i = 0;
        foreach($_SESSION['mycart'] as $cart){
            $ttien = (float)$cart[3] * (float)$cart[4];
            $tongtien = $tongtien + $ttien;
            $xoasp = '<a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xoá"></a>';

            echo '<p style="position: relative;" >'.$cart[1].'<span class="price" style="float: inherit;position:absolute; right: 250px">'.$cart[3].',000 VND</span><span class ="xoa">'.$xoasp.'</span></p> ';
            $i += 1;
        }
        echo '<hr>
        <p style="position: relative;">Tổng tiền <span class="price" style="color:black;float: inherit;position:absolute; right: 250px"><b>'.$tongtien.',000 VND</b></span></p>'

      ?>

    </div>
  </div>
        
</div>

</body>
</html>
