<?php

session_start();
ob_start();

if(isset($_SESSION['nguoidung']['role']) && ($_SESSION['nguoidung']['role']) ==1){
    include("../model/pdo.php");
    include("../admin/header.php");
    include("../model/catalog.php");
    include("../model/product.php");
    include("../model/account.php");
    include("../model/comment.php");
    include("../model/bill.php");
    include("../model/cart.php");
    
     
    if(isset($_GET["act"])){
        $act=$_GET['act'];
        switch($act){
            case 'adddm':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                    insert_catalog($tenloai);
                    $thanhcong="Thêm danh mục thành công!";
                }
                include('../admin/catalog/add.php');
                break;
            case 'listcatalog':
                $listdanhmuc=loadall_catalog();
                include('../admin/catalog/list.php');
                break;
            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)) {
                    delete_catalog($_GET['id']);
                }
                $listdanhmuc=loadall_catalog();
                include('../admin/catalog/list.php');
                break;
            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)) {
                    $dm=loadone_catalog($_GET['id']);
                }
                include('../admin/catalog/update.php');
                break;
            case 'updatedm':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    update_catalog($id,$tenloai);
                    $thongbao="Cap nhat thanh cong";
                }
                $listdanhmuc=loadall_catalog();
                include('../admin/catalog/list.php');
                break;
    
            case 'addsp':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tensp=$_POST['tensp'];
                    $iddm=$_POST['iddm'];
                    $giasp=$_POST['giasp'];     
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                         
                    }
                    $mota=$_POST['mota'];
                    insert_product($tensp,$giasp,$hinh,$mota,$iddm);
                    $thanhcong="Thêm sản phẩm thành công!";
                }
                $listdanhmuc=loadall_catalog();
                include('../admin/product/add.php');
                break;
            case 'listproduct':
                if(isset($_POST['listok'])&&($_POST['listok'])){
                    $kyw=$_POST['kyw'];
                    $iddm=$_POST['iddm'];
                } else {
                    $kyw='';
                    $iddm=0;
                }
                $listdanhmuc=loadall_catalog();
                $listsanpham=loadall_product($kyw,$iddm);
                include('../admin/product/list.php');
                break; 
            case 'xoasp':
                if(isset($_GET['id'])&&($_GET['id']>0)) {
                    delete_product($_GET['id']);
                }
                $listsanpham=loadall_product();
                include('../admin/product/list.php');
                break;
            case 'suasp':
                if(isset($_GET['id'])&&($_GET['id']>0)) {
                    $sanpham=loadone_product($_GET['id']);
                }
                $listdanhmuc=loadall_catalog();
                include('../admin/product/update.php');
                break;
            case 'updatesp':
                if(isset($_POST['capnhat'])){
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];     
                    $id=$_POST['id'];
                    $iddm=$_POST['iddm'];
                    $mota=$_POST['mota'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    if($hinh!=""){
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                    } else {
                        $hinh="";
                    }
                    update_product($id,$iddm,$tensp,$giasp,$mota,$hinh);
                }
                $listdanhmuc=loadall_catalog();
                $listsanpham=loadall_product();
                include('../admin/product/list.php');
                break;
            case 'listaccount':
                if(isset($_GET['id'])&&($_GET['id']>0)) {
                    delete_product($_GET['id']);
                }
                $listtaikhoan=loadall_account();
                include('../admin/account/list.php');
                break;
            case 'xoatk':
                if(isset($_GET['id'])&&($_GET['id']>0)) {
                    delete_account($_GET['id']);
                }
                $listtaikhoan=loadall_account();
                include('../admin/account/list.php');
                break;
            case 'listcomment':
                $listbinhluan=loadall_comment(0);
                include('comment/list.php');
                break;
            case 'xoabl':
                // $idpro=$_POST[''];
                if(isset($_GET['id'])&&($_GET['id']>0)) {
                    delete_comment($_GET['id']);
                }
                $listbinhluan=loadall_comment(0);
                include('comment/list.php');
                break;
            case 'listbill':
                $listbill=loadall_bill();
                include ('../admin/bill/listbill.php');
                break;
            case 'detail_bill':
                // $id=$_SESSION['mycart']['iddh'];
                $id=$_GET['id'];
                $detail_bill=detail_bill($id);
                include ('../admin/bill/detail_bill.php');
                break;
            case 'xoabill':
                if(isset($_GET['id'])&&($_GET['id']>0)) {
                    delete_bill($_GET['id']);
                    delete_bill_from_detail($_GET['id']);
                }
                $listbill=loadall_bill();
                include('../admin/bill/listbill.php');
                break;
            case 'statistic':
                $liststatistic=loadall_statistic();
                include ('../admin/statistic/list.php');
            default:
                break;
        } 
    } else {
        include('../admin/home.php');
    }
    
    include("../admin/footer.php");

} else {
    header("Location: ../../../index.php");
}

ob_end_flush();

?>