<?php
    include "Model/pdo.php";
    include "Model/sanpham.php";
    include "Model/cart.php";
    include "global.php";
    include "Model/danhmuc.php";
    include "Model/taikhoan.php";
    session_start();
    if(!isset($_SESSION['mycart'])){
        $_SESSION['mycart'] = [];
    }
    $dsdm = loadall_danhmuc();
    $spnew = loadall_sanpham_home("",0);
    $dstop10 = loadall_sanpham_top10();
    
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){
            case 'sanphamct':
                include "view/header.php";
                if(isset($_GET['idsp'])){
                    $id = $_GET['idsp'];
                    $onesp = loadone_sanpham($id);
                    extract($onesp);
                    $sp_cungloai = load_sanpham_cungloai($id,$iddm);
                    include 'view/sanphamct.php';
                }
                break;
                case 'sanpham':
                    include "view/header.php";
                    if(isset($_GET['iddm'])){
                        $iddm = $_GET['iddm'];
                    }
                    else{
                        $iddm =0;
                    }
                    $dssp = loadall_sanpham("",$iddm);
                    $tendanhmuc = load_ten_dm($iddm);
                    include 'view/sanpham.php';
                    break;
                case 'dangky':
                    include "view/header.php";
                        if(isset($_POST['dangky'])){
                            $email = $_POST['email'];
                            $user = $_POST['user'];
                            $pass = $_POST['pass'];
                            $tendanhmuc = load_ten_dm($iddm);
                            insert_taikhoan($email,$user,$pass);
                            $thongbao = 'Dang ky thanh cong';
                        }
                include "view/taikhoan/dangky.php";
                break;
                case 'addtocart':
                    $count = 1;
                    if(isset($_POST['buy'])){
                        $id = $_POST['id'];
                        $name = $_POST['name'];
                        $img = $_POST['img'];
                        $count = $_POST['count'];
                        $price = $_POST['price'];
                        $spadd = [$id,$name,$img,$price,$count];
                        array_push($_SESSION['mycart'],$spadd);    
                    }
                    include "view/cart/viewcart.php";
                    break;
                case 'delcart':
                    if(isset($_GET['idcart'])){
                        unset($_SESSION['mycart'][$_GET['idcart']]);
                        
                    }
                    else{
                        $_SESSION = [];
                    }
                    header('location: index.php?act=viewcart');
                    break;
                case 'viewcart':
                    include 'view/cart/viewcart.php';
                    break;
                case 'billcomfirm':
                    include 'view/header.php';
                    if(isset($_POST['dongydathang'])){
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $address = $_POST['address'];
                        $tel = $_POST['tel'];
                        $tongdonhang = tongdonhang();
                        $idbill = insert_bill($name,$email,$address,$tel,$tongdonhang);
                    }
                    $listbill = loadone_bill($idbill);
                    include 'view/cart/cart.php';
                    $_SESSION = [];
                    break;

                case 'lienhe':
                    include 'view/header.php';

                    include 'view/lienhe.php';

        }
            
    }
    else{
        include "view/header.php";
        include "view/home.php";
    }

    include "view/footer.php";
?>