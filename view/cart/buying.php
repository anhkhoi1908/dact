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
            <form action="userController.php?act=confirm" method="post">
                <div class="row mb">
                    <div class="text-[#FF5B1E] text-4xl font-bold w-full text-center mb-5">THÔNG TIN ĐẶT HÀNG</div>
                    <div class="row boxcontent border-all bg-white billform">
                        <table class="w-full"> 
                            <!-- <?php
                            if(isset($_SESSION['nguoidung'])) {
                                $user_name= $_SESSION['nguoidung']['user_name'];
                                $address= $_SESSION['nguoidung']['address'];
                                $email= $_SESSION['nguoidung']['email'];
                                $tel= $_SESSION['nguoidung']['tel'];
                            } else {
                                $user_name= '';
                                $address= '';   
                                $tel= '';
                                $email= '';
                            }   
                            ?> -->
                            <tr class="mb-2">
                                <td>Người đặt hàng: </td>
                                <td><input class="border-all w-full mb-2 p-2 outline-none" type="text" name="fullname" value="<?=$fullname?>"/></td>
                            </tr>
                            <tr class="mb-2">
                                <td>Email</td>
                                <td><input class="border-all w-full mb-2 p-2 outline-none" type="text" name="email" value="<?=$email?>"/></td>
                            </tr>
                            <tr class="mb-2">
                                <td>Địa chỉ</td>
                                <td><input class="border-all w-full mb-2 p-2 outline-none" type="text" name="address" value="<?=$address?>"/></td>
                            </tr>
                            <tr class="mb-2">
                                <td>Số điện thoại</td>
                                <td><input class="border-all w-full mb-2 p-2 outline-none" type="text" name="tel" value="<?=$tel?>"/></td>
                            </tr>
                        </table>
                    </div>
                    
                </div>
            
                <div class="row mb">
                    <div class="text-[#FF5B1E] text-4xl font-bold w-full text-center mb-5">PHƯƠNG THỨC THANH TOÁN</div>
                    <div class="row boxcontent bg-white border-all">
                        <table>
                            <tr>
                                <td>
                                    <input type="radio" name="pttt" value="1" id="pttt_1" checked/>
                                    <label for="pttt_1">Thanh toán khi nhận hàng</label>
                                </td>
                                <td>
                                    <input type="radio" name="pttt" value="2" id="pttt_2"/>
                                    <label for="pttt_2">Thanh toán online</label>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
        
                <div class="row mb">
                    <div class="text-[#FF5B1E] text-4xl font-bold w-full text-center mb-5">THÔNG TIN ĐƠN HÀNG</div>
                    <div class="row boxcontent border-0 p-0">
                        <?php
                            global $img_path_spadd;
                            if(isset($_SESSION["mycart"])&&(count($_SESSION['mycart'])>0)) {
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
                                foreach($_SESSION["mycart"] as $item) {
                                    $ttien=$item[3] * $item[4];
                                    $hinh=$img_path_spadd.$item[2];
                                    $tong+=$ttien;
                                    echo '<tr>
                                            <td class="border-all text-center">'.($i+1).'</td>
                                            <td class="border-all text-center">'.$item[1].'</td>
                                            <td class="border-all"><div class="flex justify-center"><img src="'.$hinh.'" class="h-[6.25rem]"/></div></td>
                                            <td class="border-all text-center">'.number_format($item[3]).' VNĐ</td>
                                            <td class="border-all text-center"><span>'.$item[4].'</span></td>
                                            <td class="border-all text-center">'.number_format($ttien).' VNĐ</td>  

                                        </tr>';
                                    $i++;   
                                }
                                echo '<tr><td colspan="5" class="italic underline text-end pr-2 py-4 font-bold">Tổng tiền:</td><td class="text-center font-bold">'.number_format($tong).' VNĐ</td><td></td></tr>';
                                echo '</table>';
                            }
                        ?>
                    </div>
                </div>
                <input type="hidden" name="tongdonhang" value="<?=$tong?>"/>
                <div class="text-center"><input type="submit" value="Xác nhận" name="confirm" class="!bg-[#FF5B1E] !text-white cursor-pointer px-4 py-3 rounded-md"/></div>
            </form>
        </div>
    </div>
</div>

