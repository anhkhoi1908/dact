<div class="boxcenter-view">
<section class="border-b-4 border-[#FF5B1E] pb-2 mt-[3rem]">
        <span class="text-3xl font-bold mr-2 text-[#333]">DANH MỤC</span>
        <span class="text-3xl text-[#ADADAD]">SẢN PHẨM</span>
    </section>  
    <div class="mb row body">
        <div class="float-left w-[24%] mr">
            <?php include "boxright.php";?></div>
        </div>
        <div class="w-[74%] float-left demo">
            <div class="row mb">
                <?php
                    if(!empty($tendm)) {
                        echo '<div class="text-center w-full mb-5"><strong class="!text-[#FF5B1E] text-4xl">'.$tendm.'</strong></div>';
                    } else {
                        echo '<div class="text-center w-full mb-5"><strong class="!text-[#FF5B1E] text-4xl">Kết quả tìm kiếm</strong></div>';
                    }
                ?>
                <div class="row boxcontent p-0 !border-0 boxcontent_spct flex justify-between flex-wrap">
                <?php   
                    if(isset($_SESSION["nguoidung"])) {
                        extract($_SESSION["nguoidung"]);
                        foreach($dssp as $sp) {
                            extract($sp);
                            $hinh=$img_path.$img;   
                            $linksp="userController.php?act=product_detail&idsp=".$id;
                            echo '<div class="w-[31%] bg-white border-all rounded-md mb-[2rem] min-h-[9.375rem] text-center
                            hover:scale-110 hover:shadow-[0.4rem_0.4rem_0.5rem_0.4rem_rgba(0,0,0,0.3)] duration-300">
                                    <a href="'.$linksp.'">
                                        <div class="row flex flex-col justify-center items-center img">
                                            <img src="'.$hinh.'"/>
                                            <h3 class="font-bold text-xl text-[#FF5B1E] my-4">'.$tensp.'</h3>
                                        </div>
                                    </a>
                                </div>';
                        }
                    } else {
                        foreach($dssp as $sp) {
                            extract($sp);
                            $hinh=$img_path.$img;   
                            $linksp="userController.php?act=sign_up";
                            echo '<div class="w-[31%] bg-white border-all rounded-md mb-[2rem] min-h-[9.375rem] text-center
                            hover:scale-110 hover:shadow-[0.4rem_0.4rem_0.5rem_0.4rem_rgba(0,0,0,0.3)] duration-300">
                                    <a class="block cursor-pointer" data-toggle="modal" data-target="#exampleModalCenter">
                                        <div class="row flex flex-col justify-center items-center img">
                                            <img src="'.$hinh.'"/>
                                            <h3 class="font-bold text-xl text-[#FF5B1E] my-4">'.$tensp.'</h3>
                                        </div>
                                    </a>
                                </div>';
                        }
                    }
                ?>
                </div>
            </div>
        </div>
    </div>
</div>
