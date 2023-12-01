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
            <div class="row mb">
                <div class="text-[#FF5B1E] text-4xl font-bold w-full text-center mb-5">ĐỔI MẬT KHẨU</div>
                <div class="row boxcontent border-all bg-white formtaikhoan">
                    <?php
                        if(isset($_SESSION["nguoidung"]) && (is_array($_SESSION["nguoidung"]))) {
                            extract($_SESSION["nguoidung"]);
    
                        }
                    ?>
                    <form action="userController.php?act=change_pass" method="post">
                        <!-- <div class="row mb10">Họ tên<input type="text" name="fullname" value="<?=$fullname?>"/></div>  
                        <div class="row mb10">Tên đăng nhập<input type="text" name="user_name" value="<?=$user_name?>"/></div>   -->
                        <div class="row mb10 col-lg-12 mb-4">Mật khẩu hiện tại<input type="password" class="mt-2" name="oldpass"/></div>
                        <div class="row mb10 col-lg-12 mb-4">Mật khẩu mới<input type="password" class="mt-2" name="newpass"/></div>
                        <div class="row mb10 col-lg-12 mb-4">Nhập lại mật khẩu mới<input type="password" class="mt-2" name="confirmpass"/></div>
                        <!-- <div class="row mb10">Email<input type="email" name="email" value="<?=$email?>"/></div>
                        <div class="row mb10">Địa chỉ<input type="text" name="address" value="<?=$address?>"/></div>
                        <div class="row mb10">Số điện thoại<input type="text" name="tel" value="<?=$tel?>"/></div> -->
                        <div class="row mb10 mt-4 text-center col-lg-12 flex justify-center">
                            <input type="hidden" name="id" value="<?=$id?>"/>
                            <input type="submit" name="update" value="Xác nhận" class="!bg-[#FF5B1E] text-white py-3 px-6"/>
                            <!-- <input type="reset" name="reset" value="Nhập lại"/> -->
                        </div>
                    </form>
                    <h2 class="thanhcong">
                        <?php
                            if(isset($thanhcong) && ($thanhcong!="")) {
                                echo $thanhcong;
                            }
                        ?>
                    </h2>
                    <h2 class="thongbao">
                        <?php
                            if(isset($thongbao) && ($thongbao!="")) {
                                echo $thongbao;
                            }
                        ?>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</div>
