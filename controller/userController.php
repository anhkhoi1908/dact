<?php

session_start();
ob_start();
include("../model/pdo.php");
include("../model/product.php");
include("../model/catalog.php");
include("../model/account.php");
include("../model/connectdb.php"); 
include("../model/cart.php");
include("../model/bill.php");
include("../view/header.php");
include("../global.php");
require("../mail/sendmail.php");

if(!isset($_SESSION["mycart"])) $_SESSION["mycart"]=[];
// if(!isset($_SESSION["billhc"])) $_SESSION["billhc"]=[];


$spnew=loadall_product_home();
$dsdm=loadall_catalog();
$dstop10=loadall_product_top10();

if((isset($_GET["act"]))&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch($act){
        case 'sign_up':
            if(isset($_POST['sign_up'])&&($_POST['sign_up'])){
                $fullname=$_POST['fullname'];
                $user_name=$_POST['user_name'];
                $pass=$_POST['pass'];
                $email=$_POST['email'];
                $address=$_POST['address'];
                $tel=$_POST['tel'];
                insert_account($fullname,$user_name,$pass,$email,$address,$tel);
                $thanhcong="Đăng ký thành công!";
            }
            include "../view/account/sign_up.php";
            break;
        case 'login':
            if(isset($_POST['login'])&&($_POST['login'])){
                // $email=$_POST['email'];
                $user_name=$_POST['user_name'];
                $pass=$_POST['pass'];
                $checkuser=checkuser($user_name,$pass);
                if(is_array($checkuser)){ 
                    $_SESSION["nguoidung"]=$checkuser;
                    // $thongbao="Ban da dang nhap thanh cong!";
                    header('Location: userController.php');
                } else {
                    $thongbao="Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký!";
                }
                // $thongbao="Da dang ky thanh cong";
            }
            include "../view/account/sign_up.php";
            break;
        case 'edit_account':
            if(isset($_POST['update'])&&($_POST['update'])){
                // $user_name=$_POST['user_name'];
                // $pass=$_POST['pass'];
                $email=$_POST['email'];
                $address=$_POST['address']; 
                $tel=$_POST['tel'];
                $id=$_POST['id'];
                $fullname=$_POST['fullname'];
                update_account($email,$address,$tel,$id,$fullname);
                $thanhcong="Cập nhật thành công!";
                $_SESSION['nguoidung']=checkuser($user_name,$pass);
                // header('location: index.php?act=edit_taikhoan');
            }
            include "../view/account/edit_account.php";
            break;
            case 'change_pass':
                if(isset($_POST['update'])&&($_POST['update'])){
                    // $user_name=$_POST['user_name'];
                    $pass=$_SESSION['nguoidung']['pass'];
                    $oldpass=$_POST['oldpass'];
                    $newpass=$_POST['newpass'];
                    $confirmpass=$_POST['confirmpass'];
                    $id=$_POST['id'];
                    if($oldpass==$pass && $newpass==$confirmpass) {
                        update_pass($newpass,$id);
                        $thanhcong="Đổi mật khẩu thành công!";
                        $_SESSION['nguoidung']=checkuser($user_name,$newpass);
                    } else if($oldpass!=$pass) {
                        $thongbao="Mật khẩu hiện tại không đúng. Vui lòng kiểm tra!";
                    } else {
                        $thongbao="Mật khẩu mới không trùng khớp. Vui lòng kiểm tra!";
                    }
                    // if($newpass==$confirmpass) {
                    // } else {
                    //     $thongbao="Mật khẩu mới không trùng khớp!";
                    // }
                    
                    // $email=$_POST['email'];
                    // $address=$_POST['address'];
                    // $tel=$_POST['tel'];
                    // $fullname=$_POST['fullname'];
                    // update_pass($newpass,$id);
                    // $thanhcong="Cập nhật thành công!";
                    // $_SESSION['nguoidung']=checkuser($user_name,$newpass);
                    // header('location: index.php?act=edit_taikhoan');
                }
                include "../view/account/change_pass.php";
                break;
        case 'forget_pass':
                if(isset($_POST['guiemail'])&&($_POST['guiemail'])){
                    $email=$_POST['email'];
                    $checkemail=checkemail($email);
                    if(is_array($checkemail)){
                        $thanhcong="Chúng tôi đã gửi cho bạn một email. Vui lòng kiểm tra !";    
                    } else {
                        $thongbao="Email này không tồn tại!";
                    }
                    $title = '[AnkoiStore] Quên Mật Khẩu?';
                    $content = "
                        <div>
                           <p>Mật khẩu: <strong>".$pass."</strong></p>
                        </div>";
                    $maildathang = $_SESSION['nguoidung']['email'];
                    $mail = new Mailer();
                    $mail -> dathangmail($title, $content, $maildathang);
                }
            include "../view/account/forget_pass.php";
            break;
        // case 'change_pass':
        //     if(isset($_POST['update'])&&($_POST['update'])){
        //         $id=$_POST['id'];
        //         $pass = $_POST['pass'];
        //         update_pass($pass,$id);
        //         $thanhcong="Đổi mật khẩu thành công!";
        //         // $_SESSION['nguoidung']=checkuser($user_name,$pass);
        //         // header('location: index.php?act=edit_taikhoan');
        //     }
        //     include "../view/account/change_pass.php";
        //     break;
        case 'logout':
            session_unset();
            header('Location: userController.php');
            break;
        case 'product':
            if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                $kyw=$_POST['kyw'];
            } else {
                $kyw="";    
            }
            if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                $iddm=$_GET['iddm'];  
            } else {
                $iddm=0;
            }
            $dssp=loadall_product($kyw,$iddm);
            $tendm=load_name_catalog($iddm);
            include "../view/product.php";
            break;
        case 'product_detail':
            if(isset($role)) {
                if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                    $id=$_GET['idsp'];
                    $onesp=loadone_product($id);
                    extract($onesp);
                    $sp_cung_loai=load_product_semcatalog($id,$iddm);
                    include "../view/product_detail.php";
                } else {    
                    include "../view/home.php";
                }
            } else {
                header("location: userController.php?act=sign_up");
            }
            break;
        case 'addtocart':
            if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                $id=$_POST['id'];
                $tensp=$_POST['tensp'];
                $img=$_POST['img'];
                $price=$_POST['price'];
                if(isset($_POST['soluong'])&&($_POST['soluong']>0)) {
                    $soluong=$_POST['soluong'];
                } else {$soluong=1;}
                $fg=0;
                $i=0;
                foreach($_SESSION["mycart"] as $item) {
                    if($item[1]==$tensp){
                        $soluongnew=$soluong;
                        $_SESSION["mycart"][$i][4]=$soluongnew;
                        $fg=1;
                        break;
                    }
                    $i++;
                }
                if($fg==0) {
                    $spadd=array($id, $tensp, $img, $price, $soluong, $ttien);
                    $_SESSION["mycart"][]=$spadd;
                }
                header("Location: userController.php?act=viewcart");
            }
            break;
        case "viewcart":
            // if(isset($_GET['cong'])&&($_GET['cong'])){
            //     $id=$_GET['cong'];
            //     foreach($_SESSION['mycart'] as $item) {
            //         if($item['id']!=$id) {
            //             $_SESSION['mycart'][]= array($id, $tensp, $img, $price, $soluong, $ttien);
            //             $_SESSION['mycart'];
            //         } else {
            //             $tangsoluong = $soluong + 1;
            //             if($item['soluong']<=10) {
            //                 $_SESSION['mycart'][]= array($id, $tensp, $img, $price, $tangsoluong, $ttien);
            //             } else {
            //                 $_SESSION['mycart'][]= array($id, $tensp, $img, $price, $soluong, $ttien);
            //             }
            //             $_SESSION['mycart'] = $product;
            //         }
            //     } 
            //     header('Location: userController.php?act=viewcart');
            // }
            include "../view/cart/viewcart.php";
            break;
        case "cong":
            if(isset($_POST['cong'])) {
                $id=$_GET["cong"];
                foreach($_SESSION['mycart'] as $item) {
                    if($item['id']!=$id) {
                        $product[]= array($id, $tensp, $img, $price, $soluong, $ttien);
                        $_SESSION['mycart'] = $product;
                    } else {
                        $tangsoluong = $item[4] + 1;
                        // if($item[4]<=10) {
                        //     $product[]= array($id, $tensp, $img, $price, $tangsoluong, $ttien);
                        // } else {
                        //     $product[]= array($id, $tensp, $img, $price, $soluong, $ttien);
                        // }
                        $_SESSION['mycart'] = $product;
                    }
                    // $item[4] + 1;
                } 
            }
            include "../view/cart/viewcart.php";
            // header ("Location: userController.php?act=cong");
            break;
        case "delcart":
            if(isset($_GET['i'])&&($_GET['i']>=0)) {
                if(isset($_SESSION["mycart"])&&(count($_SESSION["mycart"])>0)) 
                array_splice($_SESSION['mycart'],$_GET['i'],1);
            } else {
                if(isset($_SESSION["mycart"])) unset($_SESSION["mycart"]); 
            }

            if(isset($_SESSION["mycart"])&&(count($_SESSION["mycart"])>0)) {
                header('Location: userController.php?act=viewcart');
            } else {
                header('Location: userController.php'); 
            }
            break;
        case 'buying':
            include "../view/cart/buying.php";
            break;
        case 'confirm':
            if(isset($_POST['confirm'])&&($_POST['confirm'])) {
                $iduser=$_SESSION['nguoidung']['id'];
                // $idpro=$_POST['idpro'];
                $tongdonhang=$_POST['tongdonhang'];
                // $tensp=$_POST['tensp'];
                $fullname=$_POST['fullname'];
                $address=$_POST['address'];
                $email=$_POST['email'];
                $tel=$_POST['tel']; 
                $pttt=$_POST['pttt'];
                $ngaydathang=date('h:i:sa d/m/Y');
                $madh="Ankoi".rand(0,999999);
                $iddh=taodonhang($madh,$tongdonhang,$fullname,$iduser,$address,$email,$tel,$pttt,$ngaydathang);
                $_SESSION['iddh']=$iddh;    
                if(isset($_SESSION["mycart"])&&(count($_SESSION["mycart"])>0)) {
                    foreach($_SESSION['mycart'] as $item) {
                        addtocart($iddh,$item[0],$item[1],$item[2],$item[3],$item[4],$iduser);
                    } 
                    $title = '[AnkoiStore] Đặt Hàng Thành Công!';
                    $content = "    
                        <div>
                            <p>Cảm ơn quý khách đã mua hàng!</p>
                            <p>Mã đơn hàng: ".$madh."</p>
                            <p>Tổng hóa đơn: ".number_format($tongdonhang)." VNĐ</p>
                            <p>Hẹn gặp lại quý khách!</p>
                        </div>";
                    // ?
                    $maildathang = $_SESSION['nguoidung']['email'];
                    $mail = new Mailer();
                    $mail -> dathangmail($title, $content, $maildathang);
                    unset($_SESSION['mycart']);
                } 
            }
            // $bill=loadone_bill($iddh);
            // $billct=loadall_cart($iddh);
            include "../view/cart/confirm.php";
            break;
        case "back":
            unset($_SESSION['mycart']);
            header('Location: userController.php');
        case "ordered": 
            $listdonhang=loadall_donhang($_SESSION["nguoidung"]["id"]); 
            $listbill=loadall_cart($_SESSION["nguoidung"]["id"]); 
            $id=$_SESSION["nguoidung"]["id"];
            $detail_ordered=detail_ordered($id);
            // $id=$_SESSION['nguoidung']['id'];
            // $detail_bill=detail_bill($id);
            // $detail_bill=detail_bill($id);  
            include "../view/cart/ordered.php";
            break;
        // default:
        //     include "../view/home.php";
        //     break;
        case "detail_ordered":
            $id=$_GET['id'];
            $detail_ordered=detail_ordered($id);
            include ('../view/cart/detail_ordered.php');
            break;
    }
} else {
    include "../view/home.php";
}

include("../view/footer.php");

ob_end_flush();
?>