<div class="row mb">
    <!-- <div class="boxtitle">TÀI KHOẢN</div>
    <div class="boxcontent formtaikhoan leading-[150%]">
        <?php
            if(isset($_SESSION["nguoidung"])) {
                extract($_SESSION["nguoidung"]);
        ?>
            <div class="row mb10">Xin chào <?=$user_name?></div>
            <div class="row mb10">
                <ul>
                    <li><a class="text-[teal] list-none hover:text-[red]" href="userController.php?act=forget_pass">
                        Quên mật khẩu</a></li>
                    <li><a class="text-[teal] list-none hover:text-[red]" href="userController.php?act=edit_account">
                        Cập nhật tài khoản</a></li>
                    <?php if($role==1) {?>
                        <li><a class="text-[teal] list-none hover:text-[red]" href="admin/userController.php">Đăng nhập Admin</a></li>
                    <?php }?>
                    <li><a class="text-[teal] list-none hover:text-[red]" href="userController.php?act=logout">Đăng xuất</a></li>
                </ul>
            </div>
        <?php
            } else {
        ?>
        <form action="userController.php?act=login" method="post">
            <div class="row mb10">
                Tên đăng nhập<br>
                <input type="text" name="user_name" />
            </div>
            <div class="row mb10">
                Mật khẩu<br>
                <input type="password" name="pass"/>
            </div>
            <div class="row mb10">
                <input class="rounded-md" type="checkbox" id="check-remind"/>
                <label class="w-1rem mb-0 ml-1" for="check-remind">Ghi nhớ tài khoản</label>
            </div>
            <div class="row mb10 text-center flex justify-center">
                <input type="submit" value="Đăng nhập" name="login" class="btn-login text-[1rem] mt-[1rem] 
                !bg-[#333] !text-white cursor-pointer"/>
            </div>
        </form>
        <div class="inline-block mt-[3rem] text-center list-none">
            <li class="inline-block"><a class="text-[teal] list-none hover:text-[red]" href="userController.php?act=forget_pass">
                Quên mật khẩu</a></li>
            <li class="inline-block"><a class="text-[teal] list-none hover:text-[red]" href="userController.php?act=sign_up">
                Đăng ký thành viên</a></li>
        </div>
        <?php }?>
    </div>
        </div> -->
        <div class="row mb">
            <!-- <div class="boxtitle">DANH MỤC SẢN PHẨM</div> -->
            <div class="boxcontent2 menudoc">
                <ul class="m-0 p-0 list-none">
                    <?php
                        foreach($dsdm as $dm) {
                            extract($dm);
                            $linkdm='userController.php?act=product&iddm='.$id;
                            echo '<li class="bg-white"><a class="text-[#666] list-none px-[2rem] py-[1rem] block 
                            hover:bg-[#FF5B1E] hover:text-white" href="'.$linkdm.'">
                            <i class="fa-solid fa-chevron-right mr-2 text-[#FF5B1E]"></i>
                            '.$name.'
                            </a></li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
        <div class="row">
            <section class="border-b-4 border-[#FF5B1E] pb-2 mt-[3rem] w-full mb-[3rem]">
                <span class="text-3xl font-bold mr-2 text-[#333]">TOP 10</span>
                <span class="text-3xl text-[#ADADAD]">YÊU THÍCH</span>
            </section>
            <div class="row boxcontent border-all bg-white">
                <?php
                    if(isset($_SESSION['nguoidung'])) {
                        extract($_SESSION['nguoidung']);
                        foreach($dstop10 as $sp) {  
                            extract($sp);
                            $linkspct="userController.php?act=product_detail&idsp=".$id;
                            $img=$img_path.$img;
                            echo '<div class="row mb10 top10 product-top">
                                    <a class="" href="'.$linkspct.'">
                                        <div class="row mb10 top10 flex items-center">
                                            <div class="w-1/5 h-1/5 mr-[1rem]"><img class="border-all float-left rounded-md h-full 
                                            w-full" src="'.$img.'" alt=""/></div>
                                            <span class="">'.$tensp.'</span>
                                        </div>
                                    </a>
                                </div>
                               ';
                        }

                    } else {
                        foreach($dstop10 as $sp) {
                            extract($sp);
                            $linkspct="userController.php?act=sign_up";
                            $img=$img_path.$img;
                            echo '<div class="row mb10 top10">
                                    <a class="block cursor-pointer" data-toggle="modal" data-target="#exampleModalCenter">
                                        <div class="row mb10 top10 flex items-center">
                                            <div class="w-1/5 h-1/5 mr-[1rem]"><img class="border-all float-left rounded-md h-full w-full" src="'.$img.'" alt=""/></div>
                                            <span class="">'.$tensp.'</span>
                                        </div>
                                    </a>
                                </div>
                               ';
                        }
                    }
                ?>
            </div>
        </div>