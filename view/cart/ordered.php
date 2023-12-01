<?php

global $img_path_spadd;

?>

<div class="boxcenter-view">
    <section class="border-b-4 border-[#FF5B1E] pb-2 mt-[3rem]">
        <span class="text-3xl font-bold mr-2 text-[#333]">DANH MỤC</span>
        <span class="text-3xl text-[#ADADAD]">SẢN PHẨM</span>
    </section>
    <div class="mb row body">
        <div class="w-[24%] float-left mr">
            <?php include "../view/boxright.php";?></div>
        </div>
        <div class="w-[74%] float-left demo">
            <form action="userController.php?act=ordered" method="post">
                <div class="row">
                </div>
                <div class="row mb">
                    <div class="text-[#FF5B1E] text-4xl font-bold w-full text-center mb-5">ĐƠN HÀNG ĐÃ ĐẶT</div>
                    <!-- <div class="boxcontent"> -->
                        
                    <?php
                        global $img_path_spadd; 
        //                 echo '<table class="border-all bg-white w-full mb-5"><tr>
        //     <th class="border-all text-center p-4">STT</th>
        //     <th class="border-all text-center p-4 !w-[20%]">Tên sản phẩm</th>
        //     <th class="border-all text-center p-4">Hình ảnh</th>
        //     <th class="border-all text-center p-4">Đơn giá</th>
        //     <th class="border-all text-center p-4 !w-[5%]">Số lượng</th>
        //     <th class="border-all text-center p-4">Thành tiền</th>
        // </tr>';
        // $i=0;
        // $tong=0;

        // if(is_array($detail_ordered)) {
        //     foreach($detail_ordered as $item) {
        //         $ttien=$item['soluong'] * $item['dongia'];
        //         $tong+=$ttien;
        //         extract($item);
        //         echo '
        //             <tr>
        //                 <td class="border-all text-center">'.($i+1).'</td>
        //                 <td class="border-all text-center"><a class="hover:text-[#FF5B1E]">'.$item['tensp'].'</a></td>
        //              <td class="border-all"><div class="flex justify-center">
        //                 <a><img src="'.$hinh.'" class="h-[6.25rem]"/></a></div>
        //          </td>
        //          <td class="border-all text-center">'.number_format($item['dongia']).' VNĐ</td>
        //          <td class="border-all text-center"><span>'.$item['soluong'].'</span></td>
        //              <td class="border-all text-center">'.number_format($ttien).' VNĐ</td>  
        //              <td class="border-all text-center px-4"><a href="userController.php?act=delcart&i='.$i.'" 
        //              class="hover:text-[#FF5B1E]"><i class="fa-solid fa-trash"></i></a></td>  
        //             </tr>
        //             ';
        //     }
        // }
        // echo '<tr><td colspan="5" class="italic underline text-end pr-2 py-4 font-bold">Tổng tiền:</td><td class="text-center 
        //             font-bold">'.number_format($tong).' VNĐ</td><td>
        //     </td></tr>';
        // echo '</table>';
        
                        if(is_array($listdonhang)) {
                            $detail_ordered="userController.php?act=detail_ordered&id=".$id;
                            foreach($listdonhang as $donhang) {
                                extract($donhang);
                                echo '
                                <div class="row boxcontent border-all orderform mb-4 bg-white">
                                <tr class="mb-4">
                                <td>ID: '.$donhang['id'].'</td><br>
                                <td>Mã đơn hàng: '.$donhang['madh'].'</td><br>
                                <td>Người đặt hàng: '.$donhang['fullname'].'</td><br>
                                <td>Ngày đặt: '.$donhang['ngaydathang'].'</td><br>
                                <td>Email: '.$donhang['email'].'</td><br>
                                <td>Địa chỉ: '.$donhang['address'].'</td><br>
                                <td>Số điện thoại: '.$donhang['tel'].'</td><br>
                                <td><a href="'.$detail_ordered.'">Chi tiết đơn hàng</a></td><br>
                                </tr>
                                </div>
                                ';
                            }
                            // if(is_array($detail_ordered)) {   
                            //     foreach($detail_ordered as $item) {
                            //         extract($item);
                            //         echo '
                            //             <div class="row boxcontent border-all orderform mb-4 bg-white">
                            //             <tr class="mb-4">
                            //                 <td>ID: '.$item['iddh'].'</td><br>
    
                            //                 <td>Tên sản phẩm: '.$item['tensp'].'</td><br>
                            //                 <td>Đơn giá: '.number_format($item['dongia']).' VNĐ</td><br>
                            //                 <td>Số lượng: '.$item['soluong'].'</td><br>
                            //             </tr>
                            //             </div>
                            //         ';
                            //     }
                            // }
                        } 



                        // global $img_path_spadd; 
                        // if(is_array($listbill)) {
                        //     foreach($listbill as $item) {
                        //         $i=0;
                        //         $tong=0;
                        //         $ttien=$item['soluong'] * $item['dongia'];
                        //         $hinh=$img_path_spadd.$item['img'];
                        //         $tong+=$ttien;
                        //         extract($item);
                        //         echo '
                        //         <table class="border-all bg-white w-full mb-5"><tr>
                        //             <th class="border-all text-center p-4">STT</th>
                        //             <th class="border-all text-center p-4 !w-[20%]">Tên sản phẩm</th>
                        //             <th class="border-all text-center p-4">Hình ảnh</th>
                        //             <th class="border-all text-center p-4">Đơn giá</th>
                        //             <th class="border-all text-center p-4 !w-[5%]">Số lượng</th>
                        //             <th class="border-all text-center p-4">Thành tiền</th>
                        //         </tr>
                        //         ';
                        //         echo '<tr>
                        //         <td class="border-all text-center">'.($i+1).'</td>
                        //         <td class="border-all text-center"><a class="hover:text-[#FF5B1E]">'.$item['tensp'].'</a></td>
                        //         <td class="border-all"><div class="flex justify-center">
                        //             <a><img src="'.$hinh.'" class="h-[6.25rem]"/></a></div>
                        //         </td>
                        //         <td class="border-all text-center">'.number_format($item['dongia']).' VNĐ</td>
                        //         <td class="border-all text-center"><span>'.$item['soluong'].'</span></td>
                        //         <td class="border-all text-center">'.number_format($ttien).' VNĐ</td>  
                        //         <td class="border-all text-center px-4"><a href="userController.php?act=delcart&i='.$i.'" 
                        //         class="hover:text-[#FF5B1E]"><i class="fa-solid fa-trash"></i></a></td>  
                        //         </tr>';
                        //         $i++;   
                        //         echo '<tr><td colspan="5" class="italic underline text-end pr-2 py-4 font-bold">Tổng tiền:</td><td class="text-center 
                        //                 font-bold">'.number_format($tong).' VNĐ</td><td>
                        //         </td></tr>';
                        //         echo '</table>';
                        //     }
                        // }
                    ?>
                    <!-- </div> -->
                </div>
            </form>
        </div>
    </div>
</div>
