<?php

global $img_path_spadd;

?>

<div class="boxcenter-view">
    <section class="border-b-4 border-[#FF5B1E] pb-2 mt-[3rem]">
        <span class="text-3xl font-bold mr-2 text-[#333]">DANH MỤC</span>
        <span class="text-3xl text-[#ADADAD]">SẢN PHẨM</span>
    </section>
    <div class="mb row body">
        <div class="w-[24%] float-left mr ">
            <?php include "../view/boxright.php";?></div>
        </div>
        <div class="w-[74%] float-left demo">
            <form action="userController.php?act=confirm" method="post">
                <div class="row mb">
                    <div class="row boxcontent border-all bg-white border-t flex justify-center items-center">
                        <h1 class="mb10 font-bold text-4xl text-[#FF5B1E]">Cảm ơn quý khách đã mua hàng!!!</h1>
                    </div>
                </div>
                <div class="row mb">
                    <div class="text-[#FF5B1E] text-4xl font-bold w-full text-center mb-5">ĐƠN HÀNG</div>
                    <div class="row boxcontent border-all bg-white orderform">
                    <?php
                            if(isset($_SESSION["iddh"])&&($_SESSION["iddh"]>0)) {
                                $orderinfo=getorderinfo($_SESSION["iddh"]);
                                if(count($orderinfo)>=0) {
                        ?>
                            <div>Mã đơn hàng: <?=$orderinfo[0]['madh']; ?></div>
                            <table>
                                <tr>
                                    <td>Phương thức thanh toán: 
                                        <?php
                                            switch($orderinfo[0]['pttt']) {
                                                case '1':
                                                    $txtmess= 'Thanh toán khi nhận hàng';
                                                    break;
                                                case '2':
                                                    $txtmess= 'Thanh toán online';
                                                    break;
                                                default:
                                                    $txtmess= 'Qúy khách chưa chọn phương thức thanh toán!';
                                            }
                                            echo $txtmess;
                                        ?>
                                    </td>
                                </tr>
                            </table>
                        <?php 
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="row mb">
                    <div class="text-[#FF5B1E] text-4xl font-bold w-full text-center mb-5">THÔNG TIN KHÁCH HÀNG</div>
                    <div class="row boxcontent border-all bg-white orderform">

                        <?php 
                            if(isset($orderinfo)&&(is_array($orderinfo))) {
                                extract($orderinfo);
                            }
                        ?>
                        <table>
                                <tr><td>Người đặt hàng: <?=$orderinfo[0]['fullname'];?></td></tr>
                                <tr><td>Ngày đặt: <?=$orderinfo[0]['ngaydathang'];?></td></tr>
                                <tr><td>Địa chỉ giao hàng: <?=$orderinfo[0]['address'];?></td></tr>
                                <tr><td>Email: <?=$orderinfo[0]['email'];?></td></tr>
                                <tr><td>Số điện thoại: <?=$orderinfo[0]['tel'];?></td></tr>
                        </table>
                    </div>
                </div>
                <div class="row mb">
                    <div class="text-[#FF5B1E] text-4xl font-bold w-full text-center mb-5">CHI TIẾT ĐƠN HÀNG</div>
                    <div class="row orderform">
                    <?php
                        global $img_path_spadd; 
                        if(isset($_SESSION['iddh'])&&($_SESSION['iddh']>0)) {
                            $getshowcart=getshowcart($_SESSION['iddh']);
                            if(isset($getshowcart)&&(count($getshowcart)>0)) {
                                echo '<table class="border-all bg-white w-full mb-5"><tr>
                                    <th class="border-all text-center p-4">STT</th>
                                    <th class="border-all text-center p-4 !w-[20%]">Tên sản phẩm</th>
                                    <th class="border-all text-center p-4">Hình ảnh</th>
                                    <th class="border-all text-center p-4">Đơn giá</th>
                                    <th class="border-all text-center p-4 !w-[5%]">Số lượng</th>
                                    <th class="border-all text-center p-4">Thành tiền</th>
                                </tr>';
                                $i=0;
                                $tong=0;
                                foreach($getshowcart as $item) {
                                    $ttien=$item['soluong'] * $item['dongia'];
                                    $hinh=$img_path_spadd.$item['img'];
                                    $tong+=$ttien;
                                    echo '<tr>
                                            <td class="border-all text-center">'.($i+1).'</td>
                                            <td class="border-all text-center">'.$item['tensp'].'</a></td>
                                            <td class="border-all"><div class="flex justify-center">
                                                <img src="'.$hinh.'" class="h-[6.25rem]"/></a></div>
                                            </td>
                                            <td class="border-all text-center">'.number_format($item['dongia']).' VNĐ</td>
                                            <td class="border-all text-center"><span>'.$item['soluong'].'</span></td>
                                            <td class="border-all text-center">'.number_format($ttien).' VNĐ</td>  
                                        </tr>';
                                    $i++;   
                                }
                                echo '<tr><td colspan="5" class="italic underline text-end pr-2 py-4 font-bold">Tổng tiền:</td><td class="text-center 
                                            font-bold">'.number_format($tong).' VNĐ</td><td>
                                    </td></tr>';
                                echo '</table>';
                            } else {
                                echo 'Gio hang trong';
                            }
                        } else {
                            echo 'Gio hang trong !';
                        }
                    ?>
                    </div>
                </div>
                <div class="text-center"><a class="!bg-[#FF5B1E] !text-white cursor-pointer px-4 py-3 rounded-md" href="userController.php?act=back">Quay về</a></div>
            </form>
        </div>
    </div>
</div>
