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
                <div class="text-[#FF5B1E] text-4xl font-bold w-full text-center mb-5">CẬP NHẬT TÀI KHOẢN</div>
                <div class="row boxcontent border-all bg-white formtaikhoan">
                    <?php
                        if(isset($_SESSION["nguoidung"]) && (is_array($_SESSION["nguoidung"]))) {
                            extract($_SESSION["nguoidung"]);
    
                        }
                    ?>
                    <form action="userController.php?act=edit_account" method="post">
                        <div class="row mb10 mb-4 col-lg-6">Họ tên<input type="text" name="fullname" value="<?=$fullname?>" class="mt-2"/></div>  
                        <!-- <div class="row mb10">Tên đăng nhập<input type="text" name="user_name" value="<?=$user_name?>"/></div>  
                        <div class="row mb10">Password<input type="text" name="pass" value="<?=$pass?>"/></div> -->
                        <div class="row mb10 mb-4 col-lg-6">Email<input type="email" name="email" value="<?=$email?>" class="mt-2"/></div>
                        <div class="row mb10 mb-4 col-lg-6">Địa chỉ<input type="text" name="address" value="<?=$address?>" class="mt-2"/></div>
                        <div class="row mb10 mb-4 col-lg-6">Số điện thoại<input type="text" name="tel" value="<?=$tel?>" class="mt-2"/></div>
                        <div class="row mb10 mt-4 text-center col-lg-12 flex justify-center">
                            <input type="hidden" name="id" value="<?=$id?>"/>
                            <input type="submit" name="update" value="Cập nhật" class="!bg-[#FF5B1E] text-white py-3 px-6"/>
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
                </div>
            </div>
        </div>
    </div>
</div>
