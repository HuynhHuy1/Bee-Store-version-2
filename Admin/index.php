<?php
    include('../Model/danhmuc.php');
    include ('../Model/pdo.php');
    include('header.php');
    include('../Model/sanpham.php');
    include('../Model/cart.php');
    //controller
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){
            case 'adddm':
                // kiem tra xem nguoi dung co click vao nut add hay khong
                if(isset($_POST['themmoi']) && $_POST['themmoi']){
                    $tenloai = $_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao = 'Thêm thành công';
                }
                include('Danhmuc/add.php');
                break;
            case 'listdm':
                $listdanhmuc = loadall_danhmuc();
                include('Danhmuc/list.php');
                break;
            case 'xoadm':
                if(isset($_GET['id'])){
                    delete_danhmuc($_GET['id']);
                }
                $sql = "select * from danhmuc order by id desc";
                $listdanhmuc = pdo_query($sql);
                include "Danhmuc/list.php";
                break;
            case 'suadm':
                if(isset($_GET['id'])){
                    $dm = loadone_danhmuc($_GET['id']);
                }
                include('Danhmuc/update.php');
                break;
            case 'updatedm':
                if(isset($_POST['capnhat']) && $_POST['capnhat']){
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['id'];
                    update_danhmuc($_POST['id'],$_POST['tenloai']);
                    $thongbao = 'Cập nhật thành công';
                }
                include('Danhmuc/add.php');
                break;


            // controller san pham


            case 'addsp':
                // kiem tra xem nguoi dung co click vao nut add hay khong
                if(isset($_POST['themmoi']) && $_POST['themmoi']){
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $filename =$_FILES['hinh']['name'];
                    
                    $target_dir = "../upload/";
                    $target_file = $target_dir.basename($_FILES["hinh"]["name"]);
                    if(move_uploaded_file($_FILES["hinh"]["name"],$target_file)){

                    }
                    insert_sanpham($tensp,$giasp,$filename,$mota,$iddm);
                    $thongbao = 'Thêm thành công';
                }
                $listdanhmuc = loadall_danhmuc();
                include('sanpham/add.php');
                break;
            case 'listsp':
                if(isset($_POST['listok']) && $_POST['listok']){
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                }
                else{
                    $kyw = "";
                    $iddm = 0;
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham($kyw,$iddm);
                include('sanpham/list.php');
                break;
            case 'xoasp':
                if(isset($_GET['id'])){
                    delete_sanpham($_GET['id']);
                }
                $listsanpham = loadall_sanpham("",0);
                include "sanpham/list.php";
                break;
            case 'suasp':
                if(isset($_GET['id'])){
                    $dm = loadone_sanpham($_GET['id']);
                }
                $listdanhmuc = loadall_danhmuc();
                include('sanpham/update.php');
                break;
            case 'updatesp':
                if(isset($_POST['capnhat']) && $_POST['capnhat']){
                    $id = $_POST['id'];
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensanpham'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $hinh =$_FILES['hinh']['name'];
                            
                    $target_dir = "../upload/";
                    $target_file = $target_dir.basename($_FILES["hinh"]["name"]);
                    if(move_uploaded_file($_FILES["hinh"]["name"],$target_file)){

                    }
                    insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                    $thongbao = 'Thêm thành công';
                    update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);
                    $thongbao = 'Cập nhật thành công';
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham("",0);
                include('sanpham/add.php');
                break;
            case 'listbill':
                $listbill = loadall_bill();
                include "bill/listbill.php";
                break;
            case 'thongke':
                $listthongke = loadall_thongke();
                include("thongke/thongke.php");
                break;
            default:
            include('home.php');
            break;
        }
    }
    include('footer.php');
?>