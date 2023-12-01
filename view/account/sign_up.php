<div class="boxcenter-view">
    <div class="mb row body flex justify-center">
        <div class="w-[74%] float-left mr demo">
            <div class="row mb">
                <h2 class="thongbao mb-8">
                <?php
                    if(isset($thongbao) && ($thongbao!="")) {
                        echo $thongbao;
                    } 
                ?>
                </h2>
                <h2 class="thanhcong">
                <?php
                    if(isset($thanhcong) && ($thanhcong!="")) {
                        echo $thanhcong;
                    } 
                ?>
                </h2>
                <div class="text-center w-full mb-5"><strong class="!text-[#FF5B1E] text-4xl">ĐĂNG KÝ THÀNH VIÊN</strong></div>
                <div class="row boxcontent formtaikhoan border-all">
                    <form action="userController.php?act=sign_up" method="post">
                        <div class="row mb10 mb-4">Họ tên<input class="mt-2" type="text" name="fullname"/></div>
                        <div class="row mb10 mb-4">Tên đăng nhập<input class="mt-2" type="text" name="user_name"/></div>
                        <div class="row mb10 mb-4">Password<input class="mt-2" type="password" name="pass"/></div>
                        <div class="row mb10 mb-4">Email<input class="mt-2" type="email" name="email"/></div>
                        <div class="row mb10 mb-4">Địa chỉ<input class="mt-2" type="text" name="address"/></div>
                        <div class="row mb10 mb-4">Số điện thoại<input class="mt-2" type="text" name="tel"/></div>
                        <div class="row mb10 mb-4 text-center mt-8 flex justify-center">
                            <input type="submit" name="sign_up" value="Đăng ký" class="btn-login !bg-[#FF5B1E] py-2 !text-white cursor-pointer"/>
                            <!-- <input type="reset" value="Nhap lai"/> -->
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
 
    </div>
</div>