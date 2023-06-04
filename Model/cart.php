<?php
 function tongdonhang(){
    $tong = 0;
    foreach($_SESSION['mycart'] as $cart){
        $ttien = (float)$cart[3] * (float)$cart[4];
        $tong = $tong + $ttien;
     }
     return $tong;
}
function insert_bill($name,$email,$address,$tel,$tongdonhang){
        $sql = "insert into bill(bill_name,bill_email,bill_address,bill_tel,total) values('$name','$email','$address','$tel','$tongdonhang')";
        return pdo_execute_return_lastInsertId($sql);   
}
function loadone_bill($id){
    $sql = "select * from bill where id=".$id;
    $bill = pdo_query_one($sql);
    return $bill    ;
}
function loadall_bill(){
    $sql = "select * from bill where 1 order by id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}
function loadall_thongke(){
    $sql = "select danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avg";
    $sql  .= " from sanpham left join danhmuc on danhmuc.id=sanpham.iddm";
    $sql .= " group by danhmuc.id order by danhmuc.id desc";
    $listtk = pdo_query($sql);
    return $listtk;
}
?>