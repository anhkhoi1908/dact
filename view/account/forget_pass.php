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
                <div class="text-[#FF5B1E] text-4xl font-bold w-full text-center mb-5">QUÊN MẬT KHẨU</div>
                <div class="row boxcontent border-all bg-white formtaikhoan">
                    <form action="userController.php?act=forget_pass" method="post" class="w-full">
                        <div class="row mb10 col-lg-12">Email<input type="email" name="email" class="mt-2"/></div>
                        <div class="row mb10 col-lg-12 justify-center mt-4">
                            <input type="submit" name="guiemail" value="Gửi" class="!bg-[#FF5B1E] text-white mr-2 py-3 px-6"/>
                            <input type="reset" value="Nhập lại" class="!bg-[#FF5B1E] text-white py-3 px-6"/>
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